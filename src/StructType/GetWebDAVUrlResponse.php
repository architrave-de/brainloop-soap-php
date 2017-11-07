<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWebDAVUrlResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetWebDAVUrlResponse extends AbstractStructBase
{
    /**
     * The GetWebDAVUrlResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfstring
     */
    public $GetWebDAVUrlResult;
    /**
     * Constructor method for GetWebDAVUrlResponse
     * @uses GetWebDAVUrlResponse::setGetWebDAVUrlResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $getWebDAVUrlResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfstring $getWebDAVUrlResult = null)
    {
        $this
            ->setGetWebDAVUrlResult($getWebDAVUrlResult);
    }
    /**
     * Get GetWebDAVUrlResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfstring|null
     */
    public function getGetWebDAVUrlResult()
    {
        return isset($this->GetWebDAVUrlResult) ? $this->GetWebDAVUrlResult : null;
    }
    /**
     * Set GetWebDAVUrlResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $getWebDAVUrlResult
     * @return \Brainloop\Soap\StructType\GetWebDAVUrlResponse
     */
    public function setGetWebDAVUrlResult(\Brainloop\Soap\ArrayType\ArrayOfstring $getWebDAVUrlResult = null)
    {
        if (is_null($getWebDAVUrlResult) || (is_array($getWebDAVUrlResult) && empty($getWebDAVUrlResult))) {
            unset($this->GetWebDAVUrlResult);
        } else {
            $this->GetWebDAVUrlResult = $getWebDAVUrlResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetWebDAVUrlResponse
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
