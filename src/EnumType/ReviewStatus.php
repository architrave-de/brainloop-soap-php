<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for ReviewStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ReviewStatus
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class ReviewStatus
{
    /**
     * Constant for value 'Private'
     * @return string 'Private'
     */
    const VALUE_PRIVATE = 'Private';
    /**
     * Constant for value 'Shared'
     * @return string 'Shared'
     */
    const VALUE_SHARED = 'Shared';
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
     * @uses self::VALUE_PRIVATE
     * @uses self::VALUE_SHARED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRIVATE,
            self::VALUE_SHARED,
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
