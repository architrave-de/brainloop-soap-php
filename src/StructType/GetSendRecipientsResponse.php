<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSendRecipientsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetSendRecipientsResponse extends AbstractStructBase
{
    /**
     * The GetSendRecipientsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\UserCollection
     */
    public $GetSendRecipientsResult;
    /**
     * Constructor method for GetSendRecipientsResponse
     * @uses GetSendRecipientsResponse::setGetSendRecipientsResult()
     * @param \Brainloop\Soap\StructType\UserCollection $getSendRecipientsResult
     */
    public function __construct(\Brainloop\Soap\StructType\UserCollection $getSendRecipientsResult = null)
    {
        $this
            ->setGetSendRecipientsResult($getSendRecipientsResult);
    }
    /**
     * Get GetSendRecipientsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\UserCollection|null
     */
    public function getGetSendRecipientsResult()
    {
        return isset($this->GetSendRecipientsResult) ? $this->GetSendRecipientsResult : null;
    }
    /**
     * Set GetSendRecipientsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\UserCollection $getSendRecipientsResult
     * @return \Brainloop\Soap\StructType\GetSendRecipientsResponse
     */
    public function setGetSendRecipientsResult(\Brainloop\Soap\StructType\UserCollection $getSendRecipientsResult = null)
    {
        if (is_null($getSendRecipientsResult) || (is_array($getSendRecipientsResult) && empty($getSendRecipientsResult))) {
            unset($this->GetSendRecipientsResult);
        } else {
            $this->GetSendRecipientsResult = $getSendRecipientsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetSendRecipientsResponse
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
