<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfItemIDAndChapter ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfItemIDAndChapter
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfItemIDAndChapter extends AbstractStructArrayBase
{
    /**
     * The ItemIDAndChapter
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ItemIDAndChapter[]
     */
    public $ItemIDAndChapter;
    /**
     * Constructor method for ArrayOfItemIDAndChapter
     * @uses ArrayOfItemIDAndChapter::setItemIDAndChapter()
     * @param \Brainloop\Soap\StructType\ItemIDAndChapter[] $itemIDAndChapter
     */
    public function __construct(array $itemIDAndChapter = array())
    {
        $this
            ->setItemIDAndChapter($itemIDAndChapter);
    }
    /**
     * Get ItemIDAndChapter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ItemIDAndChapter[]|null
     */
    public function getItemIDAndChapter()
    {
        return isset($this->ItemIDAndChapter) ? $this->ItemIDAndChapter : null;
    }
    /**
     * Set ItemIDAndChapter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\ItemIDAndChapter[] $itemIDAndChapter
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter
     */
    public function setItemIDAndChapter(array $itemIDAndChapter = array())
    {
        foreach ($itemIDAndChapter as $arrayOfItemIDAndChapterItemIDAndChapterItem) {
            // validation for constraint: itemType
            if (!$arrayOfItemIDAndChapterItemIDAndChapterItem instanceof \Brainloop\Soap\StructType\ItemIDAndChapter) {
                throw new \InvalidArgumentException(sprintf('The ItemIDAndChapter property can only contain items of \Brainloop\Soap\StructType\ItemIDAndChapter, "%s" given', is_object($arrayOfItemIDAndChapterItemIDAndChapterItem) ? get_class($arrayOfItemIDAndChapterItemIDAndChapterItem) : gettype($arrayOfItemIDAndChapterItemIDAndChapterItem)), __LINE__);
            }
        }
        if (is_null($itemIDAndChapter) || (is_array($itemIDAndChapter) && empty($itemIDAndChapter))) {
            unset($this->ItemIDAndChapter);
        } else {
            $this->ItemIDAndChapter = $itemIDAndChapter;
        }
        return $this;
    }
    /**
     * Add item to ItemIDAndChapter value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\ItemIDAndChapter $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter
     */
    public function addToItemIDAndChapter(\Brainloop\Soap\StructType\ItemIDAndChapter $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\ItemIDAndChapter) {
            throw new \InvalidArgumentException(sprintf('The ItemIDAndChapter property can only contain items of \Brainloop\Soap\StructType\ItemIDAndChapter, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemIDAndChapter[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\ItemIDAndChapter|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\ItemIDAndChapter|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\ItemIDAndChapter|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\ItemIDAndChapter|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\ItemIDAndChapter|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemIDAndChapter
     */
    public function getAttributeName()
    {
        return 'ItemIDAndChapter';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter
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
