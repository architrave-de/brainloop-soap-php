<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateTemplateResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateTemplateResponse extends AbstractStructBase
{
    /**
     * The CreateTemplateResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Dataroom
     */
    public $CreateTemplateResult;
    /**
     * Constructor method for CreateTemplateResponse
     * @uses CreateTemplateResponse::setCreateTemplateResult()
     * @param \Brainloop\Soap\StructType\Dataroom $createTemplateResult
     */
    public function __construct(\Brainloop\Soap\StructType\Dataroom $createTemplateResult = null)
    {
        $this
            ->setCreateTemplateResult($createTemplateResult);
    }
    /**
     * Get CreateTemplateResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Dataroom|null
     */
    public function getCreateTemplateResult()
    {
        return isset($this->CreateTemplateResult) ? $this->CreateTemplateResult : null;
    }
    /**
     * Set CreateTemplateResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Dataroom $createTemplateResult
     * @return \Brainloop\Soap\StructType\CreateTemplateResponse
     */
    public function setCreateTemplateResult(\Brainloop\Soap\StructType\Dataroom $createTemplateResult = null)
    {
        if (is_null($createTemplateResult) || (is_array($createTemplateResult) && empty($createTemplateResult))) {
            unset($this->CreateTemplateResult);
        } else {
            $this->CreateTemplateResult = $createTemplateResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateTemplateResponse
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
