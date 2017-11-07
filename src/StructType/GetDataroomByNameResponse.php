<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDataroomByNameResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDataroomByNameResponse extends AbstractStructBase
{
    /**
     * The GetDataroomByNameResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Dataroom
     */
    public $GetDataroomByNameResult;
    /**
     * Constructor method for GetDataroomByNameResponse
     * @uses GetDataroomByNameResponse::setGetDataroomByNameResult()
     * @param \Brainloop\Soap\StructType\Dataroom $getDataroomByNameResult
     */
    public function __construct(\Brainloop\Soap\StructType\Dataroom $getDataroomByNameResult = null)
    {
        $this
            ->setGetDataroomByNameResult($getDataroomByNameResult);
    }
    /**
     * Get GetDataroomByNameResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Dataroom|null
     */
    public function getGetDataroomByNameResult()
    {
        return isset($this->GetDataroomByNameResult) ? $this->GetDataroomByNameResult : null;
    }
    /**
     * Set GetDataroomByNameResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Dataroom $getDataroomByNameResult
     * @return \Brainloop\Soap\StructType\GetDataroomByNameResponse
     */
    public function setGetDataroomByNameResult(\Brainloop\Soap\StructType\Dataroom $getDataroomByNameResult = null)
    {
        if (is_null($getDataroomByNameResult) || (is_array($getDataroomByNameResult) && empty($getDataroomByNameResult))) {
            unset($this->GetDataroomByNameResult);
        } else {
            $this->GetDataroomByNameResult = $getDataroomByNameResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetDataroomByNameResponse
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
