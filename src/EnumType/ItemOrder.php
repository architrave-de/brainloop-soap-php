<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for ItemOrder EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ItemOrder
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class ItemOrder
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Name'
     * @return string 'Name'
     */
    const VALUE_NAME = 'Name';
    /**
     * Constant for value 'CreateDate'
     * @return string 'CreateDate'
     */
    const VALUE_CREATE_DATE = 'CreateDate';
    /**
     * Constant for value 'ModifyDate'
     * @return string 'ModifyDate'
     */
    const VALUE_MODIFY_DATE = 'ModifyDate';
    /**
     * Constant for value 'FolderListing'
     * @return string 'FolderListing'
     */
    const VALUE_FOLDER_LISTING = 'FolderListing';
    /**
     * Constant for value 'Path'
     * @return string 'Path'
     */
    const VALUE_PATH = 'Path';
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
     * @uses self::VALUE_NAME
     * @uses self::VALUE_CREATE_DATE
     * @uses self::VALUE_MODIFY_DATE
     * @uses self::VALUE_FOLDER_LISTING
     * @uses self::VALUE_PATH
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_NAME,
            self::VALUE_CREATE_DATE,
            self::VALUE_MODIFY_DATE,
            self::VALUE_FOLDER_LISTING,
            self::VALUE_PATH,
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
