<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSubtreeResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetSubtreeResponse extends AbstractStructBase
{
    /**
     * The GetSubtreeResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\TreeItemCollection
     */
    public $GetSubtreeResult;
    /**
     * Constructor method for GetSubtreeResponse
     * @uses GetSubtreeResponse::setGetSubtreeResult()
     * @param \Brainloop\Soap\StructType\TreeItemCollection $getSubtreeResult
     */
    public function __construct(\Brainloop\Soap\StructType\TreeItemCollection $getSubtreeResult = null)
    {
        $this
            ->setGetSubtreeResult($getSubtreeResult);
    }
    /**
     * Get GetSubtreeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\TreeItemCollection|null
     */
    public function getGetSubtreeResult()
    {
        return isset($this->GetSubtreeResult) ? $this->GetSubtreeResult : null;
    }
    /**
     * Set GetSubtreeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\TreeItemCollection $getSubtreeResult
     * @return \Brainloop\Soap\StructType\GetSubtreeResponse
     */
    public function setGetSubtreeResult(\Brainloop\Soap\StructType\TreeItemCollection $getSubtreeResult = null)
    {
        if (is_null($getSubtreeResult) || (is_array($getSubtreeResult) && empty($getSubtreeResult))) {
            unset($this->GetSubtreeResult);
        } else {
            $this->GetSubtreeResult = $getSubtreeResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetSubtreeResponse
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
