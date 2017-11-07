<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDataroomWithOwnerResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateDataroomWithOwnerResponse extends AbstractStructBase
{
    /**
     * The CreateDataroomWithOwnerResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Dataroom
     */
    public $CreateDataroomWithOwnerResult;
    /**
     * Constructor method for CreateDataroomWithOwnerResponse
     * @uses CreateDataroomWithOwnerResponse::setCreateDataroomWithOwnerResult()
     * @param \Brainloop\Soap\StructType\Dataroom $createDataroomWithOwnerResult
     */
    public function __construct(\Brainloop\Soap\StructType\Dataroom $createDataroomWithOwnerResult = null)
    {
        $this
            ->setCreateDataroomWithOwnerResult($createDataroomWithOwnerResult);
    }
    /**
     * Get CreateDataroomWithOwnerResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Dataroom|null
     */
    public function getCreateDataroomWithOwnerResult()
    {
        return isset($this->CreateDataroomWithOwnerResult) ? $this->CreateDataroomWithOwnerResult : null;
    }
    /**
     * Set CreateDataroomWithOwnerResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Dataroom $createDataroomWithOwnerResult
     * @return \Brainloop\Soap\StructType\CreateDataroomWithOwnerResponse
     */
    public function setCreateDataroomWithOwnerResult(\Brainloop\Soap\StructType\Dataroom $createDataroomWithOwnerResult = null)
    {
        if (is_null($createDataroomWithOwnerResult) || (is_array($createDataroomWithOwnerResult) && empty($createDataroomWithOwnerResult))) {
            unset($this->CreateDataroomWithOwnerResult);
        } else {
            $this->CreateDataroomWithOwnerResult = $createDataroomWithOwnerResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateDataroomWithOwnerResponse
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
