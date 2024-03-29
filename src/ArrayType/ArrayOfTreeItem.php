<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTreeItem ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTreeItem
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfTreeItem extends AbstractStructArrayBase
{
    /**
     * The TreeItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\TreeItem[]
     */
    public $TreeItem;
    /**
     * Constructor method for ArrayOfTreeItem
     * @uses ArrayOfTreeItem::setTreeItem()
     * @param \Brainloop\Soap\StructType\TreeItem[] $treeItem
     */
    public function __construct(array $treeItem = array())
    {
        $this
            ->setTreeItem($treeItem);
    }
    /**
     * Get TreeItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\TreeItem[]|null
     */
    public function getTreeItem()
    {
        return isset($this->TreeItem) ? $this->TreeItem : null;
    }
    /**
     * Set TreeItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\TreeItem[] $treeItem
     * @return \Brainloop\Soap\ArrayType\ArrayOfTreeItem
     */
    public function setTreeItem(array $treeItem = array())
    {
        foreach ($treeItem as $arrayOfTreeItemTreeItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfTreeItemTreeItemItem instanceof \Brainloop\Soap\StructType\TreeItem) {
                throw new \InvalidArgumentException(sprintf('The TreeItem property can only contain items of \Brainloop\Soap\StructType\TreeItem, "%s" given', is_object($arrayOfTreeItemTreeItemItem) ? get_class($arrayOfTreeItemTreeItemItem) : gettype($arrayOfTreeItemTreeItemItem)), __LINE__);
            }
        }
        if (is_null($treeItem) || (is_array($treeItem) && empty($treeItem))) {
            unset($this->TreeItem);
        } else {
            $this->TreeItem = $treeItem;
        }
        return $this;
    }
    /**
     * Add item to TreeItem value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\TreeItem $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfTreeItem
     */
    public function addToTreeItem(\Brainloop\Soap\StructType\TreeItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\TreeItem) {
            throw new \InvalidArgumentException(sprintf('The TreeItem property can only contain items of \Brainloop\Soap\StructType\TreeItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TreeItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\TreeItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\TreeItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\TreeItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\TreeItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\TreeItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TreeItem
     */
    public function getAttributeName()
    {
        return 'TreeItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfTreeItem
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
