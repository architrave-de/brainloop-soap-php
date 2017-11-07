<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegisterUserResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class RegisterUserResponse extends AbstractStructBase
{
    /**
     * The RegisterUserResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\User
     */
    public $RegisterUserResult;
    /**
     * Constructor method for RegisterUserResponse
     * @uses RegisterUserResponse::setRegisterUserResult()
     * @param \Brainloop\Soap\StructType\User $registerUserResult
     */
    public function __construct(\Brainloop\Soap\StructType\User $registerUserResult = null)
    {
        $this
            ->setRegisterUserResult($registerUserResult);
    }
    /**
     * Get RegisterUserResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\User|null
     */
    public function getRegisterUserResult()
    {
        return isset($this->RegisterUserResult) ? $this->RegisterUserResult : null;
    }
    /**
     * Set RegisterUserResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\User $registerUserResult
     * @return \Brainloop\Soap\StructType\RegisterUserResponse
     */
    public function setRegisterUserResult(\Brainloop\Soap\StructType\User $registerUserResult = null)
    {
        if (is_null($registerUserResult) || (is_array($registerUserResult) && empty($registerUserResult))) {
            unset($this->RegisterUserResult);
        } else {
            $this->RegisterUserResult = $registerUserResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\RegisterUserResponse
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
