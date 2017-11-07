<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for stringAndanyType StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:stringAndanyType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class StringAndanyType extends AbstractStructBase
{
    /**
     * The Key
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Key;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var mixed
     */
    public $Value;
    /**
     * Constructor method for stringAndanyType
     * @uses StringAndanyType::setKey()
     * @uses StringAndanyType::setValue()
     * @param string $key
     * @param mixed $value
     */
    public function __construct($key = null, $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Brainloop\Soap\StructType\StringAndanyType
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($key)), __LINE__);
        }
        $this->Key = $key;
        return $this;
    }
    /**
     * Get Value value
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param mixed $value
     * @return \Brainloop\Soap\StructType\StringAndanyType
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\StringAndanyType
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
