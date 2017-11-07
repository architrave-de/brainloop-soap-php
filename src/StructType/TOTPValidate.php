<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TOTPValidate StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class TOTPValidate extends AbstractStructBase
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
     * The sTOTP
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sTOTP;
    /**
     * Constructor method for TOTPValidate
     * @uses TOTPValidate::setSSessionID()
     * @uses TOTPValidate::setSTOTP()
     * @param string $sSessionID
     * @param string $sTOTP
     */
    public function __construct($sSessionID = null, $sTOTP = null)
    {
        $this
            ->setSSessionID($sSessionID)
            ->setSTOTP($sTOTP);
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
     * @return \Brainloop\Soap\StructType\TOTPValidate
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
     * Get sTOTP value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSTOTP()
    {
        return isset($this->sTOTP) ? $this->sTOTP : null;
    }
    /**
     * Set sTOTP value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sTOTP
     * @return \Brainloop\Soap\StructType\TOTPValidate
     */
    public function setSTOTP($sTOTP = null)
    {
        // validation for constraint: string
        if (!is_null($sTOTP) && !is_string($sTOTP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sTOTP)), __LINE__);
        }
        if (is_null($sTOTP) || (is_array($sTOTP) && empty($sTOTP))) {
            unset($this->sTOTP);
        } else {
            $this->sTOTP = $sTOTP;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\TOTPValidate
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
