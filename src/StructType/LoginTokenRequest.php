<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoginTokenRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LoginTokenRequest
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class LoginTokenRequest extends AbstractStructBase
{
    /**
     * The DeviceInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DeviceInformation;
    /**
     * The IsOneTimeToken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOneTimeToken;
    /**
     * The TokenExpiry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TokenExpiry;
    /**
     * Constructor method for LoginTokenRequest
     * @uses LoginTokenRequest::setDeviceInformation()
     * @uses LoginTokenRequest::setIsOneTimeToken()
     * @uses LoginTokenRequest::setTokenExpiry()
     * @param string $deviceInformation
     * @param bool $isOneTimeToken
     * @param string $tokenExpiry
     */
    public function __construct($deviceInformation = null, $isOneTimeToken = null, $tokenExpiry = null)
    {
        $this
            ->setDeviceInformation($deviceInformation)
            ->setIsOneTimeToken($isOneTimeToken)
            ->setTokenExpiry($tokenExpiry);
    }
    /**
     * Get DeviceInformation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeviceInformation()
    {
        return isset($this->DeviceInformation) ? $this->DeviceInformation : null;
    }
    /**
     * Set DeviceInformation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deviceInformation
     * @return \Brainloop\Soap\StructType\LoginTokenRequest
     */
    public function setDeviceInformation($deviceInformation = null)
    {
        // validation for constraint: string
        if (!is_null($deviceInformation) && !is_string($deviceInformation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deviceInformation)), __LINE__);
        }
        if (is_null($deviceInformation) || (is_array($deviceInformation) && empty($deviceInformation))) {
            unset($this->DeviceInformation);
        } else {
            $this->DeviceInformation = $deviceInformation;
        }
        return $this;
    }
    /**
     * Get IsOneTimeToken value
     * @return bool|null
     */
    public function getIsOneTimeToken()
    {
        return $this->IsOneTimeToken;
    }
    /**
     * Set IsOneTimeToken value
     * @param bool $isOneTimeToken
     * @return \Brainloop\Soap\StructType\LoginTokenRequest
     */
    public function setIsOneTimeToken($isOneTimeToken = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOneTimeToken) && !is_bool($isOneTimeToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOneTimeToken)), __LINE__);
        }
        $this->IsOneTimeToken = $isOneTimeToken;
        return $this;
    }
    /**
     * Get TokenExpiry value
     * @return string|null
     */
    public function getTokenExpiry()
    {
        return $this->TokenExpiry;
    }
    /**
     * Set TokenExpiry value
     * @param string $tokenExpiry
     * @return \Brainloop\Soap\StructType\LoginTokenRequest
     */
    public function setTokenExpiry($tokenExpiry = null)
    {
        // validation for constraint: string
        if (!is_null($tokenExpiry) && !is_string($tokenExpiry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tokenExpiry)), __LINE__);
        }
        $this->TokenExpiry = $tokenExpiry;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\LoginTokenRequest
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
