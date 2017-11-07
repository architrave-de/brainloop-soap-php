<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateTextAnnotationResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateTextAnnotationResponse extends AbstractStructBase
{
    /**
     * The CreateTextAnnotationResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\TextAnnotation
     */
    public $CreateTextAnnotationResult;
    /**
     * Constructor method for CreateTextAnnotationResponse
     * @uses CreateTextAnnotationResponse::setCreateTextAnnotationResult()
     * @param \Brainloop\Soap\StructType\TextAnnotation $createTextAnnotationResult
     */
    public function __construct(\Brainloop\Soap\StructType\TextAnnotation $createTextAnnotationResult = null)
    {
        $this
            ->setCreateTextAnnotationResult($createTextAnnotationResult);
    }
    /**
     * Get CreateTextAnnotationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\TextAnnotation|null
     */
    public function getCreateTextAnnotationResult()
    {
        return isset($this->CreateTextAnnotationResult) ? $this->CreateTextAnnotationResult : null;
    }
    /**
     * Set CreateTextAnnotationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\TextAnnotation $createTextAnnotationResult
     * @return \Brainloop\Soap\StructType\CreateTextAnnotationResponse
     */
    public function setCreateTextAnnotationResult(\Brainloop\Soap\StructType\TextAnnotation $createTextAnnotationResult = null)
    {
        if (is_null($createTextAnnotationResult) || (is_array($createTextAnnotationResult) && empty($createTextAnnotationResult))) {
            unset($this->CreateTextAnnotationResult);
        } else {
            $this->CreateTextAnnotationResult = $createTextAnnotationResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateTextAnnotationResponse
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
