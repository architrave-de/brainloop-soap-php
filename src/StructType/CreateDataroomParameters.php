<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDataroomParameters StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CreateDataroomParameters
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateDataroomParameters extends AbstractStructBase
{
    /**
     * The DataroomTemplateID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DataroomTemplateID;
    /**
     * The DrcID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DrcID;
    /**
     * The EncryptionStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EncryptionStatus;
    /**
     * The LoginMethods
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LoginMethods;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The OwnerEmail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OwnerEmail;
    /**
     * The TimeoutInSeconds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TimeoutInSeconds;
    /**
     * Constructor method for CreateDataroomParameters
     * @uses CreateDataroomParameters::setDataroomTemplateID()
     * @uses CreateDataroomParameters::setDrcID()
     * @uses CreateDataroomParameters::setEncryptionStatus()
     * @uses CreateDataroomParameters::setLoginMethods()
     * @uses CreateDataroomParameters::setName()
     * @uses CreateDataroomParameters::setOwnerEmail()
     * @uses CreateDataroomParameters::setTimeoutInSeconds()
     * @param int $dataroomTemplateID
     * @param int $drcID
     * @param string $encryptionStatus
     * @param string $loginMethods
     * @param string $name
     * @param string $ownerEmail
     * @param int $timeoutInSeconds
     */
    public function __construct($dataroomTemplateID = null, $drcID = null, $encryptionStatus = null, $loginMethods = null, $name = null, $ownerEmail = null, $timeoutInSeconds = null)
    {
        $this
            ->setDataroomTemplateID($dataroomTemplateID)
            ->setDrcID($drcID)
            ->setEncryptionStatus($encryptionStatus)
            ->setLoginMethods($loginMethods)
            ->setName($name)
            ->setOwnerEmail($ownerEmail)
            ->setTimeoutInSeconds($timeoutInSeconds);
    }
    /**
     * Get DataroomTemplateID value
     * @return int|null
     */
    public function getDataroomTemplateID()
    {
        return $this->DataroomTemplateID;
    }
    /**
     * Set DataroomTemplateID value
     * @param int $dataroomTemplateID
     * @return \Brainloop\Soap\StructType\CreateDataroomParameters
     */
    public function setDataroomTemplateID($dataroomTemplateID = null)
    {
        // validation for constraint: int
        if (!is_null($dataroomTemplateID) && !is_numeric($dataroomTemplateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dataroomTemplateID)), __LINE__);
        }
        $this->DataroomTemplateID = $dataroomTemplateID;
        return $this;
    }
    /**
     * Get DrcID value
     * @return int|null
     */
    public function getDrcID()
    {
        return $this->DrcID;
    }
    /**
     * Set DrcID value
     * @param int $drcID
     * @return \Brainloop\Soap\StructType\CreateDataroomParameters
     */
    public function setDrcID($drcID = null)
    {
        // validation for constraint: int
        if (!is_null($drcID) && !is_numeric($drcID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($drcID)), __LINE__);
        }
        $this->DrcID = $drcID;
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
     * @return \Brainloop\Soap\StructType\CreateDataroomParameters
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
     * Get LoginMethods value
     * @return string|null
     */
    public function getLoginMethods()
    {
        return $this->LoginMethods;
    }
    /**
     * Set LoginMethods value
     * @uses \Brainloop\Soap\EnumType\LoginMethods::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\LoginMethods::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $loginMethods
     * @return \Brainloop\Soap\StructType\CreateDataroomParameters
     */
    public function setLoginMethods($loginMethods = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\LoginMethods::valueIsValid($loginMethods)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $loginMethods, implode(', ', \Brainloop\Soap\EnumType\LoginMethods::getValidValues())), __LINE__);
        }
        $this->LoginMethods = $loginMethods;
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Brainloop\Soap\StructType\CreateDataroomParameters
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get OwnerEmail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOwnerEmail()
    {
        return isset($this->OwnerEmail) ? $this->OwnerEmail : null;
    }
    /**
     * Set OwnerEmail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ownerEmail
     * @return \Brainloop\Soap\StructType\CreateDataroomParameters
     */
    public function setOwnerEmail($ownerEmail = null)
    {
        // validation for constraint: string
        if (!is_null($ownerEmail) && !is_string($ownerEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ownerEmail)), __LINE__);
        }
        if (is_null($ownerEmail) || (is_array($ownerEmail) && empty($ownerEmail))) {
            unset($this->OwnerEmail);
        } else {
            $this->OwnerEmail = $ownerEmail;
        }
        return $this;
    }
    /**
     * Get TimeoutInSeconds value
     * @return int|null
     */
    public function getTimeoutInSeconds()
    {
        return $this->TimeoutInSeconds;
    }
    /**
     * Set TimeoutInSeconds value
     * @param int $timeoutInSeconds
     * @return \Brainloop\Soap\StructType\CreateDataroomParameters
     */
    public function setTimeoutInSeconds($timeoutInSeconds = null)
    {
        // validation for constraint: int
        if (!is_null($timeoutInSeconds) && !is_numeric($timeoutInSeconds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($timeoutInSeconds)), __LINE__);
        }
        $this->TimeoutInSeconds = $timeoutInSeconds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateDataroomParameters
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
