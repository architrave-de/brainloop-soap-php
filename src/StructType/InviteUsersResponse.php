<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InviteUsersResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class InviteUsersResponse extends AbstractStructBase
{
    /**
     * The InviteUsersResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfUser
     */
    public $InviteUsersResult;
    /**
     * Constructor method for InviteUsersResponse
     * @uses InviteUsersResponse::setInviteUsersResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfUser $inviteUsersResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfUser $inviteUsersResult = null)
    {
        $this
            ->setInviteUsersResult($inviteUsersResult);
    }
    /**
     * Get InviteUsersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfUser|null
     */
    public function getInviteUsersResult()
    {
        return isset($this->InviteUsersResult) ? $this->InviteUsersResult : null;
    }
    /**
     * Set InviteUsersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfUser $inviteUsersResult
     * @return \Brainloop\Soap\StructType\InviteUsersResponse
     */
    public function setInviteUsersResult(\Brainloop\Soap\ArrayType\ArrayOfUser $inviteUsersResult = null)
    {
        if (is_null($inviteUsersResult) || (is_array($inviteUsersResult) && empty($inviteUsersResult))) {
            unset($this->InviteUsersResult);
        } else {
            $this->InviteUsersResult = $inviteUsersResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\InviteUsersResponse
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
