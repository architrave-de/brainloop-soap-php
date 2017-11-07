<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMilestoneResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateMilestoneResponse extends AbstractStructBase
{
    /**
     * The CreateMilestoneResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Milestone
     */
    public $CreateMilestoneResult;
    /**
     * Constructor method for CreateMilestoneResponse
     * @uses CreateMilestoneResponse::setCreateMilestoneResult()
     * @param \Brainloop\Soap\StructType\Milestone $createMilestoneResult
     */
    public function __construct(\Brainloop\Soap\StructType\Milestone $createMilestoneResult = null)
    {
        $this
            ->setCreateMilestoneResult($createMilestoneResult);
    }
    /**
     * Get CreateMilestoneResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Milestone|null
     */
    public function getCreateMilestoneResult()
    {
        return isset($this->CreateMilestoneResult) ? $this->CreateMilestoneResult : null;
    }
    /**
     * Set CreateMilestoneResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Milestone $createMilestoneResult
     * @return \Brainloop\Soap\StructType\CreateMilestoneResponse
     */
    public function setCreateMilestoneResult(\Brainloop\Soap\StructType\Milestone $createMilestoneResult = null)
    {
        if (is_null($createMilestoneResult) || (is_array($createMilestoneResult) && empty($createMilestoneResult))) {
            unset($this->CreateMilestoneResult);
        } else {
            $this->CreateMilestoneResult = $createMilestoneResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateMilestoneResponse
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
