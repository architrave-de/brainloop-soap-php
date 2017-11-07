<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNextStageGroupsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetNextStageGroupsResponse extends AbstractStructBase
{
    /**
     * The GetNextStageGroupsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $GetNextStageGroupsResult;
    /**
     * Constructor method for GetNextStageGroupsResponse
     * @uses GetNextStageGroupsResponse::setGetNextStageGroupsResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $getNextStageGroupsResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfint $getNextStageGroupsResult = null)
    {
        $this
            ->setGetNextStageGroupsResult($getNextStageGroupsResult);
    }
    /**
     * Get GetNextStageGroupsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfint|null
     */
    public function getGetNextStageGroupsResult()
    {
        return isset($this->GetNextStageGroupsResult) ? $this->GetNextStageGroupsResult : null;
    }
    /**
     * Set GetNextStageGroupsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $getNextStageGroupsResult
     * @return \Brainloop\Soap\StructType\GetNextStageGroupsResponse
     */
    public function setGetNextStageGroupsResult(\Brainloop\Soap\ArrayType\ArrayOfint $getNextStageGroupsResult = null)
    {
        if (is_null($getNextStageGroupsResult) || (is_array($getNextStageGroupsResult) && empty($getNextStageGroupsResult))) {
            unset($this->GetNextStageGroupsResult);
        } else {
            $this->GetNextStageGroupsResult = $getNextStageGroupsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetNextStageGroupsResponse
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
