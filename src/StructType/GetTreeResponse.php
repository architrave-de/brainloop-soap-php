<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTreeResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetTreeResponse extends AbstractStructBase
{
    /**
     * The GetTreeResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\TreeItemCollection
     */
    public $GetTreeResult;
    /**
     * Constructor method for GetTreeResponse
     * @uses GetTreeResponse::setGetTreeResult()
     * @param \Brainloop\Soap\StructType\TreeItemCollection $getTreeResult
     */
    public function __construct(\Brainloop\Soap\StructType\TreeItemCollection $getTreeResult = null)
    {
        $this
            ->setGetTreeResult($getTreeResult);
    }
    /**
     * Get GetTreeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\TreeItemCollection|null
     */
    public function getGetTreeResult()
    {
        return isset($this->GetTreeResult) ? $this->GetTreeResult : null;
    }
    /**
     * Set GetTreeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\TreeItemCollection $getTreeResult
     * @return \Brainloop\Soap\StructType\GetTreeResponse
     */
    public function setGetTreeResult(\Brainloop\Soap\StructType\TreeItemCollection $getTreeResult = null)
    {
        if (is_null($getTreeResult) || (is_array($getTreeResult) && empty($getTreeResult))) {
            unset($this->GetTreeResult);
        } else {
            $this->GetTreeResult = $getTreeResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetTreeResponse
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