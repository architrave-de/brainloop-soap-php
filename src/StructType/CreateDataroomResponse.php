<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDataroomResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateDataroomResponse extends AbstractStructBase
{
    /**
     * The CreateDataroomResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Dataroom
     */
    public $CreateDataroomResult;
    /**
     * Constructor method for CreateDataroomResponse
     * @uses CreateDataroomResponse::setCreateDataroomResult()
     * @param \Brainloop\Soap\StructType\Dataroom $createDataroomResult
     */
    public function __construct(\Brainloop\Soap\StructType\Dataroom $createDataroomResult = null)
    {
        $this
            ->setCreateDataroomResult($createDataroomResult);
    }
    /**
     * Get CreateDataroomResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Dataroom|null
     */
    public function getCreateDataroomResult()
    {
        return isset($this->CreateDataroomResult) ? $this->CreateDataroomResult : null;
    }
    /**
     * Set CreateDataroomResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Dataroom $createDataroomResult
     * @return \Brainloop\Soap\StructType\CreateDataroomResponse
     */
    public function setCreateDataroomResult(\Brainloop\Soap\StructType\Dataroom $createDataroomResult = null)
    {
        if (is_null($createDataroomResult) || (is_array($createDataroomResult) && empty($createDataroomResult))) {
            unset($this->CreateDataroomResult);
        } else {
            $this->CreateDataroomResult = $createDataroomResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateDataroomResponse
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
