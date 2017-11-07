<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDrcUserResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDrcUserResponse extends AbstractStructBase
{
    /**
     * The GetDrcUserResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ServiceDataroomUserCollection
     */
    public $GetDrcUserResult;
    /**
     * Constructor method for GetDrcUserResponse
     * @uses GetDrcUserResponse::setGetDrcUserResult()
     * @param \Brainloop\Soap\StructType\ServiceDataroomUserCollection $getDrcUserResult
     */
    public function __construct(\Brainloop\Soap\StructType\ServiceDataroomUserCollection $getDrcUserResult = null)
    {
        $this
            ->setGetDrcUserResult($getDrcUserResult);
    }
    /**
     * Get GetDrcUserResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ServiceDataroomUserCollection|null
     */
    public function getGetDrcUserResult()
    {
        return isset($this->GetDrcUserResult) ? $this->GetDrcUserResult : null;
    }
    /**
     * Set GetDrcUserResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\ServiceDataroomUserCollection $getDrcUserResult
     * @return \Brainloop\Soap\StructType\GetDrcUserResponse
     */
    public function setGetDrcUserResult(\Brainloop\Soap\StructType\ServiceDataroomUserCollection $getDrcUserResult = null)
    {
        if (is_null($getDrcUserResult) || (is_array($getDrcUserResult) && empty($getDrcUserResult))) {
            unset($this->GetDrcUserResult);
        } else {
            $this->GetDrcUserResult = $getDrcUserResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetDrcUserResponse
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
