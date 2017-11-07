<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDRCsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDRCsResponse extends AbstractStructBase
{
    /**
     * The GetDRCsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\DRCCollection
     */
    public $GetDRCsResult;
    /**
     * Constructor method for GetDRCsResponse
     * @uses GetDRCsResponse::setGetDRCsResult()
     * @param \Brainloop\Soap\StructType\DRCCollection $getDRCsResult
     */
    public function __construct(\Brainloop\Soap\StructType\DRCCollection $getDRCsResult = null)
    {
        $this
            ->setGetDRCsResult($getDRCsResult);
    }
    /**
     * Get GetDRCsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\DRCCollection|null
     */
    public function getGetDRCsResult()
    {
        return isset($this->GetDRCsResult) ? $this->GetDRCsResult : null;
    }
    /**
     * Set GetDRCsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\DRCCollection $getDRCsResult
     * @return \Brainloop\Soap\StructType\GetDRCsResponse
     */
    public function setGetDRCsResult(\Brainloop\Soap\StructType\DRCCollection $getDRCsResult = null)
    {
        if (is_null($getDRCsResult) || (is_array($getDRCsResult) && empty($getDRCsResult))) {
            unset($this->GetDRCsResult);
        } else {
            $this->GetDRCsResult = $getDRCsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetDRCsResponse
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
