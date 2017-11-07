<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReviewResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetReviewResponse extends AbstractStructBase
{
    /**
     * The GetReviewResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Review
     */
    public $GetReviewResult;
    /**
     * Constructor method for GetReviewResponse
     * @uses GetReviewResponse::setGetReviewResult()
     * @param \Brainloop\Soap\StructType\Review $getReviewResult
     */
    public function __construct(\Brainloop\Soap\StructType\Review $getReviewResult = null)
    {
        $this
            ->setGetReviewResult($getReviewResult);
    }
    /**
     * Get GetReviewResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Review|null
     */
    public function getGetReviewResult()
    {
        return isset($this->GetReviewResult) ? $this->GetReviewResult : null;
    }
    /**
     * Set GetReviewResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Review $getReviewResult
     * @return \Brainloop\Soap\StructType\GetReviewResponse
     */
    public function setGetReviewResult(\Brainloop\Soap\StructType\Review $getReviewResult = null)
    {
        if (is_null($getReviewResult) || (is_array($getReviewResult) && empty($getReviewResult))) {
            unset($this->GetReviewResult);
        } else {
            $this->GetReviewResult = $getReviewResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetReviewResponse
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
