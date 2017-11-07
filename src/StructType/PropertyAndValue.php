<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyAndValue StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PropertyAndValue
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class PropertyAndValue extends StringAndanyType
{
    /**
     * The IsLimit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsLimit;
    /**
     * Constructor method for PropertyAndValue
     * @uses PropertyAndValue::setIsLimit()
     * @param bool $isLimit
     */
    public function __construct($isLimit = null)
    {
        $this
            ->setIsLimit($isLimit);
    }
    /**
     * Get IsLimit value
     * @return bool|null
     */
    public function getIsLimit()
    {
        return $this->IsLimit;
    }
    /**
     * Set IsLimit value
     * @param bool $isLimit
     * @return \Brainloop\Soap\StructType\PropertyAndValue
     */
    public function setIsLimit($isLimit = null)
    {
        // validation for constraint: boolean
        if (!is_null($isLimit) && !is_bool($isLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isLimit)), __LINE__);
        }
        $this->IsLimit = $isLimit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\PropertyAndValue
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
