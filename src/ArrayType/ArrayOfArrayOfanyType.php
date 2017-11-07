<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfArrayOfanyType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfArrayOfanyType
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfArrayOfanyType extends AbstractStructArrayBase
{
    /**
     * The ArrayOfanyType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfanyType[]
     */
    public $ArrayOfanyType;
    /**
     * Constructor method for ArrayOfArrayOfanyType
     * @uses ArrayOfArrayOfanyType::setArrayOfanyType()
     * @param \Brainloop\Soap\ArrayType\ArrayOfanyType[] $arrayOfanyType
     */
    public function __construct(array $arrayOfanyType = array())
    {
        $this
            ->setArrayOfanyType($arrayOfanyType);
    }
    /**
     * Get ArrayOfanyType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfanyType[]|null
     */
    public function getArrayOfanyType()
    {
        return isset($this->ArrayOfanyType) ? $this->ArrayOfanyType : null;
    }
    /**
     * Set ArrayOfanyType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\ArrayType\ArrayOfanyType[] $arrayOfanyType
     * @return \Brainloop\Soap\ArrayType\ArrayOfArrayOfanyType
     */
    public function setArrayOfanyType(array $arrayOfanyType = array())
    {
        foreach ($arrayOfanyType as $arrayOfArrayOfanyTypeArrayOfanyTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfArrayOfanyTypeArrayOfanyTypeItem instanceof \Brainloop\Soap\ArrayType\ArrayOfanyType) {
                throw new \InvalidArgumentException(sprintf('The ArrayOfanyType property can only contain items of \Brainloop\Soap\ArrayType\ArrayOfanyType, "%s" given', is_object($arrayOfArrayOfanyTypeArrayOfanyTypeItem) ? get_class($arrayOfArrayOfanyTypeArrayOfanyTypeItem) : gettype($arrayOfArrayOfanyTypeArrayOfanyTypeItem)), __LINE__);
            }
        }
        if (is_null($arrayOfanyType) || (is_array($arrayOfanyType) && empty($arrayOfanyType))) {
            unset($this->ArrayOfanyType);
        } else {
            $this->ArrayOfanyType = $arrayOfanyType;
        }
        return $this;
    }
    /**
     * Add item to ArrayOfanyType value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\ArrayType\ArrayOfanyType $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfArrayOfanyType
     */
    public function addToArrayOfanyType(\Brainloop\Soap\ArrayType\ArrayOfanyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\ArrayType\ArrayOfanyType) {
            throw new \InvalidArgumentException(sprintf('The ArrayOfanyType property can only contain items of \Brainloop\Soap\ArrayType\ArrayOfanyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ArrayOfanyType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\ArrayType\ArrayOfanyType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\ArrayType\ArrayOfanyType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\ArrayType\ArrayOfanyType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\ArrayType\ArrayOfanyType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\ArrayType\ArrayOfanyType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ArrayOfanyType
     */
    public function getAttributeName()
    {
        return 'ArrayOfanyType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfArrayOfanyType
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
