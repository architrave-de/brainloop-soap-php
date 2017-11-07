<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnotationColor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AnnotationColor
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class AnnotationColor extends AbstractStructBase
{
    /**
     * The Alpha
     * @var float
     */
    public $Alpha;
    /**
     * The Blue
     * @var string
     */
    public $Blue;
    /**
     * The Green
     * @var string
     */
    public $Green;
    /**
     * The Red
     * @var string
     */
    public $Red;
    /**
     * Constructor method for AnnotationColor
     * @uses AnnotationColor::setAlpha()
     * @uses AnnotationColor::setBlue()
     * @uses AnnotationColor::setGreen()
     * @uses AnnotationColor::setRed()
     * @param float $alpha
     * @param string $blue
     * @param string $green
     * @param string $red
     */
    public function __construct($alpha = null, $blue = null, $green = null, $red = null)
    {
        $this
            ->setAlpha($alpha)
            ->setBlue($blue)
            ->setGreen($green)
            ->setRed($red);
    }
    /**
     * Get Alpha value
     * @return float|null
     */
    public function getAlpha()
    {
        return $this->Alpha;
    }
    /**
     * Set Alpha value
     * @param float $alpha
     * @return \Brainloop\Soap\StructType\AnnotationColor
     */
    public function setAlpha($alpha = null)
    {
        $this->Alpha = $alpha;
        return $this;
    }
    /**
     * Get Blue value
     * @return string|null
     */
    public function getBlue()
    {
        return $this->Blue;
    }
    /**
     * Set Blue value
     * @param string $blue
     * @return \Brainloop\Soap\StructType\AnnotationColor
     */
    public function setBlue($blue = null)
    {
        // validation for constraint: string
        if (!is_null($blue) && !is_string($blue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($blue)), __LINE__);
        }
        $this->Blue = $blue;
        return $this;
    }
    /**
     * Get Green value
     * @return string|null
     */
    public function getGreen()
    {
        return $this->Green;
    }
    /**
     * Set Green value
     * @param string $green
     * @return \Brainloop\Soap\StructType\AnnotationColor
     */
    public function setGreen($green = null)
    {
        // validation for constraint: string
        if (!is_null($green) && !is_string($green)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($green)), __LINE__);
        }
        $this->Green = $green;
        return $this;
    }
    /**
     * Get Red value
     * @return string|null
     */
    public function getRed()
    {
        return $this->Red;
    }
    /**
     * Set Red value
     * @param string $red
     * @return \Brainloop\Soap\StructType\AnnotationColor
     */
    public function setRed($red = null)
    {
        // validation for constraint: string
        if (!is_null($red) && !is_string($red)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($red)), __LINE__);
        }
        $this->Red = $red;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\AnnotationColor
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
