<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDRC ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDRC
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfDRC extends AbstractStructArrayBase
{
    /**
     * The DRC
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\DRC[]
     */
    public $DRC;
    /**
     * Constructor method for ArrayOfDRC
     * @uses ArrayOfDRC::setDRC()
     * @param \Brainloop\Soap\StructType\DRC[] $dRC
     */
    public function __construct(array $dRC = array())
    {
        $this
            ->setDRC($dRC);
    }
    /**
     * Get DRC value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\DRC[]|null
     */
    public function getDRC()
    {
        return isset($this->DRC) ? $this->DRC : null;
    }
    /**
     * Set DRC value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\DRC[] $dRC
     * @return \Brainloop\Soap\ArrayType\ArrayOfDRC
     */
    public function setDRC(array $dRC = array())
    {
        foreach ($dRC as $arrayOfDRCDRCItem) {
            // validation for constraint: itemType
            if (!$arrayOfDRCDRCItem instanceof \Brainloop\Soap\StructType\DRC) {
                throw new \InvalidArgumentException(sprintf('The DRC property can only contain items of \Brainloop\Soap\StructType\DRC, "%s" given', is_object($arrayOfDRCDRCItem) ? get_class($arrayOfDRCDRCItem) : gettype($arrayOfDRCDRCItem)), __LINE__);
            }
        }
        if (is_null($dRC) || (is_array($dRC) && empty($dRC))) {
            unset($this->DRC);
        } else {
            $this->DRC = $dRC;
        }
        return $this;
    }
    /**
     * Add item to DRC value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\DRC $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfDRC
     */
    public function addToDRC(\Brainloop\Soap\StructType\DRC $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\DRC) {
            throw new \InvalidArgumentException(sprintf('The DRC property can only contain items of \Brainloop\Soap\StructType\DRC, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DRC[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\DRC|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\DRC|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\DRC|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\DRC|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\DRC|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DRC
     */
    public function getAttributeName()
    {
        return 'DRC';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfDRC
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
