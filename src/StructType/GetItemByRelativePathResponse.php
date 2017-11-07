<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemByRelativePathResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetItemByRelativePathResponse extends AbstractStructBase
{
    /**
     * The GetItemByRelativePathResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\TreeItem
     */
    public $GetItemByRelativePathResult;
    /**
     * Constructor method for GetItemByRelativePathResponse
     * @uses GetItemByRelativePathResponse::setGetItemByRelativePathResult()
     * @param \Brainloop\Soap\StructType\TreeItem $getItemByRelativePathResult
     */
    public function __construct(\Brainloop\Soap\StructType\TreeItem $getItemByRelativePathResult = null)
    {
        $this
            ->setGetItemByRelativePathResult($getItemByRelativePathResult);
    }
    /**
     * Get GetItemByRelativePathResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\TreeItem|null
     */
    public function getGetItemByRelativePathResult()
    {
        return isset($this->GetItemByRelativePathResult) ? $this->GetItemByRelativePathResult : null;
    }
    /**
     * Set GetItemByRelativePathResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\TreeItem $getItemByRelativePathResult
     * @return \Brainloop\Soap\StructType\GetItemByRelativePathResponse
     */
    public function setGetItemByRelativePathResult(\Brainloop\Soap\StructType\TreeItem $getItemByRelativePathResult = null)
    {
        if (is_null($getItemByRelativePathResult) || (is_array($getItemByRelativePathResult) && empty($getItemByRelativePathResult))) {
            unset($this->GetItemByRelativePathResult);
        } else {
            $this->GetItemByRelativePathResult = $getItemByRelativePathResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetItemByRelativePathResponse
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
