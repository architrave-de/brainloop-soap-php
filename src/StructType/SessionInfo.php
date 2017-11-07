<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SessionInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SessionInfo
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SessionInfo extends AbstractStructBase
{
    /**
     * The APIVersion
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $APIVersion;
    /**
     * The BDRSVersion
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $BDRSVersion;
    /**
     * The IsCertificateLogin
     * @var bool
     */
    public $IsCertificateLogin;
    /**
     * The Key
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Key;
    /**
     * The SessionTimeoutMinutes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $SessionTimeoutMinutes;
    /**
     * The TokenItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $TokenItemID;
    /**
     * The Tokens
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfSessionToken
     */
    public $Tokens;
    /**
     * The UserDisabled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $UserDisabled;
    /**
     * The UserID
     * @var int
     */
    public $UserID;
    /**
     * Constructor method for SessionInfo
     * @uses SessionInfo::setAPIVersion()
     * @uses SessionInfo::setBDRSVersion()
     * @uses SessionInfo::setIsCertificateLogin()
     * @uses SessionInfo::setKey()
     * @uses SessionInfo::setSessionTimeoutMinutes()
     * @uses SessionInfo::setTokenItemID()
     * @uses SessionInfo::setTokens()
     * @uses SessionInfo::setUserDisabled()
     * @uses SessionInfo::setUserID()
     * @param string $aPIVersion
     * @param string $bDRSVersion
     * @param bool $isCertificateLogin
     * @param string $key
     * @param int $sessionTimeoutMinutes
     * @param int $tokenItemID
     * @param \Brainloop\Soap\ArrayType\ArrayOfSessionToken $tokens
     * @param bool $userDisabled
     * @param int $userID
     */
    public function __construct($aPIVersion = null, $bDRSVersion = null, $isCertificateLogin = null, $key = null, $sessionTimeoutMinutes = null, $tokenItemID = null, \Brainloop\Soap\ArrayType\ArrayOfSessionToken $tokens = null, $userDisabled = null, $userID = null)
    {
        $this
            ->setAPIVersion($aPIVersion)
            ->setBDRSVersion($bDRSVersion)
            ->setIsCertificateLogin($isCertificateLogin)
            ->setKey($key)
            ->setSessionTimeoutMinutes($sessionTimeoutMinutes)
            ->setTokenItemID($tokenItemID)
            ->setTokens($tokens)
            ->setUserDisabled($userDisabled)
            ->setUserID($userID);
    }
    /**
     * Get APIVersion value
     * @return string|null
     */
    public function getAPIVersion()
    {
        return $this->APIVersion;
    }
    /**
     * Set APIVersion value
     * @param string $aPIVersion
     * @return \Brainloop\Soap\StructType\SessionInfo
     */
    public function setAPIVersion($aPIVersion = null)
    {
        // validation for constraint: string
        if (!is_null($aPIVersion) && !is_string($aPIVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aPIVersion)), __LINE__);
        }
        $this->APIVersion = $aPIVersion;
        return $this;
    }
    /**
     * Get BDRSVersion value
     * @return string|null
     */
    public function getBDRSVersion()
    {
        return $this->BDRSVersion;
    }
    /**
     * Set BDRSVersion value
     * @param string $bDRSVersion
     * @return \Brainloop\Soap\StructType\SessionInfo
     */
    public function setBDRSVersion($bDRSVersion = null)
    {
        // validation for constraint: string
        if (!is_null($bDRSVersion) && !is_string($bDRSVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bDRSVersion)), __LINE__);
        }
        $this->BDRSVersion = $bDRSVersion;
        return $this;
    }
    /**
     * Get IsCertificateLogin value
     * @return bool|null
     */
    public function getIsCertificateLogin()
    {
        return $this->IsCertificateLogin;
    }
    /**
     * Set IsCertificateLogin value
     * @param bool $isCertificateLogin
     * @return \Brainloop\Soap\StructType\SessionInfo
     */
    public function setIsCertificateLogin($isCertificateLogin = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCertificateLogin) && !is_bool($isCertificateLogin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCertificateLogin)), __LINE__);
        }
        $this->IsCertificateLogin = $isCertificateLogin;
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Brainloop\Soap\StructType\SessionInfo
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($key)), __LINE__);
        }
        $this->Key = $key;
        return $this;
    }
    /**
     * Get SessionTimeoutMinutes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getSessionTimeoutMinutes()
    {
        return isset($this->SessionTimeoutMinutes) ? $this->SessionTimeoutMinutes : null;
    }
    /**
     * Set SessionTimeoutMinutes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $sessionTimeoutMinutes
     * @return \Brainloop\Soap\StructType\SessionInfo
     */
    public function setSessionTimeoutMinutes($sessionTimeoutMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($sessionTimeoutMinutes) && !is_numeric($sessionTimeoutMinutes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sessionTimeoutMinutes)), __LINE__);
        }
        if (is_null($sessionTimeoutMinutes) || (is_array($sessionTimeoutMinutes) && empty($sessionTimeoutMinutes))) {
            unset($this->SessionTimeoutMinutes);
        } else {
            $this->SessionTimeoutMinutes = $sessionTimeoutMinutes;
        }
        return $this;
    }
    /**
     * Get TokenItemID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTokenItemID()
    {
        return isset($this->TokenItemID) ? $this->TokenItemID : null;
    }
    /**
     * Set TokenItemID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $tokenItemID
     * @return \Brainloop\Soap\StructType\SessionInfo
     */
    public function setTokenItemID($tokenItemID = null)
    {
        // validation for constraint: int
        if (!is_null($tokenItemID) && !is_numeric($tokenItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tokenItemID)), __LINE__);
        }
        if (is_null($tokenItemID) || (is_array($tokenItemID) && empty($tokenItemID))) {
            unset($this->TokenItemID);
        } else {
            $this->TokenItemID = $tokenItemID;
        }
        return $this;
    }
    /**
     * Get Tokens value
     * @return \Brainloop\Soap\ArrayType\ArrayOfSessionToken|null
     */
    public function getTokens()
    {
        return $this->Tokens;
    }
    /**
     * Set Tokens value
     * @param \Brainloop\Soap\ArrayType\ArrayOfSessionToken $tokens
     * @return \Brainloop\Soap\StructType\SessionInfo
     */
    public function setTokens(\Brainloop\Soap\ArrayType\ArrayOfSessionToken $tokens = null)
    {
        $this->Tokens = $tokens;
        return $this;
    }
    /**
     * Get UserDisabled value
     * @return bool|null
     */
    public function getUserDisabled()
    {
        return $this->UserDisabled;
    }
    /**
     * Set UserDisabled value
     * @param bool $userDisabled
     * @return \Brainloop\Soap\StructType\SessionInfo
     */
    public function setUserDisabled($userDisabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($userDisabled) && !is_bool($userDisabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($userDisabled)), __LINE__);
        }
        $this->UserDisabled = $userDisabled;
        return $this;
    }
    /**
     * Get UserID value
     * @return int|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param int $userID
     * @return \Brainloop\Soap\StructType\SessionInfo
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: int
        if (!is_null($userID) && !is_numeric($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SessionInfo
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
