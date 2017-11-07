<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreeTextAnnotation StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FreeTextAnnotation
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class FreeTextAnnotation extends AnnotationBaseFreeTextAnnotationFields
{
    /**
     * Constructor method for FreeTextAnnotation
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
     * @return \Brainloop\Soap\StructType\FreeTextAnnotation
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
