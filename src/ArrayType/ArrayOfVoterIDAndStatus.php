<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfVoterIDAndStatus ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfVoterIDAndStatus
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfVoterIDAndStatus extends AbstractStructArrayBase
{
    /**
     * The VoterIDAndStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\VoterIDAndStatus[]
     */
    public $VoterIDAndStatus;
    /**
     * Constructor method for ArrayOfVoterIDAndStatus
     * @uses ArrayOfVoterIDAndStatus::setVoterIDAndStatus()
     * @param \Brainloop\Soap\StructType\VoterIDAndStatus[] $voterIDAndStatus
     */
    public function __construct(array $voterIDAndStatus = array())
    {
        $this
            ->setVoterIDAndStatus($voterIDAndStatus);
    }
    /**
     * Get VoterIDAndStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\VoterIDAndStatus[]|null
     */
    public function getVoterIDAndStatus()
    {
        return isset($this->VoterIDAndStatus) ? $this->VoterIDAndStatus : null;
    }
    /**
     * Set VoterIDAndStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\VoterIDAndStatus[] $voterIDAndStatus
     * @return \Brainloop\Soap\ArrayType\ArrayOfVoterIDAndStatus
     */
    public function setVoterIDAndStatus(array $voterIDAndStatus = array())
    {
        foreach ($voterIDAndStatus as $arrayOfVoterIDAndStatusVoterIDAndStatusItem) {
            // validation for constraint: itemType
            if (!$arrayOfVoterIDAndStatusVoterIDAndStatusItem instanceof \Brainloop\Soap\StructType\VoterIDAndStatus) {
                throw new \InvalidArgumentException(sprintf('The VoterIDAndStatus property can only contain items of \Brainloop\Soap\StructType\VoterIDAndStatus, "%s" given', is_object($arrayOfVoterIDAndStatusVoterIDAndStatusItem) ? get_class($arrayOfVoterIDAndStatusVoterIDAndStatusItem) : gettype($arrayOfVoterIDAndStatusVoterIDAndStatusItem)), __LINE__);
            }
        }
        if (is_null($voterIDAndStatus) || (is_array($voterIDAndStatus) && empty($voterIDAndStatus))) {
            unset($this->VoterIDAndStatus);
        } else {
            $this->VoterIDAndStatus = $voterIDAndStatus;
        }
        return $this;
    }
    /**
     * Add item to VoterIDAndStatus value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\VoterIDAndStatus $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfVoterIDAndStatus
     */
    public function addToVoterIDAndStatus(\Brainloop\Soap\StructType\VoterIDAndStatus $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\VoterIDAndStatus) {
            throw new \InvalidArgumentException(sprintf('The VoterIDAndStatus property can only contain items of \Brainloop\Soap\StructType\VoterIDAndStatus, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VoterIDAndStatus[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\VoterIDAndStatus|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\VoterIDAndStatus|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\VoterIDAndStatus|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\VoterIDAndStatus|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\VoterIDAndStatus|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string VoterIDAndStatus
     */
    public function getAttributeName()
    {
        return 'VoterIDAndStatus';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfVoterIDAndStatus
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
