<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Has ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Has extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named HasPermissionsForUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\HasPermissionsForUser $parameters
     * @return \Brainloop\Soap\StructType\HasPermissionsForUserResponse|bool
     */
    public function HasPermissionsForUser(\Brainloop\Soap\StructType\HasPermissionsForUser $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->HasPermissionsForUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HasPermissionsForGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\HasPermissionsForGroup $parameters
     * @return \Brainloop\Soap\StructType\HasPermissionsForGroupResponse|bool
     */
    public function HasPermissionsForGroup(\Brainloop\Soap\StructType\HasPermissionsForGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->HasPermissionsForGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HasDRPermissionsForUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\HasDRPermissionsForUser $parameters
     * @return \Brainloop\Soap\StructType\HasDRPermissionsForUserResponse|bool
     */
    public function HasDRPermissionsForUser(\Brainloop\Soap\StructType\HasDRPermissionsForUser $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->HasDRPermissionsForUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\HasDRPermissionsForUserResponse|\Brainloop\Soap\StructType\HasPermissionsForGroupResponse|\Brainloop\Soap\StructType\HasPermissionsForUserResponse
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
