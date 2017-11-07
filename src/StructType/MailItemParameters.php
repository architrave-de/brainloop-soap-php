<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailItemParameters StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MailItemParameters
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class MailItemParameters extends AbstractStructBase
{
    /**
     * The DataroomId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $DataroomId;
    /**
     * The DataroomWithProperties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfstringAndstring
     */
    public $DataroomWithProperties;
    /**
     * The Fields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Fields;
    /**
     * The MailStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MailStatus;
    /**
     * The MailType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MailType;
    /**
     * The MaximumRowCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumRowCount;
    /**
     * The SearchFilter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SearchFilter;
    /**
     * The StartDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StartDate;
    /**
     * The StartRowIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StartRowIndex;
    /**
     * Constructor method for MailItemParameters
     * @uses MailItemParameters::setDataroomId()
     * @uses MailItemParameters::setDataroomWithProperties()
     * @uses MailItemParameters::setFields()
     * @uses MailItemParameters::setMailStatus()
     * @uses MailItemParameters::setMailType()
     * @uses MailItemParameters::setMaximumRowCount()
     * @uses MailItemParameters::setSearchFilter()
     * @uses MailItemParameters::setStartDate()
     * @uses MailItemParameters::setStartRowIndex()
     * @param int $dataroomId
     * @param \Brainloop\Soap\ArrayType\ArrayOfstringAndstring $dataroomWithProperties
     * @param string $fields
     * @param string $mailStatus
     * @param string $mailType
     * @param int $maximumRowCount
     * @param string $searchFilter
     * @param string $startDate
     * @param int $startRowIndex
     */
    public function __construct($dataroomId = null, \Brainloop\Soap\ArrayType\ArrayOfstringAndstring $dataroomWithProperties = null, $fields = null, $mailStatus = null, $mailType = null, $maximumRowCount = null, $searchFilter = null, $startDate = null, $startRowIndex = null)
    {
        $this
            ->setDataroomId($dataroomId)
            ->setDataroomWithProperties($dataroomWithProperties)
            ->setFields($fields)
            ->setMailStatus($mailStatus)
            ->setMailType($mailType)
            ->setMaximumRowCount($maximumRowCount)
            ->setSearchFilter($searchFilter)
            ->setStartDate($startDate)
            ->setStartRowIndex($startRowIndex);
    }
    /**
     * Get DataroomId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDataroomId()
    {
        return isset($this->DataroomId) ? $this->DataroomId : null;
    }
    /**
     * Set DataroomId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $dataroomId
     * @return \Brainloop\Soap\StructType\MailItemParameters
     */
    public function setDataroomId($dataroomId = null)
    {
        // validation for constraint: int
        if (!is_null($dataroomId) && !is_numeric($dataroomId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dataroomId)), __LINE__);
        }
        if (is_null($dataroomId) || (is_array($dataroomId) && empty($dataroomId))) {
            unset($this->DataroomId);
        } else {
            $this->DataroomId = $dataroomId;
        }
        return $this;
    }
    /**
     * Get DataroomWithProperties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfstringAndstring|null
     */
    public function getDataroomWithProperties()
    {
        return isset($this->DataroomWithProperties) ? $this->DataroomWithProperties : null;
    }
    /**
     * Set DataroomWithProperties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfstringAndstring $dataroomWithProperties
     * @return \Brainloop\Soap\StructType\MailItemParameters
     */
    public function setDataroomWithProperties(\Brainloop\Soap\ArrayType\ArrayOfstringAndstring $dataroomWithProperties = null)
    {
        if (is_null($dataroomWithProperties) || (is_array($dataroomWithProperties) && empty($dataroomWithProperties))) {
            unset($this->DataroomWithProperties);
        } else {
            $this->DataroomWithProperties = $dataroomWithProperties;
        }
        return $this;
    }
    /**
     * Get Fields value
     * @return string|null
     */
    public function getFields()
    {
        return $this->Fields;
    }
    /**
     * Set Fields value
     * @uses \Brainloop\Soap\EnumType\ItemFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fields
     * @return \Brainloop\Soap\StructType\MailItemParameters
     */
    public function setFields($fields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ItemFields::valueIsValid($fields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fields, implode(', ', \Brainloop\Soap\EnumType\ItemFields::getValidValues())), __LINE__);
        }
        $this->Fields = $fields;
        return $this;
    }
    /**
     * Get MailStatus value
     * @return string|null
     */
    public function getMailStatus()
    {
        return $this->MailStatus;
    }
    /**
     * Set MailStatus value
     * @uses \Brainloop\Soap\EnumType\MailItemStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\MailItemStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mailStatus
     * @return \Brainloop\Soap\StructType\MailItemParameters
     */
    public function setMailStatus($mailStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\MailItemStatus::valueIsValid($mailStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mailStatus, implode(', ', \Brainloop\Soap\EnumType\MailItemStatus::getValidValues())), __LINE__);
        }
        $this->MailStatus = $mailStatus;
        return $this;
    }
    /**
     * Get MailType value
     * @return string|null
     */
    public function getMailType()
    {
        return $this->MailType;
    }
    /**
     * Set MailType value
     * @uses \Brainloop\Soap\EnumType\MailItemType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\MailItemType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mailType
     * @return \Brainloop\Soap\StructType\MailItemParameters
     */
    public function setMailType($mailType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\MailItemType::valueIsValid($mailType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mailType, implode(', ', \Brainloop\Soap\EnumType\MailItemType::getValidValues())), __LINE__);
        }
        $this->MailType = $mailType;
        return $this;
    }
    /**
     * Get MaximumRowCount value
     * @return int|null
     */
    public function getMaximumRowCount()
    {
        return $this->MaximumRowCount;
    }
    /**
     * Set MaximumRowCount value
     * @param int $maximumRowCount
     * @return \Brainloop\Soap\StructType\MailItemParameters
     */
    public function setMaximumRowCount($maximumRowCount = null)
    {
        // validation for constraint: int
        if (!is_null($maximumRowCount) && !is_numeric($maximumRowCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumRowCount)), __LINE__);
        }
        $this->MaximumRowCount = $maximumRowCount;
        return $this;
    }
    /**
     * Get SearchFilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSearchFilter()
    {
        return isset($this->SearchFilter) ? $this->SearchFilter : null;
    }
    /**
     * Set SearchFilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $searchFilter
     * @return \Brainloop\Soap\StructType\MailItemParameters
     */
    public function setSearchFilter($searchFilter = null)
    {
        // validation for constraint: string
        if (!is_null($searchFilter) && !is_string($searchFilter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchFilter)), __LINE__);
        }
        if (is_null($searchFilter) || (is_array($searchFilter) && empty($searchFilter))) {
            unset($this->SearchFilter);
        } else {
            $this->SearchFilter = $searchFilter;
        }
        return $this;
    }
    /**
     * Get StartDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDate()
    {
        return isset($this->StartDate) ? $this->StartDate : null;
    }
    /**
     * Set StartDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDate
     * @return \Brainloop\Soap\StructType\MailItemParameters
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        if (is_null($startDate) || (is_array($startDate) && empty($startDate))) {
            unset($this->StartDate);
        } else {
            $this->StartDate = $startDate;
        }
        return $this;
    }
    /**
     * Get StartRowIndex value
     * @return int|null
     */
    public function getStartRowIndex()
    {
        return $this->StartRowIndex;
    }
    /**
     * Set StartRowIndex value
     * @param int $startRowIndex
     * @return \Brainloop\Soap\StructType\MailItemParameters
     */
    public function setStartRowIndex($startRowIndex = null)
    {
        // validation for constraint: int
        if (!is_null($startRowIndex) && !is_numeric($startRowIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($startRowIndex)), __LINE__);
        }
        $this->StartRowIndex = $startRowIndex;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\MailItemParameters
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
