<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SMSRequestResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SMSRequestResponse extends AbstractStructBase
{
    /**
     * The SMSRequestResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\SessionTokenRequest
     */
    public $SMSRequestResult;
    /**
     * Constructor method for SMSRequestResponse
     * @uses SMSRequestResponse::setSMSRequestResult()
     * @param \Brainloop\Soap\StructType\SessionTokenRequest $sMSRequestResult
     */
    public function __construct(\Brainloop\Soap\StructType\SessionTokenRequest $sMSRequestResult = null)
    {
        $this
            ->setSMSRequestResult($sMSRequestResult);
    }
    /**
     * Get SMSRequestResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\SessionTokenRequest|null
     */
    public function getSMSRequestResult()
    {
        return isset($this->SMSRequestResult) ? $this->SMSRequestResult : null;
    }
    /**
     * Set SMSRequestResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\SessionTokenRequest $sMSRequestResult
     * @return \Brainloop\Soap\StructType\SMSRequestResponse
     */
    public function setSMSRequestResult(\Brainloop\Soap\StructType\SessionTokenRequest $sMSRequestResult = null)
    {
        if (is_null($sMSRequestResult) || (is_array($sMSRequestResult) && empty($sMSRequestResult))) {
            unset($this->SMSRequestResult);
        } else {
            $this->SMSRequestResult = $sMSRequestResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SMSRequestResponse
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
