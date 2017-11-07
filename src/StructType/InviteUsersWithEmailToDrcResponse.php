<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InviteUsersWithEmailToDrcResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class InviteUsersWithEmailToDrcResponse extends AbstractStructBase
{
    /**
     * The InviteUsersWithEmailToDrcResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfUser
     */
    public $InviteUsersWithEmailToDrcResult;
    /**
     * Constructor method for InviteUsersWithEmailToDrcResponse
     * @uses InviteUsersWithEmailToDrcResponse::setInviteUsersWithEmailToDrcResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfUser $inviteUsersWithEmailToDrcResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfUser $inviteUsersWithEmailToDrcResult = null)
    {
        $this
            ->setInviteUsersWithEmailToDrcResult($inviteUsersWithEmailToDrcResult);
    }
    /**
     * Get InviteUsersWithEmailToDrcResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfUser|null
     */
    public function getInviteUsersWithEmailToDrcResult()
    {
        return isset($this->InviteUsersWithEmailToDrcResult) ? $this->InviteUsersWithEmailToDrcResult : null;
    }
    /**
     * Set InviteUsersWithEmailToDrcResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfUser $inviteUsersWithEmailToDrcResult
     * @return \Brainloop\Soap\StructType\InviteUsersWithEmailToDrcResponse
     */
    public function setInviteUsersWithEmailToDrcResult(\Brainloop\Soap\ArrayType\ArrayOfUser $inviteUsersWithEmailToDrcResult = null)
    {
        if (is_null($inviteUsersWithEmailToDrcResult) || (is_array($inviteUsersWithEmailToDrcResult) && empty($inviteUsersWithEmailToDrcResult))) {
            unset($this->InviteUsersWithEmailToDrcResult);
        } else {
            $this->InviteUsersWithEmailToDrcResult = $inviteUsersWithEmailToDrcResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\InviteUsersWithEmailToDrcResponse
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
