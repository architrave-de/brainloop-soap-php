<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReportsByDataroomResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetReportsByDataroomResponse extends AbstractStructBase
{
    /**
     * The GetReportsByDataroomResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ReportCollection
     */
    public $GetReportsByDataroomResult;
    /**
     * Constructor method for GetReportsByDataroomResponse
     * @uses GetReportsByDataroomResponse::setGetReportsByDataroomResult()
     * @param \Brainloop\Soap\StructType\ReportCollection $getReportsByDataroomResult
     */
    public function __construct(\Brainloop\Soap\StructType\ReportCollection $getReportsByDataroomResult = null)
    {
        $this
            ->setGetReportsByDataroomResult($getReportsByDataroomResult);
    }
    /**
     * Get GetReportsByDataroomResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ReportCollection|null
     */
    public function getGetReportsByDataroomResult()
    {
        return isset($this->GetReportsByDataroomResult) ? $this->GetReportsByDataroomResult : null;
    }
    /**
     * Set GetReportsByDataroomResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\ReportCollection $getReportsByDataroomResult
     * @return \Brainloop\Soap\StructType\GetReportsByDataroomResponse
     */
    public function setGetReportsByDataroomResult(\Brainloop\Soap\StructType\ReportCollection $getReportsByDataroomResult = null)
    {
        if (is_null($getReportsByDataroomResult) || (is_array($getReportsByDataroomResult) && empty($getReportsByDataroomResult))) {
            unset($this->GetReportsByDataroomResult);
        } else {
            $this->GetReportsByDataroomResult = $getReportsByDataroomResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetReportsByDataroomResponse
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
