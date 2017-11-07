<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMailItem ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMailItem
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfMailItem extends AbstractStructArrayBase
{
    /**
     * The MailItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\MailItem[]
     */
    public $MailItem;
    /**
     * Constructor method for ArrayOfMailItem
     * @uses ArrayOfMailItem::setMailItem()
     * @param \Brainloop\Soap\StructType\MailItem[] $mailItem
     */
    public function __construct(array $mailItem = array())
    {
        $this
            ->setMailItem($mailItem);
    }
    /**
     * Get MailItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\MailItem[]|null
     */
    public function getMailItem()
    {
        return isset($this->MailItem) ? $this->MailItem : null;
    }
    /**
     * Set MailItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\MailItem[] $mailItem
     * @return \Brainloop\Soap\ArrayType\ArrayOfMailItem
     */
    public function setMailItem(array $mailItem = array())
    {
        foreach ($mailItem as $arrayOfMailItemMailItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfMailItemMailItemItem instanceof \Brainloop\Soap\StructType\MailItem) {
                throw new \InvalidArgumentException(sprintf('The MailItem property can only contain items of \Brainloop\Soap\StructType\MailItem, "%s" given', is_object($arrayOfMailItemMailItemItem) ? get_class($arrayOfMailItemMailItemItem) : gettype($arrayOfMailItemMailItemItem)), __LINE__);
            }
        }
        if (is_null($mailItem) || (is_array($mailItem) && empty($mailItem))) {
            unset($this->MailItem);
        } else {
            $this->MailItem = $mailItem;
        }
        return $this;
    }
    /**
     * Add item to MailItem value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\MailItem $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfMailItem
     */
    public function addToMailItem(\Brainloop\Soap\StructType\MailItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\MailItem) {
            throw new \InvalidArgumentException(sprintf('The MailItem property can only contain items of \Brainloop\Soap\StructType\MailItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MailItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\MailItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\MailItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\MailItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\MailItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\MailItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MailItem
     */
    public function getAttributeName()
    {
        return 'MailItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfMailItem
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
