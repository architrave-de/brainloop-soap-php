<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for CalendarEventStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CalendarEventStatus
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class CalendarEventStatus
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'Done'
     * @return string 'Done'
     */
    const VALUE_DONE = 'Done';
    /**
     * Constant for value 'PublicActive'
     * @return string 'PublicActive'
     */
    const VALUE_PUBLIC_ACTIVE = 'PublicActive';
    /**
     * Constant for value 'PublicCancelled'
     * @return string 'PublicCancelled'
     */
    const VALUE_PUBLIC_CANCELLED = 'PublicCancelled';
    /**
     * Constant for value 'PublicDone'
     * @return string 'PublicDone'
     */
    const VALUE_PUBLIC_DONE = 'PublicDone';
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
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_DONE
     * @uses self::VALUE_PUBLIC_ACTIVE
     * @uses self::VALUE_PUBLIC_CANCELLED
     * @uses self::VALUE_PUBLIC_DONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ACTIVE,
            self::VALUE_CANCELLED,
            self::VALUE_DONE,
            self::VALUE_PUBLIC_ACTIVE,
            self::VALUE_PUBLIC_CANCELLED,
            self::VALUE_PUBLIC_DONE,
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
