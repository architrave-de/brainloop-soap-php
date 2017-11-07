<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MobileChangeParameters StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MobileChangeParameters
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class MobileChangeParameters extends AbstractStructBase
{
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CountryCode;
    /**
     * The MobileNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MobileNumber;
    /**
     * The PIN
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PIN;
    /**
     * Constructor method for MobileChangeParameters
     * @uses MobileChangeParameters::setCountryCode()
     * @uses MobileChangeParameters::setMobileNumber()
     * @uses MobileChangeParameters::setPIN()
     * @param string $countryCode
     * @param string $mobileNumber
     * @param string $pIN
     */
    public function __construct($countryCode = null, $mobileNumber = null, $pIN = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setMobileNumber($mobileNumber)
            ->setPIN($pIN);
    }
    /**
     * Get CountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountryCode()
    {
        return isset($this->CountryCode) ? $this->CountryCode : null;
    }
    /**
     * Set CountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $countryCode
     * @return \Brainloop\Soap\StructType\MobileChangeParameters
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        if (is_null($countryCode) || (is_array($countryCode) && empty($countryCode))) {
            unset($this->CountryCode);
        } else {
            $this->CountryCode = $countryCode;
        }
        return $this;
    }
    /**
     * Get MobileNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMobileNumber()
    {
        return isset($this->MobileNumber) ? $this->MobileNumber : null;
    }
    /**
     * Set MobileNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mobileNumber
     * @return \Brainloop\Soap\StructType\MobileChangeParameters
     */
    public function setMobileNumber($mobileNumber = null)
    {
        // validation for constraint: string
        if (!is_null($mobileNumber) && !is_string($mobileNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobileNumber)), __LINE__);
        }
        if (is_null($mobileNumber) || (is_array($mobileNumber) && empty($mobileNumber))) {
            unset($this->MobileNumber);
        } else {
            $this->MobileNumber = $mobileNumber;
        }
        return $this;
    }
    /**
     * Get PIN value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPIN()
    {
        return isset($this->PIN) ? $this->PIN : null;
    }
    /**
     * Set PIN value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pIN
     * @return \Brainloop\Soap\StructType\MobileChangeParameters
     */
    public function setPIN($pIN = null)
    {
        // validation for constraint: string
        if (!is_null($pIN) && !is_string($pIN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pIN)), __LINE__);
        }
        if (is_null($pIN) || (is_array($pIN) && empty($pIN))) {
            unset($this->PIN);
        } else {
            $this->PIN = $pIN;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\MobileChangeParameters
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
