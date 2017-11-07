<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateUnderlineAnnotationResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateUnderlineAnnotationResponse extends AbstractStructBase
{
    /**
     * The CreateUnderlineAnnotationResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\UnderlineAnnotation
     */
    public $CreateUnderlineAnnotationResult;
    /**
     * Constructor method for CreateUnderlineAnnotationResponse
     * @uses CreateUnderlineAnnotationResponse::setCreateUnderlineAnnotationResult()
     * @param \Brainloop\Soap\StructType\UnderlineAnnotation $createUnderlineAnnotationResult
     */
    public function __construct(\Brainloop\Soap\StructType\UnderlineAnnotation $createUnderlineAnnotationResult = null)
    {
        $this
            ->setCreateUnderlineAnnotationResult($createUnderlineAnnotationResult);
    }
    /**
     * Get CreateUnderlineAnnotationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\UnderlineAnnotation|null
     */
    public function getCreateUnderlineAnnotationResult()
    {
        return isset($this->CreateUnderlineAnnotationResult) ? $this->CreateUnderlineAnnotationResult : null;
    }
    /**
     * Set CreateUnderlineAnnotationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\UnderlineAnnotation $createUnderlineAnnotationResult
     * @return \Brainloop\Soap\StructType\CreateUnderlineAnnotationResponse
     */
    public function setCreateUnderlineAnnotationResult(\Brainloop\Soap\StructType\UnderlineAnnotation $createUnderlineAnnotationResult = null)
    {
        if (is_null($createUnderlineAnnotationResult) || (is_array($createUnderlineAnnotationResult) && empty($createUnderlineAnnotationResult))) {
            unset($this->CreateUnderlineAnnotationResult);
        } else {
            $this->CreateUnderlineAnnotationResult = $createUnderlineAnnotationResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateUnderlineAnnotationResponse
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
