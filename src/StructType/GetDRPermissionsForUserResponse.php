<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDRPermissionsForUserResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDRPermissionsForUserResponse extends AbstractStructBase
{
    /**
     * The GetDRPermissionsForUserResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GetDRPermissionsForUserResult;
    /**
     * Constructor method for GetDRPermissionsForUserResponse
     * @uses GetDRPermissionsForUserResponse::setGetDRPermissionsForUserResult()
     * @param string $getDRPermissionsForUserResult
     */
    public function __construct($getDRPermissionsForUserResult = null)
    {
        $this
            ->setGetDRPermissionsForUserResult($getDRPermissionsForUserResult);
    }
    /**
     * Get GetDRPermissionsForUserResult value
     * @return string|null
     */
    public function getGetDRPermissionsForUserResult()
    {
        return $this->GetDRPermissionsForUserResult;
    }
    /**
     * Set GetDRPermissionsForUserResult value
     * @uses \Brainloop\Soap\EnumType\PermissionBits::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\PermissionBits::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $getDRPermissionsForUserResult
     * @return \Brainloop\Soap\StructType\GetDRPermissionsForUserResponse
     */
    public function setGetDRPermissionsForUserResult($getDRPermissionsForUserResult = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\PermissionBits::valueIsValid($getDRPermissionsForUserResult)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $getDRPermissionsForUserResult, implode(', ', \Brainloop\Soap\EnumType\PermissionBits::getValidValues())), __LINE__);
        }
        $this->GetDRPermissionsForUserResult = $getDRPermissionsForUserResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetDRPermissionsForUserResponse
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
