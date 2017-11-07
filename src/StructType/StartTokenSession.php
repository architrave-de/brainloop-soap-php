<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartTokenSession StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class StartTokenSession extends AbstractStructBase
{
    /**
     * The sUsername
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sUsername;
    /**
     * The sUsernameToken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sUsernameToken;
    /**
     * The sPasswordToken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sPasswordToken;
    /**
     * Constructor method for StartTokenSession
     * @uses StartTokenSession::setSUsername()
     * @uses StartTokenSession::setSUsernameToken()
     * @uses StartTokenSession::setSPasswordToken()
     * @param string $sUsername
     * @param string $sUsernameToken
     * @param string $sPasswordToken
     */
    public function __construct($sUsername = null, $sUsernameToken = null, $sPasswordToken = null)
    {
        $this
            ->setSUsername($sUsername)
            ->setSUsernameToken($sUsernameToken)
            ->setSPasswordToken($sPasswordToken);
    }
    /**
     * Get sUsername value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSUsername()
    {
        return isset($this->sUsername) ? $this->sUsername : null;
    }
    /**
     * Set sUsername value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sUsername
     * @return \Brainloop\Soap\StructType\StartTokenSession
     */
    public function setSUsername($sUsername = null)
    {
        // validation for constraint: string
        if (!is_null($sUsername) && !is_string($sUsername)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sUsername)), __LINE__);
        }
        if (is_null($sUsername) || (is_array($sUsername) && empty($sUsername))) {
            unset($this->sUsername);
        } else {
            $this->sUsername = $sUsername;
        }
        return $this;
    }
    /**
     * Get sUsernameToken value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSUsernameToken()
    {
        return isset($this->sUsernameToken) ? $this->sUsernameToken : null;
    }
    /**
     * Set sUsernameToken value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sUsernameToken
     * @return \Brainloop\Soap\StructType\StartTokenSession
     */
    public function setSUsernameToken($sUsernameToken = null)
    {
        // validation for constraint: string
        if (!is_null($sUsernameToken) && !is_string($sUsernameToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sUsernameToken)), __LINE__);
        }
        if (is_null($sUsernameToken) || (is_array($sUsernameToken) && empty($sUsernameToken))) {
            unset($this->sUsernameToken);
        } else {
            $this->sUsernameToken = $sUsernameToken;
        }
        return $this;
    }
    /**
     * Get sPasswordToken value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSPasswordToken()
    {
        return isset($this->sPasswordToken) ? $this->sPasswordToken : null;
    }
    /**
     * Set sPasswordToken value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sPasswordToken
     * @return \Brainloop\Soap\StructType\StartTokenSession
     */
    public function setSPasswordToken($sPasswordToken = null)
    {
        // validation for constraint: string
        if (!is_null($sPasswordToken) && !is_string($sPasswordToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sPasswordToken)), __LINE__);
        }
        if (is_null($sPasswordToken) || (is_array($sPasswordToken) && empty($sPasswordToken))) {
            unset($this->sPasswordToken);
        } else {
            $this->sPasswordToken = $sPasswordToken;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\StartTokenSession
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
