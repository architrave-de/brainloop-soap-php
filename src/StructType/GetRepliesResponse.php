<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRepliesResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetRepliesResponse extends AbstractStructBase
{
    /**
     * The GetRepliesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\QandA_ReplyCollection
     */
    public $GetRepliesResult;
    /**
     * Constructor method for GetRepliesResponse
     * @uses GetRepliesResponse::setGetRepliesResult()
     * @param \Brainloop\Soap\StructType\QandA_ReplyCollection $getRepliesResult
     */
    public function __construct(\Brainloop\Soap\StructType\QandA_ReplyCollection $getRepliesResult = null)
    {
        $this
            ->setGetRepliesResult($getRepliesResult);
    }
    /**
     * Get GetRepliesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\QandA_ReplyCollection|null
     */
    public function getGetRepliesResult()
    {
        return isset($this->GetRepliesResult) ? $this->GetRepliesResult : null;
    }
    /**
     * Set GetRepliesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\QandA_ReplyCollection $getRepliesResult
     * @return \Brainloop\Soap\StructType\GetRepliesResponse
     */
    public function setGetRepliesResult(\Brainloop\Soap\StructType\QandA_ReplyCollection $getRepliesResult = null)
    {
        if (is_null($getRepliesResult) || (is_array($getRepliesResult) && empty($getRepliesResult))) {
            unset($this->GetRepliesResult);
        } else {
            $this->GetRepliesResult = $getRepliesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetRepliesResponse
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
