<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for EncryptionStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EncryptionStatus
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class EncryptionStatus
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'ForcedOff'
     * @return string 'ForcedOff'
     */
    const VALUE_FORCED_OFF = 'ForcedOff';
    /**
     * Constant for value 'Selective'
     * @return string 'Selective'
     */
    const VALUE_SELECTIVE = 'Selective';
    /**
     * Constant for value 'ForcedOn'
     * @return string 'ForcedOn'
     */
    const VALUE_FORCED_ON = 'ForcedOn';
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
     * @uses self::VALUE_FORCED_OFF
     * @uses self::VALUE_SELECTIVE
     * @uses self::VALUE_FORCED_ON
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_FORCED_OFF,
            self::VALUE_SELECTIVE,
            self::VALUE_FORCED_ON,
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
