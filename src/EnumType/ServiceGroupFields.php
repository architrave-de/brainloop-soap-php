<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for ServiceGroupFields EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ServiceGroupFields
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class ServiceGroupFields
{
    /**
     * Constant for value 'Members'
     * @return string 'Members'
     */
    const VALUE_MEMBERS = 'Members';
    /**
     * Constant for value 'MembersRecursive'
     * @return string 'MembersRecursive'
     */
    const VALUE_MEMBERS_RECURSIVE = 'MembersRecursive';
    /**
     * Constant for value 'SubGroups'
     * @return string 'SubGroups'
     */
    const VALUE_SUB_GROUPS = 'SubGroups';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
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
     * @uses self::VALUE_MEMBERS
     * @uses self::VALUE_MEMBERS_RECURSIVE
     * @uses self::VALUE_SUB_GROUPS
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MEMBERS,
            self::VALUE_MEMBERS_RECURSIVE,
            self::VALUE_SUB_GROUPS,
            self::VALUE_ALL,
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
