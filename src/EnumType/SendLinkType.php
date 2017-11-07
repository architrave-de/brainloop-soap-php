<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for SendLinkType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SendLinkType
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class SendLinkType
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'ExternalsAnonymous'
     * @return string 'ExternalsAnonymous'
     */
    const VALUE_EXTERNALS_ANONYMOUS = 'ExternalsAnonymous';
    /**
     * Constant for value 'Externals'
     * @return string 'Externals'
     */
    const VALUE_EXTERNALS = 'Externals';
    /**
     * Constant for value 'ExternalsWithPIN'
     * @return string 'ExternalsWithPIN'
     */
    const VALUE_EXTERNALS_WITH_PIN = 'ExternalsWithPIN';
    /**
     * Constant for value 'OneTimeSDV'
     * @return string 'OneTimeSDV'
     */
    const VALUE_ONE_TIME_SDV = 'OneTimeSDV';
    /**
     * Constant for value 'DRMembers'
     * @return string 'DRMembers'
     */
    const VALUE_DRMEMBERS = 'DRMembers';
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
     * @uses self::VALUE_EXTERNALS_ANONYMOUS
     * @uses self::VALUE_EXTERNALS
     * @uses self::VALUE_EXTERNALS_WITH_PIN
     * @uses self::VALUE_ONE_TIME_SDV
     * @uses self::VALUE_DRMEMBERS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_EXTERNALS_ANONYMOUS,
            self::VALUE_EXTERNALS,
            self::VALUE_EXTERNALS_WITH_PIN,
            self::VALUE_ONE_TIME_SDV,
            self::VALUE_DRMEMBERS,
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
