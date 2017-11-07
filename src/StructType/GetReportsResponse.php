<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReportsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetReportsResponse extends AbstractStructBase
{
    /**
     * The GetReportsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ReportCollection
     */
    public $GetReportsResult;
    /**
     * Constructor method for GetReportsResponse
     * @uses GetReportsResponse::setGetReportsResult()
     * @param \Brainloop\Soap\StructType\ReportCollection $getReportsResult
     */
    public function __construct(\Brainloop\Soap\StructType\ReportCollection $getReportsResult = null)
    {
        $this
            ->setGetReportsResult($getReportsResult);
    }
    /**
     * Get GetReportsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ReportCollection|null
     */
    public function getGetReportsResult()
    {
        return isset($this->GetReportsResult) ? $this->GetReportsResult : null;
    }
    /**
     * Set GetReportsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\ReportCollection $getReportsResult
     * @return \Brainloop\Soap\StructType\GetReportsResponse
     */
    public function setGetReportsResult(\Brainloop\Soap\StructType\ReportCollection $getReportsResult = null)
    {
        if (is_null($getReportsResult) || (is_array($getReportsResult) && empty($getReportsResult))) {
            unset($this->GetReportsResult);
        } else {
            $this->GetReportsResult = $getReportsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetReportsResponse
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
