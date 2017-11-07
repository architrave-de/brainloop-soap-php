<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for ItemDownloadType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ItemDownloadType
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class ItemDownloadType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Brainmark'
     * @return string 'Brainmark'
     */
    const VALUE_BRAINMARK = 'Brainmark';
    /**
     * Constant for value 'Original'
     * @return string 'Original'
     */
    const VALUE_ORIGINAL = 'Original';
    /**
     * Constant for value 'Edit'
     * @return string 'Edit'
     */
    const VALUE_EDIT = 'Edit';
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
     * @uses self::VALUE_BRAINMARK
     * @uses self::VALUE_ORIGINAL
     * @uses self::VALUE_EDIT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_BRAINMARK,
            self::VALUE_ORIGINAL,
            self::VALUE_EDIT,
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
