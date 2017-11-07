<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for MailItemType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MailItemType
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class MailItemType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Inbox'
     * @return string 'Inbox'
     */
    const VALUE_INBOX = 'Inbox';
    /**
     * Constant for value 'Outbox'
     * @return string 'Outbox'
     */
    const VALUE_OUTBOX = 'Outbox';
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
     * @uses self::VALUE_INBOX
     * @uses self::VALUE_OUTBOX
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_INBOX,
            self::VALUE_OUTBOX,
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
