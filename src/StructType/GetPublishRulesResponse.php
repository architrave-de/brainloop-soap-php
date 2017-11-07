<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPublishRulesResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetPublishRulesResponse extends AbstractStructBase
{
    /**
     * The GetPublishRulesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\PublishRuleCollection
     */
    public $GetPublishRulesResult;
    /**
     * Constructor method for GetPublishRulesResponse
     * @uses GetPublishRulesResponse::setGetPublishRulesResult()
     * @param \Brainloop\Soap\StructType\PublishRuleCollection $getPublishRulesResult
     */
    public function __construct(\Brainloop\Soap\StructType\PublishRuleCollection $getPublishRulesResult = null)
    {
        $this
            ->setGetPublishRulesResult($getPublishRulesResult);
    }
    /**
     * Get GetPublishRulesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\PublishRuleCollection|null
     */
    public function getGetPublishRulesResult()
    {
        return isset($this->GetPublishRulesResult) ? $this->GetPublishRulesResult : null;
    }
    /**
     * Set GetPublishRulesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\PublishRuleCollection $getPublishRulesResult
     * @return \Brainloop\Soap\StructType\GetPublishRulesResponse
     */
    public function setGetPublishRulesResult(\Brainloop\Soap\StructType\PublishRuleCollection $getPublishRulesResult = null)
    {
        if (is_null($getPublishRulesResult) || (is_array($getPublishRulesResult) && empty($getPublishRulesResult))) {
            unset($this->GetPublishRulesResult);
        } else {
            $this->GetPublishRulesResult = $getPublishRulesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetPublishRulesResponse
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
