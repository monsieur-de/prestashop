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

namespace MondialRelay\MondialRelay\Api\Request;

use Configuration;
use Context;
use MondialRelay\MondialRelay\Api\Client;
use MondialRelay\MondialRelay\Api\Response\TestConnexionResponse;

/**
 * Class GetProductsCategoriesListRequest
 *
 * @author Fabien Sigrand <contact@scaledev.fr>
 * @todo Add @since tag
 */
final class TestConnexionRequest
{
    const URL_TEST = 'https://connect-api-sandbox.mondialrelay.com/api/shipment';

    const URL_PROD = 'https://connect-api.mondialrelay.com/api/shipment';

    /** @var Client $client */
    private $client;

    /** @var TestConnexionResponse $response */
    private $response;

    /**
     * GetProductsCategoriesListRequest constructor.
     *
     * @param string $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->response = new TestConnexionResponse();
    }

    /**
     * Executes the request.
     *
     * @return $this
     */
    public function execute()
    {
        $this->response->setClientResponse($this->client
            ->init(
                ((bool)Configuration::get(\Mondialrelay::TEST_MODE)) ? self::URL_TEST: self::URL_PROD,
                Client::METHOD_POST
            )
            ->call($this->getXmlDatas())
            ->getResponse()
        );

        return $this;
    }

    public function getXmlDatas()
    {
        $dom = new \DOMDocument('1.0', 'utf-8');
        $dom->formatOutput = true;


        $parent = $dom->createElement("ShipmentCreationRequest");
        $domAttribute1 = $dom->createAttribute('xmlns:xsi');
        $domAttribute1->value = 'http://www.w3.org/2001/XMLSchema-instance';
        $domAttribute2 = $dom->createAttribute('xmlns:xsd');
        $domAttribute2->value = 'http://www.w3.org/2001/XMLSchema';
        $domAttribute3 = $dom->createAttribute('xmlns');
        $domAttribute3->value = 'http://www.example.org/Request';
        
        $parent->appendChild($domAttribute1);
        $parent->appendChild($domAttribute2);
        $parent->appendChild($domAttribute3);

        $dom->appendChild($parent);

        $parent->appendChild($this->client->getXmlContextDatas($dom));
        
        return $dom->saveXML(null, LIBXML_NOEMPTYTAG);
    }

    /**
     * Gets the associated response of the request.
     *
     * @return TestConnexionResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Gets the API key.
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }
}
