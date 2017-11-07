<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateTokenResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ValidateTokenResponse extends AbstractStructBase
{
    /**
     * The ValidateTokenResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Valueboolean
     */
    public $ValidateTokenResult;
    /**
     * Constructor method for ValidateTokenResponse
     * @uses ValidateTokenResponse::setValidateTokenResult()
     * @param \Brainloop\Soap\StructType\Valueboolean $validateTokenResult
     */
    public function __construct(\Brainloop\Soap\StructType\Valueboolean $validateTokenResult = null)
    {
        $this
            ->setValidateTokenResult($validateTokenResult);
    }
    /**
     * Get ValidateTokenResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Valueboolean|null
     */
    public function getValidateTokenResult()
    {
        return isset($this->ValidateTokenResult) ? $this->ValidateTokenResult : null;
    }
    /**
     * Set ValidateTokenResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Valueboolean $validateTokenResult
     * @return \Brainloop\Soap\StructType\ValidateTokenResponse
     */
    public function setValidateTokenResult(\Brainloop\Soap\StructType\Valueboolean $validateTokenResult = null)
    {
        if (is_null($validateTokenResult) || (is_array($validateTokenResult) && empty($validateTokenResult))) {
            unset($this->ValidateTokenResult);
        } else {
            $this->ValidateTokenResult = $validateTokenResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ValidateTokenResponse
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
