<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReportByDRCResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetReportByDRCResponse extends AbstractStructBase
{
    /**
     * The GetReportByDRCResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Report
     */
    public $GetReportByDRCResult;
    /**
     * Constructor method for GetReportByDRCResponse
     * @uses GetReportByDRCResponse::setGetReportByDRCResult()
     * @param \Brainloop\Soap\StructType\Report $getReportByDRCResult
     */
    public function __construct(\Brainloop\Soap\StructType\Report $getReportByDRCResult = null)
    {
        $this
            ->setGetReportByDRCResult($getReportByDRCResult);
    }
    /**
     * Get GetReportByDRCResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Report|null
     */
    public function getGetReportByDRCResult()
    {
        return isset($this->GetReportByDRCResult) ? $this->GetReportByDRCResult : null;
    }
    /**
     * Set GetReportByDRCResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Report $getReportByDRCResult
     * @return \Brainloop\Soap\StructType\GetReportByDRCResponse
     */
    public function setGetReportByDRCResult(\Brainloop\Soap\StructType\Report $getReportByDRCResult = null)
    {
        if (is_null($getReportByDRCResult) || (is_array($getReportByDRCResult) && empty($getReportByDRCResult))) {
            unset($this->GetReportByDRCResult);
        } else {
            $this->GetReportByDRCResult = $getReportByDRCResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetReportByDRCResponse
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
