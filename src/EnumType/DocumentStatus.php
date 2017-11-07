<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for DocumentStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DocumentStatus
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class DocumentStatus
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CheckedOut'
     * @return string 'CheckedOut'
     */
    const VALUE_CHECKED_OUT = 'CheckedOut';
    /**
     * Constant for value 'Locked'
     * @return string 'Locked'
     */
    const VALUE_LOCKED = 'Locked';
    /**
     * Constant for value 'Published'
     * @return string 'Published'
     */
    const VALUE_PUBLISHED = 'Published';
    /**
     * Constant for value 'CheckedOutThroughWebdav'
     * @return string 'CheckedOutThroughWebdav'
     */
    const VALUE_CHECKED_OUT_THROUGH_WEBDAV = 'CheckedOutThroughWebdav';
    /**
     * Constant for value 'InitialZeroByteVersion1Dav'
     * @return string 'InitialZeroByteVersion1Dav'
     */
    const VALUE_INITIAL_ZERO_BYTE_VERSION_1_DAV = 'InitialZeroByteVersion1Dav';
    /**
     * Constant for value 'LockedThroughWebdav'
     * @return string 'LockedThroughWebdav'
     */
    const VALUE_LOCKED_THROUGH_WEBDAV = 'LockedThroughWebdav';
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
     * @uses self::VALUE_CHECKED_OUT
     * @uses self::VALUE_LOCKED
     * @uses self::VALUE_PUBLISHED
     * @uses self::VALUE_CHECKED_OUT_THROUGH_WEBDAV
     * @uses self::VALUE_INITIAL_ZERO_BYTE_VERSION_1_DAV
     * @uses self::VALUE_LOCKED_THROUGH_WEBDAV
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_CHECKED_OUT,
            self::VALUE_LOCKED,
            self::VALUE_PUBLISHED,
            self::VALUE_CHECKED_OUT_THROUGH_WEBDAV,
            self::VALUE_INITIAL_ZERO_BYTE_VERSION_1_DAV,
            self::VALUE_LOCKED_THROUGH_WEBDAV,
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
