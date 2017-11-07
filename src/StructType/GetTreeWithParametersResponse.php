<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTreeWithParametersResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetTreeWithParametersResponse extends AbstractStructBase
{
    /**
     * The GetTreeWithParametersResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\TreeItemCollection
     */
    public $GetTreeWithParametersResult;
    /**
     * Constructor method for GetTreeWithParametersResponse
     * @uses GetTreeWithParametersResponse::setGetTreeWithParametersResult()
     * @param \Brainloop\Soap\StructType\TreeItemCollection $getTreeWithParametersResult
     */
    public function __construct(\Brainloop\Soap\StructType\TreeItemCollection $getTreeWithParametersResult = null)
    {
        $this
            ->setGetTreeWithParametersResult($getTreeWithParametersResult);
    }
    /**
     * Get GetTreeWithParametersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\TreeItemCollection|null
     */
    public function getGetTreeWithParametersResult()
    {
        return isset($this->GetTreeWithParametersResult) ? $this->GetTreeWithParametersResult : null;
    }
    /**
     * Set GetTreeWithParametersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\TreeItemCollection $getTreeWithParametersResult
     * @return \Brainloop\Soap\StructType\GetTreeWithParametersResponse
     */
    public function setGetTreeWithParametersResult(\Brainloop\Soap\StructType\TreeItemCollection $getTreeWithParametersResult = null)
    {
        if (is_null($getTreeWithParametersResult) || (is_array($getTreeWithParametersResult) && empty($getTreeWithParametersResult))) {
            unset($this->GetTreeWithParametersResult);
        } else {
            $this->GetTreeWithParametersResult = $getTreeWithParametersResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetTreeWithParametersResponse
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
