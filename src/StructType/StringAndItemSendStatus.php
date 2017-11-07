<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for stringAndItemSendStatus StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:stringAndItemSendStatus
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class StringAndItemSendStatus extends AbstractStructBase
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
     * @var string
     */
    public $Value;
    /**
     * Constructor method for stringAndItemSendStatus
     * @uses StringAndItemSendStatus::setKey()
     * @uses StringAndItemSendStatus::setValue()
     * @param string $key
     * @param string $value
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
     * @return \Brainloop\Soap\StructType\StringAndItemSendStatus
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
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @uses \Brainloop\Soap\EnumType\ItemSendStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemSendStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $value
     * @return \Brainloop\Soap\StructType\StringAndItemSendStatus
     */
    public function setValue($value = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ItemSendStatus::valueIsValid($value)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $value, implode(', ', \Brainloop\Soap\EnumType\ItemSendStatus::getValidValues())), __LINE__);
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
     * @return \Brainloop\Soap\StructType\StringAndItemSendStatus
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
