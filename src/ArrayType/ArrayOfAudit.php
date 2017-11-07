<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAudit ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAudit
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfAudit extends AbstractStructArrayBase
{
    /**
     * The Audit
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Audit[]
     */
    public $Audit;
    /**
     * Constructor method for ArrayOfAudit
     * @uses ArrayOfAudit::setAudit()
     * @param \Brainloop\Soap\StructType\Audit[] $audit
     */
    public function __construct(array $audit = array())
    {
        $this
            ->setAudit($audit);
    }
    /**
     * Get Audit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Audit[]|null
     */
    public function getAudit()
    {
        return isset($this->Audit) ? $this->Audit : null;
    }
    /**
     * Set Audit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\Audit[] $audit
     * @return \Brainloop\Soap\ArrayType\ArrayOfAudit
     */
    public function setAudit(array $audit = array())
    {
        foreach ($audit as $arrayOfAuditAuditItem) {
            // validation for constraint: itemType
            if (!$arrayOfAuditAuditItem instanceof \Brainloop\Soap\StructType\Audit) {
                throw new \InvalidArgumentException(sprintf('The Audit property can only contain items of \Brainloop\Soap\StructType\Audit, "%s" given', is_object($arrayOfAuditAuditItem) ? get_class($arrayOfAuditAuditItem) : gettype($arrayOfAuditAuditItem)), __LINE__);
            }
        }
        if (is_null($audit) || (is_array($audit) && empty($audit))) {
            unset($this->Audit);
        } else {
            $this->Audit = $audit;
        }
        return $this;
    }
    /**
     * Add item to Audit value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\Audit $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfAudit
     */
    public function addToAudit(\Brainloop\Soap\StructType\Audit $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\Audit) {
            throw new \InvalidArgumentException(sprintf('The Audit property can only contain items of \Brainloop\Soap\StructType\Audit, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Audit[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\Audit|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\Audit|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\Audit|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\Audit|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\Audit|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Audit
     */
    public function getAttributeName()
    {
        return 'Audit';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfAudit
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
