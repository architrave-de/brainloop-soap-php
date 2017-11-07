<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for ReportLanguage EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ReportLanguage
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class ReportLanguage
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'English'
     * @return string 'English'
     */
    const VALUE_ENGLISH = 'English';
    /**
     * Constant for value 'German'
     * @return string 'German'
     */
    const VALUE_GERMAN = 'German';
    /**
     * Constant for value 'French'
     * @return string 'French'
     */
    const VALUE_FRENCH = 'French';
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
     * @uses self::VALUE_ENGLISH
     * @uses self::VALUE_GERMAN
     * @uses self::VALUE_FRENCH
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ENGLISH,
            self::VALUE_GERMAN,
            self::VALUE_FRENCH,
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
