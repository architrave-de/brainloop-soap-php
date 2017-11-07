<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendItemsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SendItemsResponse extends AbstractStructBase
{
    /**
     * The SendItemsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfEmailAndSendStatus
     */
    public $SendItemsResult;
    /**
     * Constructor method for SendItemsResponse
     * @uses SendItemsResponse::setSendItemsResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfEmailAndSendStatus $sendItemsResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfEmailAndSendStatus $sendItemsResult = null)
    {
        $this
            ->setSendItemsResult($sendItemsResult);
    }
    /**
     * Get SendItemsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfEmailAndSendStatus|null
     */
    public function getSendItemsResult()
    {
        return isset($this->SendItemsResult) ? $this->SendItemsResult : null;
    }
    /**
     * Set SendItemsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfEmailAndSendStatus $sendItemsResult
     * @return \Brainloop\Soap\StructType\SendItemsResponse
     */
    public function setSendItemsResult(\Brainloop\Soap\ArrayType\ArrayOfEmailAndSendStatus $sendItemsResult = null)
    {
        if (is_null($sendItemsResult) || (is_array($sendItemsResult) && empty($sendItemsResult))) {
            unset($this->SendItemsResult);
        } else {
            $this->SendItemsResult = $sendItemsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SendItemsResponse
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
