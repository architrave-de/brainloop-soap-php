<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteReportResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ExecuteReportResponse extends AbstractStructBase
{
    /**
     * The ExecuteReportResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ReportExecutionResponse
     */
    public $ExecuteReportResult;
    /**
     * Constructor method for ExecuteReportResponse
     * @uses ExecuteReportResponse::setExecuteReportResult()
     * @param \Brainloop\Soap\StructType\ReportExecutionResponse $executeReportResult
     */
    public function __construct(\Brainloop\Soap\StructType\ReportExecutionResponse $executeReportResult = null)
    {
        $this
            ->setExecuteReportResult($executeReportResult);
    }
    /**
     * Get ExecuteReportResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ReportExecutionResponse|null
     */
    public function getExecuteReportResult()
    {
        return isset($this->ExecuteReportResult) ? $this->ExecuteReportResult : null;
    }
    /**
     * Set ExecuteReportResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\ReportExecutionResponse $executeReportResult
     * @return \Brainloop\Soap\StructType\ExecuteReportResponse
     */
    public function setExecuteReportResult(\Brainloop\Soap\StructType\ReportExecutionResponse $executeReportResult = null)
    {
        if (is_null($executeReportResult) || (is_array($executeReportResult) && empty($executeReportResult))) {
            unset($this->ExecuteReportResult);
        } else {
            $this->ExecuteReportResult = $executeReportResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ExecuteReportResponse
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
