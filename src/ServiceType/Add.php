<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AddToWatchlist
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\AddToWatchlist $parameters
     * @return \Brainloop\Soap\StructType\AddToWatchlistResponse|bool
     */
    public function AddToWatchlist(\Brainloop\Soap\StructType\AddToWatchlist $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AddToWatchlist($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddCollaborators
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\AddCollaborators $parameters
     * @return \Brainloop\Soap\StructType\AddCollaboratorsResponse|bool
     */
    public function AddCollaborators(\Brainloop\Soap\StructType\AddCollaborators $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AddCollaborators($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddUsersToSecurityGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\AddUsersToSecurityGroup $parameters
     * @return \Brainloop\Soap\StructType\AddUsersToSecurityGroupResponse|bool
     */
    public function AddUsersToSecurityGroup(\Brainloop\Soap\StructType\AddUsersToSecurityGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AddUsersToSecurityGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddDRCGroupsToSecurityGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\AddDRCGroupsToSecurityGroup $parameters
     * @return \Brainloop\Soap\StructType\AddDRCGroupsToSecurityGroupResponse|bool
     */
    public function AddDRCGroupsToSecurityGroup(\Brainloop\Soap\StructType\AddDRCGroupsToSecurityGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AddDRCGroupsToSecurityGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddUsersToDrcSecurityGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\AddUsersToDrcSecurityGroup $parameters
     * @return \Brainloop\Soap\StructType\AddUsersToDrcSecurityGroupResponse|bool
     */
    public function AddUsersToDrcSecurityGroup(\Brainloop\Soap\StructType\AddUsersToDrcSecurityGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AddUsersToDrcSecurityGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\AddCollaboratorsResponse|\Brainloop\Soap\StructType\AddDRCGroupsToSecurityGroupResponse|\Brainloop\Soap\StructType\AddToWatchlistResponse|\Brainloop\Soap\StructType\AddUsersToDrcSecurityGroupResponse|\Brainloop\Soap\StructType\AddUsersToSecurityGroupResponse
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
