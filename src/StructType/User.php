<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for User StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:User
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class User extends AbstractStructBase
{
    /**
     * The AccessEndDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AccessEndDate;
    /**
     * The AccessStartDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AccessStartDate;
    /**
     * The ContactInfo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\StructType\UserContactDetails
     */
    public $ContactInfo;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Email;
    /**
     * The Fields
     * @var string
     */
    public $Fields;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FirstName;
    /**
     * The FullName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FullName;
    /**
     * The HasMobile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $HasMobile;
    /**
     * The HasTOTPRegistered
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $HasTOTPRegistered;
    /**
     * The ID
     * @var int
     */
    public $ID;
    /**
     * The IsDrcDisabled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsDrcDisabled;
    /**
     * The IsMobileConfirmed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsMobileConfirmed;
    /**
     * The IsRegistered
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsRegistered;
    /**
     * The LastLogin
     * @var string
     */
    public $LastLogin;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $LastName;
    /**
     * The Mobile
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Mobile;
    /**
     * The PreferencesInfo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\StructType\UserPreferences
     */
    public $PreferencesInfo;
    /**
     * The RegionalInfo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\StructType\UserRegionalSettings
     */
    public $RegionalInfo;
    /**
     * The Signature
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Signature;
    /**
     * The UseQRCodeAuthentication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $UseQRCodeAuthentication;
    /**
     * Constructor method for User
     * @uses User::setAccessEndDate()
     * @uses User::setAccessStartDate()
     * @uses User::setContactInfo()
     * @uses User::setEmail()
     * @uses User::setFields()
     * @uses User::setFirstName()
     * @uses User::setFullName()
     * @uses User::setHasMobile()
     * @uses User::setHasTOTPRegistered()
     * @uses User::setID()
     * @uses User::setIsDrcDisabled()
     * @uses User::setIsMobileConfirmed()
     * @uses User::setIsRegistered()
     * @uses User::setLastLogin()
     * @uses User::setLastName()
     * @uses User::setMobile()
     * @uses User::setPreferencesInfo()
     * @uses User::setRegionalInfo()
     * @uses User::setSignature()
     * @uses User::setUseQRCodeAuthentication()
     * @param string $accessEndDate
     * @param string $accessStartDate
     * @param \Brainloop\Soap\StructType\UserContactDetails $contactInfo
     * @param string $email
     * @param string $fields
     * @param string $firstName
     * @param string $fullName
     * @param bool $hasMobile
     * @param bool $hasTOTPRegistered
     * @param int $iD
     * @param bool $isDrcDisabled
     * @param bool $isMobileConfirmed
     * @param bool $isRegistered
     * @param string $lastLogin
     * @param string $lastName
     * @param string $mobile
     * @param \Brainloop\Soap\StructType\UserPreferences $preferencesInfo
     * @param \Brainloop\Soap\StructType\UserRegionalSettings $regionalInfo
     * @param string $signature
     * @param bool $useQRCodeAuthentication
     */
    public function __construct($accessEndDate = null, $accessStartDate = null, \Brainloop\Soap\StructType\UserContactDetails $contactInfo = null, $email = null, $fields = null, $firstName = null, $fullName = null, $hasMobile = null, $hasTOTPRegistered = null, $iD = null, $isDrcDisabled = null, $isMobileConfirmed = null, $isRegistered = null, $lastLogin = null, $lastName = null, $mobile = null, \Brainloop\Soap\StructType\UserPreferences $preferencesInfo = null, \Brainloop\Soap\StructType\UserRegionalSettings $regionalInfo = null, $signature = null, $useQRCodeAuthentication = null)
    {
        $this
            ->setAccessEndDate($accessEndDate)
            ->setAccessStartDate($accessStartDate)
            ->setContactInfo($contactInfo)
            ->setEmail($email)
            ->setFields($fields)
            ->setFirstName($firstName)
            ->setFullName($fullName)
            ->setHasMobile($hasMobile)
            ->setHasTOTPRegistered($hasTOTPRegistered)
            ->setID($iD)
            ->setIsDrcDisabled($isDrcDisabled)
            ->setIsMobileConfirmed($isMobileConfirmed)
            ->setIsRegistered($isRegistered)
            ->setLastLogin($lastLogin)
            ->setLastName($lastName)
            ->setMobile($mobile)
            ->setPreferencesInfo($preferencesInfo)
            ->setRegionalInfo($regionalInfo)
            ->setSignature($signature)
            ->setUseQRCodeAuthentication($useQRCodeAuthentication);
    }
    /**
     * Get AccessEndDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAccessEndDate()
    {
        return isset($this->AccessEndDate) ? $this->AccessEndDate : null;
    }
    /**
     * Set AccessEndDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $accessEndDate
     * @return \Brainloop\Soap\StructType\User
     */
    public function setAccessEndDate($accessEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($accessEndDate) && !is_string($accessEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessEndDate)), __LINE__);
        }
        if (is_null($accessEndDate) || (is_array($accessEndDate) && empty($accessEndDate))) {
            unset($this->AccessEndDate);
        } else {
            $this->AccessEndDate = $accessEndDate;
        }
        return $this;
    }
    /**
     * Get AccessStartDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAccessStartDate()
    {
        return isset($this->AccessStartDate) ? $this->AccessStartDate : null;
    }
    /**
     * Set AccessStartDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $accessStartDate
     * @return \Brainloop\Soap\StructType\User
     */
    public function setAccessStartDate($accessStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($accessStartDate) && !is_string($accessStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessStartDate)), __LINE__);
        }
        if (is_null($accessStartDate) || (is_array($accessStartDate) && empty($accessStartDate))) {
            unset($this->AccessStartDate);
        } else {
            $this->AccessStartDate = $accessStartDate;
        }
        return $this;
    }
    /**
     * Get ContactInfo value
     * @return \Brainloop\Soap\StructType\UserContactDetails|null
     */
    public function getContactInfo()
    {
        return $this->ContactInfo;
    }
    /**
     * Set ContactInfo value
     * @param \Brainloop\Soap\StructType\UserContactDetails $contactInfo
     * @return \Brainloop\Soap\StructType\User
     */
    public function setContactInfo(\Brainloop\Soap\StructType\UserContactDetails $contactInfo = null)
    {
        $this->ContactInfo = $contactInfo;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \Brainloop\Soap\StructType\User
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->Email = $email;
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
     * @uses \Brainloop\Soap\EnumType\UserFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\UserFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fields
     * @return \Brainloop\Soap\StructType\User
     */
    public function setFields($fields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\UserFields::valueIsValid($fields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fields, implode(', ', \Brainloop\Soap\EnumType\UserFields::getValidValues())), __LINE__);
        }
        $this->Fields = $fields;
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \Brainloop\Soap\StructType\User
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get FullName value
     * @return string|null
     */
    public function getFullName()
    {
        return $this->FullName;
    }
    /**
     * Set FullName value
     * @param string $fullName
     * @return \Brainloop\Soap\StructType\User
     */
    public function setFullName($fullName = null)
    {
        // validation for constraint: string
        if (!is_null($fullName) && !is_string($fullName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fullName)), __LINE__);
        }
        $this->FullName = $fullName;
        return $this;
    }
    /**
     * Get HasMobile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getHasMobile()
    {
        return isset($this->HasMobile) ? $this->HasMobile : null;
    }
    /**
     * Set HasMobile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $hasMobile
     * @return \Brainloop\Soap\StructType\User
     */
    public function setHasMobile($hasMobile = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasMobile) && !is_bool($hasMobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasMobile)), __LINE__);
        }
        if (is_null($hasMobile) || (is_array($hasMobile) && empty($hasMobile))) {
            unset($this->HasMobile);
        } else {
            $this->HasMobile = $hasMobile;
        }
        return $this;
    }
    /**
     * Get HasTOTPRegistered value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getHasTOTPRegistered()
    {
        return isset($this->HasTOTPRegistered) ? $this->HasTOTPRegistered : null;
    }
    /**
     * Set HasTOTPRegistered value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $hasTOTPRegistered
     * @return \Brainloop\Soap\StructType\User
     */
    public function setHasTOTPRegistered($hasTOTPRegistered = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasTOTPRegistered) && !is_bool($hasTOTPRegistered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasTOTPRegistered)), __LINE__);
        }
        if (is_null($hasTOTPRegistered) || (is_array($hasTOTPRegistered) && empty($hasTOTPRegistered))) {
            unset($this->HasTOTPRegistered);
        } else {
            $this->HasTOTPRegistered = $hasTOTPRegistered;
        }
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
     * @return \Brainloop\Soap\StructType\User
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
     * Get IsDrcDisabled value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsDrcDisabled()
    {
        return isset($this->IsDrcDisabled) ? $this->IsDrcDisabled : null;
    }
    /**
     * Set IsDrcDisabled value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isDrcDisabled
     * @return \Brainloop\Soap\StructType\User
     */
    public function setIsDrcDisabled($isDrcDisabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDrcDisabled) && !is_bool($isDrcDisabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDrcDisabled)), __LINE__);
        }
        if (is_null($isDrcDisabled) || (is_array($isDrcDisabled) && empty($isDrcDisabled))) {
            unset($this->IsDrcDisabled);
        } else {
            $this->IsDrcDisabled = $isDrcDisabled;
        }
        return $this;
    }
    /**
     * Get IsMobileConfirmed value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsMobileConfirmed()
    {
        return isset($this->IsMobileConfirmed) ? $this->IsMobileConfirmed : null;
    }
    /**
     * Set IsMobileConfirmed value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isMobileConfirmed
     * @return \Brainloop\Soap\StructType\User
     */
    public function setIsMobileConfirmed($isMobileConfirmed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMobileConfirmed) && !is_bool($isMobileConfirmed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isMobileConfirmed)), __LINE__);
        }
        if (is_null($isMobileConfirmed) || (is_array($isMobileConfirmed) && empty($isMobileConfirmed))) {
            unset($this->IsMobileConfirmed);
        } else {
            $this->IsMobileConfirmed = $isMobileConfirmed;
        }
        return $this;
    }
    /**
     * Get IsRegistered value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsRegistered()
    {
        return isset($this->IsRegistered) ? $this->IsRegistered : null;
    }
    /**
     * Set IsRegistered value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isRegistered
     * @return \Brainloop\Soap\StructType\User
     */
    public function setIsRegistered($isRegistered = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRegistered) && !is_bool($isRegistered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRegistered)), __LINE__);
        }
        if (is_null($isRegistered) || (is_array($isRegistered) && empty($isRegistered))) {
            unset($this->IsRegistered);
        } else {
            $this->IsRegistered = $isRegistered;
        }
        return $this;
    }
    /**
     * Get LastLogin value
     * @return string|null
     */
    public function getLastLogin()
    {
        return $this->LastLogin;
    }
    /**
     * Set LastLogin value
     * @param string $lastLogin
     * @return \Brainloop\Soap\StructType\User
     */
    public function setLastLogin($lastLogin = null)
    {
        // validation for constraint: string
        if (!is_null($lastLogin) && !is_string($lastLogin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastLogin)), __LINE__);
        }
        $this->LastLogin = $lastLogin;
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \Brainloop\Soap\StructType\User
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get Mobile value
     * @return string|null
     */
    public function getMobile()
    {
        return $this->Mobile;
    }
    /**
     * Set Mobile value
     * @param string $mobile
     * @return \Brainloop\Soap\StructType\User
     */
    public function setMobile($mobile = null)
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobile)), __LINE__);
        }
        $this->Mobile = $mobile;
        return $this;
    }
    /**
     * Get PreferencesInfo value
     * @return \Brainloop\Soap\StructType\UserPreferences|null
     */
    public function getPreferencesInfo()
    {
        return $this->PreferencesInfo;
    }
    /**
     * Set PreferencesInfo value
     * @param \Brainloop\Soap\StructType\UserPreferences $preferencesInfo
     * @return \Brainloop\Soap\StructType\User
     */
    public function setPreferencesInfo(\Brainloop\Soap\StructType\UserPreferences $preferencesInfo = null)
    {
        $this->PreferencesInfo = $preferencesInfo;
        return $this;
    }
    /**
     * Get RegionalInfo value
     * @return \Brainloop\Soap\StructType\UserRegionalSettings|null
     */
    public function getRegionalInfo()
    {
        return $this->RegionalInfo;
    }
    /**
     * Set RegionalInfo value
     * @param \Brainloop\Soap\StructType\UserRegionalSettings $regionalInfo
     * @return \Brainloop\Soap\StructType\User
     */
    public function setRegionalInfo(\Brainloop\Soap\StructType\UserRegionalSettings $regionalInfo = null)
    {
        $this->RegionalInfo = $regionalInfo;
        return $this;
    }
    /**
     * Get Signature value
     * @return string|null
     */
    public function getSignature()
    {
        return $this->Signature;
    }
    /**
     * Set Signature value
     * @param string $signature
     * @return \Brainloop\Soap\StructType\User
     */
    public function setSignature($signature = null)
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signature)), __LINE__);
        }
        $this->Signature = $signature;
        return $this;
    }
    /**
     * Get UseQRCodeAuthentication value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getUseQRCodeAuthentication()
    {
        return isset($this->UseQRCodeAuthentication) ? $this->UseQRCodeAuthentication : null;
    }
    /**
     * Set UseQRCodeAuthentication value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $useQRCodeAuthentication
     * @return \Brainloop\Soap\StructType\User
     */
    public function setUseQRCodeAuthentication($useQRCodeAuthentication = null)
    {
        // validation for constraint: boolean
        if (!is_null($useQRCodeAuthentication) && !is_bool($useQRCodeAuthentication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($useQRCodeAuthentication)), __LINE__);
        }
        if (is_null($useQRCodeAuthentication) || (is_array($useQRCodeAuthentication) && empty($useQRCodeAuthentication))) {
            unset($this->UseQRCodeAuthentication);
        } else {
            $this->UseQRCodeAuthentication = $useQRCodeAuthentication;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\User
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
