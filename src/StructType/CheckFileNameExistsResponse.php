<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckFileNameExistsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CheckFileNameExistsResponse extends AbstractStructBase
{
    /**
     * The CheckFileNameExistsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Valueboolean
     */
    public $CheckFileNameExistsResult;
    /**
     * Constructor method for CheckFileNameExistsResponse
     * @uses CheckFileNameExistsResponse::setCheckFileNameExistsResult()
     * @param \Brainloop\Soap\StructType\Valueboolean $checkFileNameExistsResult
     */
    public function __construct(\Brainloop\Soap\StructType\Valueboolean $checkFileNameExistsResult = null)
    {
        $this
            ->setCheckFileNameExistsResult($checkFileNameExistsResult);
    }
    /**
     * Get CheckFileNameExistsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Valueboolean|null
     */
    public function getCheckFileNameExistsResult()
    {
        return isset($this->CheckFileNameExistsResult) ? $this->CheckFileNameExistsResult : null;
    }
    /**
     * Set CheckFileNameExistsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Valueboolean $checkFileNameExistsResult
     * @return \Brainloop\Soap\StructType\CheckFileNameExistsResponse
     */
    public function setCheckFileNameExistsResult(\Brainloop\Soap\StructType\Valueboolean $checkFileNameExistsResult = null)
    {
        if (is_null($checkFileNameExistsResult) || (is_array($checkFileNameExistsResult) && empty($checkFileNameExistsResult))) {
            unset($this->CheckFileNameExistsResult);
        } else {
            $this->CheckFileNameExistsResult = $checkFileNameExistsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CheckFileNameExistsResponse
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
