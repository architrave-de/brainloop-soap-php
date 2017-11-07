<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Valueboolean StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Valueboolean
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class Valueboolean extends AbstractStructBase
{
    /**
     * The Value
     * @var bool
     */
    public $Value;
    /**
     * Constructor method for Valueboolean
     * @uses Valueboolean::setValue()
     * @param bool $value
     */
    public function __construct($value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * @return bool|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param bool $value
     * @return \Brainloop\Soap\StructType\Valueboolean
     */
    public function setValue($value = null)
    {
        // validation for constraint: boolean
        if (!is_null($value) && !is_bool($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\Valueboolean
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
