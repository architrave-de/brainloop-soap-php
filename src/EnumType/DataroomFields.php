<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for DataroomFields EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DataroomFields
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class DataroomFields
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'DRCName'
     * @return string 'DRCName'
     */
    const VALUE_DRCNAME = 'DRCName';
    /**
     * Constant for value 'Path'
     * @return string 'Path'
     */
    const VALUE_PATH = 'Path';
    /**
     * Constant for value 'MinLinkSecurity'
     * @return string 'MinLinkSecurity'
     */
    const VALUE_MIN_LINK_SECURITY = 'MinLinkSecurity';
    /**
     * Constant for value 'MaxLinkAge'
     * @return string 'MaxLinkAge'
     */
    const VALUE_MAX_LINK_AGE = 'MaxLinkAge';
    /**
     * Constant for value 'AllowSecurityCategories'
     * @return string 'AllowSecurityCategories'
     */
    const VALUE_ALLOW_SECURITY_CATEGORIES = 'AllowSecurityCategories';
    /**
     * Constant for value 'IRMOptions'
     * @return string 'IRMOptions'
     */
    const VALUE_IRMOPTIONS = 'IRMOptions';
    /**
     * Constant for value 'EncryptionStatus'
     * @return string 'EncryptionStatus'
     */
    const VALUE_ENCRYPTION_STATUS = 'EncryptionStatus';
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
     * @uses self::VALUE_DRCNAME
     * @uses self::VALUE_PATH
     * @uses self::VALUE_MIN_LINK_SECURITY
     * @uses self::VALUE_MAX_LINK_AGE
     * @uses self::VALUE_ALLOW_SECURITY_CATEGORIES
     * @uses self::VALUE_IRMOPTIONS
     * @uses self::VALUE_ENCRYPTION_STATUS
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_DRCNAME,
            self::VALUE_PATH,
            self::VALUE_MIN_LINK_SECURITY,
            self::VALUE_MAX_LINK_AGE,
            self::VALUE_ALLOW_SECURITY_CATEGORIES,
            self::VALUE_IRMOPTIONS,
            self::VALUE_ENCRYPTION_STATUS,
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
