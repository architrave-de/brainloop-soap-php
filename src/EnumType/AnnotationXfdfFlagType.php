<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for AnnotationXfdfFlagType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AnnotationXfdfFlagType
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class AnnotationXfdfFlagType
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Invisible'
     * @return string 'Invisible'
     */
    const VALUE_INVISIBLE = 'Invisible';
    /**
     * Constant for value 'Hidden'
     * @return string 'Hidden'
     */
    const VALUE_HIDDEN = 'Hidden';
    /**
     * Constant for value 'Print'
     * @return string 'Print'
     */
    const VALUE_PRINT = 'Print';
    /**
     * Constant for value 'Nozoom'
     * @return string 'Nozoom'
     */
    const VALUE_NOZOOM = 'Nozoom';
    /**
     * Constant for value 'Norotate'
     * @return string 'Norotate'
     */
    const VALUE_NOROTATE = 'Norotate';
    /**
     * Constant for value 'Noview'
     * @return string 'Noview'
     */
    const VALUE_NOVIEW = 'Noview';
    /**
     * Constant for value 'Readonly'
     * @return string 'Readonly'
     */
    const VALUE_READONLY = 'Readonly';
    /**
     * Constant for value 'Locked'
     * @return string 'Locked'
     */
    const VALUE_LOCKED = 'Locked';
    /**
     * Constant for value 'Togglenoview'
     * @return string 'Togglenoview'
     */
    const VALUE_TOGGLENOVIEW = 'Togglenoview';
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
     * @uses self::VALUE_INVISIBLE
     * @uses self::VALUE_HIDDEN
     * @uses self::VALUE_PRINT
     * @uses self::VALUE_NOZOOM
     * @uses self::VALUE_NOROTATE
     * @uses self::VALUE_NOVIEW
     * @uses self::VALUE_READONLY
     * @uses self::VALUE_LOCKED
     * @uses self::VALUE_TOGGLENOVIEW
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_INVISIBLE,
            self::VALUE_HIDDEN,
            self::VALUE_PRINT,
            self::VALUE_NOZOOM,
            self::VALUE_NOROTATE,
            self::VALUE_NOVIEW,
            self::VALUE_READONLY,
            self::VALUE_LOCKED,
            self::VALUE_TOGGLENOVIEW,
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
