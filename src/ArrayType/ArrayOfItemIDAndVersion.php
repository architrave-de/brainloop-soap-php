<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfItemIDAndVersion ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfItemIDAndVersion
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfItemIDAndVersion extends AbstractStructArrayBase
{
    /**
     * The ItemIDAndVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ItemIDAndVersion[]
     */
    public $ItemIDAndVersion;
    /**
     * Constructor method for ArrayOfItemIDAndVersion
     * @uses ArrayOfItemIDAndVersion::setItemIDAndVersion()
     * @param \Brainloop\Soap\StructType\ItemIDAndVersion[] $itemIDAndVersion
     */
    public function __construct(array $itemIDAndVersion = array())
    {
        $this
            ->setItemIDAndVersion($itemIDAndVersion);
    }
    /**
     * Get ItemIDAndVersion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ItemIDAndVersion[]|null
     */
    public function getItemIDAndVersion()
    {
        return isset($this->ItemIDAndVersion) ? $this->ItemIDAndVersion : null;
    }
    /**
     * Set ItemIDAndVersion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\ItemIDAndVersion[] $itemIDAndVersion
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion
     */
    public function setItemIDAndVersion(array $itemIDAndVersion = array())
    {
        foreach ($itemIDAndVersion as $arrayOfItemIDAndVersionItemIDAndVersionItem) {
            // validation for constraint: itemType
            if (!$arrayOfItemIDAndVersionItemIDAndVersionItem instanceof \Brainloop\Soap\StructType\ItemIDAndVersion) {
                throw new \InvalidArgumentException(sprintf('The ItemIDAndVersion property can only contain items of \Brainloop\Soap\StructType\ItemIDAndVersion, "%s" given', is_object($arrayOfItemIDAndVersionItemIDAndVersionItem) ? get_class($arrayOfItemIDAndVersionItemIDAndVersionItem) : gettype($arrayOfItemIDAndVersionItemIDAndVersionItem)), __LINE__);
            }
        }
        if (is_null($itemIDAndVersion) || (is_array($itemIDAndVersion) && empty($itemIDAndVersion))) {
            unset($this->ItemIDAndVersion);
        } else {
            $this->ItemIDAndVersion = $itemIDAndVersion;
        }
        return $this;
    }
    /**
     * Add item to ItemIDAndVersion value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\ItemIDAndVersion $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion
     */
    public function addToItemIDAndVersion(\Brainloop\Soap\StructType\ItemIDAndVersion $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\ItemIDAndVersion) {
            throw new \InvalidArgumentException(sprintf('The ItemIDAndVersion property can only contain items of \Brainloop\Soap\StructType\ItemIDAndVersion, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemIDAndVersion[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\ItemIDAndVersion|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\ItemIDAndVersion|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\ItemIDAndVersion|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\ItemIDAndVersion|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\ItemIDAndVersion|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemIDAndVersion
     */
    public function getAttributeName()
    {
        return 'ItemIDAndVersion';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion
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
