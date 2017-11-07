<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfItemType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfItemType
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfItemType extends AbstractStructArrayBase
{
    /**
     * The ItemType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ItemType;
    /**
     * Constructor method for ArrayOfItemType
     * @uses ArrayOfItemType::setItemType()
     * @param string[] $itemType
     */
    public function __construct(array $itemType = array())
    {
        $this
            ->setItemType($itemType);
    }
    /**
     * Get ItemType value
     * @return string[]|null
     */
    public function getItemType()
    {
        return $this->ItemType;
    }
    /**
     * Set ItemType value
     * @uses \Brainloop\Soap\EnumType\ItemType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $itemType
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemType
     */
    public function setItemType(array $itemType = array())
    {
        $invalidValues = array();
        foreach ($itemType as $arrayOfItemTypeItemTypeItem) {
            if (!\Brainloop\Soap\EnumType\ItemType::valueIsValid($arrayOfItemTypeItemTypeItem)) {
                $invalidValues[] = var_export($arrayOfItemTypeItemTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Brainloop\Soap\EnumType\ItemType::getValidValues())), __LINE__);
        }
        $this->ItemType = $itemType;
        return $this;
    }
    /**
     * Add item to ItemType value
     * @uses \Brainloop\Soap\EnumType\ItemType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemType
     */
    public function addToItemType($item)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ItemType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Brainloop\Soap\EnumType\ItemType::getValidValues())), __LINE__);
        }
        $this->ItemType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \Brainloop\Soap\EnumType\ItemType::valueIsValid()
     * @param string $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemType
     */
    public function add($item)
    {
        if (!\Brainloop\Soap\EnumType\ItemType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Brainloop\Soap\EnumType\ItemType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemType
     */
    public function getAttributeName()
    {
        return 'ItemType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemType
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
