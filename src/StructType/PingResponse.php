<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PingResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class PingResponse extends AbstractStructBase
{
    /**
     * The PingResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ServiceInfo
     */
    public $PingResult;
    /**
     * Constructor method for PingResponse
     * @uses PingResponse::setPingResult()
     * @param \Brainloop\Soap\StructType\ServiceInfo $pingResult
     */
    public function __construct(\Brainloop\Soap\StructType\ServiceInfo $pingResult = null)
    {
        $this
            ->setPingResult($pingResult);
    }
    /**
     * Get PingResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ServiceInfo|null
     */
    public function getPingResult()
    {
        return isset($this->PingResult) ? $this->PingResult : null;
    }
    /**
     * Set PingResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\ServiceInfo $pingResult
     * @return \Brainloop\Soap\StructType\PingResponse
     */
    public function setPingResult(\Brainloop\Soap\StructType\ServiceInfo $pingResult = null)
    {
        if (is_null($pingResult) || (is_array($pingResult) && empty($pingResult))) {
            unset($this->PingResult);
        } else {
            $this->PingResult = $pingResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\PingResponse
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
