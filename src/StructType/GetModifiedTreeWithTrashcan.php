<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetModifiedTreeWithTrashcan StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetModifiedTreeWithTrashcan extends AbstractStructBase
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
     * The dtStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dtStart;
    /**
     * The dtEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dtEnd;
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
     * Constructor method for GetModifiedTreeWithTrashcan
     * @uses GetModifiedTreeWithTrashcan::setIDataroomID()
     * @uses GetModifiedTreeWithTrashcan::setIDepth()
     * @uses GetModifiedTreeWithTrashcan::setAItemType()
     * @uses GetModifiedTreeWithTrashcan::setEDetails()
     * @uses GetModifiedTreeWithTrashcan::setDtStart()
     * @uses GetModifiedTreeWithTrashcan::setDtEnd()
     * @uses GetModifiedTreeWithTrashcan::setIStartRowIndex()
     * @uses GetModifiedTreeWithTrashcan::setIMaximumRowCount()
     * @param int $iDataroomID
     * @param int $iDepth
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemType $aItemType
     * @param string $eDetails
     * @param string $dtStart
     * @param string $dtEnd
     * @param int $iStartRowIndex
     * @param int $iMaximumRowCount
     */
    public function __construct($iDataroomID = null, $iDepth = null, \Brainloop\Soap\ArrayType\ArrayOfItemType $aItemType = null, $eDetails = null, $dtStart = null, $dtEnd = null, $iStartRowIndex = null, $iMaximumRowCount = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setIDepth($iDepth)
            ->setAItemType($aItemType)
            ->setEDetails($eDetails)
            ->setDtStart($dtStart)
            ->setDtEnd($dtEnd)
            ->setIStartRowIndex($iStartRowIndex)
            ->setIMaximumRowCount($iMaximumRowCount);
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
     * @return \Brainloop\Soap\StructType\GetModifiedTreeWithTrashcan
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
     * @return \Brainloop\Soap\StructType\GetModifiedTreeWithTrashcan
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
     * @return \Brainloop\Soap\StructType\GetModifiedTreeWithTrashcan
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
     * @return \Brainloop\Soap\StructType\GetModifiedTreeWithTrashcan
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
     * Get dtStart value
     * @return string|null
     */
    public function getDtStart()
    {
        return $this->dtStart;
    }
    /**
     * Set dtStart value
     * @param string $dtStart
     * @return \Brainloop\Soap\StructType\GetModifiedTreeWithTrashcan
     */
    public function setDtStart($dtStart = null)
    {
        // validation for constraint: string
        if (!is_null($dtStart) && !is_string($dtStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtStart)), __LINE__);
        }
        $this->dtStart = $dtStart;
        return $this;
    }
    /**
     * Get dtEnd value
     * @return string|null
     */
    public function getDtEnd()
    {
        return $this->dtEnd;
    }
    /**
     * Set dtEnd value
     * @param string $dtEnd
     * @return \Brainloop\Soap\StructType\GetModifiedTreeWithTrashcan
     */
    public function setDtEnd($dtEnd = null)
    {
        // validation for constraint: string
        if (!is_null($dtEnd) && !is_string($dtEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtEnd)), __LINE__);
        }
        $this->dtEnd = $dtEnd;
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
     * @return \Brainloop\Soap\StructType\GetModifiedTreeWithTrashcan
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
     * @return \Brainloop\Soap\StructType\GetModifiedTreeWithTrashcan
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
     * @return \Brainloop\Soap\StructType\GetModifiedTreeWithTrashcan
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
