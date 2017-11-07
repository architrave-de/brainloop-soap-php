<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDataroomPropertiesResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDataroomPropertiesResponse extends AbstractStructBase
{
    /**
     * The GetDataroomPropertiesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ServicePropertyCollection
     */
    public $GetDataroomPropertiesResult;
    /**
     * Constructor method for GetDataroomPropertiesResponse
     * @uses GetDataroomPropertiesResponse::setGetDataroomPropertiesResult()
     * @param \Brainloop\Soap\StructType\ServicePropertyCollection $getDataroomPropertiesResult
     */
    public function __construct(\Brainloop\Soap\StructType\ServicePropertyCollection $getDataroomPropertiesResult = null)
    {
        $this
            ->setGetDataroomPropertiesResult($getDataroomPropertiesResult);
    }
    /**
     * Get GetDataroomPropertiesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ServicePropertyCollection|null
     */
    public function getGetDataroomPropertiesResult()
    {
        return isset($this->GetDataroomPropertiesResult) ? $this->GetDataroomPropertiesResult : null;
    }
    /**
     * Set GetDataroomPropertiesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\ServicePropertyCollection $getDataroomPropertiesResult
     * @return \Brainloop\Soap\StructType\GetDataroomPropertiesResponse
     */
    public function setGetDataroomPropertiesResult(\Brainloop\Soap\StructType\ServicePropertyCollection $getDataroomPropertiesResult = null)
    {
        if (is_null($getDataroomPropertiesResult) || (is_array($getDataroomPropertiesResult) && empty($getDataroomPropertiesResult))) {
            unset($this->GetDataroomPropertiesResult);
        } else {
            $this->GetDataroomPropertiesResult = $getDataroomPropertiesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetDataroomPropertiesResponse
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
