<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCreateEventAttachmentParameter ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCreateEventAttachmentParameter
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfCreateEventAttachmentParameter extends AbstractStructArrayBase
{
    /**
     * The CreateEventAttachmentParameter
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\CreateEventAttachmentParameter[]
     */
    public $CreateEventAttachmentParameter;
    /**
     * Constructor method for ArrayOfCreateEventAttachmentParameter
     * @uses ArrayOfCreateEventAttachmentParameter::setCreateEventAttachmentParameter()
     * @param \Brainloop\Soap\StructType\CreateEventAttachmentParameter[] $createEventAttachmentParameter
     */
    public function __construct(array $createEventAttachmentParameter = array())
    {
        $this
            ->setCreateEventAttachmentParameter($createEventAttachmentParameter);
    }
    /**
     * Get CreateEventAttachmentParameter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\CreateEventAttachmentParameter[]|null
     */
    public function getCreateEventAttachmentParameter()
    {
        return isset($this->CreateEventAttachmentParameter) ? $this->CreateEventAttachmentParameter : null;
    }
    /**
     * Set CreateEventAttachmentParameter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\CreateEventAttachmentParameter[] $createEventAttachmentParameter
     * @return \Brainloop\Soap\ArrayType\ArrayOfCreateEventAttachmentParameter
     */
    public function setCreateEventAttachmentParameter(array $createEventAttachmentParameter = array())
    {
        foreach ($createEventAttachmentParameter as $arrayOfCreateEventAttachmentParameterCreateEventAttachmentParameterItem) {
            // validation for constraint: itemType
            if (!$arrayOfCreateEventAttachmentParameterCreateEventAttachmentParameterItem instanceof \Brainloop\Soap\StructType\CreateEventAttachmentParameter) {
                throw new \InvalidArgumentException(sprintf('The CreateEventAttachmentParameter property can only contain items of \Brainloop\Soap\StructType\CreateEventAttachmentParameter, "%s" given', is_object($arrayOfCreateEventAttachmentParameterCreateEventAttachmentParameterItem) ? get_class($arrayOfCreateEventAttachmentParameterCreateEventAttachmentParameterItem) : gettype($arrayOfCreateEventAttachmentParameterCreateEventAttachmentParameterItem)), __LINE__);
            }
        }
        if (is_null($createEventAttachmentParameter) || (is_array($createEventAttachmentParameter) && empty($createEventAttachmentParameter))) {
            unset($this->CreateEventAttachmentParameter);
        } else {
            $this->CreateEventAttachmentParameter = $createEventAttachmentParameter;
        }
        return $this;
    }
    /**
     * Add item to CreateEventAttachmentParameter value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\CreateEventAttachmentParameter $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfCreateEventAttachmentParameter
     */
    public function addToCreateEventAttachmentParameter(\Brainloop\Soap\StructType\CreateEventAttachmentParameter $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\CreateEventAttachmentParameter) {
            throw new \InvalidArgumentException(sprintf('The CreateEventAttachmentParameter property can only contain items of \Brainloop\Soap\StructType\CreateEventAttachmentParameter, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CreateEventAttachmentParameter[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\CreateEventAttachmentParameter|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\CreateEventAttachmentParameter|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\CreateEventAttachmentParameter|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\CreateEventAttachmentParameter|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\CreateEventAttachmentParameter|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CreateEventAttachmentParameter
     */
    public function getAttributeName()
    {
        return 'CreateEventAttachmentParameter';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfCreateEventAttachmentParameter
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
