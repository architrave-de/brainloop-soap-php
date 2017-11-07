<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemIDAndBrainmarkStyle StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ItemIDAndBrainmarkStyle
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ItemIDAndBrainmarkStyle extends IntAndBrainmarkStyle
{
    /**
     * Constructor method for ItemIDAndBrainmarkStyle
     */
    public function __construct()
    {
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ItemIDAndBrainmarkStyle
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
