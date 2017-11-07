<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VersionableItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VersionableItem
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class VersionableItem extends ContentItem
{
    /**
     * The CurrentVersion
     * @var int
     */
    public $CurrentVersion;
    /**
     * The Reviews
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion
     */
    public $Reviews;
    /**
     * The Version
     * @var int
     */
    public $Version;
    /**
     * The VersionStatus
     * @var string
     */
    public $VersionStatus;
    /**
     * Constructor method for VersionableItem
     * @uses VersionableItem::setCurrentVersion()
     * @uses VersionableItem::setReviews()
     * @uses VersionableItem::setVersion()
     * @uses VersionableItem::setVersionStatus()
     * @param int $currentVersion
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion $reviews
     * @param int $version
     * @param string $versionStatus
     */
    public function __construct($currentVersion = null, \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion $reviews = null, $version = null, $versionStatus = null)
    {
        $this
            ->setCurrentVersion($currentVersion)
            ->setReviews($reviews)
            ->setVersion($version)
            ->setVersionStatus($versionStatus);
    }
    /**
     * Get CurrentVersion value
     * @return int|null
     */
    public function getCurrentVersion()
    {
        return $this->CurrentVersion;
    }
    /**
     * Set CurrentVersion value
     * @param int $currentVersion
     * @return \Brainloop\Soap\StructType\VersionableItem
     */
    public function setCurrentVersion($currentVersion = null)
    {
        // validation for constraint: int
        if (!is_null($currentVersion) && !is_numeric($currentVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($currentVersion)), __LINE__);
        }
        $this->CurrentVersion = $currentVersion;
        return $this;
    }
    /**
     * Get Reviews value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion|null
     */
    public function getReviews()
    {
        return isset($this->Reviews) ? $this->Reviews : null;
    }
    /**
     * Set Reviews value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion $reviews
     * @return \Brainloop\Soap\StructType\VersionableItem
     */
    public function setReviews(\Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion $reviews = null)
    {
        if (is_null($reviews) || (is_array($reviews) && empty($reviews))) {
            unset($this->Reviews);
        } else {
            $this->Reviews = $reviews;
        }
        return $this;
    }
    /**
     * Get Version value
     * @return int|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \Brainloop\Soap\StructType\VersionableItem
     */
    public function setVersion($version = null)
    {
        // validation for constraint: int
        if (!is_null($version) && !is_numeric($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Get VersionStatus value
     * @return string|null
     */
    public function getVersionStatus()
    {
        return $this->VersionStatus;
    }
    /**
     * Set VersionStatus value
     * @uses \Brainloop\Soap\EnumType\VersionStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\VersionStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $versionStatus
     * @return \Brainloop\Soap\StructType\VersionableItem
     */
    public function setVersionStatus($versionStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\VersionStatus::valueIsValid($versionStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $versionStatus, implode(', ', \Brainloop\Soap\EnumType\VersionStatus::getValidValues())), __LINE__);
        }
        $this->VersionStatus = $versionStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\VersionableItem
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
