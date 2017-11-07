<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateHighlightAnnotationResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateHighlightAnnotationResponse extends AbstractStructBase
{
    /**
     * The CreateHighlightAnnotationResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\HighlightAnnotation
     */
    public $CreateHighlightAnnotationResult;
    /**
     * Constructor method for CreateHighlightAnnotationResponse
     * @uses CreateHighlightAnnotationResponse::setCreateHighlightAnnotationResult()
     * @param \Brainloop\Soap\StructType\HighlightAnnotation $createHighlightAnnotationResult
     */
    public function __construct(\Brainloop\Soap\StructType\HighlightAnnotation $createHighlightAnnotationResult = null)
    {
        $this
            ->setCreateHighlightAnnotationResult($createHighlightAnnotationResult);
    }
    /**
     * Get CreateHighlightAnnotationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\HighlightAnnotation|null
     */
    public function getCreateHighlightAnnotationResult()
    {
        return isset($this->CreateHighlightAnnotationResult) ? $this->CreateHighlightAnnotationResult : null;
    }
    /**
     * Set CreateHighlightAnnotationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\HighlightAnnotation $createHighlightAnnotationResult
     * @return \Brainloop\Soap\StructType\CreateHighlightAnnotationResponse
     */
    public function setCreateHighlightAnnotationResult(\Brainloop\Soap\StructType\HighlightAnnotation $createHighlightAnnotationResult = null)
    {
        if (is_null($createHighlightAnnotationResult) || (is_array($createHighlightAnnotationResult) && empty($createHighlightAnnotationResult))) {
            unset($this->CreateHighlightAnnotationResult);
        } else {
            $this->CreateHighlightAnnotationResult = $createHighlightAnnotationResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateHighlightAnnotationResponse
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
