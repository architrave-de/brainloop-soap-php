<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateFreeTextAnnotationResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateFreeTextAnnotationResponse extends AbstractStructBase
{
    /**
     * The CreateFreeTextAnnotationResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\FreeTextAnnotation
     */
    public $CreateFreeTextAnnotationResult;
    /**
     * Constructor method for CreateFreeTextAnnotationResponse
     * @uses CreateFreeTextAnnotationResponse::setCreateFreeTextAnnotationResult()
     * @param \Brainloop\Soap\StructType\FreeTextAnnotation $createFreeTextAnnotationResult
     */
    public function __construct(\Brainloop\Soap\StructType\FreeTextAnnotation $createFreeTextAnnotationResult = null)
    {
        $this
            ->setCreateFreeTextAnnotationResult($createFreeTextAnnotationResult);
    }
    /**
     * Get CreateFreeTextAnnotationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\FreeTextAnnotation|null
     */
    public function getCreateFreeTextAnnotationResult()
    {
        return isset($this->CreateFreeTextAnnotationResult) ? $this->CreateFreeTextAnnotationResult : null;
    }
    /**
     * Set CreateFreeTextAnnotationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\FreeTextAnnotation $createFreeTextAnnotationResult
     * @return \Brainloop\Soap\StructType\CreateFreeTextAnnotationResponse
     */
    public function setCreateFreeTextAnnotationResult(\Brainloop\Soap\StructType\FreeTextAnnotation $createFreeTextAnnotationResult = null)
    {
        if (is_null($createFreeTextAnnotationResult) || (is_array($createFreeTextAnnotationResult) && empty($createFreeTextAnnotationResult))) {
            unset($this->CreateFreeTextAnnotationResult);
        } else {
            $this->CreateFreeTextAnnotationResult = $createFreeTextAnnotationResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateFreeTextAnnotationResponse
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
