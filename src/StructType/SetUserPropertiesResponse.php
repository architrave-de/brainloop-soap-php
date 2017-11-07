<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUserPropertiesResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetUserPropertiesResponse extends AbstractStructBase
{
    /**
     * The SetUserPropertiesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\User
     */
    public $SetUserPropertiesResult;
    /**
     * Constructor method for SetUserPropertiesResponse
     * @uses SetUserPropertiesResponse::setSetUserPropertiesResult()
     * @param \Brainloop\Soap\StructType\User $setUserPropertiesResult
     */
    public function __construct(\Brainloop\Soap\StructType\User $setUserPropertiesResult = null)
    {
        $this
            ->setSetUserPropertiesResult($setUserPropertiesResult);
    }
    /**
     * Get SetUserPropertiesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\User|null
     */
    public function getSetUserPropertiesResult()
    {
        return isset($this->SetUserPropertiesResult) ? $this->SetUserPropertiesResult : null;
    }
    /**
     * Set SetUserPropertiesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\User $setUserPropertiesResult
     * @return \Brainloop\Soap\StructType\SetUserPropertiesResponse
     */
    public function setSetUserPropertiesResult(\Brainloop\Soap\StructType\User $setUserPropertiesResult = null)
    {
        if (is_null($setUserPropertiesResult) || (is_array($setUserPropertiesResult) && empty($setUserPropertiesResult))) {
            unset($this->SetUserPropertiesResult);
        } else {
            $this->SetUserPropertiesResult = $setUserPropertiesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SetUserPropertiesResponse
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
