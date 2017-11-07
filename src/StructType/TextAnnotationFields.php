<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TextAnnotationFields StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TextAnnotationFields
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class TextAnnotationFields extends AnnotationFields
{
    /**
     * The Color
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\AnnotationColor
     */
    public $Color;
    /**
     * The FontSize
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FontSize;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\StructType\AnnotationPoint
     */
    public $Location;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Text;
    /**
     * Constructor method for TextAnnotationFields
     * @uses TextAnnotationFields::setColor()
     * @uses TextAnnotationFields::setFontSize()
     * @uses TextAnnotationFields::setLocation()
     * @uses TextAnnotationFields::setText()
     * @param \Brainloop\Soap\StructType\AnnotationColor $color
     * @param int $fontSize
     * @param \Brainloop\Soap\StructType\AnnotationPoint $location
     * @param string $text
     */
    public function __construct(\Brainloop\Soap\StructType\AnnotationColor $color = null, $fontSize = null, \Brainloop\Soap\StructType\AnnotationPoint $location = null, $text = null)
    {
        $this
            ->setColor($color)
            ->setFontSize($fontSize)
            ->setLocation($location)
            ->setText($text);
    }
    /**
     * Get Color value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\AnnotationColor|null
     */
    public function getColor()
    {
        return isset($this->Color) ? $this->Color : null;
    }
    /**
     * Set Color value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\AnnotationColor $color
     * @return \Brainloop\Soap\StructType\TextAnnotationFields
     */
    public function setColor(\Brainloop\Soap\StructType\AnnotationColor $color = null)
    {
        if (is_null($color) || (is_array($color) && empty($color))) {
            unset($this->Color);
        } else {
            $this->Color = $color;
        }
        return $this;
    }
    /**
     * Get FontSize value
     * @return int|null
     */
    public function getFontSize()
    {
        return $this->FontSize;
    }
    /**
     * Set FontSize value
     * @param int $fontSize
     * @return \Brainloop\Soap\StructType\TextAnnotationFields
     */
    public function setFontSize($fontSize = null)
    {
        // validation for constraint: int
        if (!is_null($fontSize) && !is_numeric($fontSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fontSize)), __LINE__);
        }
        $this->FontSize = $fontSize;
        return $this;
    }
    /**
     * Get Location value
     * @return \Brainloop\Soap\StructType\AnnotationPoint|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param \Brainloop\Soap\StructType\AnnotationPoint $location
     * @return \Brainloop\Soap\StructType\TextAnnotationFields
     */
    public function setLocation(\Brainloop\Soap\StructType\AnnotationPoint $location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Brainloop\Soap\StructType\TextAnnotationFields
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\TextAnnotationFields
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
