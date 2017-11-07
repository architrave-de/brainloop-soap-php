<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for VoteStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VoteStatus
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class VoteStatus
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CompletePositive'
     * @return string 'CompletePositive'
     */
    const VALUE_COMPLETE_POSITIVE = 'CompletePositive';
    /**
     * Constant for value 'Incomplete'
     * @return string 'Incomplete'
     */
    const VALUE_INCOMPLETE = 'Incomplete';
    /**
     * Constant for value 'CompleteNegative'
     * @return string 'CompleteNegative'
     */
    const VALUE_COMPLETE_NEGATIVE = 'CompleteNegative';
    /**
     * Constant for value 'Failed'
     * @return string 'Failed'
     */
    const VALUE_FAILED = 'Failed';
    /**
     * Constant for value 'AwaitingDecision'
     * @return string 'AwaitingDecision'
     */
    const VALUE_AWAITING_DECISION = 'AwaitingDecision';
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
     * @uses self::VALUE_COMPLETE_POSITIVE
     * @uses self::VALUE_INCOMPLETE
     * @uses self::VALUE_COMPLETE_NEGATIVE
     * @uses self::VALUE_FAILED
     * @uses self::VALUE_AWAITING_DECISION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_COMPLETE_POSITIVE,
            self::VALUE_INCOMPLETE,
            self::VALUE_COMPLETE_NEGATIVE,
            self::VALUE_FAILED,
            self::VALUE_AWAITING_DECISION,
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
