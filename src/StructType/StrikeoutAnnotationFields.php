<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StrikeoutAnnotationFields StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:StrikeoutAnnotationFields
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class StrikeoutAnnotationFields extends AnnotationFields
{
    /**
     * The Color
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\StructType\AnnotationColor
     */
    public $Color;
    /**
     * The Coords
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfAnnotationRegion
     */
    public $Coords;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Text;
    /**
     * Constructor method for StrikeoutAnnotationFields
     * @uses StrikeoutAnnotationFields::setColor()
     * @uses StrikeoutAnnotationFields::setCoords()
     * @uses StrikeoutAnnotationFields::setText()
     * @param \Brainloop\Soap\StructType\AnnotationColor $color
     * @param \Brainloop\Soap\ArrayType\ArrayOfAnnotationRegion $coords
     * @param string $text
     */
    public function __construct(\Brainloop\Soap\StructType\AnnotationColor $color = null, \Brainloop\Soap\ArrayType\ArrayOfAnnotationRegion $coords = null, $text = null)
    {
        $this
            ->setColor($color)
            ->setCoords($coords)
            ->setText($text);
    }
    /**
     * Get Color value
     * @return \Brainloop\Soap\StructType\AnnotationColor|null
     */
    public function getColor()
    {
        return $this->Color;
    }
    /**
     * Set Color value
     * @param \Brainloop\Soap\StructType\AnnotationColor $color
     * @return \Brainloop\Soap\StructType\StrikeoutAnnotationFields
     */
    public function setColor(\Brainloop\Soap\StructType\AnnotationColor $color = null)
    {
        $this->Color = $color;
        return $this;
    }
    /**
     * Get Coords value
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationRegion|null
     */
    public function getCoords()
    {
        return $this->Coords;
    }
    /**
     * Set Coords value
     * @param \Brainloop\Soap\ArrayType\ArrayOfAnnotationRegion $coords
     * @return \Brainloop\Soap\StructType\StrikeoutAnnotationFields
     */
    public function setCoords(\Brainloop\Soap\ArrayType\ArrayOfAnnotationRegion $coords = null)
    {
        $this->Coords = $coords;
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
     * @return \Brainloop\Soap\StructType\StrikeoutAnnotationFields
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
     * @return \Brainloop\Soap\StructType\StrikeoutAnnotationFields
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
