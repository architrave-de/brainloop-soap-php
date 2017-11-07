<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchFulltextCriteria StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SearchFulltextCriteria
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SearchFulltextCriteria extends SearchCriteria
{
    /**
     * The SearchString
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $SearchString;
    /**
     * Constructor method for SearchFulltextCriteria
     * @uses SearchFulltextCriteria::setSearchString()
     * @param string $searchString
     */
    public function __construct($searchString = null)
    {
        $this
            ->setSearchString($searchString);
    }
    /**
     * Get SearchString value
     * @return string|null
     */
    public function getSearchString()
    {
        return $this->SearchString;
    }
    /**
     * Set SearchString value
     * @param string $searchString
     * @return \Brainloop\Soap\StructType\SearchFulltextCriteria
     */
    public function setSearchString($searchString = null)
    {
        // validation for constraint: string
        if (!is_null($searchString) && !is_string($searchString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchString)), __LINE__);
        }
        $this->SearchString = $searchString;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SearchFulltextCriteria
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
