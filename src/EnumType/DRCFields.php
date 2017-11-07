<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for DRCFields EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DRCFields
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class DRCFields
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Description'
     * @return string 'Description'
     */
    const VALUE_DESCRIPTION = 'Description';
    /**
     * Constant for value 'MinMaxDetails'
     * @return string 'MinMaxDetails'
     */
    const VALUE_MIN_MAX_DETAILS = 'MinMaxDetails';
    /**
     * Constant for value 'Templates'
     * @return string 'Templates'
     */
    const VALUE_TEMPLATES = 'Templates';
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
     * @uses self::VALUE_DESCRIPTION
     * @uses self::VALUE_MIN_MAX_DETAILS
     * @uses self::VALUE_TEMPLATES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_DESCRIPTION,
            self::VALUE_MIN_MAX_DETAILS,
            self::VALUE_TEMPLATES,
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
