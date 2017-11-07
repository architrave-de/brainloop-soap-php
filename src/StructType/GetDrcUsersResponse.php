<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDrcUsersResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDrcUsersResponse extends AbstractStructBase
{
    /**
     * The GetDrcUsersResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ServiceDataroomUserCollection
     */
    public $GetDrcUsersResult;
    /**
     * Constructor method for GetDrcUsersResponse
     * @uses GetDrcUsersResponse::setGetDrcUsersResult()
     * @param \Brainloop\Soap\StructType\ServiceDataroomUserCollection $getDrcUsersResult
     */
    public function __construct(\Brainloop\Soap\StructType\ServiceDataroomUserCollection $getDrcUsersResult = null)
    {
        $this
            ->setGetDrcUsersResult($getDrcUsersResult);
    }
    /**
     * Get GetDrcUsersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ServiceDataroomUserCollection|null
     */
    public function getGetDrcUsersResult()
    {
        return isset($this->GetDrcUsersResult) ? $this->GetDrcUsersResult : null;
    }
    /**
     * Set GetDrcUsersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\ServiceDataroomUserCollection $getDrcUsersResult
     * @return \Brainloop\Soap\StructType\GetDrcUsersResponse
     */
    public function setGetDrcUsersResult(\Brainloop\Soap\StructType\ServiceDataroomUserCollection $getDrcUsersResult = null)
    {
        if (is_null($getDrcUsersResult) || (is_array($getDrcUsersResult) && empty($getDrcUsersResult))) {
            unset($this->GetDrcUsersResult);
        } else {
            $this->GetDrcUsersResult = $getDrcUsersResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetDrcUsersResponse
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
