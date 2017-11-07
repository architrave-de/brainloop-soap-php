<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStageGroupsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetStageGroupsResponse extends AbstractStructBase
{
    /**
     * The GetStageGroupsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $GetStageGroupsResult;
    /**
     * Constructor method for GetStageGroupsResponse
     * @uses GetStageGroupsResponse::setGetStageGroupsResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $getStageGroupsResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfint $getStageGroupsResult = null)
    {
        $this
            ->setGetStageGroupsResult($getStageGroupsResult);
    }
    /**
     * Get GetStageGroupsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfint|null
     */
    public function getGetStageGroupsResult()
    {
        return isset($this->GetStageGroupsResult) ? $this->GetStageGroupsResult : null;
    }
    /**
     * Set GetStageGroupsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $getStageGroupsResult
     * @return \Brainloop\Soap\StructType\GetStageGroupsResponse
     */
    public function setGetStageGroupsResult(\Brainloop\Soap\ArrayType\ArrayOfint $getStageGroupsResult = null)
    {
        if (is_null($getStageGroupsResult) || (is_array($getStageGroupsResult) && empty($getStageGroupsResult))) {
            unset($this->GetStageGroupsResult);
        } else {
            $this->GetStageGroupsResult = $getStageGroupsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetStageGroupsResponse
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
