<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTreeWithParameters StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetTreeWithParameters extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The iRootObjectId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $iRootObjectId;
    /**
     * The iDepth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
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
     * - nillable: true
     * @var string
     */
    public $dtStart;
    /**
     * The dtEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
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
     * Constructor method for GetTreeWithParameters
     * @uses GetTreeWithParameters::setIDataroomID()
     * @uses GetTreeWithParameters::setIRootObjectId()
     * @uses GetTreeWithParameters::setIDepth()
     * @uses GetTreeWithParameters::setAItemType()
     * @uses GetTreeWithParameters::setEDetails()
     * @uses GetTreeWithParameters::setDtStart()
     * @uses GetTreeWithParameters::setDtEnd()
     * @uses GetTreeWithParameters::setIStartRowIndex()
     * @uses GetTreeWithParameters::setIMaximumRowCount()
     * @param int $iDataroomID
     * @param int $iRootObjectId
     * @param int $iDepth
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemType $aItemType
     * @param string $eDetails
     * @param string $dtStart
     * @param string $dtEnd
     * @param int $iStartRowIndex
     * @param int $iMaximumRowCount
     */
    public function __construct($iDataroomID = null, $iRootObjectId = null, $iDepth = null, \Brainloop\Soap\ArrayType\ArrayOfItemType $aItemType = null, $eDetails = null, $dtStart = null, $dtEnd = null, $iStartRowIndex = null, $iMaximumRowCount = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setIRootObjectId($iRootObjectId)
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
     * @return \Brainloop\Soap\StructType\GetTreeWithParameters
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
     * Get iRootObjectId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getIRootObjectId()
    {
        return isset($this->iRootObjectId) ? $this->iRootObjectId : null;
    }
    /**
     * Set iRootObjectId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $iRootObjectId
     * @return \Brainloop\Soap\StructType\GetTreeWithParameters
     */
    public function setIRootObjectId($iRootObjectId = null)
    {
        // validation for constraint: int
        if (!is_null($iRootObjectId) && !is_numeric($iRootObjectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iRootObjectId)), __LINE__);
        }
        if (is_null($iRootObjectId) || (is_array($iRootObjectId) && empty($iRootObjectId))) {
            unset($this->iRootObjectId);
        } else {
            $this->iRootObjectId = $iRootObjectId;
        }
        return $this;
    }
    /**
     * Get iDepth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getIDepth()
    {
        return isset($this->iDepth) ? $this->iDepth : null;
    }
    /**
     * Set iDepth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $iDepth
     * @return \Brainloop\Soap\StructType\GetTreeWithParameters
     */
    public function setIDepth($iDepth = null)
    {
        // validation for constraint: int
        if (!is_null($iDepth) && !is_numeric($iDepth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDepth)), __LINE__);
        }
        if (is_null($iDepth) || (is_array($iDepth) && empty($iDepth))) {
            unset($this->iDepth);
        } else {
            $this->iDepth = $iDepth;
        }
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
     * @return \Brainloop\Soap\StructType\GetTreeWithParameters
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
     * @return \Brainloop\Soap\StructType\GetTreeWithParameters
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDtStart()
    {
        return isset($this->dtStart) ? $this->dtStart : null;
    }
    /**
     * Set dtStart value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dtStart
     * @return \Brainloop\Soap\StructType\GetTreeWithParameters
     */
    public function setDtStart($dtStart = null)
    {
        // validation for constraint: string
        if (!is_null($dtStart) && !is_string($dtStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtStart)), __LINE__);
        }
        if (is_null($dtStart) || (is_array($dtStart) && empty($dtStart))) {
            unset($this->dtStart);
        } else {
            $this->dtStart = $dtStart;
        }
        return $this;
    }
    /**
     * Get dtEnd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDtEnd()
    {
        return isset($this->dtEnd) ? $this->dtEnd : null;
    }
    /**
     * Set dtEnd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dtEnd
     * @return \Brainloop\Soap\StructType\GetTreeWithParameters
     */
    public function setDtEnd($dtEnd = null)
    {
        // validation for constraint: string
        if (!is_null($dtEnd) && !is_string($dtEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtEnd)), __LINE__);
        }
        if (is_null($dtEnd) || (is_array($dtEnd) && empty($dtEnd))) {
            unset($this->dtEnd);
        } else {
            $this->dtEnd = $dtEnd;
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
     * @return \Brainloop\Soap\StructType\GetTreeWithParameters
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
     * @return \Brainloop\Soap\StructType\GetTreeWithParameters
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
     * @return \Brainloop\Soap\StructType\GetTreeWithParameters
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
