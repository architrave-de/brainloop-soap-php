<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPropertyAndValue ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPropertyAndValue
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfPropertyAndValue extends AbstractStructArrayBase
{
    /**
     * The PropertyAndValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\PropertyAndValue[]
     */
    public $PropertyAndValue;
    /**
     * Constructor method for ArrayOfPropertyAndValue
     * @uses ArrayOfPropertyAndValue::setPropertyAndValue()
     * @param \Brainloop\Soap\StructType\PropertyAndValue[] $propertyAndValue
     */
    public function __construct(array $propertyAndValue = array())
    {
        $this
            ->setPropertyAndValue($propertyAndValue);
    }
    /**
     * Get PropertyAndValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\PropertyAndValue[]|null
     */
    public function getPropertyAndValue()
    {
        return isset($this->PropertyAndValue) ? $this->PropertyAndValue : null;
    }
    /**
     * Set PropertyAndValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\PropertyAndValue[] $propertyAndValue
     * @return \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue
     */
    public function setPropertyAndValue(array $propertyAndValue = array())
    {
        foreach ($propertyAndValue as $arrayOfPropertyAndValuePropertyAndValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfPropertyAndValuePropertyAndValueItem instanceof \Brainloop\Soap\StructType\PropertyAndValue) {
                throw new \InvalidArgumentException(sprintf('The PropertyAndValue property can only contain items of \Brainloop\Soap\StructType\PropertyAndValue, "%s" given', is_object($arrayOfPropertyAndValuePropertyAndValueItem) ? get_class($arrayOfPropertyAndValuePropertyAndValueItem) : gettype($arrayOfPropertyAndValuePropertyAndValueItem)), __LINE__);
            }
        }
        if (is_null($propertyAndValue) || (is_array($propertyAndValue) && empty($propertyAndValue))) {
            unset($this->PropertyAndValue);
        } else {
            $this->PropertyAndValue = $propertyAndValue;
        }
        return $this;
    }
    /**
     * Add item to PropertyAndValue value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\PropertyAndValue $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue
     */
    public function addToPropertyAndValue(\Brainloop\Soap\StructType\PropertyAndValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\PropertyAndValue) {
            throw new \InvalidArgumentException(sprintf('The PropertyAndValue property can only contain items of \Brainloop\Soap\StructType\PropertyAndValue, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PropertyAndValue[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\PropertyAndValue|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\PropertyAndValue|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\PropertyAndValue|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\PropertyAndValue|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\PropertyAndValue|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PropertyAndValue
     */
    public function getAttributeName()
    {
        return 'PropertyAndValue';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue
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
