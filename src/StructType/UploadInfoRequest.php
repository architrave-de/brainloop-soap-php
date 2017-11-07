<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadInfoRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UploadInfoRequest
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class UploadInfoRequest extends AbstractStructBase
{
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
     * Constructor method for UploadInfoRequest
     * @uses UploadInfoRequest::setFileName()
     * @uses UploadInfoRequest::setFolderID()
     * @uses UploadInfoRequest::setItemID()
     * @param string $fileName
     * @param int $folderID
     * @param int $itemID
     */
    public function __construct($fileName = null, $folderID = null, $itemID = null)
    {
        $this
            ->setFileName($fileName)
            ->setFolderID($folderID)
            ->setItemID($itemID);
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
     * @return \Brainloop\Soap\StructType\UploadInfoRequest
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
     * @return \Brainloop\Soap\StructType\UploadInfoRequest
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
     * @return \Brainloop\Soap\StructType\UploadInfoRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\UploadInfoRequest
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
