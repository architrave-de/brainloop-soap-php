<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContentItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ContentItem
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ContentItem extends TreeItem
{
    /**
     * The ContentModified
     * @var string
     */
    public $ContentModified;
    /**
     * The IsAutoVersioned
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $IsAutoVersioned;
    /**
     * The RetentionDays
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $RetentionDays;
    /**
     * The SecurityCategoryID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $SecurityCategoryID;
    /**
     * Constructor method for ContentItem
     * @uses ContentItem::setContentModified()
     * @uses ContentItem::setIsAutoVersioned()
     * @uses ContentItem::setRetentionDays()
     * @uses ContentItem::setSecurityCategoryID()
     * @param string $contentModified
     * @param bool $isAutoVersioned
     * @param int $retentionDays
     * @param int $securityCategoryID
     */
    public function __construct($contentModified = null, $isAutoVersioned = null, $retentionDays = null, $securityCategoryID = null)
    {
        $this
            ->setContentModified($contentModified)
            ->setIsAutoVersioned($isAutoVersioned)
            ->setRetentionDays($retentionDays)
            ->setSecurityCategoryID($securityCategoryID);
    }
    /**
     * Get ContentModified value
     * @return string|null
     */
    public function getContentModified()
    {
        return $this->ContentModified;
    }
    /**
     * Set ContentModified value
     * @param string $contentModified
     * @return \Brainloop\Soap\StructType\ContentItem
     */
    public function setContentModified($contentModified = null)
    {
        // validation for constraint: string
        if (!is_null($contentModified) && !is_string($contentModified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contentModified)), __LINE__);
        }
        $this->ContentModified = $contentModified;
        return $this;
    }
    /**
     * Get IsAutoVersioned value
     * @return bool|null
     */
    public function getIsAutoVersioned()
    {
        return $this->IsAutoVersioned;
    }
    /**
     * Set IsAutoVersioned value
     * @param bool $isAutoVersioned
     * @return \Brainloop\Soap\StructType\ContentItem
     */
    public function setIsAutoVersioned($isAutoVersioned = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAutoVersioned) && !is_bool($isAutoVersioned)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAutoVersioned)), __LINE__);
        }
        $this->IsAutoVersioned = $isAutoVersioned;
        return $this;
    }
    /**
     * Get RetentionDays value
     * @return int|null
     */
    public function getRetentionDays()
    {
        return $this->RetentionDays;
    }
    /**
     * Set RetentionDays value
     * @param int $retentionDays
     * @return \Brainloop\Soap\StructType\ContentItem
     */
    public function setRetentionDays($retentionDays = null)
    {
        // validation for constraint: int
        if (!is_null($retentionDays) && !is_numeric($retentionDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($retentionDays)), __LINE__);
        }
        $this->RetentionDays = $retentionDays;
        return $this;
    }
    /**
     * Get SecurityCategoryID value
     * @return int|null
     */
    public function getSecurityCategoryID()
    {
        return $this->SecurityCategoryID;
    }
    /**
     * Set SecurityCategoryID value
     * @param int $securityCategoryID
     * @return \Brainloop\Soap\StructType\ContentItem
     */
    public function setSecurityCategoryID($securityCategoryID = null)
    {
        // validation for constraint: int
        if (!is_null($securityCategoryID) && !is_numeric($securityCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($securityCategoryID)), __LINE__);
        }
        $this->SecurityCategoryID = $securityCategoryID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ContentItem
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
