<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemProperties StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetItemProperties extends AbstractStructBase
{
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
     * Constructor method for GetItemProperties
     * @uses GetItemProperties::setIStartRowIndex()
     * @uses GetItemProperties::setIMaximumRowCount()
     * @param int $iStartRowIndex
     * @param int $iMaximumRowCount
     */
    public function __construct($iStartRowIndex = null, $iMaximumRowCount = null)
    {
        $this
            ->setIStartRowIndex($iStartRowIndex)
            ->setIMaximumRowCount($iMaximumRowCount);
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
     * @return \Brainloop\Soap\StructType\GetItemProperties
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
     * @return \Brainloop\Soap\StructType\GetItemProperties
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
     * @return \Brainloop\Soap\StructType\GetItemProperties
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
