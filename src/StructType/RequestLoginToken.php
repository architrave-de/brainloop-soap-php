<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestLoginToken StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class RequestLoginToken extends AbstractStructBase
{
    /**
     * The sSessionKey
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sSessionKey;
    /**
     * The oLoginTokenRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\LoginTokenRequest
     */
    public $oLoginTokenRequest;
    /**
     * Constructor method for RequestLoginToken
     * @uses RequestLoginToken::setSSessionKey()
     * @uses RequestLoginToken::setOLoginTokenRequest()
     * @param string $sSessionKey
     * @param \Brainloop\Soap\StructType\LoginTokenRequest $oLoginTokenRequest
     */
    public function __construct($sSessionKey = null, \Brainloop\Soap\StructType\LoginTokenRequest $oLoginTokenRequest = null)
    {
        $this
            ->setSSessionKey($sSessionKey)
            ->setOLoginTokenRequest($oLoginTokenRequest);
    }
    /**
     * Get sSessionKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSSessionKey()
    {
        return isset($this->sSessionKey) ? $this->sSessionKey : null;
    }
    /**
     * Set sSessionKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sSessionKey
     * @return \Brainloop\Soap\StructType\RequestLoginToken
     */
    public function setSSessionKey($sSessionKey = null)
    {
        // validation for constraint: string
        if (!is_null($sSessionKey) && !is_string($sSessionKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sSessionKey)), __LINE__);
        }
        if (is_null($sSessionKey) || (is_array($sSessionKey) && empty($sSessionKey))) {
            unset($this->sSessionKey);
        } else {
            $this->sSessionKey = $sSessionKey;
        }
        return $this;
    }
    /**
     * Get oLoginTokenRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\LoginTokenRequest|null
     */
    public function getOLoginTokenRequest()
    {
        return isset($this->oLoginTokenRequest) ? $this->oLoginTokenRequest : null;
    }
    /**
     * Set oLoginTokenRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\LoginTokenRequest $oLoginTokenRequest
     * @return \Brainloop\Soap\StructType\RequestLoginToken
     */
    public function setOLoginTokenRequest(\Brainloop\Soap\StructType\LoginTokenRequest $oLoginTokenRequest = null)
    {
        if (is_null($oLoginTokenRequest) || (is_array($oLoginTokenRequest) && empty($oLoginTokenRequest))) {
            unset($this->oLoginTokenRequest);
        } else {
            $this->oLoginTokenRequest = $oLoginTokenRequest;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\RequestLoginToken
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
