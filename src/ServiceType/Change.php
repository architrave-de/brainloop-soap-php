<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Change ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Change extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ChangePassword
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\ChangePassword $parameters
     * @return \Brainloop\Soap\StructType\ChangePasswordResponse|bool
     */
    public function ChangePassword(\Brainloop\Soap\StructType\ChangePassword $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ChangePassword($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ChangeUserStatusInDRC
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\ChangeUserStatusInDRC $parameters
     * @return \Brainloop\Soap\StructType\ChangeUserStatusInDRCResponse|bool
     */
    public function ChangeUserStatusInDRC(\Brainloop\Soap\StructType\ChangeUserStatusInDRC $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ChangeUserStatusInDRC($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\ChangePasswordResponse|\Brainloop\Soap\StructType\ChangeUserStatusInDRCResponse
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