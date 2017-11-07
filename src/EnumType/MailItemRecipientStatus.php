<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for MailItemRecipientStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MailItemRecipientStatus
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class MailItemRecipientStatus
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'ActionTaken'
     * @return string 'ActionTaken'
     */
    const VALUE_ACTION_TAKEN = 'ActionTaken';
    /**
     * Constant for value 'NoActionTaken'
     * @return string 'NoActionTaken'
     */
    const VALUE_NO_ACTION_TAKEN = 'NoActionTaken';
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
     * @uses self::VALUE_ACTION_TAKEN
     * @uses self::VALUE_NO_ACTION_TAKEN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ACTION_TAKEN,
            self::VALUE_NO_ACTION_TAKEN,
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
