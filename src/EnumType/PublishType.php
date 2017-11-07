<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for PublishType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PublishType
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class PublishType
{
    /**
     * Constant for value 'Normal'
     * @return string 'Normal'
     */
    const VALUE_NORMAL = 'Normal';
    /**
     * Constant for value 'Hierarchical'
     * @return string 'Hierarchical'
     */
    const VALUE_HIERARCHICAL = 'Hierarchical';
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
     * @uses self::VALUE_NORMAL
     * @uses self::VALUE_HIERARCHICAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NORMAL,
            self::VALUE_HIERARCHICAL,
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
