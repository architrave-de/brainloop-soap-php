<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateTaskResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateTaskResponse extends AbstractStructBase
{
    /**
     * The CreateTaskResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Task
     */
    public $CreateTaskResult;
    /**
     * Constructor method for CreateTaskResponse
     * @uses CreateTaskResponse::setCreateTaskResult()
     * @param \Brainloop\Soap\StructType\Task $createTaskResult
     */
    public function __construct(\Brainloop\Soap\StructType\Task $createTaskResult = null)
    {
        $this
            ->setCreateTaskResult($createTaskResult);
    }
    /**
     * Get CreateTaskResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Task|null
     */
    public function getCreateTaskResult()
    {
        return isset($this->CreateTaskResult) ? $this->CreateTaskResult : null;
    }
    /**
     * Set CreateTaskResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Task $createTaskResult
     * @return \Brainloop\Soap\StructType\CreateTaskResponse
     */
    public function setCreateTaskResult(\Brainloop\Soap\StructType\Task $createTaskResult = null)
    {
        if (is_null($createTaskResult) || (is_array($createTaskResult) && empty($createTaskResult))) {
            unset($this->CreateTaskResult);
        } else {
            $this->CreateTaskResult = $createTaskResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateTaskResponse
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
