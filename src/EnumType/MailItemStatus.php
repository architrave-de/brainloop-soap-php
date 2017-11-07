<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for MailItemStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MailItemStatus
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class MailItemStatus
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Incomplete'
     * @return string 'Incomplete'
     */
    const VALUE_INCOMPLETE = 'Incomplete';
    /**
     * Constant for value 'Complete'
     * @return string 'Complete'
     */
    const VALUE_COMPLETE = 'Complete';
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
     * @uses self::VALUE_INCOMPLETE
     * @uses self::VALUE_COMPLETE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_INCOMPLETE,
            self::VALUE_COMPLETE,
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
