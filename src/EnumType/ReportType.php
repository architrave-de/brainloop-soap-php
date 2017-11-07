<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for ReportType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ReportType
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class ReportType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'System'
     * @return string 'System'
     */
    const VALUE_SYSTEM = 'System';
    /**
     * Constant for value 'DRC'
     * @return string 'DRC'
     */
    const VALUE_DRC = 'DRC';
    /**
     * Constant for value 'Dataroom'
     * @return string 'Dataroom'
     */
    const VALUE_DATAROOM = 'Dataroom';
    /**
     * Constant for value 'BLItem'
     * @return string 'BLItem'
     */
    const VALUE_BLITEM = 'BLItem';
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
     * @uses self::VALUE_SYSTEM
     * @uses self::VALUE_DRC
     * @uses self::VALUE_DATAROOM
     * @uses self::VALUE_BLITEM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SYSTEM,
            self::VALUE_DRC,
            self::VALUE_DATAROOM,
            self::VALUE_BLITEM,
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
