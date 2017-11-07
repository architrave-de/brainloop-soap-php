<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateAnnotationsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateAnnotationsResponse extends AbstractStructBase
{
    /**
     * The CreateAnnotationsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\AnnotationBaseCollection
     */
    public $CreateAnnotationsResult;
    /**
     * Constructor method for CreateAnnotationsResponse
     * @uses CreateAnnotationsResponse::setCreateAnnotationsResult()
     * @param \Brainloop\Soap\StructType\AnnotationBaseCollection $createAnnotationsResult
     */
    public function __construct(\Brainloop\Soap\StructType\AnnotationBaseCollection $createAnnotationsResult = null)
    {
        $this
            ->setCreateAnnotationsResult($createAnnotationsResult);
    }
    /**
     * Get CreateAnnotationsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\AnnotationBaseCollection|null
     */
    public function getCreateAnnotationsResult()
    {
        return isset($this->CreateAnnotationsResult) ? $this->CreateAnnotationsResult : null;
    }
    /**
     * Set CreateAnnotationsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\AnnotationBaseCollection $createAnnotationsResult
     * @return \Brainloop\Soap\StructType\CreateAnnotationsResponse
     */
    public function setCreateAnnotationsResult(\Brainloop\Soap\StructType\AnnotationBaseCollection $createAnnotationsResult = null)
    {
        if (is_null($createAnnotationsResult) || (is_array($createAnnotationsResult) && empty($createAnnotationsResult))) {
            unset($this->CreateAnnotationsResult);
        } else {
            $this->CreateAnnotationsResult = $createAnnotationsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateAnnotationsResponse
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
