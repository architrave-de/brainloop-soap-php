<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoginTokenRespone StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LoginTokenRespone
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class LoginTokenRespone extends AbstractStructBase
{
    /**
     * The TokenExpires
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TokenExpires;
    /**
     * The TokenId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TokenId;
    /**
     * The TokenValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TokenValue;
    /**
     * Constructor method for LoginTokenRespone
     * @uses LoginTokenRespone::setTokenExpires()
     * @uses LoginTokenRespone::setTokenId()
     * @uses LoginTokenRespone::setTokenValue()
     * @param string $tokenExpires
     * @param int $tokenId
     * @param string $tokenValue
     */
    public function __construct($tokenExpires = null, $tokenId = null, $tokenValue = null)
    {
        $this
            ->setTokenExpires($tokenExpires)
            ->setTokenId($tokenId)
            ->setTokenValue($tokenValue);
    }
    /**
     * Get TokenExpires value
     * @return string|null
     */
    public function getTokenExpires()
    {
        return $this->TokenExpires;
    }
    /**
     * Set TokenExpires value
     * @param string $tokenExpires
     * @return \Brainloop\Soap\StructType\LoginTokenRespone
     */
    public function setTokenExpires($tokenExpires = null)
    {
        // validation for constraint: string
        if (!is_null($tokenExpires) && !is_string($tokenExpires)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tokenExpires)), __LINE__);
        }
        $this->TokenExpires = $tokenExpires;
        return $this;
    }
    /**
     * Get TokenId value
     * @return int|null
     */
    public function getTokenId()
    {
        return $this->TokenId;
    }
    /**
     * Set TokenId value
     * @param int $tokenId
     * @return \Brainloop\Soap\StructType\LoginTokenRespone
     */
    public function setTokenId($tokenId = null)
    {
        // validation for constraint: int
        if (!is_null($tokenId) && !is_numeric($tokenId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tokenId)), __LINE__);
        }
        $this->TokenId = $tokenId;
        return $this;
    }
    /**
     * Get TokenValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTokenValue()
    {
        return isset($this->TokenValue) ? $this->TokenValue : null;
    }
    /**
     * Set TokenValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tokenValue
     * @return \Brainloop\Soap\StructType\LoginTokenRespone
     */
    public function setTokenValue($tokenValue = null)
    {
        // validation for constraint: string
        if (!is_null($tokenValue) && !is_string($tokenValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tokenValue)), __LINE__);
        }
        if (is_null($tokenValue) || (is_array($tokenValue) && empty($tokenValue))) {
            unset($this->TokenValue);
        } else {
            $this->TokenValue = $tokenValue;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\LoginTokenRespone
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
