<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreezeItemResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class FreezeItemResponse extends AbstractStructBase
{
    /**
     * The FreezeItemResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\BLItem
     */
    public $FreezeItemResult;
    /**
     * Constructor method for FreezeItemResponse
     * @uses FreezeItemResponse::setFreezeItemResult()
     * @param \Brainloop\Soap\StructType\BLItem $freezeItemResult
     */
    public function __construct(\Brainloop\Soap\StructType\BLItem $freezeItemResult = null)
    {
        $this
            ->setFreezeItemResult($freezeItemResult);
    }
    /**
     * Get FreezeItemResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\BLItem|null
     */
    public function getFreezeItemResult()
    {
        return isset($this->FreezeItemResult) ? $this->FreezeItemResult : null;
    }
    /**
     * Set FreezeItemResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\BLItem $freezeItemResult
     * @return \Brainloop\Soap\StructType\FreezeItemResponse
     */
    public function setFreezeItemResult(\Brainloop\Soap\StructType\BLItem $freezeItemResult = null)
    {
        if (is_null($freezeItemResult) || (is_array($freezeItemResult) && empty($freezeItemResult))) {
            unset($this->FreezeItemResult);
        } else {
            $this->FreezeItemResult = $freezeItemResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\FreezeItemResponse
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
