<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemPropertiesResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetItemPropertiesResponse extends AbstractStructBase
{
    /**
     * The GetItemPropertiesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ServicePropertyCollection
     */
    public $GetItemPropertiesResult;
    /**
     * Constructor method for GetItemPropertiesResponse
     * @uses GetItemPropertiesResponse::setGetItemPropertiesResult()
     * @param \Brainloop\Soap\StructType\ServicePropertyCollection $getItemPropertiesResult
     */
    public function __construct(\Brainloop\Soap\StructType\ServicePropertyCollection $getItemPropertiesResult = null)
    {
        $this
            ->setGetItemPropertiesResult($getItemPropertiesResult);
    }
    /**
     * Get GetItemPropertiesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ServicePropertyCollection|null
     */
    public function getGetItemPropertiesResult()
    {
        return isset($this->GetItemPropertiesResult) ? $this->GetItemPropertiesResult : null;
    }
    /**
     * Set GetItemPropertiesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\ServicePropertyCollection $getItemPropertiesResult
     * @return \Brainloop\Soap\StructType\GetItemPropertiesResponse
     */
    public function setGetItemPropertiesResult(\Brainloop\Soap\StructType\ServicePropertyCollection $getItemPropertiesResult = null)
    {
        if (is_null($getItemPropertiesResult) || (is_array($getItemPropertiesResult) && empty($getItemPropertiesResult))) {
            unset($this->GetItemPropertiesResult);
        } else {
            $this->GetItemPropertiesResult = $getItemPropertiesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetItemPropertiesResponse
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
