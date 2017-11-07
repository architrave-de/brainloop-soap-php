<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for ReportDateTimeType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ReportDateTimeType
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class ReportDateTimeType
{
    /**
     * Constant for value 'Local'
     * @return string 'Local'
     */
    const VALUE_LOCAL = 'Local';
    /**
     * Constant for value 'Server'
     * @return string 'Server'
     */
    const VALUE_SERVER = 'Server';
    /**
     * Constant for value 'UTC'
     * @return string 'UTC'
     */
    const VALUE_UTC = 'UTC';
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
     * @uses self::VALUE_LOCAL
     * @uses self::VALUE_SERVER
     * @uses self::VALUE_UTC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LOCAL,
            self::VALUE_SERVER,
            self::VALUE_UTC,
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
