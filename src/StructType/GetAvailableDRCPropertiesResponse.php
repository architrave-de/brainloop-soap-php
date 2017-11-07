<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableDRCPropertiesResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetAvailableDRCPropertiesResponse extends AbstractStructBase
{
    /**
     * The GetAvailableDRCPropertiesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ServicePropertyCollection
     */
    public $GetAvailableDRCPropertiesResult;
    /**
     * Constructor method for GetAvailableDRCPropertiesResponse
     * @uses GetAvailableDRCPropertiesResponse::setGetAvailableDRCPropertiesResult()
     * @param \Brainloop\Soap\StructType\ServicePropertyCollection $getAvailableDRCPropertiesResult
     */
    public function __construct(\Brainloop\Soap\StructType\ServicePropertyCollection $getAvailableDRCPropertiesResult = null)
    {
        $this
            ->setGetAvailableDRCPropertiesResult($getAvailableDRCPropertiesResult);
    }
    /**
     * Get GetAvailableDRCPropertiesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ServicePropertyCollection|null
     */
    public function getGetAvailableDRCPropertiesResult()
    {
        return isset($this->GetAvailableDRCPropertiesResult) ? $this->GetAvailableDRCPropertiesResult : null;
    }
    /**
     * Set GetAvailableDRCPropertiesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\ServicePropertyCollection $getAvailableDRCPropertiesResult
     * @return \Brainloop\Soap\StructType\GetAvailableDRCPropertiesResponse
     */
    public function setGetAvailableDRCPropertiesResult(\Brainloop\Soap\StructType\ServicePropertyCollection $getAvailableDRCPropertiesResult = null)
    {
        if (is_null($getAvailableDRCPropertiesResult) || (is_array($getAvailableDRCPropertiesResult) && empty($getAvailableDRCPropertiesResult))) {
            unset($this->GetAvailableDRCPropertiesResult);
        } else {
            $this->GetAvailableDRCPropertiesResult = $getAvailableDRCPropertiesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetAvailableDRCPropertiesResponse
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
