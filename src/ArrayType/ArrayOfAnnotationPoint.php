<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAnnotationPoint ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAnnotationPoint
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfAnnotationPoint extends AbstractStructArrayBase
{
    /**
     * The AnnotationPoint
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\AnnotationPoint[]
     */
    public $AnnotationPoint;
    /**
     * Constructor method for ArrayOfAnnotationPoint
     * @uses ArrayOfAnnotationPoint::setAnnotationPoint()
     * @param \Brainloop\Soap\StructType\AnnotationPoint[] $annotationPoint
     */
    public function __construct(array $annotationPoint = array())
    {
        $this
            ->setAnnotationPoint($annotationPoint);
    }
    /**
     * Get AnnotationPoint value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\AnnotationPoint[]|null
     */
    public function getAnnotationPoint()
    {
        return isset($this->AnnotationPoint) ? $this->AnnotationPoint : null;
    }
    /**
     * Set AnnotationPoint value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\AnnotationPoint[] $annotationPoint
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint
     */
    public function setAnnotationPoint(array $annotationPoint = array())
    {
        foreach ($annotationPoint as $arrayOfAnnotationPointAnnotationPointItem) {
            // validation for constraint: itemType
            if (!$arrayOfAnnotationPointAnnotationPointItem instanceof \Brainloop\Soap\StructType\AnnotationPoint) {
                throw new \InvalidArgumentException(sprintf('The AnnotationPoint property can only contain items of \Brainloop\Soap\StructType\AnnotationPoint, "%s" given', is_object($arrayOfAnnotationPointAnnotationPointItem) ? get_class($arrayOfAnnotationPointAnnotationPointItem) : gettype($arrayOfAnnotationPointAnnotationPointItem)), __LINE__);
            }
        }
        if (is_null($annotationPoint) || (is_array($annotationPoint) && empty($annotationPoint))) {
            unset($this->AnnotationPoint);
        } else {
            $this->AnnotationPoint = $annotationPoint;
        }
        return $this;
    }
    /**
     * Add item to AnnotationPoint value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\AnnotationPoint $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint
     */
    public function addToAnnotationPoint(\Brainloop\Soap\StructType\AnnotationPoint $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\AnnotationPoint) {
            throw new \InvalidArgumentException(sprintf('The AnnotationPoint property can only contain items of \Brainloop\Soap\StructType\AnnotationPoint, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AnnotationPoint[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\AnnotationPoint|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\AnnotationPoint|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\AnnotationPoint|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\AnnotationPoint|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\AnnotationPoint|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AnnotationPoint
     */
    public function getAttributeName()
    {
        return 'AnnotationPoint';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint
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
