<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for ItemSendStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ItemSendStatus
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class ItemSendStatus
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'OK'
     * @return string 'OK'
     */
    const VALUE_OK = 'OK';
    /**
     * Constant for value 'Error'
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
    /**
     * Constant for value 'Error_InvalidEmail'
     * @return string 'Error_InvalidEmail'
     */
    const VALUE_ERROR_INVALID_EMAIL = 'Error_InvalidEmail';
    /**
     * Constant for value 'Error_UserNotVisible'
     * @return string 'Error_UserNotVisible'
     */
    const VALUE_ERROR_USER_NOT_VISIBLE = 'Error_UserNotVisible';
    /**
     * Constant for value 'Error_UserNotInDataroom'
     * @return string 'Error_UserNotInDataroom'
     */
    const VALUE_ERROR_USER_NOT_IN_DATAROOM = 'Error_UserNotInDataroom';
    /**
     * Constant for value 'Error_ItemAccessDenied'
     * @return string 'Error_ItemAccessDenied'
     */
    const VALUE_ERROR_ITEM_ACCESS_DENIED = 'Error_ItemAccessDenied';
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
     * @uses self::VALUE_OK
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_ERROR_INVALID_EMAIL
     * @uses self::VALUE_ERROR_USER_NOT_VISIBLE
     * @uses self::VALUE_ERROR_USER_NOT_IN_DATAROOM
     * @uses self::VALUE_ERROR_ITEM_ACCESS_DENIED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_OK,
            self::VALUE_ERROR,
            self::VALUE_ERROR_INVALID_EMAIL,
            self::VALUE_ERROR_USER_NOT_VISIBLE,
            self::VALUE_ERROR_USER_NOT_IN_DATAROOM,
            self::VALUE_ERROR_ITEM_ACCESS_DENIED,
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
