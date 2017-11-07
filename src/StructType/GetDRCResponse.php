<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDRCResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDRCResponse extends AbstractStructBase
{
    /**
     * The GetDRCResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\DRC
     */
    public $GetDRCResult;
    /**
     * Constructor method for GetDRCResponse
     * @uses GetDRCResponse::setGetDRCResult()
     * @param \Brainloop\Soap\StructType\DRC $getDRCResult
     */
    public function __construct(\Brainloop\Soap\StructType\DRC $getDRCResult = null)
    {
        $this
            ->setGetDRCResult($getDRCResult);
    }
    /**
     * Get GetDRCResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\DRC|null
     */
    public function getGetDRCResult()
    {
        return isset($this->GetDRCResult) ? $this->GetDRCResult : null;
    }
    /**
     * Set GetDRCResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\DRC $getDRCResult
     * @return \Brainloop\Soap\StructType\GetDRCResponse
     */
    public function setGetDRCResult(\Brainloop\Soap\StructType\DRC $getDRCResult = null)
    {
        if (is_null($getDRCResult) || (is_array($getDRCResult) && empty($getDRCResult))) {
            unset($this->GetDRCResult);
        } else {
            $this->GetDRCResult = $getDRCResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetDRCResponse
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
