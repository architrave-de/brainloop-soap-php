<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDeletedItems StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDeletedItems extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The iDepth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDepth;
    /**
     * The dtStartDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dtStartDate;
    /**
     * The dtEndDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dtEndDate;
    /**
     * The aItemType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfItemType
     */
    public $aItemType;
    /**
     * The eDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eDetails;
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
     * Constructor method for GetDeletedItems
     * @uses GetDeletedItems::setIDataroomID()
     * @uses GetDeletedItems::setIDepth()
     * @uses GetDeletedItems::setDtStartDate()
     * @uses GetDeletedItems::setDtEndDate()
     * @uses GetDeletedItems::setAItemType()
     * @uses GetDeletedItems::setEDetails()
     * @uses GetDeletedItems::setIStartRowIndex()
     * @uses GetDeletedItems::setIMaxRowCount()
     * @param int $iDataroomID
     * @param int $iDepth
     * @param string $dtStartDate
     * @param string $dtEndDate
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemType $aItemType
     * @param string $eDetails
     * @param int $iStartRowIndex
     * @param int $iMaxRowCount
     */
    public function __construct($iDataroomID = null, $iDepth = null, $dtStartDate = null, $dtEndDate = null, \Brainloop\Soap\ArrayType\ArrayOfItemType $aItemType = null, $eDetails = null, $iStartRowIndex = null, $iMaxRowCount = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setIDepth($iDepth)
            ->setDtStartDate($dtStartDate)
            ->setDtEndDate($dtEndDate)
            ->setAItemType($aItemType)
            ->setEDetails($eDetails)
            ->setIStartRowIndex($iStartRowIndex)
            ->setIMaxRowCount($iMaxRowCount);
    }
    /**
     * Get iDataroomID value
     * @return int|null
     */
    public function getIDataroomID()
    {
        return $this->iDataroomID;
    }
    /**
     * Set iDataroomID value
     * @param int $iDataroomID
     * @return \Brainloop\Soap\StructType\GetDeletedItems
     */
    public function setIDataroomID($iDataroomID = null)
    {
        // validation for constraint: int
        if (!is_null($iDataroomID) && !is_numeric($iDataroomID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDataroomID)), __LINE__);
        }
        $this->iDataroomID = $iDataroomID;
        return $this;
    }
    /**
     * Get iDepth value
     * @return int|null
     */
    public function getIDepth()
    {
        return $this->iDepth;
    }
    /**
     * Set iDepth value
     * @param int $iDepth
     * @return \Brainloop\Soap\StructType\GetDeletedItems
     */
    public function setIDepth($iDepth = null)
    {
        // validation for constraint: int
        if (!is_null($iDepth) && !is_numeric($iDepth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDepth)), __LINE__);
        }
        $this->iDepth = $iDepth;
        return $this;
    }
    /**
     * Get dtStartDate value
     * @return string|null
     */
    public function getDtStartDate()
    {
        return $this->dtStartDate;
    }
    /**
     * Set dtStartDate value
     * @param string $dtStartDate
     * @return \Brainloop\Soap\StructType\GetDeletedItems
     */
    public function setDtStartDate($dtStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($dtStartDate) && !is_string($dtStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtStartDate)), __LINE__);
        }
        $this->dtStartDate = $dtStartDate;
        return $this;
    }
    /**
     * Get dtEndDate value
     * @return string|null
     */
    public function getDtEndDate()
    {
        return $this->dtEndDate;
    }
    /**
     * Set dtEndDate value
     * @param string $dtEndDate
     * @return \Brainloop\Soap\StructType\GetDeletedItems
     */
    public function setDtEndDate($dtEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($dtEndDate) && !is_string($dtEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtEndDate)), __LINE__);
        }
        $this->dtEndDate = $dtEndDate;
        return $this;
    }
    /**
     * Get aItemType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemType|null
     */
    public function getAItemType()
    {
        return isset($this->aItemType) ? $this->aItemType : null;
    }
    /**
     * Set aItemType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemType $aItemType
     * @return \Brainloop\Soap\StructType\GetDeletedItems
     */
    public function setAItemType(\Brainloop\Soap\ArrayType\ArrayOfItemType $aItemType = null)
    {
        if (is_null($aItemType) || (is_array($aItemType) && empty($aItemType))) {
            unset($this->aItemType);
        } else {
            $this->aItemType = $aItemType;
        }
        return $this;
    }
    /**
     * Get eDetails value
     * @return string|null
     */
    public function getEDetails()
    {
        return $this->eDetails;
    }
    /**
     * Set eDetails value
     * @uses \Brainloop\Soap\EnumType\ItemFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eDetails
     * @return \Brainloop\Soap\StructType\GetDeletedItems
     */
    public function setEDetails($eDetails = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ItemFields::valueIsValid($eDetails)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eDetails, implode(', ', \Brainloop\Soap\EnumType\ItemFields::getValidValues())), __LINE__);
        }
        $this->eDetails = $eDetails;
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
     * @return \Brainloop\Soap\StructType\GetDeletedItems
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
     * @return \Brainloop\Soap\StructType\GetDeletedItems
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
     * @return \Brainloop\Soap\StructType\GetDeletedItems
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
