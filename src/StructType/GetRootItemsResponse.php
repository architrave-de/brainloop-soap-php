<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRootItemsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetRootItemsResponse extends AbstractStructBase
{
    /**
     * The GetRootItemsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\TreeItemCollection
     */
    public $GetRootItemsResult;
    /**
     * Constructor method for GetRootItemsResponse
     * @uses GetRootItemsResponse::setGetRootItemsResult()
     * @param \Brainloop\Soap\StructType\TreeItemCollection $getRootItemsResult
     */
    public function __construct(\Brainloop\Soap\StructType\TreeItemCollection $getRootItemsResult = null)
    {
        $this
            ->setGetRootItemsResult($getRootItemsResult);
    }
    /**
     * Get GetRootItemsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\TreeItemCollection|null
     */
    public function getGetRootItemsResult()
    {
        return isset($this->GetRootItemsResult) ? $this->GetRootItemsResult : null;
    }
    /**
     * Set GetRootItemsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\TreeItemCollection $getRootItemsResult
     * @return \Brainloop\Soap\StructType\GetRootItemsResponse
     */
    public function setGetRootItemsResult(\Brainloop\Soap\StructType\TreeItemCollection $getRootItemsResult = null)
    {
        if (is_null($getRootItemsResult) || (is_array($getRootItemsResult) && empty($getRootItemsResult))) {
            unset($this->GetRootItemsResult);
        } else {
            $this->GetRootItemsResult = $getRootItemsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetRootItemsResponse
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
