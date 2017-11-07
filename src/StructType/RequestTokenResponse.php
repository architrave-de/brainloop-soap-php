<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestTokenResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class RequestTokenResponse extends AbstractStructBase
{
    /**
     * The RequestTokenResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RequestTokenResult;
    /**
     * Constructor method for RequestTokenResponse
     * @uses RequestTokenResponse::setRequestTokenResult()
     * @param string $requestTokenResult
     */
    public function __construct($requestTokenResult = null)
    {
        $this
            ->setRequestTokenResult($requestTokenResult);
    }
    /**
     * Get RequestTokenResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRequestTokenResult()
    {
        return isset($this->RequestTokenResult) ? $this->RequestTokenResult : null;
    }
    /**
     * Set RequestTokenResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $requestTokenResult
     * @return \Brainloop\Soap\StructType\RequestTokenResponse
     */
    public function setRequestTokenResult($requestTokenResult = null)
    {
        // validation for constraint: string
        if (!is_null($requestTokenResult) && !is_string($requestTokenResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestTokenResult)), __LINE__);
        }
        if (is_null($requestTokenResult) || (is_array($requestTokenResult) && empty($requestTokenResult))) {
            unset($this->RequestTokenResult);
        } else {
            $this->RequestTokenResult = $requestTokenResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\RequestTokenResponse
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
