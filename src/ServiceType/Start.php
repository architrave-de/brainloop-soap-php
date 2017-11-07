<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Start ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Start extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named StartSession
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\StartSession $parameters
     * @return \Brainloop\Soap\StructType\StartSessionResponse|bool
     */
    public function StartSession(\Brainloop\Soap\StructType\StartSession $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->StartSession($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named StartUserNameSession
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\StartUserNameSession $parameters
     * @return \Brainloop\Soap\StructType\StartUserNameSessionResponse|bool
     */
    public function StartUserNameSession(\Brainloop\Soap\StructType\StartUserNameSession $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->StartUserNameSession($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named StartTokenSession
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\StartTokenSession $parameters
     * @return \Brainloop\Soap\StructType\StartTokenSessionResponse|bool
     */
    public function StartTokenSession(\Brainloop\Soap\StructType\StartTokenSession $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->StartTokenSession($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named StartUrlTokenSession
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\StartUrlTokenSession $parameters
     * @return \Brainloop\Soap\StructType\StartUrlTokenSessionResponse|bool
     */
    public function StartUrlTokenSession(\Brainloop\Soap\StructType\StartUrlTokenSession $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->StartUrlTokenSession($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named StartLoginTokenSession
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\StartLoginTokenSession $parameters
     * @return \Brainloop\Soap\StructType\StartLoginTokenSessionResponse|bool
     */
    public function StartLoginTokenSession(\Brainloop\Soap\StructType\StartLoginTokenSession $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->StartLoginTokenSession($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\StartLoginTokenSessionResponse|\Brainloop\Soap\StructType\StartSessionResponse|\Brainloop\Soap\StructType\StartTokenSessionResponse|\Brainloop\Soap\StructType\StartUrlTokenSessionResponse|\Brainloop\Soap\StructType\StartUserNameSessionResponse
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
