<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for VersionStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VersionStatus
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class VersionStatus
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'InProgress'
     * @return string 'InProgress'
     */
    const VALUE_IN_PROGRESS = 'InProgress';
    /**
     * Constant for value 'Frozen'
     * @return string 'Frozen'
     */
    const VALUE_FROZEN = 'Frozen';
    /**
     * Constant for value 'DeepFrozen'
     * @return string 'DeepFrozen'
     */
    const VALUE_DEEP_FROZEN = 'DeepFrozen';
    /**
     * Constant for value 'ContentFrozen'
     * @return string 'ContentFrozen'
     */
    const VALUE_CONTENT_FROZEN = 'ContentFrozen';
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
     * @uses self::VALUE_IN_PROGRESS
     * @uses self::VALUE_FROZEN
     * @uses self::VALUE_DEEP_FROZEN
     * @uses self::VALUE_CONTENT_FROZEN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_IN_PROGRESS,
            self::VALUE_FROZEN,
            self::VALUE_DEEP_FROZEN,
            self::VALUE_CONTENT_FROZEN,
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
