<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTermsAndConditionsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetTermsAndConditionsResponse extends AbstractStructBase
{
    /**
     * The GetTermsAndConditionsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\TermsAndConditions
     */
    public $GetTermsAndConditionsResult;
    /**
     * Constructor method for GetTermsAndConditionsResponse
     * @uses GetTermsAndConditionsResponse::setGetTermsAndConditionsResult()
     * @param \Brainloop\Soap\StructType\TermsAndConditions $getTermsAndConditionsResult
     */
    public function __construct(\Brainloop\Soap\StructType\TermsAndConditions $getTermsAndConditionsResult = null)
    {
        $this
            ->setGetTermsAndConditionsResult($getTermsAndConditionsResult);
    }
    /**
     * Get GetTermsAndConditionsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\TermsAndConditions|null
     */
    public function getGetTermsAndConditionsResult()
    {
        return isset($this->GetTermsAndConditionsResult) ? $this->GetTermsAndConditionsResult : null;
    }
    /**
     * Set GetTermsAndConditionsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\TermsAndConditions $getTermsAndConditionsResult
     * @return \Brainloop\Soap\StructType\GetTermsAndConditionsResponse
     */
    public function setGetTermsAndConditionsResult(\Brainloop\Soap\StructType\TermsAndConditions $getTermsAndConditionsResult = null)
    {
        if (is_null($getTermsAndConditionsResult) || (is_array($getTermsAndConditionsResult) && empty($getTermsAndConditionsResult))) {
            unset($this->GetTermsAndConditionsResult);
        } else {
            $this->GetTermsAndConditionsResult = $getTermsAndConditionsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetTermsAndConditionsResponse
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
