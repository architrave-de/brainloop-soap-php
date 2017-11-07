<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadInfoResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UploadInfoResponse
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class UploadInfoResponse extends AbstractStructBase
{
    /**
     * The CanResume
     * @var bool
     */
    public $CanResume;
    /**
     * The FileExists
     * @var bool
     */
    public $FileExists;
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FileName;
    /**
     * The FolderID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $FolderID;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ItemID;
    /**
     * The Length
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $Length;
    /**
     * Constructor method for UploadInfoResponse
     * @uses UploadInfoResponse::setCanResume()
     * @uses UploadInfoResponse::setFileExists()
     * @uses UploadInfoResponse::setFileName()
     * @uses UploadInfoResponse::setFolderID()
     * @uses UploadInfoResponse::setItemID()
     * @uses UploadInfoResponse::setLength()
     * @param bool $canResume
     * @param bool $fileExists
     * @param string $fileName
     * @param int $folderID
     * @param int $itemID
     * @param int $length
     */
    public function __construct($canResume = null, $fileExists = null, $fileName = null, $folderID = null, $itemID = null, $length = null)
    {
        $this
            ->setCanResume($canResume)
            ->setFileExists($fileExists)
            ->setFileName($fileName)
            ->setFolderID($folderID)
            ->setItemID($itemID)
            ->setLength($length);
    }
    /**
     * Get CanResume value
     * @return bool|null
     */
    public function getCanResume()
    {
        return $this->CanResume;
    }
    /**
     * Set CanResume value
     * @param bool $canResume
     * @return \Brainloop\Soap\StructType\UploadInfoResponse
     */
    public function setCanResume($canResume = null)
    {
        // validation for constraint: boolean
        if (!is_null($canResume) && !is_bool($canResume)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($canResume)), __LINE__);
        }
        $this->CanResume = $canResume;
        return $this;
    }
    /**
     * Get FileExists value
     * @return bool|null
     */
    public function getFileExists()
    {
        return $this->FileExists;
    }
    /**
     * Set FileExists value
     * @param bool $fileExists
     * @return \Brainloop\Soap\StructType\UploadInfoResponse
     */
    public function setFileExists($fileExists = null)
    {
        // validation for constraint: boolean
        if (!is_null($fileExists) && !is_bool($fileExists)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fileExists)), __LINE__);
        }
        $this->FileExists = $fileExists;
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
     * @return \Brainloop\Soap\StructType\UploadInfoResponse
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
     * Get FolderID value
     * @return int|null
     */
    public function getFolderID()
    {
        return $this->FolderID;
    }
    /**
     * Set FolderID value
     * @param int $folderID
     * @return \Brainloop\Soap\StructType\UploadInfoResponse
     */
    public function setFolderID($folderID = null)
    {
        // validation for constraint: int
        if (!is_null($folderID) && !is_numeric($folderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($folderID)), __LINE__);
        }
        $this->FolderID = $folderID;
        return $this;
    }
    /**
     * Get ItemID value
     * @return int|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param int $itemID
     * @return \Brainloop\Soap\StructType\UploadInfoResponse
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: int
        if (!is_null($itemID) && !is_numeric($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get Length value
     * @return int|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param int $length
     * @return \Brainloop\Soap\StructType\UploadInfoResponse
     */
    public function setLength($length = null)
    {
        // validation for constraint: int
        if (!is_null($length) && !is_numeric($length)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($length)), __LINE__);
        }
        $this->Length = $length;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\UploadInfoResponse
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
