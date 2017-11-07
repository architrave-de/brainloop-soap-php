<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SMSValidate StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SMSValidate extends AbstractStructBase
{
    /**
     * The sSessionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sSessionID;
    /**
     * The sPIN
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sPIN;
    /**
     * Constructor method for SMSValidate
     * @uses SMSValidate::setSSessionID()
     * @uses SMSValidate::setSPIN()
     * @param string $sSessionID
     * @param string $sPIN
     */
    public function __construct($sSessionID = null, $sPIN = null)
    {
        $this
            ->setSSessionID($sSessionID)
            ->setSPIN($sPIN);
    }
    /**
     * Get sSessionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSSessionID()
    {
        return isset($this->sSessionID) ? $this->sSessionID : null;
    }
    /**
     * Set sSessionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sSessionID
     * @return \Brainloop\Soap\StructType\SMSValidate
     */
    public function setSSessionID($sSessionID = null)
    {
        // validation for constraint: string
        if (!is_null($sSessionID) && !is_string($sSessionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sSessionID)), __LINE__);
        }
        if (is_null($sSessionID) || (is_array($sSessionID) && empty($sSessionID))) {
            unset($this->sSessionID);
        } else {
            $this->sSessionID = $sSessionID;
        }
        return $this;
    }
    /**
     * Get sPIN value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSPIN()
    {
        return isset($this->sPIN) ? $this->sPIN : null;
    }
    /**
     * Set sPIN value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sPIN
     * @return \Brainloop\Soap\StructType\SMSValidate
     */
    public function setSPIN($sPIN = null)
    {
        // validation for constraint: string
        if (!is_null($sPIN) && !is_string($sPIN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sPIN)), __LINE__);
        }
        if (is_null($sPIN) || (is_array($sPIN) && empty($sPIN))) {
            unset($this->sPIN);
        } else {
            $this->sPIN = $sPIN;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SMSValidate
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
