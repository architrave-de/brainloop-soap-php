<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMultipleDownloadTypesByVersionResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetMultipleDownloadTypesByVersionResponse extends AbstractStructBase
{
    /**
     * The Result
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\GetMultipleDownloadTypesByVersionResult
     */
    public $Result;
    /**
     * Constructor method for GetMultipleDownloadTypesByVersionResponse
     * @uses GetMultipleDownloadTypesByVersionResponse::setResult()
     * @param \Brainloop\Soap\StructType\GetMultipleDownloadTypesByVersionResult $result
     */
    public function __construct(\Brainloop\Soap\StructType\GetMultipleDownloadTypesByVersionResult $result = null)
    {
        $this
            ->setResult($result);
    }
    /**
     * Get Result value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\GetMultipleDownloadTypesByVersionResult|null
     */
    public function getResult()
    {
        return isset($this->Result) ? $this->Result : null;
    }
    /**
     * Set Result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\GetMultipleDownloadTypesByVersionResult $result
     * @return \Brainloop\Soap\StructType\GetMultipleDownloadTypesByVersionResponse
     */
    public function setResult(\Brainloop\Soap\StructType\GetMultipleDownloadTypesByVersionResult $result = null)
    {
        if (is_null($result) || (is_array($result) && empty($result))) {
            unset($this->Result);
        } else {
            $this->Result = $result;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetMultipleDownloadTypesByVersionResponse
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
