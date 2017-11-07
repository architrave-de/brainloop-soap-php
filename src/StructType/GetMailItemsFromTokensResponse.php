<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMailItemsFromTokensResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetMailItemsFromTokensResponse extends AbstractStructBase
{
    /**
     * The GetMailItemsFromTokensResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\MailItemCollection
     */
    public $GetMailItemsFromTokensResult;
    /**
     * Constructor method for GetMailItemsFromTokensResponse
     * @uses GetMailItemsFromTokensResponse::setGetMailItemsFromTokensResult()
     * @param \Brainloop\Soap\StructType\MailItemCollection $getMailItemsFromTokensResult
     */
    public function __construct(\Brainloop\Soap\StructType\MailItemCollection $getMailItemsFromTokensResult = null)
    {
        $this
            ->setGetMailItemsFromTokensResult($getMailItemsFromTokensResult);
    }
    /**
     * Get GetMailItemsFromTokensResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\MailItemCollection|null
     */
    public function getGetMailItemsFromTokensResult()
    {
        return isset($this->GetMailItemsFromTokensResult) ? $this->GetMailItemsFromTokensResult : null;
    }
    /**
     * Set GetMailItemsFromTokensResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\MailItemCollection $getMailItemsFromTokensResult
     * @return \Brainloop\Soap\StructType\GetMailItemsFromTokensResponse
     */
    public function setGetMailItemsFromTokensResult(\Brainloop\Soap\StructType\MailItemCollection $getMailItemsFromTokensResult = null)
    {
        if (is_null($getMailItemsFromTokensResult) || (is_array($getMailItemsFromTokensResult) && empty($getMailItemsFromTokensResult))) {
            unset($this->GetMailItemsFromTokensResult);
        } else {
            $this->GetMailItemsFromTokensResult = $getMailItemsFromTokensResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetMailItemsFromTokensResponse
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
