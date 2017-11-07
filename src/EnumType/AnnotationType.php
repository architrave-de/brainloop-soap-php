<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for AnnotationType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AnnotationType
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class AnnotationType
{
    /**
     * Constant for value 'Text'
     * @return string 'Text'
     */
    const VALUE_TEXT = 'Text';
    /**
     * Constant for value 'Highlight'
     * @return string 'Highlight'
     */
    const VALUE_HIGHLIGHT = 'Highlight';
    /**
     * Constant for value 'Ink'
     * @return string 'Ink'
     */
    const VALUE_INK = 'Ink';
    /**
     * Constant for value 'Freetext'
     * @return string 'Freetext'
     */
    const VALUE_FREETEXT = 'Freetext';
    /**
     * Constant for value 'Strikeout'
     * @return string 'Strikeout'
     */
    const VALUE_STRIKEOUT = 'Strikeout';
    /**
     * Constant for value 'Underline'
     * @return string 'Underline'
     */
    const VALUE_UNDERLINE = 'Underline';
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
     * @uses self::VALUE_TEXT
     * @uses self::VALUE_HIGHLIGHT
     * @uses self::VALUE_INK
     * @uses self::VALUE_FREETEXT
     * @uses self::VALUE_STRIKEOUT
     * @uses self::VALUE_UNDERLINE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TEXT,
            self::VALUE_HIGHLIGHT,
            self::VALUE_INK,
            self::VALUE_FREETEXT,
            self::VALUE_STRIKEOUT,
            self::VALUE_UNDERLINE,
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
