<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfstringAndstring ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfstringAndstring
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfstringAndstring extends AbstractStructArrayBase
{
    /**
     * The stringAndstring
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\StringAndstring[]
     */
    public $stringAndstring;
    /**
     * Constructor method for ArrayOfstringAndstring
     * @uses ArrayOfstringAndstring::setStringAndstring()
     * @param \Brainloop\Soap\StructType\StringAndstring[] $stringAndstring
     */
    public function __construct(array $stringAndstring = array())
    {
        $this
            ->setStringAndstring($stringAndstring);
    }
    /**
     * Get stringAndstring value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\StringAndstring[]|null
     */
    public function getStringAndstring()
    {
        return isset($this->stringAndstring) ? $this->stringAndstring : null;
    }
    /**
     * Set stringAndstring value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\StringAndstring[] $stringAndstring
     * @return \Brainloop\Soap\ArrayType\ArrayOfstringAndstring
     */
    public function setStringAndstring(array $stringAndstring = array())
    {
        foreach ($stringAndstring as $arrayOfstringAndstringStringAndstringItem) {
            // validation for constraint: itemType
            if (!$arrayOfstringAndstringStringAndstringItem instanceof \Brainloop\Soap\StructType\StringAndstring) {
                throw new \InvalidArgumentException(sprintf('The stringAndstring property can only contain items of \Brainloop\Soap\StructType\StringAndstring, "%s" given', is_object($arrayOfstringAndstringStringAndstringItem) ? get_class($arrayOfstringAndstringStringAndstringItem) : gettype($arrayOfstringAndstringStringAndstringItem)), __LINE__);
            }
        }
        if (is_null($stringAndstring) || (is_array($stringAndstring) && empty($stringAndstring))) {
            unset($this->stringAndstring);
        } else {
            $this->stringAndstring = $stringAndstring;
        }
        return $this;
    }
    /**
     * Add item to stringAndstring value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\StringAndstring $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfstringAndstring
     */
    public function addToStringAndstring(\Brainloop\Soap\StructType\StringAndstring $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\StringAndstring) {
            throw new \InvalidArgumentException(sprintf('The stringAndstring property can only contain items of \Brainloop\Soap\StructType\StringAndstring, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->stringAndstring[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\StringAndstring|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\StringAndstring|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\StringAndstring|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\StringAndstring|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\StringAndstring|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string stringAndstring
     */
    public function getAttributeName()
    {
        return 'stringAndstring';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfstringAndstring
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
