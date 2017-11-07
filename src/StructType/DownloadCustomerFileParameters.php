<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownloadCustomerFileParameters StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DownloadCustomerFileParameters
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class DownloadCustomerFileParameters extends DownloadParameters
{
    /**
     * The DRCID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $DRCID;
    /**
     * The DataroomID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $DataroomID;
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FileName;
    /**
     * The FileType
     * @var string
     */
    public $FileType;
    /**
     * Constructor method for DownloadCustomerFileParameters
     * @uses DownloadCustomerFileParameters::setDRCID()
     * @uses DownloadCustomerFileParameters::setDataroomID()
     * @uses DownloadCustomerFileParameters::setFileName()
     * @uses DownloadCustomerFileParameters::setFileType()
     * @param int $dRCID
     * @param int $dataroomID
     * @param string $fileName
     * @param string $fileType
     */
    public function __construct($dRCID = null, $dataroomID = null, $fileName = null, $fileType = null)
    {
        $this
            ->setDRCID($dRCID)
            ->setDataroomID($dataroomID)
            ->setFileName($fileName)
            ->setFileType($fileType);
    }
    /**
     * Get DRCID value
     * @return int|null
     */
    public function getDRCID()
    {
        return $this->DRCID;
    }
    /**
     * Set DRCID value
     * @param int $dRCID
     * @return \Brainloop\Soap\StructType\DownloadCustomerFileParameters
     */
    public function setDRCID($dRCID = null)
    {
        // validation for constraint: int
        if (!is_null($dRCID) && !is_numeric($dRCID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dRCID)), __LINE__);
        }
        $this->DRCID = $dRCID;
        return $this;
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
     * @return \Brainloop\Soap\StructType\DownloadCustomerFileParameters
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
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \Brainloop\Soap\StructType\DownloadCustomerFileParameters
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
        return $this;
    }
    /**
     * Get FileType value
     * @return string|null
     */
    public function getFileType()
    {
        return $this->FileType;
    }
    /**
     * Set FileType value
     * @uses \Brainloop\Soap\EnumType\CustomerFileTypes::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\CustomerFileTypes::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fileType
     * @return \Brainloop\Soap\StructType\DownloadCustomerFileParameters
     */
    public function setFileType($fileType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\CustomerFileTypes::valueIsValid($fileType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fileType, implode(', ', \Brainloop\Soap\EnumType\CustomerFileTypes::getValidValues())), __LINE__);
        }
        $this->FileType = $fileType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\DownloadCustomerFileParameters
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
