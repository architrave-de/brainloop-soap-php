<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReportResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetReportResponse extends AbstractStructBase
{
    /**
     * The GetReportResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Report
     */
    public $GetReportResult;
    /**
     * Constructor method for GetReportResponse
     * @uses GetReportResponse::setGetReportResult()
     * @param \Brainloop\Soap\StructType\Report $getReportResult
     */
    public function __construct(\Brainloop\Soap\StructType\Report $getReportResult = null)
    {
        $this
            ->setGetReportResult($getReportResult);
    }
    /**
     * Get GetReportResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Report|null
     */
    public function getGetReportResult()
    {
        return isset($this->GetReportResult) ? $this->GetReportResult : null;
    }
    /**
     * Set GetReportResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Report $getReportResult
     * @return \Brainloop\Soap\StructType\GetReportResponse
     */
    public function setGetReportResult(\Brainloop\Soap\StructType\Report $getReportResult = null)
    {
        if (is_null($getReportResult) || (is_array($getReportResult) && empty($getReportResult))) {
            unset($this->GetReportResult);
        } else {
            $this->GetReportResult = $getReportResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetReportResponse
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
