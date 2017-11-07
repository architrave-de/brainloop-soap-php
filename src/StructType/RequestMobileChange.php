<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestMobileChange StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class RequestMobileChange extends AbstractStructBase
{
    /**
     * The mobileChangeParameters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\MobileChangeParameters
     */
    public $mobileChangeParameters;
    /**
     * Constructor method for RequestMobileChange
     * @uses RequestMobileChange::setMobileChangeParameters()
     * @param \Brainloop\Soap\StructType\MobileChangeParameters $mobileChangeParameters
     */
    public function __construct(\Brainloop\Soap\StructType\MobileChangeParameters $mobileChangeParameters = null)
    {
        $this
            ->setMobileChangeParameters($mobileChangeParameters);
    }
    /**
     * Get mobileChangeParameters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\MobileChangeParameters|null
     */
    public function getMobileChangeParameters()
    {
        return isset($this->mobileChangeParameters) ? $this->mobileChangeParameters : null;
    }
    /**
     * Set mobileChangeParameters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\MobileChangeParameters $mobileChangeParameters
     * @return \Brainloop\Soap\StructType\RequestMobileChange
     */
    public function setMobileChangeParameters(\Brainloop\Soap\StructType\MobileChangeParameters $mobileChangeParameters = null)
    {
        if (is_null($mobileChangeParameters) || (is_array($mobileChangeParameters) && empty($mobileChangeParameters))) {
            unset($this->mobileChangeParameters);
        } else {
            $this->mobileChangeParameters = $mobileChangeParameters;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\RequestMobileChange
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
