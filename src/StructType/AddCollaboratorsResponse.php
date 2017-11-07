<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddCollaboratorsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class AddCollaboratorsResponse extends AbstractStructBase
{
    /**
     * The AddCollaboratorsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfUser
     */
    public $AddCollaboratorsResult;
    /**
     * Constructor method for AddCollaboratorsResponse
     * @uses AddCollaboratorsResponse::setAddCollaboratorsResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfUser $addCollaboratorsResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfUser $addCollaboratorsResult = null)
    {
        $this
            ->setAddCollaboratorsResult($addCollaboratorsResult);
    }
    /**
     * Get AddCollaboratorsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfUser|null
     */
    public function getAddCollaboratorsResult()
    {
        return isset($this->AddCollaboratorsResult) ? $this->AddCollaboratorsResult : null;
    }
    /**
     * Set AddCollaboratorsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfUser $addCollaboratorsResult
     * @return \Brainloop\Soap\StructType\AddCollaboratorsResponse
     */
    public function setAddCollaboratorsResult(\Brainloop\Soap\ArrayType\ArrayOfUser $addCollaboratorsResult = null)
    {
        if (is_null($addCollaboratorsResult) || (is_array($addCollaboratorsResult) && empty($addCollaboratorsResult))) {
            unset($this->AddCollaboratorsResult);
        } else {
            $this->AddCollaboratorsResult = $addCollaboratorsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\AddCollaboratorsResponse
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
