<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfArrayOfAnnotationPoint ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfArrayOfAnnotationPoint
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfArrayOfAnnotationPoint extends AbstractStructArrayBase
{
    /**
     * The ArrayOfAnnotationPoint
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint[]
     */
    public $ArrayOfAnnotationPoint;
    /**
     * Constructor method for ArrayOfArrayOfAnnotationPoint
     * @uses ArrayOfArrayOfAnnotationPoint::setArrayOfAnnotationPoint()
     * @param \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint[] $arrayOfAnnotationPoint
     */
    public function __construct(array $arrayOfAnnotationPoint = array())
    {
        $this
            ->setArrayOfAnnotationPoint($arrayOfAnnotationPoint);
    }
    /**
     * Get ArrayOfAnnotationPoint value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint[]|null
     */
    public function getArrayOfAnnotationPoint()
    {
        return isset($this->ArrayOfAnnotationPoint) ? $this->ArrayOfAnnotationPoint : null;
    }
    /**
     * Set ArrayOfAnnotationPoint value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint[] $arrayOfAnnotationPoint
     * @return \Brainloop\Soap\ArrayType\ArrayOfArrayOfAnnotationPoint
     */
    public function setArrayOfAnnotationPoint(array $arrayOfAnnotationPoint = array())
    {
        foreach ($arrayOfAnnotationPoint as $arrayOfArrayOfAnnotationPointArrayOfAnnotationPointItem) {
            // validation for constraint: itemType
            if (!$arrayOfArrayOfAnnotationPointArrayOfAnnotationPointItem instanceof \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint) {
                throw new \InvalidArgumentException(sprintf('The ArrayOfAnnotationPoint property can only contain items of \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint, "%s" given', is_object($arrayOfArrayOfAnnotationPointArrayOfAnnotationPointItem) ? get_class($arrayOfArrayOfAnnotationPointArrayOfAnnotationPointItem) : gettype($arrayOfArrayOfAnnotationPointArrayOfAnnotationPointItem)), __LINE__);
            }
        }
        if (is_null($arrayOfAnnotationPoint) || (is_array($arrayOfAnnotationPoint) && empty($arrayOfAnnotationPoint))) {
            unset($this->ArrayOfAnnotationPoint);
        } else {
            $this->ArrayOfAnnotationPoint = $arrayOfAnnotationPoint;
        }
        return $this;
    }
    /**
     * Add item to ArrayOfAnnotationPoint value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfArrayOfAnnotationPoint
     */
    public function addToArrayOfAnnotationPoint(\Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint) {
            throw new \InvalidArgumentException(sprintf('The ArrayOfAnnotationPoint property can only contain items of \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ArrayOfAnnotationPoint[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationPoint|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ArrayOfAnnotationPoint
     */
    public function getAttributeName()
    {
        return 'ArrayOfAnnotationPoint';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfArrayOfAnnotationPoint
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
