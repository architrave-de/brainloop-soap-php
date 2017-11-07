<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InviteUsersWithEmailResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class InviteUsersWithEmailResponse extends AbstractStructBase
{
    /**
     * The InviteUsersWithEmailResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfUser
     */
    public $InviteUsersWithEmailResult;
    /**
     * Constructor method for InviteUsersWithEmailResponse
     * @uses InviteUsersWithEmailResponse::setInviteUsersWithEmailResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfUser $inviteUsersWithEmailResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfUser $inviteUsersWithEmailResult = null)
    {
        $this
            ->setInviteUsersWithEmailResult($inviteUsersWithEmailResult);
    }
    /**
     * Get InviteUsersWithEmailResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfUser|null
     */
    public function getInviteUsersWithEmailResult()
    {
        return isset($this->InviteUsersWithEmailResult) ? $this->InviteUsersWithEmailResult : null;
    }
    /**
     * Set InviteUsersWithEmailResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfUser $inviteUsersWithEmailResult
     * @return \Brainloop\Soap\StructType\InviteUsersWithEmailResponse
     */
    public function setInviteUsersWithEmailResult(\Brainloop\Soap\ArrayType\ArrayOfUser $inviteUsersWithEmailResult = null)
    {
        if (is_null($inviteUsersWithEmailResult) || (is_array($inviteUsersWithEmailResult) && empty($inviteUsersWithEmailResult))) {
            unset($this->InviteUsersWithEmailResult);
        } else {
            $this->InviteUsersWithEmailResult = $inviteUsersWithEmailResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\InviteUsersWithEmailResponse
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
