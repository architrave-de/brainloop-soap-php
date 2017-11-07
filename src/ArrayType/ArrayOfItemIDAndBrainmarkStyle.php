<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfItemIDAndBrainmarkStyle ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfItemIDAndBrainmarkStyle
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfItemIDAndBrainmarkStyle extends AbstractStructArrayBase
{
    /**
     * The ItemIDAndBrainmarkStyle
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ItemIDAndBrainmarkStyle[]
     */
    public $ItemIDAndBrainmarkStyle;
    /**
     * Constructor method for ArrayOfItemIDAndBrainmarkStyle
     * @uses ArrayOfItemIDAndBrainmarkStyle::setItemIDAndBrainmarkStyle()
     * @param \Brainloop\Soap\StructType\ItemIDAndBrainmarkStyle[] $itemIDAndBrainmarkStyle
     */
    public function __construct(array $itemIDAndBrainmarkStyle = array())
    {
        $this
            ->setItemIDAndBrainmarkStyle($itemIDAndBrainmarkStyle);
    }
    /**
     * Get ItemIDAndBrainmarkStyle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ItemIDAndBrainmarkStyle[]|null
     */
    public function getItemIDAndBrainmarkStyle()
    {
        return isset($this->ItemIDAndBrainmarkStyle) ? $this->ItemIDAndBrainmarkStyle : null;
    }
    /**
     * Set ItemIDAndBrainmarkStyle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\ItemIDAndBrainmarkStyle[] $itemIDAndBrainmarkStyle
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemIDAndBrainmarkStyle
     */
    public function setItemIDAndBrainmarkStyle(array $itemIDAndBrainmarkStyle = array())
    {
        foreach ($itemIDAndBrainmarkStyle as $arrayOfItemIDAndBrainmarkStyleItemIDAndBrainmarkStyleItem) {
            // validation for constraint: itemType
            if (!$arrayOfItemIDAndBrainmarkStyleItemIDAndBrainmarkStyleItem instanceof \Brainloop\Soap\StructType\ItemIDAndBrainmarkStyle) {
                throw new \InvalidArgumentException(sprintf('The ItemIDAndBrainmarkStyle property can only contain items of \Brainloop\Soap\StructType\ItemIDAndBrainmarkStyle, "%s" given', is_object($arrayOfItemIDAndBrainmarkStyleItemIDAndBrainmarkStyleItem) ? get_class($arrayOfItemIDAndBrainmarkStyleItemIDAndBrainmarkStyleItem) : gettype($arrayOfItemIDAndBrainmarkStyleItemIDAndBrainmarkStyleItem)), __LINE__);
            }
        }
        if (is_null($itemIDAndBrainmarkStyle) || (is_array($itemIDAndBrainmarkStyle) && empty($itemIDAndBrainmarkStyle))) {
            unset($this->ItemIDAndBrainmarkStyle);
        } else {
            $this->ItemIDAndBrainmarkStyle = $itemIDAndBrainmarkStyle;
        }
        return $this;
    }
    /**
     * Add item to ItemIDAndBrainmarkStyle value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\ItemIDAndBrainmarkStyle $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemIDAndBrainmarkStyle
     */
    public function addToItemIDAndBrainmarkStyle(\Brainloop\Soap\StructType\ItemIDAndBrainmarkStyle $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\ItemIDAndBrainmarkStyle) {
            throw new \InvalidArgumentException(sprintf('The ItemIDAndBrainmarkStyle property can only contain items of \Brainloop\Soap\StructType\ItemIDAndBrainmarkStyle, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemIDAndBrainmarkStyle[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\ItemIDAndBrainmarkStyle|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\ItemIDAndBrainmarkStyle|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\ItemIDAndBrainmarkStyle|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\ItemIDAndBrainmarkStyle|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\ItemIDAndBrainmarkStyle|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemIDAndBrainmarkStyle
     */
    public function getAttributeName()
    {
        return 'ItemIDAndBrainmarkStyle';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemIDAndBrainmarkStyle
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
