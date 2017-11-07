<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAncestorsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetAncestorsResponse extends AbstractStructBase
{
    /**
     * The GetAncestorsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\TreeItemCollection
     */
    public $GetAncestorsResult;
    /**
     * Constructor method for GetAncestorsResponse
     * @uses GetAncestorsResponse::setGetAncestorsResult()
     * @param \Brainloop\Soap\StructType\TreeItemCollection $getAncestorsResult
     */
    public function __construct(\Brainloop\Soap\StructType\TreeItemCollection $getAncestorsResult = null)
    {
        $this
            ->setGetAncestorsResult($getAncestorsResult);
    }
    /**
     * Get GetAncestorsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\TreeItemCollection|null
     */
    public function getGetAncestorsResult()
    {
        return isset($this->GetAncestorsResult) ? $this->GetAncestorsResult : null;
    }
    /**
     * Set GetAncestorsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\TreeItemCollection $getAncestorsResult
     * @return \Brainloop\Soap\StructType\GetAncestorsResponse
     */
    public function setGetAncestorsResult(\Brainloop\Soap\StructType\TreeItemCollection $getAncestorsResult = null)
    {
        if (is_null($getAncestorsResult) || (is_array($getAncestorsResult) && empty($getAncestorsResult))) {
            unset($this->GetAncestorsResult);
        } else {
            $this->GetAncestorsResult = $getAncestorsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetAncestorsResponse
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
