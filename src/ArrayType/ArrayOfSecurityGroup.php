<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSecurityGroup ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSecurityGroup
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfSecurityGroup extends AbstractStructArrayBase
{
    /**
     * The SecurityGroup
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\SecurityGroup[]
     */
    public $SecurityGroup;
    /**
     * Constructor method for ArrayOfSecurityGroup
     * @uses ArrayOfSecurityGroup::setSecurityGroup()
     * @param \Brainloop\Soap\StructType\SecurityGroup[] $securityGroup
     */
    public function __construct(array $securityGroup = array())
    {
        $this
            ->setSecurityGroup($securityGroup);
    }
    /**
     * Get SecurityGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\SecurityGroup[]|null
     */
    public function getSecurityGroup()
    {
        return isset($this->SecurityGroup) ? $this->SecurityGroup : null;
    }
    /**
     * Set SecurityGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\SecurityGroup[] $securityGroup
     * @return \Brainloop\Soap\ArrayType\ArrayOfSecurityGroup
     */
    public function setSecurityGroup(array $securityGroup = array())
    {
        foreach ($securityGroup as $arrayOfSecurityGroupSecurityGroupItem) {
            // validation for constraint: itemType
            if (!$arrayOfSecurityGroupSecurityGroupItem instanceof \Brainloop\Soap\StructType\SecurityGroup) {
                throw new \InvalidArgumentException(sprintf('The SecurityGroup property can only contain items of \Brainloop\Soap\StructType\SecurityGroup, "%s" given', is_object($arrayOfSecurityGroupSecurityGroupItem) ? get_class($arrayOfSecurityGroupSecurityGroupItem) : gettype($arrayOfSecurityGroupSecurityGroupItem)), __LINE__);
            }
        }
        if (is_null($securityGroup) || (is_array($securityGroup) && empty($securityGroup))) {
            unset($this->SecurityGroup);
        } else {
            $this->SecurityGroup = $securityGroup;
        }
        return $this;
    }
    /**
     * Add item to SecurityGroup value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\SecurityGroup $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfSecurityGroup
     */
    public function addToSecurityGroup(\Brainloop\Soap\StructType\SecurityGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\SecurityGroup) {
            throw new \InvalidArgumentException(sprintf('The SecurityGroup property can only contain items of \Brainloop\Soap\StructType\SecurityGroup, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SecurityGroup[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\SecurityGroup|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\SecurityGroup|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\SecurityGroup|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\SecurityGroup|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\SecurityGroup|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SecurityGroup
     */
    public function getAttributeName()
    {
        return 'SecurityGroup';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfSecurityGroup
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
