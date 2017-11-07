<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetUserResponse extends AbstractStructBase
{
    /**
     * The GetUserResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\User
     */
    public $GetUserResult;
    /**
     * Constructor method for GetUserResponse
     * @uses GetUserResponse::setGetUserResult()
     * @param \Brainloop\Soap\StructType\User $getUserResult
     */
    public function __construct(\Brainloop\Soap\StructType\User $getUserResult = null)
    {
        $this
            ->setGetUserResult($getUserResult);
    }
    /**
     * Get GetUserResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\User|null
     */
    public function getGetUserResult()
    {
        return isset($this->GetUserResult) ? $this->GetUserResult : null;
    }
    /**
     * Set GetUserResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\User $getUserResult
     * @return \Brainloop\Soap\StructType\GetUserResponse
     */
    public function setGetUserResult(\Brainloop\Soap\StructType\User $getUserResult = null)
    {
        if (is_null($getUserResult) || (is_array($getUserResult) && empty($getUserResult))) {
            unset($this->GetUserResult);
        } else {
            $this->GetUserResult = $getUserResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetUserResponse
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
