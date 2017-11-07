<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteReport StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ExecuteReport extends AbstractStructBase
{
    /**
     * The oRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ReportExecutionRequest
     */
    public $oRequest;
    /**
     * Constructor method for ExecuteReport
     * @uses ExecuteReport::setORequest()
     * @param \Brainloop\Soap\StructType\ReportExecutionRequest $oRequest
     */
    public function __construct(\Brainloop\Soap\StructType\ReportExecutionRequest $oRequest = null)
    {
        $this
            ->setORequest($oRequest);
    }
    /**
     * Get oRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ReportExecutionRequest|null
     */
    public function getORequest()
    {
        return isset($this->oRequest) ? $this->oRequest : null;
    }
    /**
     * Set oRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\ReportExecutionRequest $oRequest
     * @return \Brainloop\Soap\StructType\ExecuteReport
     */
    public function setORequest(\Brainloop\Soap\StructType\ReportExecutionRequest $oRequest = null)
    {
        if (is_null($oRequest) || (is_array($oRequest) && empty($oRequest))) {
            unset($this->oRequest);
        } else {
            $this->oRequest = $oRequest;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ExecuteReport
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