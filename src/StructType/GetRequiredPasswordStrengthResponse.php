<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRequiredPasswordStrengthResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetRequiredPasswordStrengthResponse extends AbstractStructBase
{
    /**
     * The GetRequiredPasswordStrengthResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $GetRequiredPasswordStrengthResult;
    /**
     * Constructor method for GetRequiredPasswordStrengthResponse
     * @uses GetRequiredPasswordStrengthResponse::setGetRequiredPasswordStrengthResult()
     * @param int $getRequiredPasswordStrengthResult
     */
    public function __construct($getRequiredPasswordStrengthResult = null)
    {
        $this
            ->setGetRequiredPasswordStrengthResult($getRequiredPasswordStrengthResult);
    }
    /**
     * Get GetRequiredPasswordStrengthResult value
     * @return int|null
     */
    public function getGetRequiredPasswordStrengthResult()
    {
        return $this->GetRequiredPasswordStrengthResult;
    }
    /**
     * Set GetRequiredPasswordStrengthResult value
     * @param int $getRequiredPasswordStrengthResult
     * @return \Brainloop\Soap\StructType\GetRequiredPasswordStrengthResponse
     */
    public function setGetRequiredPasswordStrengthResult($getRequiredPasswordStrengthResult = null)
    {
        // validation for constraint: int
        if (!is_null($getRequiredPasswordStrengthResult) && !is_numeric($getRequiredPasswordStrengthResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($getRequiredPasswordStrengthResult)), __LINE__);
        }
        $this->GetRequiredPasswordStrengthResult = $getRequiredPasswordStrengthResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetRequiredPasswordStrengthResponse
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
