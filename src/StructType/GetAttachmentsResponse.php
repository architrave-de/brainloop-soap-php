<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAttachmentsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetAttachmentsResponse extends AbstractStructBase
{
    /**
     * The GetAttachmentsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\BLItemCollection
     */
    public $GetAttachmentsResult;
    /**
     * Constructor method for GetAttachmentsResponse
     * @uses GetAttachmentsResponse::setGetAttachmentsResult()
     * @param \Brainloop\Soap\StructType\BLItemCollection $getAttachmentsResult
     */
    public function __construct(\Brainloop\Soap\StructType\BLItemCollection $getAttachmentsResult = null)
    {
        $this
            ->setGetAttachmentsResult($getAttachmentsResult);
    }
    /**
     * Get GetAttachmentsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\BLItemCollection|null
     */
    public function getGetAttachmentsResult()
    {
        return isset($this->GetAttachmentsResult) ? $this->GetAttachmentsResult : null;
    }
    /**
     * Set GetAttachmentsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\BLItemCollection $getAttachmentsResult
     * @return \Brainloop\Soap\StructType\GetAttachmentsResponse
     */
    public function setGetAttachmentsResult(\Brainloop\Soap\StructType\BLItemCollection $getAttachmentsResult = null)
    {
        if (is_null($getAttachmentsResult) || (is_array($getAttachmentsResult) && empty($getAttachmentsResult))) {
            unset($this->GetAttachmentsResult);
        } else {
            $this->GetAttachmentsResult = $getAttachmentsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetAttachmentsResponse
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
