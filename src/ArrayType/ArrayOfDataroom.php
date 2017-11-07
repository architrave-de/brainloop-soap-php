<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDataroom ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDataroom
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfDataroom extends AbstractStructArrayBase
{
    /**
     * The Dataroom
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Dataroom[]
     */
    public $Dataroom;
    /**
     * Constructor method for ArrayOfDataroom
     * @uses ArrayOfDataroom::setDataroom()
     * @param \Brainloop\Soap\StructType\Dataroom[] $dataroom
     */
    public function __construct(array $dataroom = array())
    {
        $this
            ->setDataroom($dataroom);
    }
    /**
     * Get Dataroom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Dataroom[]|null
     */
    public function getDataroom()
    {
        return isset($this->Dataroom) ? $this->Dataroom : null;
    }
    /**
     * Set Dataroom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\Dataroom[] $dataroom
     * @return \Brainloop\Soap\ArrayType\ArrayOfDataroom
     */
    public function setDataroom(array $dataroom = array())
    {
        foreach ($dataroom as $arrayOfDataroomDataroomItem) {
            // validation for constraint: itemType
            if (!$arrayOfDataroomDataroomItem instanceof \Brainloop\Soap\StructType\Dataroom) {
                throw new \InvalidArgumentException(sprintf('The Dataroom property can only contain items of \Brainloop\Soap\StructType\Dataroom, "%s" given', is_object($arrayOfDataroomDataroomItem) ? get_class($arrayOfDataroomDataroomItem) : gettype($arrayOfDataroomDataroomItem)), __LINE__);
            }
        }
        if (is_null($dataroom) || (is_array($dataroom) && empty($dataroom))) {
            unset($this->Dataroom);
        } else {
            $this->Dataroom = $dataroom;
        }
        return $this;
    }
    /**
     * Add item to Dataroom value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\Dataroom $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfDataroom
     */
    public function addToDataroom(\Brainloop\Soap\StructType\Dataroom $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\Dataroom) {
            throw new \InvalidArgumentException(sprintf('The Dataroom property can only contain items of \Brainloop\Soap\StructType\Dataroom, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Dataroom[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\Dataroom|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\Dataroom|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\Dataroom|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\Dataroom|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\Dataroom|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Dataroom
     */
    public function getAttributeName()
    {
        return 'Dataroom';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfDataroom
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
