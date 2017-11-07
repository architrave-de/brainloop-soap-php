<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemVersionsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetItemVersionsResponse extends AbstractStructBase
{
    /**
     * The GetItemVersionsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\BLItemCollection
     */
    public $GetItemVersionsResult;
    /**
     * Constructor method for GetItemVersionsResponse
     * @uses GetItemVersionsResponse::setGetItemVersionsResult()
     * @param \Brainloop\Soap\StructType\BLItemCollection $getItemVersionsResult
     */
    public function __construct(\Brainloop\Soap\StructType\BLItemCollection $getItemVersionsResult = null)
    {
        $this
            ->setGetItemVersionsResult($getItemVersionsResult);
    }
    /**
     * Get GetItemVersionsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\BLItemCollection|null
     */
    public function getGetItemVersionsResult()
    {
        return isset($this->GetItemVersionsResult) ? $this->GetItemVersionsResult : null;
    }
    /**
     * Set GetItemVersionsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\BLItemCollection $getItemVersionsResult
     * @return \Brainloop\Soap\StructType\GetItemVersionsResponse
     */
    public function setGetItemVersionsResult(\Brainloop\Soap\StructType\BLItemCollection $getItemVersionsResult = null)
    {
        if (is_null($getItemVersionsResult) || (is_array($getItemVersionsResult) && empty($getItemVersionsResult))) {
            unset($this->GetItemVersionsResult);
        } else {
            $this->GetItemVersionsResult = $getItemVersionsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetItemVersionsResponse
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
