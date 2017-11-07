<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMinPasswordLengthResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetMinPasswordLengthResponse extends AbstractStructBase
{
    /**
     * The GetMinPasswordLengthResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $GetMinPasswordLengthResult;
    /**
     * Constructor method for GetMinPasswordLengthResponse
     * @uses GetMinPasswordLengthResponse::setGetMinPasswordLengthResult()
     * @param int $getMinPasswordLengthResult
     */
    public function __construct($getMinPasswordLengthResult = null)
    {
        $this
            ->setGetMinPasswordLengthResult($getMinPasswordLengthResult);
    }
    /**
     * Get GetMinPasswordLengthResult value
     * @return int|null
     */
    public function getGetMinPasswordLengthResult()
    {
        return $this->GetMinPasswordLengthResult;
    }
    /**
     * Set GetMinPasswordLengthResult value
     * @param int $getMinPasswordLengthResult
     * @return \Brainloop\Soap\StructType\GetMinPasswordLengthResponse
     */
    public function setGetMinPasswordLengthResult($getMinPasswordLengthResult = null)
    {
        // validation for constraint: int
        if (!is_null($getMinPasswordLengthResult) && !is_numeric($getMinPasswordLengthResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($getMinPasswordLengthResult)), __LINE__);
        }
        $this->GetMinPasswordLengthResult = $getMinPasswordLengthResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetMinPasswordLengthResponse
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
