<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Invite ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Invite extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named InviteUsersWithEmail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\InviteUsersWithEmail $parameters
     * @return \Brainloop\Soap\StructType\InviteUsersWithEmailResponse|bool
     */
    public function InviteUsersWithEmail(\Brainloop\Soap\StructType\InviteUsersWithEmail $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->InviteUsersWithEmail($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named InviteUsers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\InviteUsers $parameters
     * @return \Brainloop\Soap\StructType\InviteUsersResponse|bool
     */
    public function InviteUsers(\Brainloop\Soap\StructType\InviteUsers $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->InviteUsers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named InviteUsersWithEmailToDrc
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\InviteUsersWithEmailToDrc $parameters
     * @return \Brainloop\Soap\StructType\InviteUsersWithEmailToDrcResponse|bool
     */
    public function InviteUsersWithEmailToDrc(\Brainloop\Soap\StructType\InviteUsersWithEmailToDrc $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->InviteUsersWithEmailToDrc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\InviteUsersResponse|\Brainloop\Soap\StructType\InviteUsersWithEmailResponse|\Brainloop\Soap\StructType\InviteUsersWithEmailToDrcResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
