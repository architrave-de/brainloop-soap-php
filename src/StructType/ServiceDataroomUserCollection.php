<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceDataroomUserCollection StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ServiceDataroomUserCollection
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ServiceDataroomUserCollection extends AbstractStructBase
{
    /**
     * The DataSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfServiceDataroomUser
     */
    public $DataSource;
    /**
     * The IsPaged
     * @var bool
     */
    public $IsPaged;
    /**
     * The MaximumRowCount
     * @var int
     */
    public $MaximumRowCount;
    /**
     * The StartRowIndex
     * @var int
     */
    public $StartRowIndex;
    /**
     * The TotalRowCount
     * @var int
     */
    public $TotalRowCount;
    /**
     * Constructor method for ServiceDataroomUserCollection
     * @uses ServiceDataroomUserCollection::setDataSource()
     * @uses ServiceDataroomUserCollection::setIsPaged()
     * @uses ServiceDataroomUserCollection::setMaximumRowCount()
     * @uses ServiceDataroomUserCollection::setStartRowIndex()
     * @uses ServiceDataroomUserCollection::setTotalRowCount()
     * @param \Brainloop\Soap\ArrayType\ArrayOfServiceDataroomUser $dataSource
     * @param bool $isPaged
     * @param int $maximumRowCount
     * @param int $startRowIndex
     * @param int $totalRowCount
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfServiceDataroomUser $dataSource = null, $isPaged = null, $maximumRowCount = null, $startRowIndex = null, $totalRowCount = null)
    {
        $this
            ->setDataSource($dataSource)
            ->setIsPaged($isPaged)
            ->setMaximumRowCount($maximumRowCount)
            ->setStartRowIndex($startRowIndex)
            ->setTotalRowCount($totalRowCount);
    }
    /**
     * Get DataSource value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfServiceDataroomUser|null
     */
    public function getDataSource()
    {
        return isset($this->DataSource) ? $this->DataSource : null;
    }
    /**
     * Set DataSource value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfServiceDataroomUser $dataSource
     * @return \Brainloop\Soap\StructType\ServiceDataroomUserCollection
     */
    public function setDataSource(\Brainloop\Soap\ArrayType\ArrayOfServiceDataroomUser $dataSource = null)
    {
        if (is_null($dataSource) || (is_array($dataSource) && empty($dataSource))) {
            unset($this->DataSource);
        } else {
            $this->DataSource = $dataSource;
        }
        return $this;
    }
    /**
     * Get IsPaged value
     * @return bool|null
     */
    public function getIsPaged()
    {
        return $this->IsPaged;
    }
    /**
     * Set IsPaged value
     * @param bool $isPaged
     * @return \Brainloop\Soap\StructType\ServiceDataroomUserCollection
     */
    public function setIsPaged($isPaged = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPaged) && !is_bool($isPaged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPaged)), __LINE__);
        }
        $this->IsPaged = $isPaged;
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
     * @return \Brainloop\Soap\StructType\ServiceDataroomUserCollection
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
     * @return \Brainloop\Soap\StructType\ServiceDataroomUserCollection
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
     * @return \Brainloop\Soap\StructType\ServiceDataroomUserCollection
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
     * @return \Brainloop\Soap\StructType\ServiceDataroomUserCollection
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
