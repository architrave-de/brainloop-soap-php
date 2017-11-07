<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPasswordExpirationDateResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetPasswordExpirationDateResponse extends AbstractStructBase
{
    /**
     * The GetPasswordExpirationDateResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GetPasswordExpirationDateResult;
    /**
     * Constructor method for GetPasswordExpirationDateResponse
     * @uses GetPasswordExpirationDateResponse::setGetPasswordExpirationDateResult()
     * @param string $getPasswordExpirationDateResult
     */
    public function __construct($getPasswordExpirationDateResult = null)
    {
        $this
            ->setGetPasswordExpirationDateResult($getPasswordExpirationDateResult);
    }
    /**
     * Get GetPasswordExpirationDateResult value
     * @return string|null
     */
    public function getGetPasswordExpirationDateResult()
    {
        return $this->GetPasswordExpirationDateResult;
    }
    /**
     * Set GetPasswordExpirationDateResult value
     * @param string $getPasswordExpirationDateResult
     * @return \Brainloop\Soap\StructType\GetPasswordExpirationDateResponse
     */
    public function setGetPasswordExpirationDateResult($getPasswordExpirationDateResult = null)
    {
        // validation for constraint: string
        if (!is_null($getPasswordExpirationDateResult) && !is_string($getPasswordExpirationDateResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getPasswordExpirationDateResult)), __LINE__);
        }
        $this->GetPasswordExpirationDateResult = $getPasswordExpirationDateResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetPasswordExpirationDateResponse
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
