<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPermissionsForUserResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetPermissionsForUserResponse extends AbstractStructBase
{
    /**
     * The GetPermissionsForUserResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GetPermissionsForUserResult;
    /**
     * Constructor method for GetPermissionsForUserResponse
     * @uses GetPermissionsForUserResponse::setGetPermissionsForUserResult()
     * @param string $getPermissionsForUserResult
     */
    public function __construct($getPermissionsForUserResult = null)
    {
        $this
            ->setGetPermissionsForUserResult($getPermissionsForUserResult);
    }
    /**
     * Get GetPermissionsForUserResult value
     * @return string|null
     */
    public function getGetPermissionsForUserResult()
    {
        return $this->GetPermissionsForUserResult;
    }
    /**
     * Set GetPermissionsForUserResult value
     * @uses \Brainloop\Soap\EnumType\PermissionBits::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\PermissionBits::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $getPermissionsForUserResult
     * @return \Brainloop\Soap\StructType\GetPermissionsForUserResponse
     */
    public function setGetPermissionsForUserResult($getPermissionsForUserResult = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\PermissionBits::valueIsValid($getPermissionsForUserResult)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $getPermissionsForUserResult, implode(', ', \Brainloop\Soap\EnumType\PermissionBits::getValidValues())), __LINE__);
        }
        $this->GetPermissionsForUserResult = $getPermissionsForUserResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetPermissionsForUserResponse
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
