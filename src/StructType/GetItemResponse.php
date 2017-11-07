<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetItemResponse extends AbstractStructBase
{
    /**
     * The GetItemResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\BLItem
     */
    public $GetItemResult;
    /**
     * Constructor method for GetItemResponse
     * @uses GetItemResponse::setGetItemResult()
     * @param \Brainloop\Soap\StructType\BLItem $getItemResult
     */
    public function __construct(\Brainloop\Soap\StructType\BLItem $getItemResult = null)
    {
        $this
            ->setGetItemResult($getItemResult);
    }
    /**
     * Get GetItemResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\BLItem|null
     */
    public function getGetItemResult()
    {
        return isset($this->GetItemResult) ? $this->GetItemResult : null;
    }
    /**
     * Set GetItemResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\BLItem $getItemResult
     * @return \Brainloop\Soap\StructType\GetItemResponse
     */
    public function setGetItemResult(\Brainloop\Soap\StructType\BLItem $getItemResult = null)
    {
        if (is_null($getItemResult) || (is_array($getItemResult) && empty($getItemResult))) {
            unset($this->GetItemResult);
        } else {
            $this->GetItemResult = $getItemResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetItemResponse
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
