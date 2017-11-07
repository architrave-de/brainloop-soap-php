<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for VoterStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VoterStatus
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class VoterStatus
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Positive'
     * @return string 'Positive'
     */
    const VALUE_POSITIVE = 'Positive';
    /**
     * Constant for value 'Negative'
     * @return string 'Negative'
     */
    const VALUE_NEGATIVE = 'Negative';
    /**
     * Constant for value 'Neutral'
     * @return string 'Neutral'
     */
    const VALUE_NEUTRAL = 'Neutral';
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
     * @uses self::VALUE_POSITIVE
     * @uses self::VALUE_NEGATIVE
     * @uses self::VALUE_NEUTRAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_POSITIVE,
            self::VALUE_NEGATIVE,
            self::VALUE_NEUTRAL,
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
