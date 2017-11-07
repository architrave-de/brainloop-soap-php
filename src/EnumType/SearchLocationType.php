<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for SearchLocationType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SearchLocationType
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class SearchLocationType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Folder'
     * @return string 'Folder'
     */
    const VALUE_FOLDER = 'Folder';
    /**
     * Constant for value 'Dataroom'
     * @return string 'Dataroom'
     */
    const VALUE_DATAROOM = 'Dataroom';
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
     * @uses self::VALUE_FOLDER
     * @uses self::VALUE_DATAROOM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_FOLDER,
            self::VALUE_DATAROOM,
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
