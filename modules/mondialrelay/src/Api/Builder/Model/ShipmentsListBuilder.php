<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to a commercial license from ScaleDEV.
 * Use, copy, modification or distribution of this source file without written
 * license agreement from ScaleDEV is strictly forbidden.
 * In order to obtain a license, please contact us: contact@scaledev.fr
 * ...........................................................................
 * INFORMATION SUR LA LICENCE D'UTILISATION
 *
 * L'utilisation de ce fichier source est soumise à une licence commerciale
 * concédée par la société ScaleDEV.
 * Toute utilisation, reproduction, modification ou distribution du présent
 * fichier source sans contrat de licence écrit de la part de ScaleDEV est
 * expressément interdite.
 * Pour obtenir une licence, veuillez nous contacter : contact@scaledev.fr
 * ...........................................................................
 * @author ScaleDEV <contact@scaledev.fr>
 * @copyright Copyright (c) ScaleDEV - 12 RUE CHARLES MORET - 10120 SAINT-ANDRE-LES-VERGERS - FRANCE
 * @license Commercial license
 * @package Scaledev\Manomano
 * Support: support@scaledev.fr
 */

namespace MondialRelay\MondialRelay\Api\Builder\Model;

use MondialRelay\MondialRelay\Api\Builder\Collection\ParcelCollectionBuilder;
use MondialRelay\MondialRelay\Api\Model\Address;
use MondialRelay\MondialRelay\Api\Model\Mode;
use MondialRelay\MondialRelay\Api\Model\Option;
use MondialRelay\MondialRelay\Api\Model\Parcel;
use MondialRelay\MondialRelay\Api\Model\Value;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Class ShipmentsListBuilder
 *
 * @package Scaledev\Manomano
 * @author Fabien Sigrand <contact@scaledev.fr>
 * @since tag
 */
final class ShipmentsListBuilder
{
    /** @var string $orderNo */
    private $orderNo;

    /** @var string $customerNo */
    private $customerNo;

    /** @var int $parcelCount */
    private $parcelCount;

    /** @var Mode */
    private $deliveryMode;

    /** @var Mode */
    private $collectionMode;

    /** @var ParcelCollectionBuilder $parcels */
    private $parcels;

    /** @var string $deliveryInstruction */
    private $deliveryInstruction;

    /** @var Address $sender */
    private $sender;

    /** @var Address $recipient */
    private $recipient;

    /** @var Option $option */
    private $option;

    public function build($orderId)
    {
        $module = \Module::getInstanceByName('mondialrelay');
        $order = new \Order($orderId);
        if (!\Validate::isLoadedObject($order)) {
            return sprintf(
                $module->l('Could not retrieve order from id : %s', 'GenerateLabelsActions'),
                $orderId
            );
            ;
        }

        $carrierMethod = \MondialrelayCarrierMethod::getFromNativeCarrierId($order->id_carrier);
        if (!\Validate::isLoadedObject($carrierMethod)) {
            return sprintf(
                $module->l('Order %s : Could not find Mondial Relay carrier method.', 'GenerateLabelsActions'),
                $orderId
            );
        }

        $selectedRelay = \MondialrelaySelectedRelay::getFromIdCart($order->id_cart);
        if (!\Validate::isLoadedObject($selectedRelay)) {
            return sprintf(
                $module->l('Order %s : Could not find Mondial Relay order.', 'GenerateLabelsActions'),
                $orderId
            );
        }

        $address = new \Address($order->id_address_delivery);
        if (!\Validate::isLoadedObject($address)) {
            return sprintf(
                $module->l('Order %s : Could not find delivery address.', 'GenerateLabelsActions'),
                $orderId
            );
        }

        $customer = new \Customer($order->id_customer);
        if (!\Validate::isLoadedObject($customer)) {
            return sprintf(
                $module->l('Order %s : Could not find customer.', 'GenerateLabelsActions'),
                $orderId
            );
        }

        $service = \MondialrelayService::getService('Label_Generation');
        if (!$service->checkExpeAddress()) {
            return sprintf(
                $module->l('Order %s : Shop address is not valid.', 'GenerateLabelsActions'),
                $orderId
            );
        }

        $this->setOrderNo($order->id);
        $this->setCustomerNo($order->getCustomer()->id);

        $deliveryMode = (new Mode())->setMode($this->getWebserviceModeLiv($carrierMethod->delivery_mode));
        $collectionMode = (new Mode())->setMode('REL');

        if($carrierMethod->insurance_level){
            $this->setOption(
                (new Option())
                    ->setKey('ASS')
                    ->setValue($carrierMethod->insurance_level)
            );
        }

        if($deliveryMode->getMode() == '24R' || $deliveryMode->getMode() == '24L') {
            $deliveryMode->setLocation($selectedRelay->selected_relay_country_iso . '-' . $selectedRelay->selected_relay_num);
        }

        $parcels = new ParcelCollectionBuilder();
        $weightValue = (new Value())->setValue($selectedRelay->package_weight);
        $parcel = (new Parcel())->setWeight($weightValue);
        $parcels->addElement($parcel);

        $this->setParcelCount($parcels->getCount());

        $this->setParcels($parcels);

        if ($carrierMethod->needsRelay()) {
            $recipient = (new Address())
                ->setLastname($address->lastname)
                ->setFirstname($address->firstname)
                ->setStreetname($selectedRelay->selected_relay_adr3)
                ->setCountryCode($selectedRelay->selected_relay_country_iso)
                ->setPostcode($selectedRelay->selected_relay_postcode)
                ->setCity($selectedRelay->selected_relay_city)
                ->setAddressAdd1($selectedRelay->selected_relay_adr1)
                ->setAddressAdd2($selectedRelay->selected_relay_adr2)
                ->setAddressAdd3($selectedRelay->selected_relay_adr3)
                ->setPhoneNo($address->phone)
                ->setMobileNo($address->phone_mobile)
                ->setEmail($customer->email)
            ;
        } else {
            $recipient = (new Address())
                ->setLastname($address->lastname)
                ->setFirstname($address->firstname)
                ->setStreetname(\Tools::replaceAccentedChars(\Tools::substr($address->address1, 0, 30)))
                ->setCountryCode(\Country::getIsoById($address->id_country))
                ->setPostcode($address->postcode)
                ->setCity(\Tools::replaceAccentedChars($address->city))
                ->setAddressAdd1(\Tools::replaceAccentedChars(\Tools::substr($address->address1, 0, 30)))
                ->setAddressAdd2(\Tools::replaceAccentedChars(\Tools::substr($address->address2, 0, 30)))
                ->setAddressAdd3(\Tools::replaceAccentedChars(\Tools::substr($address->company, 0, 30)))
                ->setPhoneNo($address->phone)
                ->setMobileNo($address->phone_mobile)
                ->setEmail($customer->email)
            ;
        }


        $this->setCollectionMode($collectionMode);
        $this->setDeliveryMode($deliveryMode);
        $this->setDeliveryInstruction($order->getFirstMessage());

        $sender = (new Address())
            ->setStreetname(\Tools::replaceAccentedChars(\Configuration::get('PS_SHOP_ADDR1')))
            ->setCountryCode(\Country::getIsoById(\Configuration::get('PS_SHOP_COUNTRY_ID')))
            ->setPostcode(\Configuration::get('PS_SHOP_CODE'))
            ->setCity(\Tools::replaceAccentedChars(\Configuration::get('PS_SHOP_CITY')))
            ->setAddressAdd1(\Tools::replaceAccentedChars(\Configuration::get('PS_SHOP_NAME')))
            ->setAddressAdd3(\Tools::replaceAccentedChars(\Configuration::get('PS_SHOP_ADDR1')))
            ->setPhoneNo(\MondialrelayTools::getFormattedPhonenumber(\Configuration::get('PS_SHOP_PHONE')))
            ->setEmail(\Configuration::get('PS_SHOP_EMAIL'))
        ;


        $this->setSender($sender);
        $this->setRecipient($recipient);

        return true;
    }

    public function getXmlData($dom)
    {
        $shipment = $dom->createElement("Shipment");
        $shipment->appendChild($dom->createElement('OrderNo', $this->getOrderNo()));
        $shipment->appendChild($dom->createElement('CustomerNo', $this->getCustomerNo()));
        $shipment->appendChild($dom->createElement('ParcelCount', $this->getParcelCount()));
        if($this->getParcels()){
            $shipment->appendChild($this->getParcels()->getXmlDatas($dom));
        }

        $deliveryMode = $dom->createElement('DeliveryMode');
        $mode = $dom->createAttribute('Mode');
        $mode->value = $this->getDeliveryMode()->getMode() ? : '';
        $location = $dom->createAttribute('Location');
        $location->value = $this->getDeliveryMode()->getLocation() ? : '';
        $deliveryMode->appendChild($mode);
        $deliveryMode->appendChild($location);
        $shipment->appendChild($deliveryMode);

        $collectionMode = $dom->createElement('CollectionMode');
        $mode = $dom->createAttribute('Mode');
        $mode->value = $this->getCollectionMode()->getMode() ? : '';
        $location = $dom->createAttribute('Location');
        $location->value = $this->getCollectionMode()->getLocation() ? : '';
        $collectionMode->appendChild($mode);
        $collectionMode->appendChild($location);
        $shipment->appendChild($collectionMode);

        $option = $dom->createElement('Option');
        $key = $dom->createAttribute('Key');
        $key->value = $this->getOption() ? $this->getOption()->getKey() : '';
        $value = $dom->createAttribute('Value');
        $value->value = $this->getOption() ? $this->getOption()->getValue() : '';

        $option->appendChild($key);
        $option->appendChild($value);
        $shipment->appendChild($option);

        //faire pour la partie parcels

        $dom->createElement('DeliveryInstruction', $this->getDeliveryInstruction());

        $sender = $dom->createElement('Sender');
        $sender->appendChild($this->getSender()->getXmlData($dom));
        
        $recipient = $dom->createElement('Recipient');
        $recipient->appendChild($this->getRecipient()->getXmlData($dom));

        $shipment->appendChild($sender);
        $shipment->appendChild($recipient);

        return $shipment;
    }


    /**
     * Get the value of recipient
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Set the value of recipient
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * Get the value of sender
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set the value of sender
     *
     * @return self
     */
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get the value of deliveryInstruction
     */
    public function getDeliveryInstruction()
    {
        return $this->deliveryInstruction;
    }

    /**
     * Set the value of deliveryInstruction
     *
     * @return self
     */
    public function setDeliveryInstruction($deliveryInstruction)
    {
        if(preg_match('/^[0-9a-zA-Z_\-\'.,\/ ]{0,30}$/', $deliveryInstruction)){
            $this->deliveryInstruction = $deliveryInstruction;
        }

        return $this;
    }

    /**
     * Get the value of parcels
     */
    public function getParcels()
    {
        return $this->parcels;
    }

    /**
     * Set the value of parcels
     *
     * @return self
     */
    public function setParcels($parcels)
    {
        $this->parcels = $parcels;

        return $this;
    }

    /**
     * Get the value of collectionMode
     */
    public function getCollectionMode()
    {
        return $this->collectionMode;
    }

    /**
     * Set the value of collectionMode
     *
     * @return self
     */
    public function setCollectionMode($collectionMode)
    {
        $this->collectionMode = $collectionMode;

        return $this;
    }

    /**
     * Get the value of deliveryMode
     */
    public function getDeliveryMode()
    {
        return $this->deliveryMode;
    }

    /**
     * Set the value of deliveryMode
     *
     * @return self
     */
    public function setDeliveryMode($deliveryMode)
    {
        $this->deliveryMode = $deliveryMode;

        return $this;
    }

    /**
     * Get the value of parcelCount
     */
    public function getParcelCount()
    {
        return $this->parcelCount;
    }

    /**
     * Set the value of parcelCount
     *
     * @return self
     */
    public function setParcelCount($parcelCount)
    {
        if(preg_match('/^[0-9]{1,2}$/', $parcelCount)){
            $this->parcelCount = $parcelCount;
        }
        return $this;
    }

    /**
     * Get the value of customerNo
     */
    public function getCustomerNo()
    {
        return $this->customerNo;
    }

    /**
     * Set the value of customerNo
     *
     * @return self
     */
    public function setCustomerNo($customerNo)
    {
        if(preg_match('/^(|[0-9AZ]{0,9})$/', $customerNo)){
            $this->customerNo = $customerNo;
        }

        return $this;
    }

    /**
     * Get the value of orderNo
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * Set the value of orderNo
     *
     * @return self
     */
    public function setOrderNo($orderNo)
    {
        if(preg_match('/^(|[0-9A-Z_-]{0,15})$/', $orderNo)){
            $this->orderNo = $orderNo;
        }

        return $this;
    }

    /**
     * Gets the webservice "ModeLiv" parameter's value.
     *
     * @param string $deliveryMode
     * @return string
     */
    private function getWebserviceModeLiv($deliveryMode)
    {
        return (in_array($deliveryMode, ['MED', 'APM']))
            ? '24R'
            : $deliveryMode
        ;
    }

    /**
     * Get the value of option
     */ 
    public function getOption()
    {
        return $this->option;
    }

    /**
     * Set the value of option
     *
     * @return self
     */ 
    public function setOption($option)
    {
        $this->option = $option;

        return $this;
    }
}
