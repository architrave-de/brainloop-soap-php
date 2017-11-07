<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceProperty ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfServiceProperty
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfServiceProperty extends AbstractStructArrayBase
{
    /**
     * The ServiceProperty
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ServiceProperty[]
     */
    public $ServiceProperty;
    /**
     * Constructor method for ArrayOfServiceProperty
     * @uses ArrayOfServiceProperty::setServiceProperty()
     * @param \Brainloop\Soap\StructType\ServiceProperty[] $serviceProperty
     */
    public function __construct(array $serviceProperty = array())
    {
        $this
            ->setServiceProperty($serviceProperty);
    }
    /**
     * Get ServiceProperty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ServiceProperty[]|null
     */
    public function getServiceProperty()
    {
        return isset($this->ServiceProperty) ? $this->ServiceProperty : null;
    }
    /**
     * Set ServiceProperty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\ServiceProperty[] $serviceProperty
     * @return \Brainloop\Soap\ArrayType\ArrayOfServiceProperty
     */
    public function setServiceProperty(array $serviceProperty = array())
    {
        foreach ($serviceProperty as $arrayOfServicePropertyServicePropertyItem) {
            // validation for constraint: itemType
            if (!$arrayOfServicePropertyServicePropertyItem instanceof \Brainloop\Soap\StructType\ServiceProperty) {
                throw new \InvalidArgumentException(sprintf('The ServiceProperty property can only contain items of \Brainloop\Soap\StructType\ServiceProperty, "%s" given', is_object($arrayOfServicePropertyServicePropertyItem) ? get_class($arrayOfServicePropertyServicePropertyItem) : gettype($arrayOfServicePropertyServicePropertyItem)), __LINE__);
            }
        }
        if (is_null($serviceProperty) || (is_array($serviceProperty) && empty($serviceProperty))) {
            unset($this->ServiceProperty);
        } else {
            $this->ServiceProperty = $serviceProperty;
        }
        return $this;
    }
    /**
     * Add item to ServiceProperty value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\ServiceProperty $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfServiceProperty
     */
    public function addToServiceProperty(\Brainloop\Soap\StructType\ServiceProperty $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\ServiceProperty) {
            throw new \InvalidArgumentException(sprintf('The ServiceProperty property can only contain items of \Brainloop\Soap\StructType\ServiceProperty, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ServiceProperty[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\ServiceProperty|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\ServiceProperty|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\ServiceProperty|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\ServiceProperty|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\ServiceProperty|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ServiceProperty
     */
    public function getAttributeName()
    {
        return 'ServiceProperty';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfServiceProperty
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
