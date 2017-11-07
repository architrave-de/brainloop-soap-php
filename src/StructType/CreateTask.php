<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateTask StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateTask extends AbstractStructBase
{
    /**
     * The iParentItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iParentItemID;
    /**
     * The sName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sName;
    /**
     * The dtEndDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dtEndDate;
    /**
     * The sDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sDescription;
    /**
     * The aContributorEmails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfstring
     */
    public $aContributorEmails;
    /**
     * The intResultsObjectID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $intResultsObjectID;
    /**
     * Constructor method for CreateTask
     * @uses CreateTask::setIParentItemID()
     * @uses CreateTask::setSName()
     * @uses CreateTask::setDtEndDate()
     * @uses CreateTask::setSDescription()
     * @uses CreateTask::setAContributorEmails()
     * @uses CreateTask::setIntResultsObjectID()
     * @param int $iParentItemID
     * @param string $sName
     * @param string $dtEndDate
     * @param string $sDescription
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $aContributorEmails
     * @param int $intResultsObjectID
     */
    public function __construct($iParentItemID = null, $sName = null, $dtEndDate = null, $sDescription = null, \Brainloop\Soap\ArrayType\ArrayOfstring $aContributorEmails = null, $intResultsObjectID = null)
    {
        $this
            ->setIParentItemID($iParentItemID)
            ->setSName($sName)
            ->setDtEndDate($dtEndDate)
            ->setSDescription($sDescription)
            ->setAContributorEmails($aContributorEmails)
            ->setIntResultsObjectID($intResultsObjectID);
    }
    /**
     * Get iParentItemID value
     * @return int|null
     */
    public function getIParentItemID()
    {
        return $this->iParentItemID;
    }
    /**
     * Set iParentItemID value
     * @param int $iParentItemID
     * @return \Brainloop\Soap\StructType\CreateTask
     */
    public function setIParentItemID($iParentItemID = null)
    {
        // validation for constraint: int
        if (!is_null($iParentItemID) && !is_numeric($iParentItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iParentItemID)), __LINE__);
        }
        $this->iParentItemID = $iParentItemID;
        return $this;
    }
    /**
     * Get sName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSName()
    {
        return isset($this->sName) ? $this->sName : null;
    }
    /**
     * Set sName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sName
     * @return \Brainloop\Soap\StructType\CreateTask
     */
    public function setSName($sName = null)
    {
        // validation for constraint: string
        if (!is_null($sName) && !is_string($sName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sName)), __LINE__);
        }
        if (is_null($sName) || (is_array($sName) && empty($sName))) {
            unset($this->sName);
        } else {
            $this->sName = $sName;
        }
        return $this;
    }
    /**
     * Get dtEndDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDtEndDate()
    {
        return isset($this->dtEndDate) ? $this->dtEndDate : null;
    }
    /**
     * Set dtEndDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dtEndDate
     * @return \Brainloop\Soap\StructType\CreateTask
     */
    public function setDtEndDate($dtEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($dtEndDate) && !is_string($dtEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtEndDate)), __LINE__);
        }
        if (is_null($dtEndDate) || (is_array($dtEndDate) && empty($dtEndDate))) {
            unset($this->dtEndDate);
        } else {
            $this->dtEndDate = $dtEndDate;
        }
        return $this;
    }
    /**
     * Get sDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSDescription()
    {
        return isset($this->sDescription) ? $this->sDescription : null;
    }
    /**
     * Set sDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sDescription
     * @return \Brainloop\Soap\StructType\CreateTask
     */
    public function setSDescription($sDescription = null)
    {
        // validation for constraint: string
        if (!is_null($sDescription) && !is_string($sDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sDescription)), __LINE__);
        }
        if (is_null($sDescription) || (is_array($sDescription) && empty($sDescription))) {
            unset($this->sDescription);
        } else {
            $this->sDescription = $sDescription;
        }
        return $this;
    }
    /**
     * Get aContributorEmails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfstring|null
     */
    public function getAContributorEmails()
    {
        return isset($this->aContributorEmails) ? $this->aContributorEmails : null;
    }
    /**
     * Set aContributorEmails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $aContributorEmails
     * @return \Brainloop\Soap\StructType\CreateTask
     */
    public function setAContributorEmails(\Brainloop\Soap\ArrayType\ArrayOfstring $aContributorEmails = null)
    {
        if (is_null($aContributorEmails) || (is_array($aContributorEmails) && empty($aContributorEmails))) {
            unset($this->aContributorEmails);
        } else {
            $this->aContributorEmails = $aContributorEmails;
        }
        return $this;
    }
    /**
     * Get intResultsObjectID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getIntResultsObjectID()
    {
        return isset($this->intResultsObjectID) ? $this->intResultsObjectID : null;
    }
    /**
     * Set intResultsObjectID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $intResultsObjectID
     * @return \Brainloop\Soap\StructType\CreateTask
     */
    public function setIntResultsObjectID($intResultsObjectID = null)
    {
        // validation for constraint: int
        if (!is_null($intResultsObjectID) && !is_numeric($intResultsObjectID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($intResultsObjectID)), __LINE__);
        }
        if (is_null($intResultsObjectID) || (is_array($intResultsObjectID) && empty($intResultsObjectID))) {
            unset($this->intResultsObjectID);
        } else {
            $this->intResultsObjectID = $intResultsObjectID;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateTask
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
