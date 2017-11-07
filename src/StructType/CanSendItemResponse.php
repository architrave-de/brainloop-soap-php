<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CanSendItemResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CanSendItemResponse extends AbstractStructBase
{
    /**
     * The CanSendItemResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfEmailAndSendStatus
     */
    public $CanSendItemResult;
    /**
     * Constructor method for CanSendItemResponse
     * @uses CanSendItemResponse::setCanSendItemResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfEmailAndSendStatus $canSendItemResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfEmailAndSendStatus $canSendItemResult = null)
    {
        $this
            ->setCanSendItemResult($canSendItemResult);
    }
    /**
     * Get CanSendItemResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfEmailAndSendStatus|null
     */
    public function getCanSendItemResult()
    {
        return isset($this->CanSendItemResult) ? $this->CanSendItemResult : null;
    }
    /**
     * Set CanSendItemResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfEmailAndSendStatus $canSendItemResult
     * @return \Brainloop\Soap\StructType\CanSendItemResponse
     */
    public function setCanSendItemResult(\Brainloop\Soap\ArrayType\ArrayOfEmailAndSendStatus $canSendItemResult = null)
    {
        if (is_null($canSendItemResult) || (is_array($canSendItemResult) && empty($canSendItemResult))) {
            unset($this->CanSendItemResult);
        } else {
            $this->CanSendItemResult = $canSendItemResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CanSendItemResponse
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
