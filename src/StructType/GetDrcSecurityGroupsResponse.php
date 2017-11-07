<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDrcSecurityGroupsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDrcSecurityGroupsResponse extends AbstractStructBase
{
    /**
     * The GetDrcSecurityGroupsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\SecurityGroupCollection
     */
    public $GetDrcSecurityGroupsResult;
    /**
     * Constructor method for GetDrcSecurityGroupsResponse
     * @uses GetDrcSecurityGroupsResponse::setGetDrcSecurityGroupsResult()
     * @param \Brainloop\Soap\StructType\SecurityGroupCollection $getDrcSecurityGroupsResult
     */
    public function __construct(\Brainloop\Soap\StructType\SecurityGroupCollection $getDrcSecurityGroupsResult = null)
    {
        $this
            ->setGetDrcSecurityGroupsResult($getDrcSecurityGroupsResult);
    }
    /**
     * Get GetDrcSecurityGroupsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\SecurityGroupCollection|null
     */
    public function getGetDrcSecurityGroupsResult()
    {
        return isset($this->GetDrcSecurityGroupsResult) ? $this->GetDrcSecurityGroupsResult : null;
    }
    /**
     * Set GetDrcSecurityGroupsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\SecurityGroupCollection $getDrcSecurityGroupsResult
     * @return \Brainloop\Soap\StructType\GetDrcSecurityGroupsResponse
     */
    public function setGetDrcSecurityGroupsResult(\Brainloop\Soap\StructType\SecurityGroupCollection $getDrcSecurityGroupsResult = null)
    {
        if (is_null($getDrcSecurityGroupsResult) || (is_array($getDrcSecurityGroupsResult) && empty($getDrcSecurityGroupsResult))) {
            unset($this->GetDrcSecurityGroupsResult);
        } else {
            $this->GetDrcSecurityGroupsResult = $getDrcSecurityGroupsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetDrcSecurityGroupsResponse
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
