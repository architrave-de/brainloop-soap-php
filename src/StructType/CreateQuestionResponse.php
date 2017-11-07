<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateQuestionResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateQuestionResponse extends AbstractStructBase
{
    /**
     * The CreateQuestionResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\QandA
     */
    public $CreateQuestionResult;
    /**
     * Constructor method for CreateQuestionResponse
     * @uses CreateQuestionResponse::setCreateQuestionResult()
     * @param \Brainloop\Soap\StructType\QandA $createQuestionResult
     */
    public function __construct(\Brainloop\Soap\StructType\QandA $createQuestionResult = null)
    {
        $this
            ->setCreateQuestionResult($createQuestionResult);
    }
    /**
     * Get CreateQuestionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\QandA|null
     */
    public function getCreateQuestionResult()
    {
        return isset($this->CreateQuestionResult) ? $this->CreateQuestionResult : null;
    }
    /**
     * Set CreateQuestionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\QandA $createQuestionResult
     * @return \Brainloop\Soap\StructType\CreateQuestionResponse
     */
    public function setCreateQuestionResult(\Brainloop\Soap\StructType\QandA $createQuestionResult = null)
    {
        if (is_null($createQuestionResult) || (is_array($createQuestionResult) && empty($createQuestionResult))) {
            unset($this->CreateQuestionResult);
        } else {
            $this->CreateQuestionResult = $createQuestionResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateQuestionResponse
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
