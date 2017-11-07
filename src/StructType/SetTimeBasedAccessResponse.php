<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetTimeBasedAccessResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetTimeBasedAccessResponse extends AbstractStructBase
{
    /**
     * The SetTimeBasedAccessResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\User
     */
    public $SetTimeBasedAccessResult;
    /**
     * Constructor method for SetTimeBasedAccessResponse
     * @uses SetTimeBasedAccessResponse::setSetTimeBasedAccessResult()
     * @param \Brainloop\Soap\StructType\User $setTimeBasedAccessResult
     */
    public function __construct(\Brainloop\Soap\StructType\User $setTimeBasedAccessResult = null)
    {
        $this
            ->setSetTimeBasedAccessResult($setTimeBasedAccessResult);
    }
    /**
     * Get SetTimeBasedAccessResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\User|null
     */
    public function getSetTimeBasedAccessResult()
    {
        return isset($this->SetTimeBasedAccessResult) ? $this->SetTimeBasedAccessResult : null;
    }
    /**
     * Set SetTimeBasedAccessResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\User $setTimeBasedAccessResult
     * @return \Brainloop\Soap\StructType\SetTimeBasedAccessResponse
     */
    public function setSetTimeBasedAccessResult(\Brainloop\Soap\StructType\User $setTimeBasedAccessResult = null)
    {
        if (is_null($setTimeBasedAccessResult) || (is_array($setTimeBasedAccessResult) && empty($setTimeBasedAccessResult))) {
            unset($this->SetTimeBasedAccessResult);
        } else {
            $this->SetTimeBasedAccessResult = $setTimeBasedAccessResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SetTimeBasedAccessResponse
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
