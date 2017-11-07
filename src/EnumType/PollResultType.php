<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for PollResultType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PollResultType
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class PollResultType
{
    /**
     * Constant for value 'Manual'
     * @return string 'Manual'
     */
    const VALUE_MANUAL = 'Manual';
    /**
     * Constant for value 'Automatic'
     * @return string 'Automatic'
     */
    const VALUE_AUTOMATIC = 'Automatic';
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
     * @uses self::VALUE_MANUAL
     * @uses self::VALUE_AUTOMATIC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MANUAL,
            self::VALUE_AUTOMATIC,
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
