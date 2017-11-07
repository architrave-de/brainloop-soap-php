<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMailItemRecipientIDAndStatus ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMailItemRecipientIDAndStatus
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfMailItemRecipientIDAndStatus extends AbstractStructArrayBase
{
    /**
     * The MailItemRecipientIDAndStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\MailItemRecipientIDAndStatus[]
     */
    public $MailItemRecipientIDAndStatus;
    /**
     * Constructor method for ArrayOfMailItemRecipientIDAndStatus
     * @uses ArrayOfMailItemRecipientIDAndStatus::setMailItemRecipientIDAndStatus()
     * @param \Brainloop\Soap\StructType\MailItemRecipientIDAndStatus[] $mailItemRecipientIDAndStatus
     */
    public function __construct(array $mailItemRecipientIDAndStatus = array())
    {
        $this
            ->setMailItemRecipientIDAndStatus($mailItemRecipientIDAndStatus);
    }
    /**
     * Get MailItemRecipientIDAndStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\MailItemRecipientIDAndStatus[]|null
     */
    public function getMailItemRecipientIDAndStatus()
    {
        return isset($this->MailItemRecipientIDAndStatus) ? $this->MailItemRecipientIDAndStatus : null;
    }
    /**
     * Set MailItemRecipientIDAndStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\MailItemRecipientIDAndStatus[] $mailItemRecipientIDAndStatus
     * @return \Brainloop\Soap\ArrayType\ArrayOfMailItemRecipientIDAndStatus
     */
    public function setMailItemRecipientIDAndStatus(array $mailItemRecipientIDAndStatus = array())
    {
        foreach ($mailItemRecipientIDAndStatus as $arrayOfMailItemRecipientIDAndStatusMailItemRecipientIDAndStatusItem) {
            // validation for constraint: itemType
            if (!$arrayOfMailItemRecipientIDAndStatusMailItemRecipientIDAndStatusItem instanceof \Brainloop\Soap\StructType\MailItemRecipientIDAndStatus) {
                throw new \InvalidArgumentException(sprintf('The MailItemRecipientIDAndStatus property can only contain items of \Brainloop\Soap\StructType\MailItemRecipientIDAndStatus, "%s" given', is_object($arrayOfMailItemRecipientIDAndStatusMailItemRecipientIDAndStatusItem) ? get_class($arrayOfMailItemRecipientIDAndStatusMailItemRecipientIDAndStatusItem) : gettype($arrayOfMailItemRecipientIDAndStatusMailItemRecipientIDAndStatusItem)), __LINE__);
            }
        }
        if (is_null($mailItemRecipientIDAndStatus) || (is_array($mailItemRecipientIDAndStatus) && empty($mailItemRecipientIDAndStatus))) {
            unset($this->MailItemRecipientIDAndStatus);
        } else {
            $this->MailItemRecipientIDAndStatus = $mailItemRecipientIDAndStatus;
        }
        return $this;
    }
    /**
     * Add item to MailItemRecipientIDAndStatus value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\MailItemRecipientIDAndStatus $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfMailItemRecipientIDAndStatus
     */
    public function addToMailItemRecipientIDAndStatus(\Brainloop\Soap\StructType\MailItemRecipientIDAndStatus $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\MailItemRecipientIDAndStatus) {
            throw new \InvalidArgumentException(sprintf('The MailItemRecipientIDAndStatus property can only contain items of \Brainloop\Soap\StructType\MailItemRecipientIDAndStatus, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MailItemRecipientIDAndStatus[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\MailItemRecipientIDAndStatus|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\MailItemRecipientIDAndStatus|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\MailItemRecipientIDAndStatus|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\MailItemRecipientIDAndStatus|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\MailItemRecipientIDAndStatus|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MailItemRecipientIDAndStatus
     */
    public function getAttributeName()
    {
        return 'MailItemRecipientIDAndStatus';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfMailItemRecipientIDAndStatus
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
