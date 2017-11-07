<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownloadItemParameters StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DownloadItemParameters
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class DownloadItemParameters extends DownloadParameters
{
    /**
     * The AllowRMS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $AllowRMS;
    /**
     * The DownloadType
     * @var string
     */
    public $DownloadType;
    /**
     * The ItemID
     * @var int
     */
    public $ItemID;
    /**
     * The ThumbnailHeight
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ThumbnailHeight;
    /**
     * The ThumbnailWidth
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ThumbnailWidth;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Version;
    /**
     * Constructor method for DownloadItemParameters
     * @uses DownloadItemParameters::setAllowRMS()
     * @uses DownloadItemParameters::setDownloadType()
     * @uses DownloadItemParameters::setItemID()
     * @uses DownloadItemParameters::setThumbnailHeight()
     * @uses DownloadItemParameters::setThumbnailWidth()
     * @uses DownloadItemParameters::setVersion()
     * @param bool $allowRMS
     * @param string $downloadType
     * @param int $itemID
     * @param int $thumbnailHeight
     * @param int $thumbnailWidth
     * @param int $version
     */
    public function __construct($allowRMS = null, $downloadType = null, $itemID = null, $thumbnailHeight = null, $thumbnailWidth = null, $version = null)
    {
        $this
            ->setAllowRMS($allowRMS)
            ->setDownloadType($downloadType)
            ->setItemID($itemID)
            ->setThumbnailHeight($thumbnailHeight)
            ->setThumbnailWidth($thumbnailWidth)
            ->setVersion($version);
    }
    /**
     * Get AllowRMS value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getAllowRMS()
    {
        return isset($this->AllowRMS) ? $this->AllowRMS : null;
    }
    /**
     * Set AllowRMS value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $allowRMS
     * @return \Brainloop\Soap\StructType\DownloadItemParameters
     */
    public function setAllowRMS($allowRMS = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowRMS) && !is_bool($allowRMS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowRMS)), __LINE__);
        }
        if (is_null($allowRMS) || (is_array($allowRMS) && empty($allowRMS))) {
            unset($this->AllowRMS);
        } else {
            $this->AllowRMS = $allowRMS;
        }
        return $this;
    }
    /**
     * Get DownloadType value
     * @return string|null
     */
    public function getDownloadType()
    {
        return $this->DownloadType;
    }
    /**
     * Set DownloadType value
     * @uses \Brainloop\Soap\EnumType\DownloadType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\DownloadType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $downloadType
     * @return \Brainloop\Soap\StructType\DownloadItemParameters
     */
    public function setDownloadType($downloadType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\DownloadType::valueIsValid($downloadType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $downloadType, implode(', ', \Brainloop\Soap\EnumType\DownloadType::getValidValues())), __LINE__);
        }
        $this->DownloadType = $downloadType;
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
     * @return \Brainloop\Soap\StructType\DownloadItemParameters
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
     * Get ThumbnailHeight value
     * @return int|null
     */
    public function getThumbnailHeight()
    {
        return $this->ThumbnailHeight;
    }
    /**
     * Set ThumbnailHeight value
     * @param int $thumbnailHeight
     * @return \Brainloop\Soap\StructType\DownloadItemParameters
     */
    public function setThumbnailHeight($thumbnailHeight = null)
    {
        // validation for constraint: int
        if (!is_null($thumbnailHeight) && !is_numeric($thumbnailHeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($thumbnailHeight)), __LINE__);
        }
        $this->ThumbnailHeight = $thumbnailHeight;
        return $this;
    }
    /**
     * Get ThumbnailWidth value
     * @return int|null
     */
    public function getThumbnailWidth()
    {
        return $this->ThumbnailWidth;
    }
    /**
     * Set ThumbnailWidth value
     * @param int $thumbnailWidth
     * @return \Brainloop\Soap\StructType\DownloadItemParameters
     */
    public function setThumbnailWidth($thumbnailWidth = null)
    {
        // validation for constraint: int
        if (!is_null($thumbnailWidth) && !is_numeric($thumbnailWidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($thumbnailWidth)), __LINE__);
        }
        $this->ThumbnailWidth = $thumbnailWidth;
        return $this;
    }
    /**
     * Get Version value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getVersion()
    {
        return isset($this->Version) ? $this->Version : null;
    }
    /**
     * Set Version value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $version
     * @return \Brainloop\Soap\StructType\DownloadItemParameters
     */
    public function setVersion($version = null)
    {
        // validation for constraint: int
        if (!is_null($version) && !is_numeric($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($version)), __LINE__);
        }
        if (is_null($version) || (is_array($version) && empty($version))) {
            unset($this->Version);
        } else {
            $this->Version = $version;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\DownloadItemParameters
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
