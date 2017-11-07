<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQandA_Reply ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQandA_Reply
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfQandA_Reply extends AbstractStructArrayBase
{
    /**
     * The QandA_Reply
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\QandA_Reply[]
     */
    public $QandA_Reply;
    /**
     * Constructor method for ArrayOfQandA_Reply
     * @uses ArrayOfQandA_Reply::setQandA_Reply()
     * @param \Brainloop\Soap\StructType\QandA_Reply[] $qandA_Reply
     */
    public function __construct(array $qandA_Reply = array())
    {
        $this
            ->setQandA_Reply($qandA_Reply);
    }
    /**
     * Get QandA_Reply value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\QandA_Reply[]|null
     */
    public function getQandA_Reply()
    {
        return isset($this->QandA_Reply) ? $this->QandA_Reply : null;
    }
    /**
     * Set QandA_Reply value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\QandA_Reply[] $qandA_Reply
     * @return \Brainloop\Soap\ArrayType\ArrayOfQandA_Reply
     */
    public function setQandA_Reply(array $qandA_Reply = array())
    {
        foreach ($qandA_Reply as $arrayOfQandA_ReplyQandA_ReplyItem) {
            // validation for constraint: itemType
            if (!$arrayOfQandA_ReplyQandA_ReplyItem instanceof \Brainloop\Soap\StructType\QandA_Reply) {
                throw new \InvalidArgumentException(sprintf('The QandA_Reply property can only contain items of \Brainloop\Soap\StructType\QandA_Reply, "%s" given', is_object($arrayOfQandA_ReplyQandA_ReplyItem) ? get_class($arrayOfQandA_ReplyQandA_ReplyItem) : gettype($arrayOfQandA_ReplyQandA_ReplyItem)), __LINE__);
            }
        }
        if (is_null($qandA_Reply) || (is_array($qandA_Reply) && empty($qandA_Reply))) {
            unset($this->QandA_Reply);
        } else {
            $this->QandA_Reply = $qandA_Reply;
        }
        return $this;
    }
    /**
     * Add item to QandA_Reply value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\QandA_Reply $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfQandA_Reply
     */
    public function addToQandA_Reply(\Brainloop\Soap\StructType\QandA_Reply $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\QandA_Reply) {
            throw new \InvalidArgumentException(sprintf('The QandA_Reply property can only contain items of \Brainloop\Soap\StructType\QandA_Reply, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QandA_Reply[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\QandA_Reply|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\QandA_Reply|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\QandA_Reply|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\QandA_Reply|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\QandA_Reply|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QandA_Reply
     */
    public function getAttributeName()
    {
        return 'QandA_Reply';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfQandA_Reply
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
