<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestLoginTokenResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class RequestLoginTokenResponse extends AbstractStructBase
{
    /**
     * The RequestLoginTokenResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\LoginTokenRespone
     */
    public $RequestLoginTokenResult;
    /**
     * Constructor method for RequestLoginTokenResponse
     * @uses RequestLoginTokenResponse::setRequestLoginTokenResult()
     * @param \Brainloop\Soap\StructType\LoginTokenRespone $requestLoginTokenResult
     */
    public function __construct(\Brainloop\Soap\StructType\LoginTokenRespone $requestLoginTokenResult = null)
    {
        $this
            ->setRequestLoginTokenResult($requestLoginTokenResult);
    }
    /**
     * Get RequestLoginTokenResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\LoginTokenRespone|null
     */
    public function getRequestLoginTokenResult()
    {
        return isset($this->RequestLoginTokenResult) ? $this->RequestLoginTokenResult : null;
    }
    /**
     * Set RequestLoginTokenResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\LoginTokenRespone $requestLoginTokenResult
     * @return \Brainloop\Soap\StructType\RequestLoginTokenResponse
     */
    public function setRequestLoginTokenResult(\Brainloop\Soap\StructType\LoginTokenRespone $requestLoginTokenResult = null)
    {
        if (is_null($requestLoginTokenResult) || (is_array($requestLoginTokenResult) && empty($requestLoginTokenResult))) {
            unset($this->RequestLoginTokenResult);
        } else {
            $this->RequestLoginTokenResult = $requestLoginTokenResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\RequestLoginTokenResponse
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
