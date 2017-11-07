<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetModifiedTreeWithTrashcanResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetModifiedTreeWithTrashcanResponse extends AbstractStructBase
{
    /**
     * The GetModifiedTreeWithTrashcanResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\TreeItemCollection
     */
    public $GetModifiedTreeWithTrashcanResult;
    /**
     * Constructor method for GetModifiedTreeWithTrashcanResponse
     * @uses GetModifiedTreeWithTrashcanResponse::setGetModifiedTreeWithTrashcanResult()
     * @param \Brainloop\Soap\StructType\TreeItemCollection $getModifiedTreeWithTrashcanResult
     */
    public function __construct(\Brainloop\Soap\StructType\TreeItemCollection $getModifiedTreeWithTrashcanResult = null)
    {
        $this
            ->setGetModifiedTreeWithTrashcanResult($getModifiedTreeWithTrashcanResult);
    }
    /**
     * Get GetModifiedTreeWithTrashcanResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\TreeItemCollection|null
     */
    public function getGetModifiedTreeWithTrashcanResult()
    {
        return isset($this->GetModifiedTreeWithTrashcanResult) ? $this->GetModifiedTreeWithTrashcanResult : null;
    }
    /**
     * Set GetModifiedTreeWithTrashcanResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\TreeItemCollection $getModifiedTreeWithTrashcanResult
     * @return \Brainloop\Soap\StructType\GetModifiedTreeWithTrashcanResponse
     */
    public function setGetModifiedTreeWithTrashcanResult(\Brainloop\Soap\StructType\TreeItemCollection $getModifiedTreeWithTrashcanResult = null)
    {
        if (is_null($getModifiedTreeWithTrashcanResult) || (is_array($getModifiedTreeWithTrashcanResult) && empty($getModifiedTreeWithTrashcanResult))) {
            unset($this->GetModifiedTreeWithTrashcanResult);
        } else {
            $this->GetModifiedTreeWithTrashcanResult = $getModifiedTreeWithTrashcanResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetModifiedTreeWithTrashcanResponse
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
