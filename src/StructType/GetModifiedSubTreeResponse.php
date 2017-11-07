<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetModifiedSubTreeResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetModifiedSubTreeResponse extends AbstractStructBase
{
    /**
     * The GetModifiedSubTreeResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\TreeItemCollection
     */
    public $GetModifiedSubTreeResult;
    /**
     * Constructor method for GetModifiedSubTreeResponse
     * @uses GetModifiedSubTreeResponse::setGetModifiedSubTreeResult()
     * @param \Brainloop\Soap\StructType\TreeItemCollection $getModifiedSubTreeResult
     */
    public function __construct(\Brainloop\Soap\StructType\TreeItemCollection $getModifiedSubTreeResult = null)
    {
        $this
            ->setGetModifiedSubTreeResult($getModifiedSubTreeResult);
    }
    /**
     * Get GetModifiedSubTreeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\TreeItemCollection|null
     */
    public function getGetModifiedSubTreeResult()
    {
        return isset($this->GetModifiedSubTreeResult) ? $this->GetModifiedSubTreeResult : null;
    }
    /**
     * Set GetModifiedSubTreeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\TreeItemCollection $getModifiedSubTreeResult
     * @return \Brainloop\Soap\StructType\GetModifiedSubTreeResponse
     */
    public function setGetModifiedSubTreeResult(\Brainloop\Soap\StructType\TreeItemCollection $getModifiedSubTreeResult = null)
    {
        if (is_null($getModifiedSubTreeResult) || (is_array($getModifiedSubTreeResult) && empty($getModifiedSubTreeResult))) {
            unset($this->GetModifiedSubTreeResult);
        } else {
            $this->GetModifiedSubTreeResult = $getModifiedSubTreeResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetModifiedSubTreeResponse
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
