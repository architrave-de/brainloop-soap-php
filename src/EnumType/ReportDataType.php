<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for ReportDataType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ReportDataType
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class ReportDataType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'String'
     * @return string 'String'
     */
    const VALUE_STRING = 'String';
    /**
     * Constant for value 'DateTime'
     * @return string 'DateTime'
     */
    const VALUE_DATE_TIME = 'DateTime';
    /**
     * Constant for value 'Integer'
     * @return string 'Integer'
     */
    const VALUE_INTEGER = 'Integer';
    /**
     * Constant for value 'Decimal'
     * @return string 'Decimal'
     */
    const VALUE_DECIMAL = 'Decimal';
    /**
     * Constant for value 'Boolean'
     * @return string 'Boolean'
     */
    const VALUE_BOOLEAN = 'Boolean';
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
     * @uses self::VALUE_STRING
     * @uses self::VALUE_DATE_TIME
     * @uses self::VALUE_INTEGER
     * @uses self::VALUE_DECIMAL
     * @uses self::VALUE_BOOLEAN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_STRING,
            self::VALUE_DATE_TIME,
            self::VALUE_INTEGER,
            self::VALUE_DECIMAL,
            self::VALUE_BOOLEAN,
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
