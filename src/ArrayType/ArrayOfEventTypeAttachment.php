<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEventTypeAttachment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEventTypeAttachment
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfEventTypeAttachment extends AbstractStructArrayBase
{
    /**
     * The EventTypeAttachment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\EventTypeAttachment[]
     */
    public $EventTypeAttachment;
    /**
     * Constructor method for ArrayOfEventTypeAttachment
     * @uses ArrayOfEventTypeAttachment::setEventTypeAttachment()
     * @param \Brainloop\Soap\StructType\EventTypeAttachment[] $eventTypeAttachment
     */
    public function __construct(array $eventTypeAttachment = array())
    {
        $this
            ->setEventTypeAttachment($eventTypeAttachment);
    }
    /**
     * Get EventTypeAttachment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\EventTypeAttachment[]|null
     */
    public function getEventTypeAttachment()
    {
        return isset($this->EventTypeAttachment) ? $this->EventTypeAttachment : null;
    }
    /**
     * Set EventTypeAttachment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\EventTypeAttachment[] $eventTypeAttachment
     * @return \Brainloop\Soap\ArrayType\ArrayOfEventTypeAttachment
     */
    public function setEventTypeAttachment(array $eventTypeAttachment = array())
    {
        foreach ($eventTypeAttachment as $arrayOfEventTypeAttachmentEventTypeAttachmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfEventTypeAttachmentEventTypeAttachmentItem instanceof \Brainloop\Soap\StructType\EventTypeAttachment) {
                throw new \InvalidArgumentException(sprintf('The EventTypeAttachment property can only contain items of \Brainloop\Soap\StructType\EventTypeAttachment, "%s" given', is_object($arrayOfEventTypeAttachmentEventTypeAttachmentItem) ? get_class($arrayOfEventTypeAttachmentEventTypeAttachmentItem) : gettype($arrayOfEventTypeAttachmentEventTypeAttachmentItem)), __LINE__);
            }
        }
        if (is_null($eventTypeAttachment) || (is_array($eventTypeAttachment) && empty($eventTypeAttachment))) {
            unset($this->EventTypeAttachment);
        } else {
            $this->EventTypeAttachment = $eventTypeAttachment;
        }
        return $this;
    }
    /**
     * Add item to EventTypeAttachment value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\EventTypeAttachment $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfEventTypeAttachment
     */
    public function addToEventTypeAttachment(\Brainloop\Soap\StructType\EventTypeAttachment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\EventTypeAttachment) {
            throw new \InvalidArgumentException(sprintf('The EventTypeAttachment property can only contain items of \Brainloop\Soap\StructType\EventTypeAttachment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EventTypeAttachment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\EventTypeAttachment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\EventTypeAttachment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\EventTypeAttachment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\EventTypeAttachment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\EventTypeAttachment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EventTypeAttachment
     */
    public function getAttributeName()
    {
        return 'EventTypeAttachment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfEventTypeAttachment
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
