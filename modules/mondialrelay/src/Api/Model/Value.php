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

 namespace MondialRelay\MondialRelay\Api\Model;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Class ValueBuilder
 *
 * @package Scaledev\Manomano
 * @author Fabien Sigrand <contact@scaledev.fr>
 * @since tag
 */
final class Value
{
    /** @var string $mode */
    private $unit;

    /** @var int $location */
    private $value;

    /**
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return self
     */ 
    public function setValue($value)
    {
        
        if(preg_match('/^[0-9]{0,10}$/', $value)){
            $this->value = $value;
        }

        return $this;
    }

    /**
     * Get the value of unit
     */ 
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set the value of unit
     *
     * @return self
     */ 
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }
}