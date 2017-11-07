<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for ReviewFields EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ReviewFields
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class ReviewFields
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'AnnotationIDs'
     * @return string 'AnnotationIDs'
     */
    const VALUE_ANNOTATION_IDS = 'AnnotationIDs';
    /**
     * Constant for value 'PermissionGroupsAndUsers'
     * @return string 'PermissionGroupsAndUsers'
     */
    const VALUE_PERMISSION_GROUPS_AND_USERS = 'PermissionGroupsAndUsers';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ANNOTATION_IDS
     * @uses self::VALUE_PERMISSION_GROUPS_AND_USERS
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ANNOTATION_IDS,
            self::VALUE_PERMISSION_GROUPS_AND_USERS,
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
