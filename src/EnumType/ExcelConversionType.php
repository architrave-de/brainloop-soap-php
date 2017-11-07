<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for ExcelConversionType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ExcelConversionType
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class ExcelConversionType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Excel2007'
     * @return string 'Excel2007'
     */
    const VALUE_EXCEL_2007 = 'Excel2007';
    /**
     * Constant for value 'Excel'
     * @return string 'Excel'
     */
    const VALUE_EXCEL = 'Excel';
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
     * @uses self::VALUE_EXCEL_2007
     * @uses self::VALUE_EXCEL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_EXCEL_2007,
            self::VALUE_EXCEL,
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
