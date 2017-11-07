<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteSavedSearch StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ExecuteSavedSearch extends AbstractStructBase
{
    /**
     * The iSearchDefinitionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iSearchDefinitionID;
    /**
     * The iStartRowIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iStartRowIndex;
    /**
     * The iMaxRowCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iMaxRowCount;
    /**
     * Constructor method for ExecuteSavedSearch
     * @uses ExecuteSavedSearch::setISearchDefinitionID()
     * @uses ExecuteSavedSearch::setIStartRowIndex()
     * @uses ExecuteSavedSearch::setIMaxRowCount()
     * @param int $iSearchDefinitionID
     * @param int $iStartRowIndex
     * @param int $iMaxRowCount
     */
    public function __construct($iSearchDefinitionID = null, $iStartRowIndex = null, $iMaxRowCount = null)
    {
        $this
            ->setISearchDefinitionID($iSearchDefinitionID)
            ->setIStartRowIndex($iStartRowIndex)
            ->setIMaxRowCount($iMaxRowCount);
    }
    /**
     * Get iSearchDefinitionID value
     * @return int|null
     */
    public function getISearchDefinitionID()
    {
        return $this->iSearchDefinitionID;
    }
    /**
     * Set iSearchDefinitionID value
     * @param int $iSearchDefinitionID
     * @return \Brainloop\Soap\StructType\ExecuteSavedSearch
     */
    public function setISearchDefinitionID($iSearchDefinitionID = null)
    {
        // validation for constraint: int
        if (!is_null($iSearchDefinitionID) && !is_numeric($iSearchDefinitionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iSearchDefinitionID)), __LINE__);
        }
        $this->iSearchDefinitionID = $iSearchDefinitionID;
        return $this;
    }
    /**
     * Get iStartRowIndex value
     * @return int|null
     */
    public function getIStartRowIndex()
    {
        return $this->iStartRowIndex;
    }
    /**
     * Set iStartRowIndex value
     * @param int $iStartRowIndex
     * @return \Brainloop\Soap\StructType\ExecuteSavedSearch
     */
    public function setIStartRowIndex($iStartRowIndex = null)
    {
        // validation for constraint: int
        if (!is_null($iStartRowIndex) && !is_numeric($iStartRowIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iStartRowIndex)), __LINE__);
        }
        $this->iStartRowIndex = $iStartRowIndex;
        return $this;
    }
    /**
     * Get iMaxRowCount value
     * @return int|null
     */
    public function getIMaxRowCount()
    {
        return $this->iMaxRowCount;
    }
    /**
     * Set iMaxRowCount value
     * @param int $iMaxRowCount
     * @return \Brainloop\Soap\StructType\ExecuteSavedSearch
     */
    public function setIMaxRowCount($iMaxRowCount = null)
    {
        // validation for constraint: int
        if (!is_null($iMaxRowCount) && !is_numeric($iMaxRowCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iMaxRowCount)), __LINE__);
        }
        $this->iMaxRowCount = $iMaxRowCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ExecuteSavedSearch
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
