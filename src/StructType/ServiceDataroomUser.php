<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceDataroomUser StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ServiceDataroomUser
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ServiceDataroomUser extends User
{
    /**
     * The DataroomID
     * @var int
     */
    public $DataroomID;
    /**
     * The DataroomStatus
     * @var string
     */
    public $DataroomStatus;
    /**
     * The LastDRAccess
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $LastDRAccess;
    /**
     * The MaxTotalFileSizeMB
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxTotalFileSizeMB;
    /**
     * The TotalFileSizeMB
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $TotalFileSizeMB;
    /**
     * Constructor method for ServiceDataroomUser
     * @uses ServiceDataroomUser::setDataroomID()
     * @uses ServiceDataroomUser::setDataroomStatus()
     * @uses ServiceDataroomUser::setLastDRAccess()
     * @uses ServiceDataroomUser::setMaxTotalFileSizeMB()
     * @uses ServiceDataroomUser::setTotalFileSizeMB()
     * @param int $dataroomID
     * @param string $dataroomStatus
     * @param string $lastDRAccess
     * @param int $maxTotalFileSizeMB
     * @param float $totalFileSizeMB
     */
    public function __construct($dataroomID = null, $dataroomStatus = null, $lastDRAccess = null, $maxTotalFileSizeMB = null, $totalFileSizeMB = null)
    {
        $this
            ->setDataroomID($dataroomID)
            ->setDataroomStatus($dataroomStatus)
            ->setLastDRAccess($lastDRAccess)
            ->setMaxTotalFileSizeMB($maxTotalFileSizeMB)
            ->setTotalFileSizeMB($totalFileSizeMB);
    }
    /**
     * Get DataroomID value
     * @return int|null
     */
    public function getDataroomID()
    {
        return $this->DataroomID;
    }
    /**
     * Set DataroomID value
     * @param int $dataroomID
     * @return \Brainloop\Soap\StructType\ServiceDataroomUser
     */
    public function setDataroomID($dataroomID = null)
    {
        // validation for constraint: int
        if (!is_null($dataroomID) && !is_numeric($dataroomID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dataroomID)), __LINE__);
        }
        $this->DataroomID = $dataroomID;
        return $this;
    }
    /**
     * Get DataroomStatus value
     * @return string|null
     */
    public function getDataroomStatus()
    {
        return $this->DataroomStatus;
    }
    /**
     * Set DataroomStatus value
     * @uses \Brainloop\Soap\EnumType\DataroomStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\DataroomStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dataroomStatus
     * @return \Brainloop\Soap\StructType\ServiceDataroomUser
     */
    public function setDataroomStatus($dataroomStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\DataroomStatus::valueIsValid($dataroomStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dataroomStatus, implode(', ', \Brainloop\Soap\EnumType\DataroomStatus::getValidValues())), __LINE__);
        }
        $this->DataroomStatus = $dataroomStatus;
        return $this;
    }
    /**
     * Get LastDRAccess value
     * @return string|null
     */
    public function getLastDRAccess()
    {
        return $this->LastDRAccess;
    }
    /**
     * Set LastDRAccess value
     * @param string $lastDRAccess
     * @return \Brainloop\Soap\StructType\ServiceDataroomUser
     */
    public function setLastDRAccess($lastDRAccess = null)
    {
        // validation for constraint: string
        if (!is_null($lastDRAccess) && !is_string($lastDRAccess)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastDRAccess)), __LINE__);
        }
        $this->LastDRAccess = $lastDRAccess;
        return $this;
    }
    /**
     * Get MaxTotalFileSizeMB value
     * @return int|null
     */
    public function getMaxTotalFileSizeMB()
    {
        return $this->MaxTotalFileSizeMB;
    }
    /**
     * Set MaxTotalFileSizeMB value
     * @param int $maxTotalFileSizeMB
     * @return \Brainloop\Soap\StructType\ServiceDataroomUser
     */
    public function setMaxTotalFileSizeMB($maxTotalFileSizeMB = null)
    {
        // validation for constraint: int
        if (!is_null($maxTotalFileSizeMB) && !is_numeric($maxTotalFileSizeMB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxTotalFileSizeMB)), __LINE__);
        }
        $this->MaxTotalFileSizeMB = $maxTotalFileSizeMB;
        return $this;
    }
    /**
     * Get TotalFileSizeMB value
     * @return float|null
     */
    public function getTotalFileSizeMB()
    {
        return $this->TotalFileSizeMB;
    }
    /**
     * Set TotalFileSizeMB value
     * @param float $totalFileSizeMB
     * @return \Brainloop\Soap\StructType\ServiceDataroomUser
     */
    public function setTotalFileSizeMB($totalFileSizeMB = null)
    {
        $this->TotalFileSizeMB = $totalFileSizeMB;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ServiceDataroomUser
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
