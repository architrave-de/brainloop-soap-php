<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InkAnnotationFields StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InkAnnotationFields
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class InkAnnotationFields extends AnnotationFields
{
    /**
     * The Color
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\StructType\AnnotationColor
     */
    public $Color;
    /**
     * The StrokePath
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfArrayOfAnnotationPoint
     */
    public $StrokePath;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Width;
    /**
     * Constructor method for InkAnnotationFields
     * @uses InkAnnotationFields::setColor()
     * @uses InkAnnotationFields::setStrokePath()
     * @uses InkAnnotationFields::setWidth()
     * @param \Brainloop\Soap\StructType\AnnotationColor $color
     * @param \Brainloop\Soap\ArrayType\ArrayOfArrayOfAnnotationPoint $strokePath
     * @param int $width
     */
    public function __construct(\Brainloop\Soap\StructType\AnnotationColor $color = null, \Brainloop\Soap\ArrayType\ArrayOfArrayOfAnnotationPoint $strokePath = null, $width = null)
    {
        $this
            ->setColor($color)
            ->setStrokePath($strokePath)
            ->setWidth($width);
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
     * @return \Brainloop\Soap\StructType\InkAnnotationFields
     */
    public function setColor(\Brainloop\Soap\StructType\AnnotationColor $color = null)
    {
        $this->Color = $color;
        return $this;
    }
    /**
     * Get StrokePath value
     * @return \Brainloop\Soap\ArrayType\ArrayOfArrayOfAnnotationPoint|null
     */
    public function getStrokePath()
    {
        return $this->StrokePath;
    }
    /**
     * Set StrokePath value
     * @param \Brainloop\Soap\ArrayType\ArrayOfArrayOfAnnotationPoint $strokePath
     * @return \Brainloop\Soap\StructType\InkAnnotationFields
     */
    public function setStrokePath(\Brainloop\Soap\ArrayType\ArrayOfArrayOfAnnotationPoint $strokePath = null)
    {
        $this->StrokePath = $strokePath;
        return $this;
    }
    /**
     * Get Width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param int $width
     * @return \Brainloop\Soap\StructType\InkAnnotationFields
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !is_numeric($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($width)), __LINE__);
        }
        $this->Width = $width;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\InkAnnotationFields
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
