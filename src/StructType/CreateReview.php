<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReview StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateReview extends AbstractStructBase
{
    /**
     * The iItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iItemID;
    /**
     * The iItemVersion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iItemVersion;
    /**
     * The sTitle
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sTitle;
    /**
     * The eReviewStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eReviewStatus;
    /**
     * Constructor method for CreateReview
     * @uses CreateReview::setIItemID()
     * @uses CreateReview::setIItemVersion()
     * @uses CreateReview::setSTitle()
     * @uses CreateReview::setEReviewStatus()
     * @param int $iItemID
     * @param int $iItemVersion
     * @param string $sTitle
     * @param string $eReviewStatus
     */
    public function __construct($iItemID = null, $iItemVersion = null, $sTitle = null, $eReviewStatus = null)
    {
        $this
            ->setIItemID($iItemID)
            ->setIItemVersion($iItemVersion)
            ->setSTitle($sTitle)
            ->setEReviewStatus($eReviewStatus);
    }
    /**
     * Get iItemID value
     * @return int|null
     */
    public function getIItemID()
    {
        return $this->iItemID;
    }
    /**
     * Set iItemID value
     * @param int $iItemID
     * @return \Brainloop\Soap\StructType\CreateReview
     */
    public function setIItemID($iItemID = null)
    {
        // validation for constraint: int
        if (!is_null($iItemID) && !is_numeric($iItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iItemID)), __LINE__);
        }
        $this->iItemID = $iItemID;
        return $this;
    }
    /**
     * Get iItemVersion value
     * @return int|null
     */
    public function getIItemVersion()
    {
        return $this->iItemVersion;
    }
    /**
     * Set iItemVersion value
     * @param int $iItemVersion
     * @return \Brainloop\Soap\StructType\CreateReview
     */
    public function setIItemVersion($iItemVersion = null)
    {
        // validation for constraint: int
        if (!is_null($iItemVersion) && !is_numeric($iItemVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iItemVersion)), __LINE__);
        }
        $this->iItemVersion = $iItemVersion;
        return $this;
    }
    /**
     * Get sTitle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSTitle()
    {
        return isset($this->sTitle) ? $this->sTitle : null;
    }
    /**
     * Set sTitle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sTitle
     * @return \Brainloop\Soap\StructType\CreateReview
     */
    public function setSTitle($sTitle = null)
    {
        // validation for constraint: string
        if (!is_null($sTitle) && !is_string($sTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sTitle)), __LINE__);
        }
        if (is_null($sTitle) || (is_array($sTitle) && empty($sTitle))) {
            unset($this->sTitle);
        } else {
            $this->sTitle = $sTitle;
        }
        return $this;
    }
    /**
     * Get eReviewStatus value
     * @return string|null
     */
    public function getEReviewStatus()
    {
        return $this->eReviewStatus;
    }
    /**
     * Set eReviewStatus value
     * @uses \Brainloop\Soap\EnumType\ReviewStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ReviewStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eReviewStatus
     * @return \Brainloop\Soap\StructType\CreateReview
     */
    public function setEReviewStatus($eReviewStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ReviewStatus::valueIsValid($eReviewStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eReviewStatus, implode(', ', \Brainloop\Soap\EnumType\ReviewStatus::getValidValues())), __LINE__);
        }
        $this->eReviewStatus = $eReviewStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateReview
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
