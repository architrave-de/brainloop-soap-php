<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for SortDirection EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SortDirection
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class SortDirection
{
    /**
     * Constant for value 'Ascending'
     * @return string 'Ascending'
     */
    const VALUE_ASCENDING = 'Ascending';
    /**
     * Constant for value 'Descending'
     * @return string 'Descending'
     */
    const VALUE_DESCENDING = 'Descending';
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
     * @uses self::VALUE_ASCENDING
     * @uses self::VALUE_DESCENDING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ASCENDING,
            self::VALUE_DESCENDING,
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
