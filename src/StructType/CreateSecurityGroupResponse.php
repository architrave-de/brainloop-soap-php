<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateSecurityGroupResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateSecurityGroupResponse extends AbstractStructBase
{
    /**
     * The CreateSecurityGroupResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\SecurityGroup
     */
    public $CreateSecurityGroupResult;
    /**
     * Constructor method for CreateSecurityGroupResponse
     * @uses CreateSecurityGroupResponse::setCreateSecurityGroupResult()
     * @param \Brainloop\Soap\StructType\SecurityGroup $createSecurityGroupResult
     */
    public function __construct(\Brainloop\Soap\StructType\SecurityGroup $createSecurityGroupResult = null)
    {
        $this
            ->setCreateSecurityGroupResult($createSecurityGroupResult);
    }
    /**
     * Get CreateSecurityGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\SecurityGroup|null
     */
    public function getCreateSecurityGroupResult()
    {
        return isset($this->CreateSecurityGroupResult) ? $this->CreateSecurityGroupResult : null;
    }
    /**
     * Set CreateSecurityGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\SecurityGroup $createSecurityGroupResult
     * @return \Brainloop\Soap\StructType\CreateSecurityGroupResponse
     */
    public function setCreateSecurityGroupResult(\Brainloop\Soap\StructType\SecurityGroup $createSecurityGroupResult = null)
    {
        if (is_null($createSecurityGroupResult) || (is_array($createSecurityGroupResult) && empty($createSecurityGroupResult))) {
            unset($this->CreateSecurityGroupResult);
        } else {
            $this->CreateSecurityGroupResult = $createSecurityGroupResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateSecurityGroupResponse
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
