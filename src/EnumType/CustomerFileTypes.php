<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for CustomerFileTypes EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CustomerFileTypes
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class CustomerFileTypes
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'HeaderLogo'
     * @return string 'HeaderLogo'
     */
    const VALUE_HEADER_LOGO = 'HeaderLogo';
    /**
     * Constant for value 'LoginImage'
     * @return string 'LoginImage'
     */
    const VALUE_LOGIN_IMAGE = 'LoginImage';
    /**
     * Constant for value 'TermsAndConditions'
     * @return string 'TermsAndConditions'
     */
    const VALUE_TERMS_AND_CONDITIONS = 'TermsAndConditions';
    /**
     * Constant for value 'APISecurityPolicy'
     * @return string 'APISecurityPolicy'
     */
    const VALUE_APISECURITY_POLICY = 'APISecurityPolicy';
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
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_HEADER_LOGO
     * @uses self::VALUE_LOGIN_IMAGE
     * @uses self::VALUE_TERMS_AND_CONDITIONS
     * @uses self::VALUE_APISECURITY_POLICY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_HEADER_LOGO,
            self::VALUE_LOGIN_IMAGE,
            self::VALUE_TERMS_AND_CONDITIONS,
            self::VALUE_APISECURITY_POLICY,
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
