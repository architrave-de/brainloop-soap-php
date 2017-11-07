<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for ParticipantStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ParticipantStatus
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class ParticipantStatus
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Complete'
     * @return string 'Complete'
     */
    const VALUE_COMPLETE = 'Complete';
    /**
     * Constant for value 'Incomplete'
     * @return string 'Incomplete'
     */
    const VALUE_INCOMPLETE = 'Incomplete';
    /**
     * Constant for value 'Declined'
     * @return string 'Declined'
     */
    const VALUE_DECLINED = 'Declined';
    /**
     * Constant for value 'Tentative'
     * @return string 'Tentative'
     */
    const VALUE_TENTATIVE = 'Tentative';
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
     * @uses self::VALUE_COMPLETE
     * @uses self::VALUE_INCOMPLETE
     * @uses self::VALUE_DECLINED
     * @uses self::VALUE_TENTATIVE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_COMPLETE,
            self::VALUE_INCOMPLETE,
            self::VALUE_DECLINED,
            self::VALUE_TENTATIVE,
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
