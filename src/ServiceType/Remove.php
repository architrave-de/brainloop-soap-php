<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Remove ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Remove extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RemoveFormWatchlist
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\RemoveFormWatchlist $parameters
     * @return \Brainloop\Soap\StructType\RemoveFormWatchlistResponse|bool
     */
    public function RemoveFormWatchlist(\Brainloop\Soap\StructType\RemoveFormWatchlist $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->RemoveFormWatchlist($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveCollaborator
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\RemoveCollaborator $parameters
     * @return \Brainloop\Soap\StructType\RemoveCollaboratorResponse|bool
     */
    public function RemoveCollaborator(\Brainloop\Soap\StructType\RemoveCollaborator $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->RemoveCollaborator($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveRecipient
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\RemoveRecipient $parameters
     * @return \Brainloop\Soap\StructType\RemoveRecipientResponse|bool
     */
    public function RemoveRecipient(\Brainloop\Soap\StructType\RemoveRecipient $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->RemoveRecipient($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveUsersFromSecurityGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\RemoveUsersFromSecurityGroup $parameters
     * @return \Brainloop\Soap\StructType\RemoveUsersFromSecurityGroupResponse|bool
     */
    public function RemoveUsersFromSecurityGroup(\Brainloop\Soap\StructType\RemoveUsersFromSecurityGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->RemoveUsersFromSecurityGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveDRCGroupsFromSecurityGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\RemoveDRCGroupsFromSecurityGroup $parameters
     * @return \Brainloop\Soap\StructType\RemoveDRCGroupsFromSecurityGroupResponse|bool
     */
    public function RemoveDRCGroupsFromSecurityGroup(\Brainloop\Soap\StructType\RemoveDRCGroupsFromSecurityGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->RemoveDRCGroupsFromSecurityGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveUserFromDataroom
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\RemoveUserFromDataroom $parameters
     * @return \Brainloop\Soap\StructType\RemoveUserFromDataroomResponse|bool
     */
    public function RemoveUserFromDataroom(\Brainloop\Soap\StructType\RemoveUserFromDataroom $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->RemoveUserFromDataroom($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveUserFromDataroomAsDRCAdmin
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\RemoveUserFromDataroomAsDRCAdmin $parameters
     * @return \Brainloop\Soap\StructType\RemoveUserFromDataroomAsDRCAdminResponse|bool
     */
    public function RemoveUserFromDataroomAsDRCAdmin(\Brainloop\Soap\StructType\RemoveUserFromDataroomAsDRCAdmin $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->RemoveUserFromDataroomAsDRCAdmin($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveUserFromDRC
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\RemoveUserFromDRC $parameters
     * @return \Brainloop\Soap\StructType\RemoveUserFromDRCResponse|bool
     */
    public function RemoveUserFromDRC(\Brainloop\Soap\StructType\RemoveUserFromDRC $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->RemoveUserFromDRC($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveUsersFromDrcSecurityGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\RemoveUsersFromDrcSecurityGroup $parameters
     * @return \Brainloop\Soap\StructType\RemoveUsersFromDrcSecurityGroupResponse|bool
     */
    public function RemoveUsersFromDrcSecurityGroup(\Brainloop\Soap\StructType\RemoveUsersFromDrcSecurityGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->RemoveUsersFromDrcSecurityGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\RemoveCollaboratorResponse|\Brainloop\Soap\StructType\RemoveDRCGroupsFromSecurityGroupResponse|\Brainloop\Soap\StructType\RemoveFormWatchlistResponse|\Brainloop\Soap\StructType\RemoveRecipientResponse|\Brainloop\Soap\StructType\RemoveUserFromDataroomAsDRCAdminResponse|\Brainloop\Soap\StructType\RemoveUserFromDataroomResponse|\Brainloop\Soap\StructType\RemoveUserFromDRCResponse|\Brainloop\Soap\StructType\RemoveUsersFromDrcSecurityGroupResponse|\Brainloop\Soap\StructType\RemoveUsersFromSecurityGroupResponse
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
