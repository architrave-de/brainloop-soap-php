<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShareReview StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ShareReview extends AbstractStructBase
{
    /**
     * The iReviewID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iReviewID;
    /**
     * The sMessageSubject
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sMessageSubject;
    /**
     * The sMessageBody
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sMessageBody;
    /**
     * The dtMailItemDue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dtMailItemDue;
    /**
     * The dtReviewDeadline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dtReviewDeadline;
    /**
     * The aToUserIDs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $aToUserIDs;
    /**
     * The aToGroupIDs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $aToGroupIDs;
    /**
     * The aCCUserIDs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $aCCUserIDs;
    /**
     * The aCCGroupIDs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $aCCGroupIDs;
    /**
     * Constructor method for ShareReview
     * @uses ShareReview::setIReviewID()
     * @uses ShareReview::setSMessageSubject()
     * @uses ShareReview::setSMessageBody()
     * @uses ShareReview::setDtMailItemDue()
     * @uses ShareReview::setDtReviewDeadline()
     * @uses ShareReview::setAToUserIDs()
     * @uses ShareReview::setAToGroupIDs()
     * @uses ShareReview::setACCUserIDs()
     * @uses ShareReview::setACCGroupIDs()
     * @param int $iReviewID
     * @param string $sMessageSubject
     * @param string $sMessageBody
     * @param string $dtMailItemDue
     * @param string $dtReviewDeadline
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aToUserIDs
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aToGroupIDs
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aCCUserIDs
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aCCGroupIDs
     */
    public function __construct($iReviewID = null, $sMessageSubject = null, $sMessageBody = null, $dtMailItemDue = null, $dtReviewDeadline = null, \Brainloop\Soap\ArrayType\ArrayOfint $aToUserIDs = null, \Brainloop\Soap\ArrayType\ArrayOfint $aToGroupIDs = null, \Brainloop\Soap\ArrayType\ArrayOfint $aCCUserIDs = null, \Brainloop\Soap\ArrayType\ArrayOfint $aCCGroupIDs = null)
    {
        $this
            ->setIReviewID($iReviewID)
            ->setSMessageSubject($sMessageSubject)
            ->setSMessageBody($sMessageBody)
            ->setDtMailItemDue($dtMailItemDue)
            ->setDtReviewDeadline($dtReviewDeadline)
            ->setAToUserIDs($aToUserIDs)
            ->setAToGroupIDs($aToGroupIDs)
            ->setACCUserIDs($aCCUserIDs)
            ->setACCGroupIDs($aCCGroupIDs);
    }
    /**
     * Get iReviewID value
     * @return int|null
     */
    public function getIReviewID()
    {
        return $this->iReviewID;
    }
    /**
     * Set iReviewID value
     * @param int $iReviewID
     * @return \Brainloop\Soap\StructType\ShareReview
     */
    public function setIReviewID($iReviewID = null)
    {
        // validation for constraint: int
        if (!is_null($iReviewID) && !is_numeric($iReviewID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iReviewID)), __LINE__);
        }
        $this->iReviewID = $iReviewID;
        return $this;
    }
    /**
     * Get sMessageSubject value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSMessageSubject()
    {
        return isset($this->sMessageSubject) ? $this->sMessageSubject : null;
    }
    /**
     * Set sMessageSubject value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sMessageSubject
     * @return \Brainloop\Soap\StructType\ShareReview
     */
    public function setSMessageSubject($sMessageSubject = null)
    {
        // validation for constraint: string
        if (!is_null($sMessageSubject) && !is_string($sMessageSubject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sMessageSubject)), __LINE__);
        }
        if (is_null($sMessageSubject) || (is_array($sMessageSubject) && empty($sMessageSubject))) {
            unset($this->sMessageSubject);
        } else {
            $this->sMessageSubject = $sMessageSubject;
        }
        return $this;
    }
    /**
     * Get sMessageBody value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSMessageBody()
    {
        return isset($this->sMessageBody) ? $this->sMessageBody : null;
    }
    /**
     * Set sMessageBody value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sMessageBody
     * @return \Brainloop\Soap\StructType\ShareReview
     */
    public function setSMessageBody($sMessageBody = null)
    {
        // validation for constraint: string
        if (!is_null($sMessageBody) && !is_string($sMessageBody)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sMessageBody)), __LINE__);
        }
        if (is_null($sMessageBody) || (is_array($sMessageBody) && empty($sMessageBody))) {
            unset($this->sMessageBody);
        } else {
            $this->sMessageBody = $sMessageBody;
        }
        return $this;
    }
    /**
     * Get dtMailItemDue value
     * @return string|null
     */
    public function getDtMailItemDue()
    {
        return $this->dtMailItemDue;
    }
    /**
     * Set dtMailItemDue value
     * @param string $dtMailItemDue
     * @return \Brainloop\Soap\StructType\ShareReview
     */
    public function setDtMailItemDue($dtMailItemDue = null)
    {
        // validation for constraint: string
        if (!is_null($dtMailItemDue) && !is_string($dtMailItemDue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtMailItemDue)), __LINE__);
        }
        $this->dtMailItemDue = $dtMailItemDue;
        return $this;
    }
    /**
     * Get dtReviewDeadline value
     * @return string|null
     */
    public function getDtReviewDeadline()
    {
        return $this->dtReviewDeadline;
    }
    /**
     * Set dtReviewDeadline value
     * @param string $dtReviewDeadline
     * @return \Brainloop\Soap\StructType\ShareReview
     */
    public function setDtReviewDeadline($dtReviewDeadline = null)
    {
        // validation for constraint: string
        if (!is_null($dtReviewDeadline) && !is_string($dtReviewDeadline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtReviewDeadline)), __LINE__);
        }
        $this->dtReviewDeadline = $dtReviewDeadline;
        return $this;
    }
    /**
     * Get aToUserIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfint|null
     */
    public function getAToUserIDs()
    {
        return isset($this->aToUserIDs) ? $this->aToUserIDs : null;
    }
    /**
     * Set aToUserIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aToUserIDs
     * @return \Brainloop\Soap\StructType\ShareReview
     */
    public function setAToUserIDs(\Brainloop\Soap\ArrayType\ArrayOfint $aToUserIDs = null)
    {
        if (is_null($aToUserIDs) || (is_array($aToUserIDs) && empty($aToUserIDs))) {
            unset($this->aToUserIDs);
        } else {
            $this->aToUserIDs = $aToUserIDs;
        }
        return $this;
    }
    /**
     * Get aToGroupIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfint|null
     */
    public function getAToGroupIDs()
    {
        return isset($this->aToGroupIDs) ? $this->aToGroupIDs : null;
    }
    /**
     * Set aToGroupIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aToGroupIDs
     * @return \Brainloop\Soap\StructType\ShareReview
     */
    public function setAToGroupIDs(\Brainloop\Soap\ArrayType\ArrayOfint $aToGroupIDs = null)
    {
        if (is_null($aToGroupIDs) || (is_array($aToGroupIDs) && empty($aToGroupIDs))) {
            unset($this->aToGroupIDs);
        } else {
            $this->aToGroupIDs = $aToGroupIDs;
        }
        return $this;
    }
    /**
     * Get aCCUserIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfint|null
     */
    public function getACCUserIDs()
    {
        return isset($this->aCCUserIDs) ? $this->aCCUserIDs : null;
    }
    /**
     * Set aCCUserIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aCCUserIDs
     * @return \Brainloop\Soap\StructType\ShareReview
     */
    public function setACCUserIDs(\Brainloop\Soap\ArrayType\ArrayOfint $aCCUserIDs = null)
    {
        if (is_null($aCCUserIDs) || (is_array($aCCUserIDs) && empty($aCCUserIDs))) {
            unset($this->aCCUserIDs);
        } else {
            $this->aCCUserIDs = $aCCUserIDs;
        }
        return $this;
    }
    /**
     * Get aCCGroupIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfint|null
     */
    public function getACCGroupIDs()
    {
        return isset($this->aCCGroupIDs) ? $this->aCCGroupIDs : null;
    }
    /**
     * Set aCCGroupIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aCCGroupIDs
     * @return \Brainloop\Soap\StructType\ShareReview
     */
    public function setACCGroupIDs(\Brainloop\Soap\ArrayType\ArrayOfint $aCCGroupIDs = null)
    {
        if (is_null($aCCGroupIDs) || (is_array($aCCGroupIDs) && empty($aCCGroupIDs))) {
            unset($this->aCCGroupIDs);
        } else {
            $this->aCCGroupIDs = $aCCGroupIDs;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ShareReview
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
