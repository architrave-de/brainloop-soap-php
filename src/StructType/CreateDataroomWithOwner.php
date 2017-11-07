<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDataroomWithOwner StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateDataroomWithOwner extends AbstractStructBase
{
    /**
     * The parameters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\CreateDataroomParameters
     */
    public $parameters;
    /**
     * Constructor method for CreateDataroomWithOwner
     * @uses CreateDataroomWithOwner::setParameters()
     * @param \Brainloop\Soap\StructType\CreateDataroomParameters $parameters
     */
    public function __construct(\Brainloop\Soap\StructType\CreateDataroomParameters $parameters = null)
    {
        $this
            ->setParameters($parameters);
    }
    /**
     * Get parameters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\CreateDataroomParameters|null
     */
    public function getParameters()
    {
        return isset($this->parameters) ? $this->parameters : null;
    }
    /**
     * Set parameters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\CreateDataroomParameters $parameters
     * @return \Brainloop\Soap\StructType\CreateDataroomWithOwner
     */
    public function setParameters(\Brainloop\Soap\StructType\CreateDataroomParameters $parameters = null)
    {
        if (is_null($parameters) || (is_array($parameters) && empty($parameters))) {
            unset($this->parameters);
        } else {
            $this->parameters = $parameters;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateDataroomWithOwner
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
