<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSearchResult ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSearchResult
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfSearchResult extends AbstractStructArrayBase
{
    /**
     * The SearchResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\SearchResult[]
     */
    public $SearchResult;
    /**
     * Constructor method for ArrayOfSearchResult
     * @uses ArrayOfSearchResult::setSearchResult()
     * @param \Brainloop\Soap\StructType\SearchResult[] $searchResult
     */
    public function __construct(array $searchResult = array())
    {
        $this
            ->setSearchResult($searchResult);
    }
    /**
     * Get SearchResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\SearchResult[]|null
     */
    public function getSearchResult()
    {
        return isset($this->SearchResult) ? $this->SearchResult : null;
    }
    /**
     * Set SearchResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\SearchResult[] $searchResult
     * @return \Brainloop\Soap\ArrayType\ArrayOfSearchResult
     */
    public function setSearchResult(array $searchResult = array())
    {
        foreach ($searchResult as $arrayOfSearchResultSearchResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfSearchResultSearchResultItem instanceof \Brainloop\Soap\StructType\SearchResult) {
                throw new \InvalidArgumentException(sprintf('The SearchResult property can only contain items of \Brainloop\Soap\StructType\SearchResult, "%s" given', is_object($arrayOfSearchResultSearchResultItem) ? get_class($arrayOfSearchResultSearchResultItem) : gettype($arrayOfSearchResultSearchResultItem)), __LINE__);
            }
        }
        if (is_null($searchResult) || (is_array($searchResult) && empty($searchResult))) {
            unset($this->SearchResult);
        } else {
            $this->SearchResult = $searchResult;
        }
        return $this;
    }
    /**
     * Add item to SearchResult value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\SearchResult $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfSearchResult
     */
    public function addToSearchResult(\Brainloop\Soap\StructType\SearchResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\SearchResult) {
            throw new \InvalidArgumentException(sprintf('The SearchResult property can only contain items of \Brainloop\Soap\StructType\SearchResult, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SearchResult[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\SearchResult|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\SearchResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\SearchResult|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\SearchResult|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\SearchResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SearchResult
     */
    public function getAttributeName()
    {
        return 'SearchResult';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfSearchResult
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
