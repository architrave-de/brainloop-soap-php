<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnotationPoint StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AnnotationPoint
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class AnnotationPoint extends AbstractStructBase
{
    /**
     * The X
     * @var float
     */
    public $X;
    /**
     * The Y
     * @var float
     */
    public $Y;
    /**
     * Constructor method for AnnotationPoint
     * @uses AnnotationPoint::setX()
     * @uses AnnotationPoint::setY()
     * @param float $x
     * @param float $y
     */
    public function __construct($x = null, $y = null)
    {
        $this
            ->setX($x)
            ->setY($y);
    }
    /**
     * Get X value
     * @return float|null
     */
    public function getX()
    {
        return $this->X;
    }
    /**
     * Set X value
     * @param float $x
     * @return \Brainloop\Soap\StructType\AnnotationPoint
     */
    public function setX($x = null)
    {
        $this->X = $x;
        return $this;
    }
    /**
     * Get Y value
     * @return float|null
     */
    public function getY()
    {
        return $this->Y;
    }
    /**
     * Set Y value
     * @param float $y
     * @return \Brainloop\Soap\StructType\AnnotationPoint
     */
    public function setY($y = null)
    {
        $this->Y = $y;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\AnnotationPoint
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
