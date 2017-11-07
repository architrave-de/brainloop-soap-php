<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Request ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Request extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RequestToken
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\RequestToken $parameters
     * @return \Brainloop\Soap\StructType\RequestTokenResponse|bool
     */
    public function RequestToken(\Brainloop\Soap\StructType\RequestToken $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->RequestToken($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RequestLoginToken
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\RequestLoginToken $parameters
     * @return \Brainloop\Soap\StructType\RequestLoginTokenResponse|bool
     */
    public function RequestLoginToken(\Brainloop\Soap\StructType\RequestLoginToken $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->RequestLoginToken($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RequestIdentityPIN
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\RequestIdentityPIN $parameters
     * @return \Brainloop\Soap\StructType\RequestIdentityPINResponse|bool
     */
    public function RequestIdentityPIN(\Brainloop\Soap\StructType\RequestIdentityPIN $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->RequestIdentityPIN($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RequestMobileChange
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\RequestMobileChange $parameters
     * @return \Brainloop\Soap\StructType\RequestMobileChangeResponse|bool
     */
    public function RequestMobileChange(\Brainloop\Soap\StructType\RequestMobileChange $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->RequestMobileChange($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\RequestIdentityPINResponse|\Brainloop\Soap\StructType\RequestLoginTokenResponse|\Brainloop\Soap\StructType\RequestMobileChangeResponse|\Brainloop\Soap\StructType\RequestTokenResponse
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
