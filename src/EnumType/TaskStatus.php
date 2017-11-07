<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for TaskStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TaskStatus
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class TaskStatus
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
     * Constant for value 'AwaitingAccept'
     * @return string 'AwaitingAccept'
     */
    const VALUE_AWAITING_ACCEPT = 'AwaitingAccept';
    /**
     * Constant for value 'CompleteNegative'
     * @return string 'CompleteNegative'
     */
    const VALUE_COMPLETE_NEGATIVE = 'CompleteNegative';
    /**
     * Constant for value 'DecisionRequired'
     * @return string 'DecisionRequired'
     */
    const VALUE_DECISION_REQUIRED = 'DecisionRequired';
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
     * @uses self::VALUE_AWAITING_ACCEPT
     * @uses self::VALUE_COMPLETE_NEGATIVE
     * @uses self::VALUE_DECISION_REQUIRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_COMPLETE,
            self::VALUE_INCOMPLETE,
            self::VALUE_AWAITING_ACCEPT,
            self::VALUE_COMPLETE_NEGATIVE,
            self::VALUE_DECISION_REQUIRED,
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
