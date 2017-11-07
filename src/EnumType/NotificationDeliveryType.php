<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for NotificationDeliveryType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:NotificationDeliveryType
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class NotificationDeliveryType
{
    /**
     * Constant for value 'EMail'
     * @return string 'EMail'
     */
    const VALUE_EMAIL = 'EMail';
    /**
     * Constant for value 'SMS'
     * @return string 'SMS'
     */
    const VALUE_SMS = 'SMS';
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
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_SMS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EMAIL,
            self::VALUE_SMS,
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
