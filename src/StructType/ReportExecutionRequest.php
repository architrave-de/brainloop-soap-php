<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportExecutionRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ReportExecutionRequest
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ReportExecutionRequest extends ReportIdentification
{
    /**
     * The DateTimeType
     * @var string
     */
    public $DateTimeType;
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * The MaximumRowCount
     * @var int
     */
    public $MaximumRowCount;
    /**
     * The ParameterValues
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfNameValue
     */
    public $ParameterValues;
    /**
     * The Schedule
     * @var bool
     */
    public $Schedule;
    /**
     * The SortDirection
     * @var string
     */
    public $SortDirection;
    /**
     * The SortExpression
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $SortExpression;
    /**
     * The StartRowIndex
     * @var int
     */
    public $StartRowIndex;
    /**
     * Constructor method for ReportExecutionRequest
     * @uses ReportExecutionRequest::setDateTimeType()
     * @uses ReportExecutionRequest::setLanguage()
     * @uses ReportExecutionRequest::setMaximumRowCount()
     * @uses ReportExecutionRequest::setParameterValues()
     * @uses ReportExecutionRequest::setSchedule()
     * @uses ReportExecutionRequest::setSortDirection()
     * @uses ReportExecutionRequest::setSortExpression()
     * @uses ReportExecutionRequest::setStartRowIndex()
     * @param string $dateTimeType
     * @param string $language
     * @param int $maximumRowCount
     * @param \Brainloop\Soap\ArrayType\ArrayOfNameValue $parameterValues
     * @param bool $schedule
     * @param string $sortDirection
     * @param string $sortExpression
     * @param int $startRowIndex
     */
    public function __construct($dateTimeType = null, $language = null, $maximumRowCount = null, \Brainloop\Soap\ArrayType\ArrayOfNameValue $parameterValues = null, $schedule = null, $sortDirection = null, $sortExpression = null, $startRowIndex = null)
    {
        $this
            ->setDateTimeType($dateTimeType)
            ->setLanguage($language)
            ->setMaximumRowCount($maximumRowCount)
            ->setParameterValues($parameterValues)
            ->setSchedule($schedule)
            ->setSortDirection($sortDirection)
            ->setSortExpression($sortExpression)
            ->setStartRowIndex($startRowIndex);
    }
    /**
     * Get DateTimeType value
     * @return string|null
     */
    public function getDateTimeType()
    {
        return $this->DateTimeType;
    }
    /**
     * Set DateTimeType value
     * @uses \Brainloop\Soap\EnumType\ReportDateTimeType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ReportDateTimeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dateTimeType
     * @return \Brainloop\Soap\StructType\ReportExecutionRequest
     */
    public function setDateTimeType($dateTimeType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ReportDateTimeType::valueIsValid($dateTimeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dateTimeType, implode(', ', \Brainloop\Soap\EnumType\ReportDateTimeType::getValidValues())), __LINE__);
        }
        $this->DateTimeType = $dateTimeType;
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @uses \Brainloop\Soap\EnumType\ReportLanguage::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ReportLanguage::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $language
     * @return \Brainloop\Soap\StructType\ReportExecutionRequest
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ReportLanguage::valueIsValid($language)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $language, implode(', ', \Brainloop\Soap\EnumType\ReportLanguage::getValidValues())), __LINE__);
        }
        $this->Language = $language;
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
     * @return \Brainloop\Soap\StructType\ReportExecutionRequest
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
     * Get ParameterValues value
     * @return \Brainloop\Soap\ArrayType\ArrayOfNameValue|null
     */
    public function getParameterValues()
    {
        return $this->ParameterValues;
    }
    /**
     * Set ParameterValues value
     * @param \Brainloop\Soap\ArrayType\ArrayOfNameValue $parameterValues
     * @return \Brainloop\Soap\StructType\ReportExecutionRequest
     */
    public function setParameterValues(\Brainloop\Soap\ArrayType\ArrayOfNameValue $parameterValues = null)
    {
        $this->ParameterValues = $parameterValues;
        return $this;
    }
    /**
     * Get Schedule value
     * @return bool|null
     */
    public function getSchedule()
    {
        return $this->Schedule;
    }
    /**
     * Set Schedule value
     * @param bool $schedule
     * @return \Brainloop\Soap\StructType\ReportExecutionRequest
     */
    public function setSchedule($schedule = null)
    {
        // validation for constraint: boolean
        if (!is_null($schedule) && !is_bool($schedule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($schedule)), __LINE__);
        }
        $this->Schedule = $schedule;
        return $this;
    }
    /**
     * Get SortDirection value
     * @return string|null
     */
    public function getSortDirection()
    {
        return $this->SortDirection;
    }
    /**
     * Set SortDirection value
     * @uses \Brainloop\Soap\EnumType\ReportSortDirection::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ReportSortDirection::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortDirection
     * @return \Brainloop\Soap\StructType\ReportExecutionRequest
     */
    public function setSortDirection($sortDirection = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ReportSortDirection::valueIsValid($sortDirection)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sortDirection, implode(', ', \Brainloop\Soap\EnumType\ReportSortDirection::getValidValues())), __LINE__);
        }
        $this->SortDirection = $sortDirection;
        return $this;
    }
    /**
     * Get SortExpression value
     * @return string|null
     */
    public function getSortExpression()
    {
        return $this->SortExpression;
    }
    /**
     * Set SortExpression value
     * @param string $sortExpression
     * @return \Brainloop\Soap\StructType\ReportExecutionRequest
     */
    public function setSortExpression($sortExpression = null)
    {
        // validation for constraint: string
        if (!is_null($sortExpression) && !is_string($sortExpression)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sortExpression)), __LINE__);
        }
        $this->SortExpression = $sortExpression;
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
     * @return \Brainloop\Soap\StructType\ReportExecutionRequest
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
     * @return \Brainloop\Soap\StructType\ReportExecutionRequest
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
