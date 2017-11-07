<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBLItem ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBLItem
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfBLItem extends AbstractStructArrayBase
{
    /**
     * The BLItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\BLItem[]
     */
    public $BLItem;
    /**
     * Constructor method for ArrayOfBLItem
     * @uses ArrayOfBLItem::setBLItem()
     * @param \Brainloop\Soap\StructType\BLItem[] $bLItem
     */
    public function __construct(array $bLItem = array())
    {
        $this
            ->setBLItem($bLItem);
    }
    /**
     * Get BLItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\BLItem[]|null
     */
    public function getBLItem()
    {
        return isset($this->BLItem) ? $this->BLItem : null;
    }
    /**
     * Set BLItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\BLItem[] $bLItem
     * @return \Brainloop\Soap\ArrayType\ArrayOfBLItem
     */
    public function setBLItem(array $bLItem = array())
    {
        foreach ($bLItem as $arrayOfBLItemBLItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfBLItemBLItemItem instanceof \Brainloop\Soap\StructType\BLItem) {
                throw new \InvalidArgumentException(sprintf('The BLItem property can only contain items of \Brainloop\Soap\StructType\BLItem, "%s" given', is_object($arrayOfBLItemBLItemItem) ? get_class($arrayOfBLItemBLItemItem) : gettype($arrayOfBLItemBLItemItem)), __LINE__);
            }
        }
        if (is_null($bLItem) || (is_array($bLItem) && empty($bLItem))) {
            unset($this->BLItem);
        } else {
            $this->BLItem = $bLItem;
        }
        return $this;
    }
    /**
     * Add item to BLItem value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\BLItem $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfBLItem
     */
    public function addToBLItem(\Brainloop\Soap\StructType\BLItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\BLItem) {
            throw new \InvalidArgumentException(sprintf('The BLItem property can only contain items of \Brainloop\Soap\StructType\BLItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BLItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\BLItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\BLItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\BLItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\BLItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\BLItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BLItem
     */
    public function getAttributeName()
    {
        return 'BLItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfBLItem
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
