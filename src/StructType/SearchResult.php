<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchResult StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SearchResult
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SearchResult extends TreeItem
{
    /**
     * The NormalizedRanking
     * @var float
     */
    public $NormalizedRanking;
    /**
     * The Ranking
     * @var int
     */
    public $Ranking;
    /**
     * Constructor method for SearchResult
     * @uses SearchResult::setNormalizedRanking()
     * @uses SearchResult::setRanking()
     * @param float $normalizedRanking
     * @param int $ranking
     */
    public function __construct($normalizedRanking = null, $ranking = null)
    {
        $this
            ->setNormalizedRanking($normalizedRanking)
            ->setRanking($ranking);
    }
    /**
     * Get NormalizedRanking value
     * @return float|null
     */
    public function getNormalizedRanking()
    {
        return $this->NormalizedRanking;
    }
    /**
     * Set NormalizedRanking value
     * @param float $normalizedRanking
     * @return \Brainloop\Soap\StructType\SearchResult
     */
    public function setNormalizedRanking($normalizedRanking = null)
    {
        $this->NormalizedRanking = $normalizedRanking;
        return $this;
    }
    /**
     * Get Ranking value
     * @return int|null
     */
    public function getRanking()
    {
        return $this->Ranking;
    }
    /**
     * Set Ranking value
     * @param int $ranking
     * @return \Brainloop\Soap\StructType\SearchResult
     */
    public function setRanking($ranking = null)
    {
        // validation for constraint: int
        if (!is_null($ranking) && !is_numeric($ranking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ranking)), __LINE__);
        }
        $this->Ranking = $ranking;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SearchResult
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
