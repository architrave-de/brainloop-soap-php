<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestIdentityPINResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class RequestIdentityPINResponse extends AbstractStructBase
{
    /**
     * The RequestIdentityPINResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\SessionTokenRequest
     */
    public $RequestIdentityPINResult;
    /**
     * Constructor method for RequestIdentityPINResponse
     * @uses RequestIdentityPINResponse::setRequestIdentityPINResult()
     * @param \Brainloop\Soap\StructType\SessionTokenRequest $requestIdentityPINResult
     */
    public function __construct(\Brainloop\Soap\StructType\SessionTokenRequest $requestIdentityPINResult = null)
    {
        $this
            ->setRequestIdentityPINResult($requestIdentityPINResult);
    }
    /**
     * Get RequestIdentityPINResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\SessionTokenRequest|null
     */
    public function getRequestIdentityPINResult()
    {
        return isset($this->RequestIdentityPINResult) ? $this->RequestIdentityPINResult : null;
    }
    /**
     * Set RequestIdentityPINResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\SessionTokenRequest $requestIdentityPINResult
     * @return \Brainloop\Soap\StructType\RequestIdentityPINResponse
     */
    public function setRequestIdentityPINResult(\Brainloop\Soap\StructType\SessionTokenRequest $requestIdentityPINResult = null)
    {
        if (is_null($requestIdentityPINResult) || (is_array($requestIdentityPINResult) && empty($requestIdentityPINResult))) {
            unset($this->RequestIdentityPINResult);
        } else {
            $this->RequestIdentityPINResult = $requestIdentityPINResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\RequestIdentityPINResponse
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
