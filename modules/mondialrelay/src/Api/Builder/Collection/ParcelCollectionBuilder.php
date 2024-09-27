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

 namespace MondialRelay\MondialRelay\Api\Builder\Collection;
 
 use MondialRelay\MondialRelay\Api\Model\Parcel;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Class ParcelCollectionBuilder
 *
 * @package Scaledev\Manomano
 * @author Fabien Sigrand <contact@scaledev.fr>
 */
final class ParcelCollectionBuilder 
{
    /**
     * Defines the element's class which composes the collection's list.
     */
    const ELEMENT_CLASS = 'MondialRelay\MondialRelay\Api\Model\Parcel';

    /**
     * The count of elements available into this collection.
     *
     * @var int $count
     */
    private $count = 0;

    /**
     * The list of collection's elements.
     *
     * @var array $elementsList
     */
    private $elementsList = array();

    /**
     * @inheritDoc
     */
    public function addElement($element)
    {
        if (get_class($element) == static::ELEMENT_CLASS) {
            $this->elementsList[] = $element;
            $this->count++;
        }

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @inheritDoc
     */
    public function getElementsList()
    {
        return $this->elementsList;
    }

    public function getXmlDatas($dom)
    {
        $parcels = $dom->createElement('Parcels');
        foreach($this->elementsList as $parcel){
            $parcelElement = $dom->createElement('Parcel');
            $weight = $dom->createElement('Weight');

            $value = $dom->createAttribute('Value');
            $value->value = $parcel->getWeight()->getValue() ? : '';
            $unit = $dom->createAttribute('Unit');
            $unit->value = $parcel->getWeight()->getUnit()  ? : 'gr';
    
            $weight->appendChild($value);
            $weight->appendChild($unit);

            $parcelElement->appendChild($weight);

            $parcels->appendChild($parcelElement);
        }

        return $parcels;
    }
}
