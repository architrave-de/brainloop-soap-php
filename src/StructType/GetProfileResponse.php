<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProfileResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetProfileResponse extends AbstractStructBase
{
    /**
     * The GetProfileResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\User
     */
    public $GetProfileResult;
    /**
     * Constructor method for GetProfileResponse
     * @uses GetProfileResponse::setGetProfileResult()
     * @param \Brainloop\Soap\StructType\User $getProfileResult
     */
    public function __construct(\Brainloop\Soap\StructType\User $getProfileResult = null)
    {
        $this
            ->setGetProfileResult($getProfileResult);
    }
    /**
     * Get GetProfileResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\User|null
     */
    public function getGetProfileResult()
    {
        return isset($this->GetProfileResult) ? $this->GetProfileResult : null;
    }
    /**
     * Set GetProfileResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\User $getProfileResult
     * @return \Brainloop\Soap\StructType\GetProfileResponse
     */
    public function setGetProfileResult(\Brainloop\Soap\StructType\User $getProfileResult = null)
    {
        if (is_null($getProfileResult) || (is_array($getProfileResult) && empty($getProfileResult))) {
            unset($this->GetProfileResult);
        } else {
            $this->GetProfileResult = $getProfileResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetProfileResponse
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
