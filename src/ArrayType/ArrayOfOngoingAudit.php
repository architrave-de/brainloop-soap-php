<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOngoingAudit ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOngoingAudit
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfOngoingAudit extends AbstractStructArrayBase
{
    /**
     * The OngoingAudit
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\OngoingAudit[]
     */
    public $OngoingAudit;
    /**
     * Constructor method for ArrayOfOngoingAudit
     * @uses ArrayOfOngoingAudit::setOngoingAudit()
     * @param \Brainloop\Soap\StructType\OngoingAudit[] $ongoingAudit
     */
    public function __construct(array $ongoingAudit = array())
    {
        $this
            ->setOngoingAudit($ongoingAudit);
    }
    /**
     * Get OngoingAudit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\OngoingAudit[]|null
     */
    public function getOngoingAudit()
    {
        return isset($this->OngoingAudit) ? $this->OngoingAudit : null;
    }
    /**
     * Set OngoingAudit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\OngoingAudit[] $ongoingAudit
     * @return \Brainloop\Soap\ArrayType\ArrayOfOngoingAudit
     */
    public function setOngoingAudit(array $ongoingAudit = array())
    {
        foreach ($ongoingAudit as $arrayOfOngoingAuditOngoingAuditItem) {
            // validation for constraint: itemType
            if (!$arrayOfOngoingAuditOngoingAuditItem instanceof \Brainloop\Soap\StructType\OngoingAudit) {
                throw new \InvalidArgumentException(sprintf('The OngoingAudit property can only contain items of \Brainloop\Soap\StructType\OngoingAudit, "%s" given', is_object($arrayOfOngoingAuditOngoingAuditItem) ? get_class($arrayOfOngoingAuditOngoingAuditItem) : gettype($arrayOfOngoingAuditOngoingAuditItem)), __LINE__);
            }
        }
        if (is_null($ongoingAudit) || (is_array($ongoingAudit) && empty($ongoingAudit))) {
            unset($this->OngoingAudit);
        } else {
            $this->OngoingAudit = $ongoingAudit;
        }
        return $this;
    }
    /**
     * Add item to OngoingAudit value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\OngoingAudit $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfOngoingAudit
     */
    public function addToOngoingAudit(\Brainloop\Soap\StructType\OngoingAudit $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\OngoingAudit) {
            throw new \InvalidArgumentException(sprintf('The OngoingAudit property can only contain items of \Brainloop\Soap\StructType\OngoingAudit, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OngoingAudit[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\OngoingAudit|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\OngoingAudit|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\OngoingAudit|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\OngoingAudit|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\OngoingAudit|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OngoingAudit
     */
    public function getAttributeName()
    {
        return 'OngoingAudit';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfOngoingAudit
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
