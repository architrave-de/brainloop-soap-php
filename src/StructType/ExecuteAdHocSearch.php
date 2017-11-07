<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteAdHocSearch StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ExecuteAdHocSearch extends AbstractStructBase
{
    /**
     * The oSearchCriteria
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfSearchCriteria
     */
    public $oSearchCriteria;
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
     * Constructor method for ExecuteAdHocSearch
     * @uses ExecuteAdHocSearch::setOSearchCriteria()
     * @uses ExecuteAdHocSearch::setIStartRowIndex()
     * @uses ExecuteAdHocSearch::setIMaxRowCount()
     * @param \Brainloop\Soap\ArrayType\ArrayOfSearchCriteria $oSearchCriteria
     * @param int $iStartRowIndex
     * @param int $iMaxRowCount
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfSearchCriteria $oSearchCriteria = null, $iStartRowIndex = null, $iMaxRowCount = null)
    {
        $this
            ->setOSearchCriteria($oSearchCriteria)
            ->setIStartRowIndex($iStartRowIndex)
            ->setIMaxRowCount($iMaxRowCount);
    }
    /**
     * Get oSearchCriteria value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfSearchCriteria|null
     */
    public function getOSearchCriteria()
    {
        return isset($this->oSearchCriteria) ? $this->oSearchCriteria : null;
    }
    /**
     * Set oSearchCriteria value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfSearchCriteria $oSearchCriteria
     * @return \Brainloop\Soap\StructType\ExecuteAdHocSearch
     */
    public function setOSearchCriteria(\Brainloop\Soap\ArrayType\ArrayOfSearchCriteria $oSearchCriteria = null)
    {
        if (is_null($oSearchCriteria) || (is_array($oSearchCriteria) && empty($oSearchCriteria))) {
            unset($this->oSearchCriteria);
        } else {
            $this->oSearchCriteria = $oSearchCriteria;
        }
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
     * @return \Brainloop\Soap\StructType\ExecuteAdHocSearch
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
     * @return \Brainloop\Soap\StructType\ExecuteAdHocSearch
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
     * @return \Brainloop\Soap\StructType\ExecuteAdHocSearch
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
