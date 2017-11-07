<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserPropertiesResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetUserPropertiesResponse extends AbstractStructBase
{
    /**
     * The GetUserPropertiesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ServicePropertyCollection
     */
    public $GetUserPropertiesResult;
    /**
     * Constructor method for GetUserPropertiesResponse
     * @uses GetUserPropertiesResponse::setGetUserPropertiesResult()
     * @param \Brainloop\Soap\StructType\ServicePropertyCollection $getUserPropertiesResult
     */
    public function __construct(\Brainloop\Soap\StructType\ServicePropertyCollection $getUserPropertiesResult = null)
    {
        $this
            ->setGetUserPropertiesResult($getUserPropertiesResult);
    }
    /**
     * Get GetUserPropertiesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ServicePropertyCollection|null
     */
    public function getGetUserPropertiesResult()
    {
        return isset($this->GetUserPropertiesResult) ? $this->GetUserPropertiesResult : null;
    }
    /**
     * Set GetUserPropertiesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\ServicePropertyCollection $getUserPropertiesResult
     * @return \Brainloop\Soap\StructType\GetUserPropertiesResponse
     */
    public function setGetUserPropertiesResult(\Brainloop\Soap\StructType\ServicePropertyCollection $getUserPropertiesResult = null)
    {
        if (is_null($getUserPropertiesResult) || (is_array($getUserPropertiesResult) && empty($getUserPropertiesResult))) {
            unset($this->GetUserPropertiesResult);
        } else {
            $this->GetUserPropertiesResult = $getUserPropertiesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetUserPropertiesResponse
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
