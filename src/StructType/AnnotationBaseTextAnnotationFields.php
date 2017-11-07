<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnotationBaseTextAnnotationFields StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AnnotationBaseTextAnnotationFields
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class AnnotationBaseTextAnnotationFields extends AnnotationBase
{
    /**
     * The Fields
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\StructType\TextAnnotationFields
     */
    public $Fields;
    /**
     * Constructor method for AnnotationBaseTextAnnotationFields
     * @uses AnnotationBaseTextAnnotationFields::setFields()
     * @param \Brainloop\Soap\StructType\TextAnnotationFields $fields
     */
    public function __construct(\Brainloop\Soap\StructType\TextAnnotationFields $fields = null)
    {
        $this
            ->setFields($fields);
    }
    /**
     * Get Fields value
     * @return \Brainloop\Soap\StructType\TextAnnotationFields|null
     */
    public function getFields()
    {
        return $this->Fields;
    }
    /**
     * Set Fields value
     * @param \Brainloop\Soap\StructType\TextAnnotationFields $fields
     * @return \Brainloop\Soap\StructType\AnnotationBaseTextAnnotationFields
     */
    public function setFields(\Brainloop\Soap\StructType\TextAnnotationFields $fields = null)
    {
        $this->Fields = $fields;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\AnnotationBaseTextAnnotationFields
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
