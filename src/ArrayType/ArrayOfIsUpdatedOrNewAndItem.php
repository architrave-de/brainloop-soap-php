<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfIsUpdatedOrNewAndItem ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfIsUpdatedOrNewAndItem
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfIsUpdatedOrNewAndItem extends AbstractStructArrayBase
{
    /**
     * The IsUpdatedOrNewAndItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\IsUpdatedOrNewAndItem[]
     */
    public $IsUpdatedOrNewAndItem;
    /**
     * Constructor method for ArrayOfIsUpdatedOrNewAndItem
     * @uses ArrayOfIsUpdatedOrNewAndItem::setIsUpdatedOrNewAndItem()
     * @param \Brainloop\Soap\StructType\IsUpdatedOrNewAndItem[] $isUpdatedOrNewAndItem
     */
    public function __construct(array $isUpdatedOrNewAndItem = array())
    {
        $this
            ->setIsUpdatedOrNewAndItem($isUpdatedOrNewAndItem);
    }
    /**
     * Get IsUpdatedOrNewAndItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\IsUpdatedOrNewAndItem[]|null
     */
    public function getIsUpdatedOrNewAndItem()
    {
        return isset($this->IsUpdatedOrNewAndItem) ? $this->IsUpdatedOrNewAndItem : null;
    }
    /**
     * Set IsUpdatedOrNewAndItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\IsUpdatedOrNewAndItem[] $isUpdatedOrNewAndItem
     * @return \Brainloop\Soap\ArrayType\ArrayOfIsUpdatedOrNewAndItem
     */
    public function setIsUpdatedOrNewAndItem(array $isUpdatedOrNewAndItem = array())
    {
        foreach ($isUpdatedOrNewAndItem as $arrayOfIsUpdatedOrNewAndItemIsUpdatedOrNewAndItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfIsUpdatedOrNewAndItemIsUpdatedOrNewAndItemItem instanceof \Brainloop\Soap\StructType\IsUpdatedOrNewAndItem) {
                throw new \InvalidArgumentException(sprintf('The IsUpdatedOrNewAndItem property can only contain items of \Brainloop\Soap\StructType\IsUpdatedOrNewAndItem, "%s" given', is_object($arrayOfIsUpdatedOrNewAndItemIsUpdatedOrNewAndItemItem) ? get_class($arrayOfIsUpdatedOrNewAndItemIsUpdatedOrNewAndItemItem) : gettype($arrayOfIsUpdatedOrNewAndItemIsUpdatedOrNewAndItemItem)), __LINE__);
            }
        }
        if (is_null($isUpdatedOrNewAndItem) || (is_array($isUpdatedOrNewAndItem) && empty($isUpdatedOrNewAndItem))) {
            unset($this->IsUpdatedOrNewAndItem);
        } else {
            $this->IsUpdatedOrNewAndItem = $isUpdatedOrNewAndItem;
        }
        return $this;
    }
    /**
     * Add item to IsUpdatedOrNewAndItem value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\IsUpdatedOrNewAndItem $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfIsUpdatedOrNewAndItem
     */
    public function addToIsUpdatedOrNewAndItem(\Brainloop\Soap\StructType\IsUpdatedOrNewAndItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\IsUpdatedOrNewAndItem) {
            throw new \InvalidArgumentException(sprintf('The IsUpdatedOrNewAndItem property can only contain items of \Brainloop\Soap\StructType\IsUpdatedOrNewAndItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->IsUpdatedOrNewAndItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\IsUpdatedOrNewAndItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\IsUpdatedOrNewAndItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\IsUpdatedOrNewAndItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\IsUpdatedOrNewAndItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\IsUpdatedOrNewAndItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string IsUpdatedOrNewAndItem
     */
    public function getAttributeName()
    {
        return 'IsUpdatedOrNewAndItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfIsUpdatedOrNewAndItem
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
