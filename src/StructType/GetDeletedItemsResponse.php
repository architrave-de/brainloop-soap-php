<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDeletedItemsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDeletedItemsResponse extends AbstractStructBase
{
    /**
     * The GetDeletedItemsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\BLItemCollection
     */
    public $GetDeletedItemsResult;
    /**
     * Constructor method for GetDeletedItemsResponse
     * @uses GetDeletedItemsResponse::setGetDeletedItemsResult()
     * @param \Brainloop\Soap\StructType\BLItemCollection $getDeletedItemsResult
     */
    public function __construct(\Brainloop\Soap\StructType\BLItemCollection $getDeletedItemsResult = null)
    {
        $this
            ->setGetDeletedItemsResult($getDeletedItemsResult);
    }
    /**
     * Get GetDeletedItemsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\BLItemCollection|null
     */
    public function getGetDeletedItemsResult()
    {
        return isset($this->GetDeletedItemsResult) ? $this->GetDeletedItemsResult : null;
    }
    /**
     * Set GetDeletedItemsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\BLItemCollection $getDeletedItemsResult
     * @return \Brainloop\Soap\StructType\GetDeletedItemsResponse
     */
    public function setGetDeletedItemsResult(\Brainloop\Soap\StructType\BLItemCollection $getDeletedItemsResult = null)
    {
        if (is_null($getDeletedItemsResult) || (is_array($getDeletedItemsResult) && empty($getDeletedItemsResult))) {
            unset($this->GetDeletedItemsResult);
        } else {
            $this->GetDeletedItemsResult = $getDeletedItemsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetDeletedItemsResponse
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
