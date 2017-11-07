<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for NotificationGroup EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:NotificationGroup
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class NotificationGroup
{
    /**
     * Constant for value 'SECURITY_POLICY'
     * @return string 'SECURITY_POLICY'
     */
    const VALUE_SECURITY_POLICY = 'SECURITY_POLICY';
    /**
     * Constant for value 'ACCESS'
     * @return string 'ACCESS'
     */
    const VALUE_ACCESS = 'ACCESS';
    /**
     * Constant for value 'ORGANIZE'
     * @return string 'ORGANIZE'
     */
    const VALUE_ORGANIZE = 'ORGANIZE';
    /**
     * Constant for value 'MODIFICATION_CONTENT_SUBITEM'
     * @return string 'MODIFICATION_CONTENT_SUBITEM'
     */
    const VALUE_MODIFICATION_CONTENT_SUBITEM = 'MODIFICATION_CONTENT_SUBITEM';
    /**
     * Constant for value 'VERSIONING'
     * @return string 'VERSIONING'
     */
    const VALUE_VERSIONING = 'VERSIONING';
    /**
     * Constant for value 'HISTORY_GROUP_COLLABORATION'
     * @return string 'HISTORY_GROUP_COLLABORATION'
     */
    const VALUE_HISTORY_GROUP_COLLABORATION = 'HISTORY_GROUP_COLLABORATION';
    /**
     * Constant for value 'HISTORY_GROUP_DOWNLOAD_EXTERNAL'
     * @return string 'HISTORY_GROUP_DOWNLOAD_EXTERNAL'
     */
    const VALUE_HISTORY_GROUP_DOWNLOAD_EXTERNAL = 'HISTORY_GROUP_DOWNLOAD_EXTERNAL';
    /**
     * Constant for value 'COMMUNICATION'
     * @return string 'COMMUNICATION'
     */
    const VALUE_COMMUNICATION = 'COMMUNICATION';
    /**
     * Constant for value 'HISTORY_GROUP_STATUS_CHANGE'
     * @return string 'HISTORY_GROUP_STATUS_CHANGE'
     */
    const VALUE_HISTORY_GROUP_STATUS_CHANGE = 'HISTORY_GROUP_STATUS_CHANGE';
    /**
     * Constant for value 'HISTORY_EXCLUDE'
     * @return string 'HISTORY_EXCLUDE'
     */
    const VALUE_HISTORY_EXCLUDE = 'HISTORY_EXCLUDE';
    /**
     * Constant for value 'SYS_OPERATIONS'
     * @return string 'SYS_OPERATIONS'
     */
    const VALUE_SYS_OPERATIONS = 'SYS_OPERATIONS';
    /**
     * Constant for value 'ERRORS'
     * @return string 'ERRORS'
     */
    const VALUE_ERRORS = 'ERRORS';
    /**
     * Constant for value 'CONFIG_CHANGED'
     * @return string 'CONFIG_CHANGED'
     */
    const VALUE_CONFIG_CHANGED = 'CONFIG_CHANGED';
    /**
     * Constant for value 'ORDERING'
     * @return string 'ORDERING'
     */
    const VALUE_ORDERING = 'ORDERING';
    /**
     * Constant for value 'USER_MANAGEMENT'
     * @return string 'USER_MANAGEMENT'
     */
    const VALUE_USER_MANAGEMENT = 'USER_MANAGEMENT';
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
     * @uses self::VALUE_SECURITY_POLICY
     * @uses self::VALUE_ACCESS
     * @uses self::VALUE_ORGANIZE
     * @uses self::VALUE_MODIFICATION_CONTENT_SUBITEM
     * @uses self::VALUE_VERSIONING
     * @uses self::VALUE_HISTORY_GROUP_COLLABORATION
     * @uses self::VALUE_HISTORY_GROUP_DOWNLOAD_EXTERNAL
     * @uses self::VALUE_COMMUNICATION
     * @uses self::VALUE_HISTORY_GROUP_STATUS_CHANGE
     * @uses self::VALUE_HISTORY_EXCLUDE
     * @uses self::VALUE_SYS_OPERATIONS
     * @uses self::VALUE_ERRORS
     * @uses self::VALUE_CONFIG_CHANGED
     * @uses self::VALUE_ORDERING
     * @uses self::VALUE_USER_MANAGEMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SECURITY_POLICY,
            self::VALUE_ACCESS,
            self::VALUE_ORGANIZE,
            self::VALUE_MODIFICATION_CONTENT_SUBITEM,
            self::VALUE_VERSIONING,
            self::VALUE_HISTORY_GROUP_COLLABORATION,
            self::VALUE_HISTORY_GROUP_DOWNLOAD_EXTERNAL,
            self::VALUE_COMMUNICATION,
            self::VALUE_HISTORY_GROUP_STATUS_CHANGE,
            self::VALUE_HISTORY_EXCLUDE,
            self::VALUE_SYS_OPERATIONS,
            self::VALUE_ERRORS,
            self::VALUE_CONFIG_CHANGED,
            self::VALUE_ORDERING,
            self::VALUE_USER_MANAGEMENT,
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
