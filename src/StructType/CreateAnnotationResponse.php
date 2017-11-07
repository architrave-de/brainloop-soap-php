<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateAnnotationResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateAnnotationResponse extends AbstractStructBase
{
    /**
     * The CreateAnnotationResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\AnnotationBase
     */
    public $CreateAnnotationResult;
    /**
     * Constructor method for CreateAnnotationResponse
     * @uses CreateAnnotationResponse::setCreateAnnotationResult()
     * @param \Brainloop\Soap\StructType\AnnotationBase $createAnnotationResult
     */
    public function __construct(\Brainloop\Soap\StructType\AnnotationBase $createAnnotationResult = null)
    {
        $this
            ->setCreateAnnotationResult($createAnnotationResult);
    }
    /**
     * Get CreateAnnotationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\AnnotationBase|null
     */
    public function getCreateAnnotationResult()
    {
        return isset($this->CreateAnnotationResult) ? $this->CreateAnnotationResult : null;
    }
    /**
     * Set CreateAnnotationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\AnnotationBase $createAnnotationResult
     * @return \Brainloop\Soap\StructType\CreateAnnotationResponse
     */
    public function setCreateAnnotationResult(\Brainloop\Soap\StructType\AnnotationBase $createAnnotationResult = null)
    {
        if (is_null($createAnnotationResult) || (is_array($createAnnotationResult) && empty($createAnnotationResult))) {
            unset($this->CreateAnnotationResult);
        } else {
            $this->CreateAnnotationResult = $createAnnotationResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateAnnotationResponse
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
