<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for UserFields EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UserFields
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class UserFields
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'IsRegistered'
     * @return string 'IsRegistered'
     */
    const VALUE_IS_REGISTERED = 'IsRegistered';
    /**
     * Constant for value 'LastLogin'
     * @return string 'LastLogin'
     */
    const VALUE_LAST_LOGIN = 'LastLogin';
    /**
     * Constant for value 'RegionalSettings'
     * @return string 'RegionalSettings'
     */
    const VALUE_REGIONAL_SETTINGS = 'RegionalSettings';
    /**
     * Constant for value 'ContactDetails'
     * @return string 'ContactDetails'
     */
    const VALUE_CONTACT_DETAILS = 'ContactDetails';
    /**
     * Constant for value 'Preferences'
     * @return string 'Preferences'
     */
    const VALUE_PREFERENCES = 'Preferences';
    /**
     * Constant for value 'Signature'
     * @return string 'Signature'
     */
    const VALUE_SIGNATURE = 'Signature';
    /**
     * Constant for value 'Comment'
     * @return string 'Comment'
     */
    const VALUE_COMMENT = 'Comment';
    /**
     * Constant for value 'AnnotationXml'
     * @return string 'AnnotationXml'
     */
    const VALUE_ANNOTATION_XML = 'AnnotationXml';
    /**
     * Constant for value 'TimeBasedAccess'
     * @return string 'TimeBasedAccess'
     */
    const VALUE_TIME_BASED_ACCESS = 'TimeBasedAccess';
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
     * @uses self::VALUE_IS_REGISTERED
     * @uses self::VALUE_LAST_LOGIN
     * @uses self::VALUE_REGIONAL_SETTINGS
     * @uses self::VALUE_CONTACT_DETAILS
     * @uses self::VALUE_PREFERENCES
     * @uses self::VALUE_SIGNATURE
     * @uses self::VALUE_COMMENT
     * @uses self::VALUE_ANNOTATION_XML
     * @uses self::VALUE_TIME_BASED_ACCESS
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_IS_REGISTERED,
            self::VALUE_LAST_LOGIN,
            self::VALUE_REGIONAL_SETTINGS,
            self::VALUE_CONTACT_DETAILS,
            self::VALUE_PREFERENCES,
            self::VALUE_SIGNATURE,
            self::VALUE_COMMENT,
            self::VALUE_ANNOTATION_XML,
            self::VALUE_TIME_BASED_ACCESS,
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
