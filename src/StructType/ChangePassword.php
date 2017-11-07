<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangePassword StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ChangePassword extends AbstractStructBase
{
    /**
     * The sOldPassword
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sOldPassword;
    /**
     * The sNewPassword
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sNewPassword;
    /**
     * Constructor method for ChangePassword
     * @uses ChangePassword::setSOldPassword()
     * @uses ChangePassword::setSNewPassword()
     * @param string $sOldPassword
     * @param string $sNewPassword
     */
    public function __construct($sOldPassword = null, $sNewPassword = null)
    {
        $this
            ->setSOldPassword($sOldPassword)
            ->setSNewPassword($sNewPassword);
    }
    /**
     * Get sOldPassword value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSOldPassword()
    {
        return isset($this->sOldPassword) ? $this->sOldPassword : null;
    }
    /**
     * Set sOldPassword value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sOldPassword
     * @return \Brainloop\Soap\StructType\ChangePassword
     */
    public function setSOldPassword($sOldPassword = null)
    {
        // validation for constraint: string
        if (!is_null($sOldPassword) && !is_string($sOldPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sOldPassword)), __LINE__);
        }
        if (is_null($sOldPassword) || (is_array($sOldPassword) && empty($sOldPassword))) {
            unset($this->sOldPassword);
        } else {
            $this->sOldPassword = $sOldPassword;
        }
        return $this;
    }
    /**
     * Get sNewPassword value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSNewPassword()
    {
        return isset($this->sNewPassword) ? $this->sNewPassword : null;
    }
    /**
     * Set sNewPassword value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sNewPassword
     * @return \Brainloop\Soap\StructType\ChangePassword
     */
    public function setSNewPassword($sNewPassword = null)
    {
        // validation for constraint: string
        if (!is_null($sNewPassword) && !is_string($sNewPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sNewPassword)), __LINE__);
        }
        if (is_null($sNewPassword) || (is_array($sNewPassword) && empty($sNewPassword))) {
            unset($this->sNewPassword);
        } else {
            $this->sNewPassword = $sNewPassword;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ChangePassword
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
