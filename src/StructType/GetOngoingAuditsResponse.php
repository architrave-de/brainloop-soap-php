<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOngoingAuditsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetOngoingAuditsResponse extends AbstractStructBase
{
    /**
     * The GetOngoingAuditsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfOngoingAudit
     */
    public $GetOngoingAuditsResult;
    /**
     * Constructor method for GetOngoingAuditsResponse
     * @uses GetOngoingAuditsResponse::setGetOngoingAuditsResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfOngoingAudit $getOngoingAuditsResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfOngoingAudit $getOngoingAuditsResult = null)
    {
        $this
            ->setGetOngoingAuditsResult($getOngoingAuditsResult);
    }
    /**
     * Get GetOngoingAuditsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfOngoingAudit|null
     */
    public function getGetOngoingAuditsResult()
    {
        return isset($this->GetOngoingAuditsResult) ? $this->GetOngoingAuditsResult : null;
    }
    /**
     * Set GetOngoingAuditsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfOngoingAudit $getOngoingAuditsResult
     * @return \Brainloop\Soap\StructType\GetOngoingAuditsResponse
     */
    public function setGetOngoingAuditsResult(\Brainloop\Soap\ArrayType\ArrayOfOngoingAudit $getOngoingAuditsResult = null)
    {
        if (is_null($getOngoingAuditsResult) || (is_array($getOngoingAuditsResult) && empty($getOngoingAuditsResult))) {
            unset($this->GetOngoingAuditsResult);
        } else {
            $this->GetOngoingAuditsResult = $getOngoingAuditsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetOngoingAuditsResponse
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
