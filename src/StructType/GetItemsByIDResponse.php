<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemsByIDResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetItemsByIDResponse extends AbstractStructBase
{
    /**
     * The GetItemsByIDResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ItemIDAndItemCollection
     */
    public $GetItemsByIDResult;
    /**
     * Constructor method for GetItemsByIDResponse
     * @uses GetItemsByIDResponse::setGetItemsByIDResult()
     * @param \Brainloop\Soap\StructType\ItemIDAndItemCollection $getItemsByIDResult
     */
    public function __construct(\Brainloop\Soap\StructType\ItemIDAndItemCollection $getItemsByIDResult = null)
    {
        $this
            ->setGetItemsByIDResult($getItemsByIDResult);
    }
    /**
     * Get GetItemsByIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ItemIDAndItemCollection|null
     */
    public function getGetItemsByIDResult()
    {
        return isset($this->GetItemsByIDResult) ? $this->GetItemsByIDResult : null;
    }
    /**
     * Set GetItemsByIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\ItemIDAndItemCollection $getItemsByIDResult
     * @return \Brainloop\Soap\StructType\GetItemsByIDResponse
     */
    public function setGetItemsByIDResult(\Brainloop\Soap\StructType\ItemIDAndItemCollection $getItemsByIDResult = null)
    {
        if (is_null($getItemsByIDResult) || (is_array($getItemsByIDResult) && empty($getItemsByIDResult))) {
            unset($this->GetItemsByIDResult);
        } else {
            $this->GetItemsByIDResult = $getItemsByIDResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetItemsByIDResponse
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
