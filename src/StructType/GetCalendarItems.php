<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCalendarItems StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetCalendarItems extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
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
     * The oItemTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfItemType
     */
    public $oItemTypes;
    /**
     * The eFields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eFields;
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
     * Constructor method for GetCalendarItems
     * @uses GetCalendarItems::setIDataroomID()
     * @uses GetCalendarItems::setDtStart()
     * @uses GetCalendarItems::setDtEnd()
     * @uses GetCalendarItems::setOItemTypes()
     * @uses GetCalendarItems::setEFields()
     * @uses GetCalendarItems::setIStartRowIndex()
     * @uses GetCalendarItems::setIMaximumRowCount()
     * @param int $iDataroomID
     * @param string $dtStart
     * @param string $dtEnd
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemType $oItemTypes
     * @param string $eFields
     * @param int $iStartRowIndex
     * @param int $iMaximumRowCount
     */
    public function __construct($iDataroomID = null, $dtStart = null, $dtEnd = null, \Brainloop\Soap\ArrayType\ArrayOfItemType $oItemTypes = null, $eFields = null, $iStartRowIndex = null, $iMaximumRowCount = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setDtStart($dtStart)
            ->setDtEnd($dtEnd)
            ->setOItemTypes($oItemTypes)
            ->setEFields($eFields)
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
     * @return \Brainloop\Soap\StructType\GetCalendarItems
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
     * @return \Brainloop\Soap\StructType\GetCalendarItems
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
     * @return \Brainloop\Soap\StructType\GetCalendarItems
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
     * Get oItemTypes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemType|null
     */
    public function getOItemTypes()
    {
        return isset($this->oItemTypes) ? $this->oItemTypes : null;
    }
    /**
     * Set oItemTypes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemType $oItemTypes
     * @return \Brainloop\Soap\StructType\GetCalendarItems
     */
    public function setOItemTypes(\Brainloop\Soap\ArrayType\ArrayOfItemType $oItemTypes = null)
    {
        if (is_null($oItemTypes) || (is_array($oItemTypes) && empty($oItemTypes))) {
            unset($this->oItemTypes);
        } else {
            $this->oItemTypes = $oItemTypes;
        }
        return $this;
    }
    /**
     * Get eFields value
     * @return string|null
     */
    public function getEFields()
    {
        return $this->eFields;
    }
    /**
     * Set eFields value
     * @uses \Brainloop\Soap\EnumType\ItemFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eFields
     * @return \Brainloop\Soap\StructType\GetCalendarItems
     */
    public function setEFields($eFields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ItemFields::valueIsValid($eFields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eFields, implode(', ', \Brainloop\Soap\EnumType\ItemFields::getValidValues())), __LINE__);
        }
        $this->eFields = $eFields;
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
     * @return \Brainloop\Soap\StructType\GetCalendarItems
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
     * @return \Brainloop\Soap\StructType\GetCalendarItems
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
     * @return \Brainloop\Soap\StructType\GetCalendarItems
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
