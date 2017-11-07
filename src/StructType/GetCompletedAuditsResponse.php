<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCompletedAuditsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetCompletedAuditsResponse extends AbstractStructBase
{
    /**
     * The GetCompletedAuditsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfAudit
     */
    public $GetCompletedAuditsResult;
    /**
     * Constructor method for GetCompletedAuditsResponse
     * @uses GetCompletedAuditsResponse::setGetCompletedAuditsResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfAudit $getCompletedAuditsResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfAudit $getCompletedAuditsResult = null)
    {
        $this
            ->setGetCompletedAuditsResult($getCompletedAuditsResult);
    }
    /**
     * Get GetCompletedAuditsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfAudit|null
     */
    public function getGetCompletedAuditsResult()
    {
        return isset($this->GetCompletedAuditsResult) ? $this->GetCompletedAuditsResult : null;
    }
    /**
     * Set GetCompletedAuditsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfAudit $getCompletedAuditsResult
     * @return \Brainloop\Soap\StructType\GetCompletedAuditsResponse
     */
    public function setGetCompletedAuditsResult(\Brainloop\Soap\ArrayType\ArrayOfAudit $getCompletedAuditsResult = null)
    {
        if (is_null($getCompletedAuditsResult) || (is_array($getCompletedAuditsResult) && empty($getCompletedAuditsResult))) {
            unset($this->GetCompletedAuditsResult);
        } else {
            $this->GetCompletedAuditsResult = $getCompletedAuditsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetCompletedAuditsResponse
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
