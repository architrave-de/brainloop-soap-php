<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for intAndNullableOfint StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:intAndNullableOfint
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class IntAndNullableOfint extends AbstractStructBase
{
    /**
     * The Key
     * @var int
     */
    public $Key;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $Value;
    /**
     * Constructor method for intAndNullableOfint
     * @uses IntAndNullableOfint::setKey()
     * @uses IntAndNullableOfint::setValue()
     * @param int $key
     * @param int $value
     */
    public function __construct($key = null, $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get Key value
     * @return int|null
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param int $key
     * @return \Brainloop\Soap\StructType\IntAndNullableOfint
     */
    public function setKey($key = null)
    {
        // validation for constraint: int
        if (!is_null($key) && !is_numeric($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($key)), __LINE__);
        }
        $this->Key = $key;
        return $this;
    }
    /**
     * Get Value value
     * @return int|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param int $value
     * @return \Brainloop\Soap\StructType\IntAndNullableOfint
     */
    public function setValue($value = null)
    {
        // validation for constraint: int
        if (!is_null($value) && !is_numeric($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($value)), __LINE__);
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
     * @return \Brainloop\Soap\StructType\IntAndNullableOfint
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
