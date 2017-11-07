<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMultipleBrainmarkStylesResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetMultipleBrainmarkStylesResponse extends AbstractStructBase
{
    /**
     * The GetMultipleBrainmarkStylesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfItemIDAndBrainmarkStyle
     */
    public $GetMultipleBrainmarkStylesResult;
    /**
     * Constructor method for GetMultipleBrainmarkStylesResponse
     * @uses GetMultipleBrainmarkStylesResponse::setGetMultipleBrainmarkStylesResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemIDAndBrainmarkStyle $getMultipleBrainmarkStylesResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfItemIDAndBrainmarkStyle $getMultipleBrainmarkStylesResult = null)
    {
        $this
            ->setGetMultipleBrainmarkStylesResult($getMultipleBrainmarkStylesResult);
    }
    /**
     * Get GetMultipleBrainmarkStylesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemIDAndBrainmarkStyle|null
     */
    public function getGetMultipleBrainmarkStylesResult()
    {
        return isset($this->GetMultipleBrainmarkStylesResult) ? $this->GetMultipleBrainmarkStylesResult : null;
    }
    /**
     * Set GetMultipleBrainmarkStylesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemIDAndBrainmarkStyle $getMultipleBrainmarkStylesResult
     * @return \Brainloop\Soap\StructType\GetMultipleBrainmarkStylesResponse
     */
    public function setGetMultipleBrainmarkStylesResult(\Brainloop\Soap\ArrayType\ArrayOfItemIDAndBrainmarkStyle $getMultipleBrainmarkStylesResult = null)
    {
        if (is_null($getMultipleBrainmarkStylesResult) || (is_array($getMultipleBrainmarkStylesResult) && empty($getMultipleBrainmarkStylesResult))) {
            unset($this->GetMultipleBrainmarkStylesResult);
        } else {
            $this->GetMultipleBrainmarkStylesResult = $getMultipleBrainmarkStylesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetMultipleBrainmarkStylesResponse
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
