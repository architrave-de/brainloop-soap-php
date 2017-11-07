<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnotationRegion StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AnnotationRegion
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class AnnotationRegion extends AbstractStructBase
{
    /**
     * The x1
     * @var float
     */
    public $x1;
    /**
     * The x2
     * @var float
     */
    public $x2;
    /**
     * The x3
     * @var float
     */
    public $x3;
    /**
     * The x4
     * @var float
     */
    public $x4;
    /**
     * The y1
     * @var float
     */
    public $y1;
    /**
     * The y2
     * @var float
     */
    public $y2;
    /**
     * The y3
     * @var float
     */
    public $y3;
    /**
     * The y4
     * @var float
     */
    public $y4;
    /**
     * Constructor method for AnnotationRegion
     * @uses AnnotationRegion::setX1()
     * @uses AnnotationRegion::setX2()
     * @uses AnnotationRegion::setX3()
     * @uses AnnotationRegion::setX4()
     * @uses AnnotationRegion::setY1()
     * @uses AnnotationRegion::setY2()
     * @uses AnnotationRegion::setY3()
     * @uses AnnotationRegion::setY4()
     * @param float $x1
     * @param float $x2
     * @param float $x3
     * @param float $x4
     * @param float $y1
     * @param float $y2
     * @param float $y3
     * @param float $y4
     */
    public function __construct($x1 = null, $x2 = null, $x3 = null, $x4 = null, $y1 = null, $y2 = null, $y3 = null, $y4 = null)
    {
        $this
            ->setX1($x1)
            ->setX2($x2)
            ->setX3($x3)
            ->setX4($x4)
            ->setY1($y1)
            ->setY2($y2)
            ->setY3($y3)
            ->setY4($y4);
    }
    /**
     * Get x1 value
     * @return float|null
     */
    public function getX1()
    {
        return $this->x1;
    }
    /**
     * Set x1 value
     * @param float $x1
     * @return \Brainloop\Soap\StructType\AnnotationRegion
     */
    public function setX1($x1 = null)
    {
        $this->x1 = $x1;
        return $this;
    }
    /**
     * Get x2 value
     * @return float|null
     */
    public function getX2()
    {
        return $this->x2;
    }
    /**
     * Set x2 value
     * @param float $x2
     * @return \Brainloop\Soap\StructType\AnnotationRegion
     */
    public function setX2($x2 = null)
    {
        $this->x2 = $x2;
        return $this;
    }
    /**
     * Get x3 value
     * @return float|null
     */
    public function getX3()
    {
        return $this->x3;
    }
    /**
     * Set x3 value
     * @param float $x3
     * @return \Brainloop\Soap\StructType\AnnotationRegion
     */
    public function setX3($x3 = null)
    {
        $this->x3 = $x3;
        return $this;
    }
    /**
     * Get x4 value
     * @return float|null
     */
    public function getX4()
    {
        return $this->x4;
    }
    /**
     * Set x4 value
     * @param float $x4
     * @return \Brainloop\Soap\StructType\AnnotationRegion
     */
    public function setX4($x4 = null)
    {
        $this->x4 = $x4;
        return $this;
    }
    /**
     * Get y1 value
     * @return float|null
     */
    public function getY1()
    {
        return $this->y1;
    }
    /**
     * Set y1 value
     * @param float $y1
     * @return \Brainloop\Soap\StructType\AnnotationRegion
     */
    public function setY1($y1 = null)
    {
        $this->y1 = $y1;
        return $this;
    }
    /**
     * Get y2 value
     * @return float|null
     */
    public function getY2()
    {
        return $this->y2;
    }
    /**
     * Set y2 value
     * @param float $y2
     * @return \Brainloop\Soap\StructType\AnnotationRegion
     */
    public function setY2($y2 = null)
    {
        $this->y2 = $y2;
        return $this;
    }
    /**
     * Get y3 value
     * @return float|null
     */
    public function getY3()
    {
        return $this->y3;
    }
    /**
     * Set y3 value
     * @param float $y3
     * @return \Brainloop\Soap\StructType\AnnotationRegion
     */
    public function setY3($y3 = null)
    {
        $this->y3 = $y3;
        return $this;
    }
    /**
     * Get y4 value
     * @return float|null
     */
    public function getY4()
    {
        return $this->y4;
    }
    /**
     * Set y4 value
     * @param float $y4
     * @return \Brainloop\Soap\StructType\AnnotationRegion
     */
    public function setY4($y4 = null)
    {
        $this->y4 = $y4;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\AnnotationRegion
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
