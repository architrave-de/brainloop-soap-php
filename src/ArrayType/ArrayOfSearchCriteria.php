<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSearchCriteria ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSearchCriteria
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfSearchCriteria extends AbstractStructArrayBase
{
    /**
     * The SearchCriteria
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\SearchCriteria[]
     */
    public $SearchCriteria;
    /**
     * Constructor method for ArrayOfSearchCriteria
     * @uses ArrayOfSearchCriteria::setSearchCriteria()
     * @param \Brainloop\Soap\StructType\SearchCriteria[] $searchCriteria
     */
    public function __construct(array $searchCriteria = array())
    {
        $this
            ->setSearchCriteria($searchCriteria);
    }
    /**
     * Get SearchCriteria value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\SearchCriteria[]|null
     */
    public function getSearchCriteria()
    {
        return isset($this->SearchCriteria) ? $this->SearchCriteria : null;
    }
    /**
     * Set SearchCriteria value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\SearchCriteria[] $searchCriteria
     * @return \Brainloop\Soap\ArrayType\ArrayOfSearchCriteria
     */
    public function setSearchCriteria(array $searchCriteria = array())
    {
        foreach ($searchCriteria as $arrayOfSearchCriteriaSearchCriteriaItem) {
            // validation for constraint: itemType
            if (!$arrayOfSearchCriteriaSearchCriteriaItem instanceof \Brainloop\Soap\StructType\SearchCriteria) {
                throw new \InvalidArgumentException(sprintf('The SearchCriteria property can only contain items of \Brainloop\Soap\StructType\SearchCriteria, "%s" given', is_object($arrayOfSearchCriteriaSearchCriteriaItem) ? get_class($arrayOfSearchCriteriaSearchCriteriaItem) : gettype($arrayOfSearchCriteriaSearchCriteriaItem)), __LINE__);
            }
        }
        if (is_null($searchCriteria) || (is_array($searchCriteria) && empty($searchCriteria))) {
            unset($this->SearchCriteria);
        } else {
            $this->SearchCriteria = $searchCriteria;
        }
        return $this;
    }
    /**
     * Add item to SearchCriteria value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\SearchCriteria $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfSearchCriteria
     */
    public function addToSearchCriteria(\Brainloop\Soap\StructType\SearchCriteria $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\SearchCriteria) {
            throw new \InvalidArgumentException(sprintf('The SearchCriteria property can only contain items of \Brainloop\Soap\StructType\SearchCriteria, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SearchCriteria[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\SearchCriteria|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\SearchCriteria|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\SearchCriteria|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\SearchCriteria|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\SearchCriteria|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SearchCriteria
     */
    public function getAttributeName()
    {
        return 'SearchCriteria';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfSearchCriteria
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
