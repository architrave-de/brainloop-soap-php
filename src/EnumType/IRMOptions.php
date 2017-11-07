<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for IRMOptions EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:IRMOptions
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class IRMOptions
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Off'
     * @return string 'Off'
     */
    const VALUE_OFF = 'Off';
    /**
     * Constant for value 'Adobe'
     * @return string 'Adobe'
     */
    const VALUE_ADOBE = 'Adobe';
    /**
     * Constant for value 'Microsoft'
     * @return string 'Microsoft'
     */
    const VALUE_MICROSOFT = 'Microsoft';
    /**
     * Constant for value 'Forced'
     * @return string 'Forced'
     */
    const VALUE_FORCED = 'Forced';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_OFF
     * @uses self::VALUE_ADOBE
     * @uses self::VALUE_MICROSOFT
     * @uses self::VALUE_FORCED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_OFF,
            self::VALUE_ADOBE,
            self::VALUE_MICROSOFT,
            self::VALUE_FORCED,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
