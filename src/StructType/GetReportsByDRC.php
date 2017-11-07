<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReportsByDRC StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetReportsByDRC extends AbstractStructBase
{
    /**
     * The iDRCID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDRCID;
    /**
     * The iStartRowIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iStartRowIndex;
    /**
     * The iMaximumRowCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iMaximumRowCount;
    /**
     * Constructor method for GetReportsByDRC
     * @uses GetReportsByDRC::setIDRCID()
     * @uses GetReportsByDRC::setIStartRowIndex()
     * @uses GetReportsByDRC::setIMaximumRowCount()
     * @param int $iDRCID
     * @param int $iStartRowIndex
     * @param int $iMaximumRowCount
     */
    public function __construct($iDRCID = null, $iStartRowIndex = null, $iMaximumRowCount = null)
    {
        $this
            ->setIDRCID($iDRCID)
            ->setIStartRowIndex($iStartRowIndex)
            ->setIMaximumRowCount($iMaximumRowCount);
    }
    /**
     * Get iDRCID value
     * @return int|null
     */
    public function getIDRCID()
    {
        return $this->iDRCID;
    }
    /**
     * Set iDRCID value
     * @param int $iDRCID
     * @return \Brainloop\Soap\StructType\GetReportsByDRC
     */
    public function setIDRCID($iDRCID = null)
    {
        // validation for constraint: int
        if (!is_null($iDRCID) && !is_numeric($iDRCID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDRCID)), __LINE__);
        }
        $this->iDRCID = $iDRCID;
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
     * @return \Brainloop\Soap\StructType\GetReportsByDRC
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
     * Get iMaximumRowCount value
     * @return int|null
     */
    public function getIMaximumRowCount()
    {
        return $this->iMaximumRowCount;
    }
    /**
     * Set iMaximumRowCount value
     * @param int $iMaximumRowCount
     * @return \Brainloop\Soap\StructType\GetReportsByDRC
     */
    public function setIMaximumRowCount($iMaximumRowCount = null)
    {
        // validation for constraint: int
        if (!is_null($iMaximumRowCount) && !is_numeric($iMaximumRowCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iMaximumRowCount)), __LINE__);
        }
        $this->iMaximumRowCount = $iMaximumRowCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetReportsByDRC
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
