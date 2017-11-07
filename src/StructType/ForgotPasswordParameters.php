<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ForgotPasswordParameters StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ForgotPasswordParameters
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ForgotPasswordParameters extends AbstractStructBase
{
    /**
     * The Login
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Login;
    /**
     * The NewPassword
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NewPassword;
    /**
     * The PIN
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PIN;
    /**
     * Constructor method for ForgotPasswordParameters
     * @uses ForgotPasswordParameters::setLogin()
     * @uses ForgotPasswordParameters::setNewPassword()
     * @uses ForgotPasswordParameters::setPIN()
     * @param string $login
     * @param string $newPassword
     * @param string $pIN
     */
    public function __construct($login = null, $newPassword = null, $pIN = null)
    {
        $this
            ->setLogin($login)
            ->setNewPassword($newPassword)
            ->setPIN($pIN);
    }
    /**
     * Get Login value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLogin()
    {
        return isset($this->Login) ? $this->Login : null;
    }
    /**
     * Set Login value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $login
     * @return \Brainloop\Soap\StructType\ForgotPasswordParameters
     */
    public function setLogin($login = null)
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($login)), __LINE__);
        }
        if (is_null($login) || (is_array($login) && empty($login))) {
            unset($this->Login);
        } else {
            $this->Login = $login;
        }
        return $this;
    }
    /**
     * Get NewPassword value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNewPassword()
    {
        return isset($this->NewPassword) ? $this->NewPassword : null;
    }
    /**
     * Set NewPassword value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $newPassword
     * @return \Brainloop\Soap\StructType\ForgotPasswordParameters
     */
    public function setNewPassword($newPassword = null)
    {
        // validation for constraint: string
        if (!is_null($newPassword) && !is_string($newPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($newPassword)), __LINE__);
        }
        if (is_null($newPassword) || (is_array($newPassword) && empty($newPassword))) {
            unset($this->NewPassword);
        } else {
            $this->NewPassword = $newPassword;
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
     * @return \Brainloop\Soap\StructType\ForgotPasswordParameters
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
     * @return \Brainloop\Soap\StructType\ForgotPasswordParameters
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
