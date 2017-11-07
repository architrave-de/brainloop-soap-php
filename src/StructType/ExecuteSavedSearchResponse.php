<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteSavedSearchResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ExecuteSavedSearchResponse extends AbstractStructBase
{
    /**
     * The ExecuteSavedSearchResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\SearchResultCollection
     */
    public $ExecuteSavedSearchResult;
    /**
     * Constructor method for ExecuteSavedSearchResponse
     * @uses ExecuteSavedSearchResponse::setExecuteSavedSearchResult()
     * @param \Brainloop\Soap\StructType\SearchResultCollection $executeSavedSearchResult
     */
    public function __construct(\Brainloop\Soap\StructType\SearchResultCollection $executeSavedSearchResult = null)
    {
        $this
            ->setExecuteSavedSearchResult($executeSavedSearchResult);
    }
    /**
     * Get ExecuteSavedSearchResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\SearchResultCollection|null
     */
    public function getExecuteSavedSearchResult()
    {
        return isset($this->ExecuteSavedSearchResult) ? $this->ExecuteSavedSearchResult : null;
    }
    /**
     * Set ExecuteSavedSearchResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\SearchResultCollection $executeSavedSearchResult
     * @return \Brainloop\Soap\StructType\ExecuteSavedSearchResponse
     */
    public function setExecuteSavedSearchResult(\Brainloop\Soap\StructType\SearchResultCollection $executeSavedSearchResult = null)
    {
        if (is_null($executeSavedSearchResult) || (is_array($executeSavedSearchResult) && empty($executeSavedSearchResult))) {
            unset($this->ExecuteSavedSearchResult);
        } else {
            $this->ExecuteSavedSearchResult = $executeSavedSearchResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ExecuteSavedSearchResponse
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
