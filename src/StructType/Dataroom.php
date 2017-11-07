<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Dataroom StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Dataroom
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class Dataroom extends AbstractStructBase
{
    /**
     * The AllowSecurityCategories
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $AllowSecurityCategories;
    /**
     * The AutoIndexingEnabled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AutoIndexingEnabled;
    /**
     * The DRCID
     * @var int
     */
    public $DRCID;
    /**
     * The DRCName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $DRCName;
    /**
     * The EncryptionStatus
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $EncryptionStatus;
    /**
     * The Fields
     * @var string
     */
    public $Fields;
    /**
     * The ID
     * @var int
     */
    public $ID;
    /**
     * The IRMOptions
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $IRMOptions;
    /**
     * The MinLinkSecurity
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $MinLinkSecurity;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The Properties
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue
     */
    public $Properties;
    /**
     * The RequiresCertificate
     * @var bool
     */
    public $RequiresCertificate;
    /**
     * The RootDiscussionFolderID
     * @var int
     */
    public $RootDiscussionFolderID;
    /**
     * The RootFolderID
     * @var int
     */
    public $RootFolderID;
    /**
     * The RootTaskFolderID
     * @var int
     */
    public $RootTaskFolderID;
    /**
     * The SMSLoginPolicy
     * @var string
     */
    public $SMSLoginPolicy;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * The TOTPLoginPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TOTPLoginPolicy;
    /**
     * Constructor method for Dataroom
     * @uses Dataroom::setAllowSecurityCategories()
     * @uses Dataroom::setAutoIndexingEnabled()
     * @uses Dataroom::setDRCID()
     * @uses Dataroom::setDRCName()
     * @uses Dataroom::setEncryptionStatus()
     * @uses Dataroom::setFields()
     * @uses Dataroom::setID()
     * @uses Dataroom::setIRMOptions()
     * @uses Dataroom::setMinLinkSecurity()
     * @uses Dataroom::setName()
     * @uses Dataroom::setProperties()
     * @uses Dataroom::setRequiresCertificate()
     * @uses Dataroom::setRootDiscussionFolderID()
     * @uses Dataroom::setRootFolderID()
     * @uses Dataroom::setRootTaskFolderID()
     * @uses Dataroom::setSMSLoginPolicy()
     * @uses Dataroom::setStatus()
     * @uses Dataroom::setTOTPLoginPolicy()
     * @param bool $allowSecurityCategories
     * @param bool $autoIndexingEnabled
     * @param int $dRCID
     * @param string $dRCName
     * @param string $encryptionStatus
     * @param string $fields
     * @param int $iD
     * @param string $iRMOptions
     * @param string $minLinkSecurity
     * @param string $name
     * @param \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $properties
     * @param bool $requiresCertificate
     * @param int $rootDiscussionFolderID
     * @param int $rootFolderID
     * @param int $rootTaskFolderID
     * @param string $sMSLoginPolicy
     * @param string $status
     * @param string $tOTPLoginPolicy
     */
    public function __construct($allowSecurityCategories = null, $autoIndexingEnabled = null, $dRCID = null, $dRCName = null, $encryptionStatus = null, $fields = null, $iD = null, $iRMOptions = null, $minLinkSecurity = null, $name = null, \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $properties = null, $requiresCertificate = null, $rootDiscussionFolderID = null, $rootFolderID = null, $rootTaskFolderID = null, $sMSLoginPolicy = null, $status = null, $tOTPLoginPolicy = null)
    {
        $this
            ->setAllowSecurityCategories($allowSecurityCategories)
            ->setAutoIndexingEnabled($autoIndexingEnabled)
            ->setDRCID($dRCID)
            ->setDRCName($dRCName)
            ->setEncryptionStatus($encryptionStatus)
            ->setFields($fields)
            ->setID($iD)
            ->setIRMOptions($iRMOptions)
            ->setMinLinkSecurity($minLinkSecurity)
            ->setName($name)
            ->setProperties($properties)
            ->setRequiresCertificate($requiresCertificate)
            ->setRootDiscussionFolderID($rootDiscussionFolderID)
            ->setRootFolderID($rootFolderID)
            ->setRootTaskFolderID($rootTaskFolderID)
            ->setSMSLoginPolicy($sMSLoginPolicy)
            ->setStatus($status)
            ->setTOTPLoginPolicy($tOTPLoginPolicy);
    }
    /**
     * Get AllowSecurityCategories value
     * @return bool|null
     */
    public function getAllowSecurityCategories()
    {
        return $this->AllowSecurityCategories;
    }
    /**
     * Set AllowSecurityCategories value
     * @param bool $allowSecurityCategories
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setAllowSecurityCategories($allowSecurityCategories = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowSecurityCategories) && !is_bool($allowSecurityCategories)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowSecurityCategories)), __LINE__);
        }
        $this->AllowSecurityCategories = $allowSecurityCategories;
        return $this;
    }
    /**
     * Get AutoIndexingEnabled value
     * @return bool|null
     */
    public function getAutoIndexingEnabled()
    {
        return $this->AutoIndexingEnabled;
    }
    /**
     * Set AutoIndexingEnabled value
     * @param bool $autoIndexingEnabled
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setAutoIndexingEnabled($autoIndexingEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoIndexingEnabled) && !is_bool($autoIndexingEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($autoIndexingEnabled)), __LINE__);
        }
        $this->AutoIndexingEnabled = $autoIndexingEnabled;
        return $this;
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
     * @return \Brainloop\Soap\StructType\Dataroom
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
     * Get DRCName value
     * @return string|null
     */
    public function getDRCName()
    {
        return $this->DRCName;
    }
    /**
     * Set DRCName value
     * @param string $dRCName
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setDRCName($dRCName = null)
    {
        // validation for constraint: string
        if (!is_null($dRCName) && !is_string($dRCName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dRCName)), __LINE__);
        }
        $this->DRCName = $dRCName;
        return $this;
    }
    /**
     * Get EncryptionStatus value
     * @return string|null
     */
    public function getEncryptionStatus()
    {
        return $this->EncryptionStatus;
    }
    /**
     * Set EncryptionStatus value
     * @uses \Brainloop\Soap\EnumType\EncryptionStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\EncryptionStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $encryptionStatus
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setEncryptionStatus($encryptionStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\EncryptionStatus::valueIsValid($encryptionStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $encryptionStatus, implode(', ', \Brainloop\Soap\EnumType\EncryptionStatus::getValidValues())), __LINE__);
        }
        $this->EncryptionStatus = $encryptionStatus;
        return $this;
    }
    /**
     * Get Fields value
     * @return string|null
     */
    public function getFields()
    {
        return $this->Fields;
    }
    /**
     * Set Fields value
     * @uses \Brainloop\Soap\EnumType\DataroomFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\DataroomFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fields
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setFields($fields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\DataroomFields::valueIsValid($fields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fields, implode(', ', \Brainloop\Soap\EnumType\DataroomFields::getValidValues())), __LINE__);
        }
        $this->Fields = $fields;
        return $this;
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setID($iD = null)
    {
        // validation for constraint: int
        if (!is_null($iD) && !is_numeric($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get IRMOptions value
     * @return string|null
     */
    public function getIRMOptions()
    {
        return $this->IRMOptions;
    }
    /**
     * Set IRMOptions value
     * @uses \Brainloop\Soap\EnumType\IRMOptions::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\IRMOptions::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $iRMOptions
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setIRMOptions($iRMOptions = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\IRMOptions::valueIsValid($iRMOptions)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $iRMOptions, implode(', ', \Brainloop\Soap\EnumType\IRMOptions::getValidValues())), __LINE__);
        }
        $this->IRMOptions = $iRMOptions;
        return $this;
    }
    /**
     * Get MinLinkSecurity value
     * @return string|null
     */
    public function getMinLinkSecurity()
    {
        return $this->MinLinkSecurity;
    }
    /**
     * Set MinLinkSecurity value
     * @param string $minLinkSecurity
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setMinLinkSecurity($minLinkSecurity = null)
    {
        // validation for constraint: string
        if (!is_null($minLinkSecurity) && !is_string($minLinkSecurity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minLinkSecurity)), __LINE__);
        }
        $this->MinLinkSecurity = $minLinkSecurity;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Properties value
     * @return \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue|null
     */
    public function getProperties()
    {
        return $this->Properties;
    }
    /**
     * Set Properties value
     * @param \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $properties
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setProperties(\Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $properties = null)
    {
        $this->Properties = $properties;
        return $this;
    }
    /**
     * Get RequiresCertificate value
     * @return bool|null
     */
    public function getRequiresCertificate()
    {
        return $this->RequiresCertificate;
    }
    /**
     * Set RequiresCertificate value
     * @param bool $requiresCertificate
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setRequiresCertificate($requiresCertificate = null)
    {
        // validation for constraint: boolean
        if (!is_null($requiresCertificate) && !is_bool($requiresCertificate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($requiresCertificate)), __LINE__);
        }
        $this->RequiresCertificate = $requiresCertificate;
        return $this;
    }
    /**
     * Get RootDiscussionFolderID value
     * @return int|null
     */
    public function getRootDiscussionFolderID()
    {
        return $this->RootDiscussionFolderID;
    }
    /**
     * Set RootDiscussionFolderID value
     * @param int $rootDiscussionFolderID
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setRootDiscussionFolderID($rootDiscussionFolderID = null)
    {
        // validation for constraint: int
        if (!is_null($rootDiscussionFolderID) && !is_numeric($rootDiscussionFolderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rootDiscussionFolderID)), __LINE__);
        }
        $this->RootDiscussionFolderID = $rootDiscussionFolderID;
        return $this;
    }
    /**
     * Get RootFolderID value
     * @return int|null
     */
    public function getRootFolderID()
    {
        return $this->RootFolderID;
    }
    /**
     * Set RootFolderID value
     * @param int $rootFolderID
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setRootFolderID($rootFolderID = null)
    {
        // validation for constraint: int
        if (!is_null($rootFolderID) && !is_numeric($rootFolderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rootFolderID)), __LINE__);
        }
        $this->RootFolderID = $rootFolderID;
        return $this;
    }
    /**
     * Get RootTaskFolderID value
     * @return int|null
     */
    public function getRootTaskFolderID()
    {
        return $this->RootTaskFolderID;
    }
    /**
     * Set RootTaskFolderID value
     * @param int $rootTaskFolderID
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setRootTaskFolderID($rootTaskFolderID = null)
    {
        // validation for constraint: int
        if (!is_null($rootTaskFolderID) && !is_numeric($rootTaskFolderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rootTaskFolderID)), __LINE__);
        }
        $this->RootTaskFolderID = $rootTaskFolderID;
        return $this;
    }
    /**
     * Get SMSLoginPolicy value
     * @return string|null
     */
    public function getSMSLoginPolicy()
    {
        return $this->SMSLoginPolicy;
    }
    /**
     * Set SMSLoginPolicy value
     * @uses \Brainloop\Soap\EnumType\LoginMethods::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\LoginMethods::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sMSLoginPolicy
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setSMSLoginPolicy($sMSLoginPolicy = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\LoginMethods::valueIsValid($sMSLoginPolicy)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sMSLoginPolicy, implode(', ', \Brainloop\Soap\EnumType\LoginMethods::getValidValues())), __LINE__);
        }
        $this->SMSLoginPolicy = $sMSLoginPolicy;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Brainloop\Soap\EnumType\DataroomStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\DataroomStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\DataroomStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Brainloop\Soap\EnumType\DataroomStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get TOTPLoginPolicy value
     * @return string|null
     */
    public function getTOTPLoginPolicy()
    {
        return $this->TOTPLoginPolicy;
    }
    /**
     * Set TOTPLoginPolicy value
     * @uses \Brainloop\Soap\EnumType\LoginMethods::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\LoginMethods::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tOTPLoginPolicy
     * @return \Brainloop\Soap\StructType\Dataroom
     */
    public function setTOTPLoginPolicy($tOTPLoginPolicy = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\LoginMethods::valueIsValid($tOTPLoginPolicy)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tOTPLoginPolicy, implode(', ', \Brainloop\Soap\EnumType\LoginMethods::getValidValues())), __LINE__);
        }
        $this->TOTPLoginPolicy = $tOTPLoginPolicy;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\Dataroom
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
