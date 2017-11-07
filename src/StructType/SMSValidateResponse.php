<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SMSValidateResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SMSValidateResponse extends AbstractStructBase
{
    /**
     * The SMSValidateResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfSessionToken
     */
    public $SMSValidateResult;
    /**
     * Constructor method for SMSValidateResponse
     * @uses SMSValidateResponse::setSMSValidateResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfSessionToken $sMSValidateResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfSessionToken $sMSValidateResult = null)
    {
        $this
            ->setSMSValidateResult($sMSValidateResult);
    }
    /**
     * Get SMSValidateResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfSessionToken|null
     */
    public function getSMSValidateResult()
    {
        return isset($this->SMSValidateResult) ? $this->SMSValidateResult : null;
    }
    /**
     * Set SMSValidateResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfSessionToken $sMSValidateResult
     * @return \Brainloop\Soap\StructType\SMSValidateResponse
     */
    public function setSMSValidateResult(\Brainloop\Soap\ArrayType\ArrayOfSessionToken $sMSValidateResult = null)
    {
        if (is_null($sMSValidateResult) || (is_array($sMSValidateResult) && empty($sMSValidateResult))) {
            unset($this->SMSValidateResult);
        } else {
            $this->SMSValidateResult = $sMSValidateResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SMSValidateResponse
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
