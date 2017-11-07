<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetURLForSentItemResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetURLForSentItemResponse extends AbstractStructBase
{
    /**
     * The GetURLForSentItemResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GetURLForSentItemResult;
    /**
     * Constructor method for GetURLForSentItemResponse
     * @uses GetURLForSentItemResponse::setGetURLForSentItemResult()
     * @param string $getURLForSentItemResult
     */
    public function __construct($getURLForSentItemResult = null)
    {
        $this
            ->setGetURLForSentItemResult($getURLForSentItemResult);
    }
    /**
     * Get GetURLForSentItemResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGetURLForSentItemResult()
    {
        return isset($this->GetURLForSentItemResult) ? $this->GetURLForSentItemResult : null;
    }
    /**
     * Set GetURLForSentItemResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $getURLForSentItemResult
     * @return \Brainloop\Soap\StructType\GetURLForSentItemResponse
     */
    public function setGetURLForSentItemResult($getURLForSentItemResult = null)
    {
        // validation for constraint: string
        if (!is_null($getURLForSentItemResult) && !is_string($getURLForSentItemResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getURLForSentItemResult)), __LINE__);
        }
        if (is_null($getURLForSentItemResult) || (is_array($getURLForSentItemResult) && empty($getURLForSentItemResult))) {
            unset($this->GetURLForSentItemResult);
        } else {
            $this->GetURLForSentItemResult = $getURLForSentItemResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetURLForSentItemResponse
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
