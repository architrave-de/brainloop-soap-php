<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReports StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetReports extends AbstractStructBase
{
    /**
     * The iStartRowsIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iStartRowsIndex;
    /**
     * The iMaximumRowCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iMaximumRowCount;
    /**
     * Constructor method for GetReports
     * @uses GetReports::setIStartRowsIndex()
     * @uses GetReports::setIMaximumRowCount()
     * @param int $iStartRowsIndex
     * @param int $iMaximumRowCount
     */
    public function __construct($iStartRowsIndex = null, $iMaximumRowCount = null)
    {
        $this
            ->setIStartRowsIndex($iStartRowsIndex)
            ->setIMaximumRowCount($iMaximumRowCount);
    }
    /**
     * Get iStartRowsIndex value
     * @return int|null
     */
    public function getIStartRowsIndex()
    {
        return $this->iStartRowsIndex;
    }
    /**
     * Set iStartRowsIndex value
     * @param int $iStartRowsIndex
     * @return \Brainloop\Soap\StructType\GetReports
     */
    public function setIStartRowsIndex($iStartRowsIndex = null)
    {
        // validation for constraint: int
        if (!is_null($iStartRowsIndex) && !is_numeric($iStartRowsIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iStartRowsIndex)), __LINE__);
        }
        $this->iStartRowsIndex = $iStartRowsIndex;
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
     * @return \Brainloop\Soap\StructType\GetReports
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
     * @return \Brainloop\Soap\StructType\GetReports
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
