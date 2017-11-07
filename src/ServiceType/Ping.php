<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Ping ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Ping extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Ping
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\Ping $parameters
     * @return \Brainloop\Soap\StructType\PingResponse|bool
     */
    public function Ping(\Brainloop\Soap\StructType\Ping $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->Ping($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\PingResponse
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
