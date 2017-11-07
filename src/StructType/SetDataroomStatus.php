<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetDataroomStatus StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetDataroomStatus extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The dataroomStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dataroomStatus;
    /**
     * Constructor method for SetDataroomStatus
     * @uses SetDataroomStatus::setIDataroomID()
     * @uses SetDataroomStatus::setDataroomStatus()
     * @param int $iDataroomID
     * @param string $dataroomStatus
     */
    public function __construct($iDataroomID = null, $dataroomStatus = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setDataroomStatus($dataroomStatus);
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
     * @return \Brainloop\Soap\StructType\SetDataroomStatus
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
     * Get dataroomStatus value
     * @return string|null
     */
    public function getDataroomStatus()
    {
        return $this->dataroomStatus;
    }
    /**
     * Set dataroomStatus value
     * @uses \Brainloop\Soap\EnumType\DataroomStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\DataroomStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dataroomStatus
     * @return \Brainloop\Soap\StructType\SetDataroomStatus
     */
    public function setDataroomStatus($dataroomStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\DataroomStatus::valueIsValid($dataroomStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dataroomStatus, implode(', ', \Brainloop\Soap\EnumType\DataroomStatus::getValidValues())), __LINE__);
        }
        $this->dataroomStatus = $dataroomStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SetDataroomStatus
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
