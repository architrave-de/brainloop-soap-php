<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfKeyValuePairOfstringstring ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfKeyValuePairOfstringstring
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfKeyValuePairOfstringstring extends AbstractStructArrayBase
{
    /**
     * The KeyValuePairOfstringstring
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Brainloop\Soap\StructType\KeyValuePairOfstringstring[]
     */
    public $KeyValuePairOfstringstring;
    /**
     * Constructor method for ArrayOfKeyValuePairOfstringstring
     * @uses ArrayOfKeyValuePairOfstringstring::setKeyValuePairOfstringstring()
     * @param \Brainloop\Soap\StructType\KeyValuePairOfstringstring[] $keyValuePairOfstringstring
     */
    public function __construct(array $keyValuePairOfstringstring = array())
    {
        $this
            ->setKeyValuePairOfstringstring($keyValuePairOfstringstring);
    }
    /**
     * Get KeyValuePairOfstringstring value
     * @return \Brainloop\Soap\StructType\KeyValuePairOfstringstring[]|null
     */
    public function getKeyValuePairOfstringstring()
    {
        return $this->KeyValuePairOfstringstring;
    }
    /**
     * Set KeyValuePairOfstringstring value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\KeyValuePairOfstringstring[] $keyValuePairOfstringstring
     * @return \Brainloop\Soap\ArrayType\ArrayOfKeyValuePairOfstringstring
     */
    public function setKeyValuePairOfstringstring(array $keyValuePairOfstringstring = array())
    {
        foreach ($keyValuePairOfstringstring as $arrayOfKeyValuePairOfstringstringKeyValuePairOfstringstringItem) {
            // validation for constraint: itemType
            if (!$arrayOfKeyValuePairOfstringstringKeyValuePairOfstringstringItem instanceof \Brainloop\Soap\StructType\KeyValuePairOfstringstring) {
                throw new \InvalidArgumentException(sprintf('The KeyValuePairOfstringstring property can only contain items of \Brainloop\Soap\StructType\KeyValuePairOfstringstring, "%s" given', is_object($arrayOfKeyValuePairOfstringstringKeyValuePairOfstringstringItem) ? get_class($arrayOfKeyValuePairOfstringstringKeyValuePairOfstringstringItem) : gettype($arrayOfKeyValuePairOfstringstringKeyValuePairOfstringstringItem)), __LINE__);
            }
        }
        $this->KeyValuePairOfstringstring = $keyValuePairOfstringstring;
        return $this;
    }
    /**
     * Add item to KeyValuePairOfstringstring value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\KeyValuePairOfstringstring $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfKeyValuePairOfstringstring
     */
    public function addToKeyValuePairOfstringstring(\Brainloop\Soap\StructType\KeyValuePairOfstringstring $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\KeyValuePairOfstringstring) {
            throw new \InvalidArgumentException(sprintf('The KeyValuePairOfstringstring property can only contain items of \Brainloop\Soap\StructType\KeyValuePairOfstringstring, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->KeyValuePairOfstringstring[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\KeyValuePairOfstringstring|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\KeyValuePairOfstringstring|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\KeyValuePairOfstringstring|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\KeyValuePairOfstringstring|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\KeyValuePairOfstringstring|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeyValuePairOfstringstring
     */
    public function getAttributeName()
    {
        return 'KeyValuePairOfstringstring';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfKeyValuePairOfstringstring
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
