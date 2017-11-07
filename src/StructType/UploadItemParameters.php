<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadItemParameters StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UploadItemParameters
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class UploadItemParameters extends UploadParameters
{
    /**
     * The AddToWatchList
     * @var bool
     */
    public $AddToWatchList;
    /**
     * The CreateNewVersion
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $CreateNewVersion;
    /**
     * The FileDescription
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FileDescription;
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
     * Constructor method for UploadItemParameters
     * @uses UploadItemParameters::setAddToWatchList()
     * @uses UploadItemParameters::setCreateNewVersion()
     * @uses UploadItemParameters::setFileDescription()
     * @uses UploadItemParameters::setFolderID()
     * @uses UploadItemParameters::setItemID()
     * @param bool $addToWatchList
     * @param bool $createNewVersion
     * @param string $fileDescription
     * @param int $folderID
     * @param int $itemID
     */
    public function __construct($addToWatchList = null, $createNewVersion = null, $fileDescription = null, $folderID = null, $itemID = null)
    {
        $this
            ->setAddToWatchList($addToWatchList)
            ->setCreateNewVersion($createNewVersion)
            ->setFileDescription($fileDescription)
            ->setFolderID($folderID)
            ->setItemID($itemID);
    }
    /**
     * Get AddToWatchList value
     * @return bool|null
     */
    public function getAddToWatchList()
    {
        return $this->AddToWatchList;
    }
    /**
     * Set AddToWatchList value
     * @param bool $addToWatchList
     * @return \Brainloop\Soap\StructType\UploadItemParameters
     */
    public function setAddToWatchList($addToWatchList = null)
    {
        // validation for constraint: boolean
        if (!is_null($addToWatchList) && !is_bool($addToWatchList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($addToWatchList)), __LINE__);
        }
        $this->AddToWatchList = $addToWatchList;
        return $this;
    }
    /**
     * Get CreateNewVersion value
     * @return bool|null
     */
    public function getCreateNewVersion()
    {
        return $this->CreateNewVersion;
    }
    /**
     * Set CreateNewVersion value
     * @param bool $createNewVersion
     * @return \Brainloop\Soap\StructType\UploadItemParameters
     */
    public function setCreateNewVersion($createNewVersion = null)
    {
        // validation for constraint: boolean
        if (!is_null($createNewVersion) && !is_bool($createNewVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($createNewVersion)), __LINE__);
        }
        $this->CreateNewVersion = $createNewVersion;
        return $this;
    }
    /**
     * Get FileDescription value
     * @return string|null
     */
    public function getFileDescription()
    {
        return $this->FileDescription;
    }
    /**
     * Set FileDescription value
     * @param string $fileDescription
     * @return \Brainloop\Soap\StructType\UploadItemParameters
     */
    public function setFileDescription($fileDescription = null)
    {
        // validation for constraint: string
        if (!is_null($fileDescription) && !is_string($fileDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileDescription)), __LINE__);
        }
        $this->FileDescription = $fileDescription;
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
     * @return \Brainloop\Soap\StructType\UploadItemParameters
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
     * @return \Brainloop\Soap\StructType\UploadItemParameters
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
     * @return \Brainloop\Soap\StructType\UploadItemParameters
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
