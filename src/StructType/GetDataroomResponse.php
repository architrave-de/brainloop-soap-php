<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDataroomResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDataroomResponse extends AbstractStructBase
{
    /**
     * The GetDataroomResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Dataroom
     */
    public $GetDataroomResult;
    /**
     * Constructor method for GetDataroomResponse
     * @uses GetDataroomResponse::setGetDataroomResult()
     * @param \Brainloop\Soap\StructType\Dataroom $getDataroomResult
     */
    public function __construct(\Brainloop\Soap\StructType\Dataroom $getDataroomResult = null)
    {
        $this
            ->setGetDataroomResult($getDataroomResult);
    }
    /**
     * Get GetDataroomResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Dataroom|null
     */
    public function getGetDataroomResult()
    {
        return isset($this->GetDataroomResult) ? $this->GetDataroomResult : null;
    }
    /**
     * Set GetDataroomResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Dataroom $getDataroomResult
     * @return \Brainloop\Soap\StructType\GetDataroomResponse
     */
    public function setGetDataroomResult(\Brainloop\Soap\StructType\Dataroom $getDataroomResult = null)
    {
        if (is_null($getDataroomResult) || (is_array($getDataroomResult) && empty($getDataroomResult))) {
            unset($this->GetDataroomResult);
        } else {
            $this->GetDataroomResult = $getDataroomResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetDataroomResponse
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
