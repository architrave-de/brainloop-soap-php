<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for BrainmarkStyle EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BrainmarkStyle
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class BrainmarkStyle
{
    /**
     * Constant for value 'ViewOnly'
     * @return string 'ViewOnly'
     */
    const VALUE_VIEW_ONLY = 'ViewOnly';
    /**
     * Constant for value 'ViewAndPrint'
     * @return string 'ViewAndPrint'
     */
    const VALUE_VIEW_AND_PRINT = 'ViewAndPrint';
    /**
     * Constant for value 'NonPrintable'
     * @return string 'NonPrintable'
     */
    const VALUE_NON_PRINTABLE = 'NonPrintable';
    /**
     * Constant for value 'Unrestricted'
     * @return string 'Unrestricted'
     */
    const VALUE_UNRESTRICTED = 'Unrestricted';
    /**
     * Constant for value 'NotSet'
     * @return string 'NotSet'
     */
    const VALUE_NOT_SET = 'NotSet';
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
     * @uses self::VALUE_VIEW_ONLY
     * @uses self::VALUE_VIEW_AND_PRINT
     * @uses self::VALUE_NON_PRINTABLE
     * @uses self::VALUE_UNRESTRICTED
     * @uses self::VALUE_NOT_SET
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VIEW_ONLY,
            self::VALUE_VIEW_AND_PRINT,
            self::VALUE_NON_PRINTABLE,
            self::VALUE_UNRESTRICTED,
            self::VALUE_NOT_SET,
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
