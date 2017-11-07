<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportExecutionResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ReportExecutionResponse
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ReportExecutionResponse extends ReportIdentification
{
    /**
     * The Columns
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfstring
     */
    public $Columns;
    /**
     * The EstimatedCompletitionDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $EstimatedCompletitionDate;
    /**
     * The ExecutionID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string
     */
    public $ExecutionID;
    /**
     * The HasResult
     * @var bool
     */
    public $HasResult;
    /**
     * The Info
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Info;
    /**
     * The IsCompleted
     * @var bool
     */
    public $IsCompleted;
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
     * The Rows
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfArrayOfanyType
     */
    public $Rows;
    /**
     * The StartRowIndex
     * @var int
     */
    public $StartRowIndex;
    /**
     * The StartTime
     * @var string
     */
    public $StartTime;
    /**
     * The TotalRowCount
     * @var int
     */
    public $TotalRowCount;
    /**
     * Constructor method for ReportExecutionResponse
     * @uses ReportExecutionResponse::setColumns()
     * @uses ReportExecutionResponse::setEstimatedCompletitionDate()
     * @uses ReportExecutionResponse::setExecutionID()
     * @uses ReportExecutionResponse::setHasResult()
     * @uses ReportExecutionResponse::setInfo()
     * @uses ReportExecutionResponse::setIsCompleted()
     * @uses ReportExecutionResponse::setLanguage()
     * @uses ReportExecutionResponse::setMaximumRowCount()
     * @uses ReportExecutionResponse::setRows()
     * @uses ReportExecutionResponse::setStartRowIndex()
     * @uses ReportExecutionResponse::setStartTime()
     * @uses ReportExecutionResponse::setTotalRowCount()
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $columns
     * @param string $estimatedCompletitionDate
     * @param string $executionID
     * @param bool $hasResult
     * @param string $info
     * @param bool $isCompleted
     * @param string $language
     * @param int $maximumRowCount
     * @param \Brainloop\Soap\ArrayType\ArrayOfArrayOfanyType $rows
     * @param int $startRowIndex
     * @param string $startTime
     * @param int $totalRowCount
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfstring $columns = null, $estimatedCompletitionDate = null, $executionID = null, $hasResult = null, $info = null, $isCompleted = null, $language = null, $maximumRowCount = null, \Brainloop\Soap\ArrayType\ArrayOfArrayOfanyType $rows = null, $startRowIndex = null, $startTime = null, $totalRowCount = null)
    {
        $this
            ->setColumns($columns)
            ->setEstimatedCompletitionDate($estimatedCompletitionDate)
            ->setExecutionID($executionID)
            ->setHasResult($hasResult)
            ->setInfo($info)
            ->setIsCompleted($isCompleted)
            ->setLanguage($language)
            ->setMaximumRowCount($maximumRowCount)
            ->setRows($rows)
            ->setStartRowIndex($startRowIndex)
            ->setStartTime($startTime)
            ->setTotalRowCount($totalRowCount);
    }
    /**
     * Get Columns value
     * @return \Brainloop\Soap\ArrayType\ArrayOfstring|null
     */
    public function getColumns()
    {
        return $this->Columns;
    }
    /**
     * Set Columns value
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $columns
     * @return \Brainloop\Soap\StructType\ReportExecutionResponse
     */
    public function setColumns(\Brainloop\Soap\ArrayType\ArrayOfstring $columns = null)
    {
        $this->Columns = $columns;
        return $this;
    }
    /**
     * Get EstimatedCompletitionDate value
     * @return string|null
     */
    public function getEstimatedCompletitionDate()
    {
        return $this->EstimatedCompletitionDate;
    }
    /**
     * Set EstimatedCompletitionDate value
     * @param string $estimatedCompletitionDate
     * @return \Brainloop\Soap\StructType\ReportExecutionResponse
     */
    public function setEstimatedCompletitionDate($estimatedCompletitionDate = null)
    {
        // validation for constraint: string
        if (!is_null($estimatedCompletitionDate) && !is_string($estimatedCompletitionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($estimatedCompletitionDate)), __LINE__);
        }
        $this->EstimatedCompletitionDate = $estimatedCompletitionDate;
        return $this;
    }
    /**
     * Get ExecutionID value
     * @return string|null
     */
    public function getExecutionID()
    {
        return $this->ExecutionID;
    }
    /**
     * Set ExecutionID value
     * @param string $executionID
     * @return \Brainloop\Soap\StructType\ReportExecutionResponse
     */
    public function setExecutionID($executionID = null)
    {
        // validation for constraint: pattern
        if (is_scalar($executionID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $executionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}", "%s" given', var_export($executionID, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($executionID) && !is_string($executionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($executionID)), __LINE__);
        }
        $this->ExecutionID = $executionID;
        return $this;
    }
    /**
     * Get HasResult value
     * @return bool|null
     */
    public function getHasResult()
    {
        return $this->HasResult;
    }
    /**
     * Set HasResult value
     * @param bool $hasResult
     * @return \Brainloop\Soap\StructType\ReportExecutionResponse
     */
    public function setHasResult($hasResult = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasResult) && !is_bool($hasResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasResult)), __LINE__);
        }
        $this->HasResult = $hasResult;
        return $this;
    }
    /**
     * Get Info value
     * @return string|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param string $info
     * @return \Brainloop\Soap\StructType\ReportExecutionResponse
     */
    public function setInfo($info = null)
    {
        // validation for constraint: string
        if (!is_null($info) && !is_string($info)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($info)), __LINE__);
        }
        $this->Info = $info;
        return $this;
    }
    /**
     * Get IsCompleted value
     * @return bool|null
     */
    public function getIsCompleted()
    {
        return $this->IsCompleted;
    }
    /**
     * Set IsCompleted value
     * @param bool $isCompleted
     * @return \Brainloop\Soap\StructType\ReportExecutionResponse
     */
    public function setIsCompleted($isCompleted = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCompleted) && !is_bool($isCompleted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCompleted)), __LINE__);
        }
        $this->IsCompleted = $isCompleted;
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
     * @return \Brainloop\Soap\StructType\ReportExecutionResponse
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
     * @return \Brainloop\Soap\StructType\ReportExecutionResponse
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
     * Get Rows value
     * @return \Brainloop\Soap\ArrayType\ArrayOfArrayOfanyType|null
     */
    public function getRows()
    {
        return $this->Rows;
    }
    /**
     * Set Rows value
     * @param \Brainloop\Soap\ArrayType\ArrayOfArrayOfanyType $rows
     * @return \Brainloop\Soap\StructType\ReportExecutionResponse
     */
    public function setRows(\Brainloop\Soap\ArrayType\ArrayOfArrayOfanyType $rows = null)
    {
        $this->Rows = $rows;
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
     * @return \Brainloop\Soap\StructType\ReportExecutionResponse
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
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \Brainloop\Soap\StructType\ReportExecutionResponse
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get TotalRowCount value
     * @return int|null
     */
    public function getTotalRowCount()
    {
        return $this->TotalRowCount;
    }
    /**
     * Set TotalRowCount value
     * @param int $totalRowCount
     * @return \Brainloop\Soap\StructType\ReportExecutionResponse
     */
    public function setTotalRowCount($totalRowCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalRowCount) && !is_numeric($totalRowCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalRowCount)), __LINE__);
        }
        $this->TotalRowCount = $totalRowCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ReportExecutionResponse
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
