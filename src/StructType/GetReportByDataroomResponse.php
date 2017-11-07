<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReportByDataroomResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetReportByDataroomResponse extends AbstractStructBase
{
    /**
     * The GetReportByDataroomResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Report
     */
    public $GetReportByDataroomResult;
    /**
     * Constructor method for GetReportByDataroomResponse
     * @uses GetReportByDataroomResponse::setGetReportByDataroomResult()
     * @param \Brainloop\Soap\StructType\Report $getReportByDataroomResult
     */
    public function __construct(\Brainloop\Soap\StructType\Report $getReportByDataroomResult = null)
    {
        $this
            ->setGetReportByDataroomResult($getReportByDataroomResult);
    }
    /**
     * Get GetReportByDataroomResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Report|null
     */
    public function getGetReportByDataroomResult()
    {
        return isset($this->GetReportByDataroomResult) ? $this->GetReportByDataroomResult : null;
    }
    /**
     * Set GetReportByDataroomResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Report $getReportByDataroomResult
     * @return \Brainloop\Soap\StructType\GetReportByDataroomResponse
     */
    public function setGetReportByDataroomResult(\Brainloop\Soap\StructType\Report $getReportByDataroomResult = null)
    {
        if (is_null($getReportByDataroomResult) || (is_array($getReportByDataroomResult) && empty($getReportByDataroomResult))) {
            unset($this->GetReportByDataroomResult);
        } else {
            $this->GetReportByDataroomResult = $getReportByDataroomResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetReportByDataroomResponse
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
