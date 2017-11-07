<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConvertResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ConvertResponse
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ConvertResponse extends AbstractStructBase
{
    /**
     * The ConvertResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ConvertResponse
     */
    public $ConvertResult;
    /**
     * Constructor method for ConvertResponse
     * @uses ConvertResponse::setConvertResult()
     * @param \Brainloop\Soap\StructType\ConvertResponse $convertResult
     */
    public function __construct(\Brainloop\Soap\StructType\ConvertResponse $convertResult = null)
    {
        $this
            ->setConvertResult($convertResult);
    }
    /**
     * Get ConvertResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ConvertResponse|null
     */
    public function getConvertResult()
    {
        return isset($this->ConvertResult) ? $this->ConvertResult : null;
    }
    /**
     * Set ConvertResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\ConvertResponse $convertResult
     * @return \Brainloop\Soap\StructType\ConvertResponse
     */
    public function setConvertResult(\Brainloop\Soap\StructType\ConvertResponse $convertResult = null)
    {
        if (is_null($convertResult) || (is_array($convertResult) && empty($convertResult))) {
            unset($this->ConvertResult);
        } else {
            $this->ConvertResult = $convertResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ConvertResponse
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
