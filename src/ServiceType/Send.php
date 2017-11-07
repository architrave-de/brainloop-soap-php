<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Send extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SendItems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SendItems $parameters
     * @return \Brainloop\Soap\StructType\SendItemsResponse|bool
     */
    public function SendItems(\Brainloop\Soap\StructType\SendItems $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SendItems($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SendItem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SendItem $parameters
     * @return \Brainloop\Soap\StructType\SendItemResponse|bool
     */
    public function SendItem(\Brainloop\Soap\StructType\SendItem $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SendItem($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SendMessage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SendMessage $parameters
     * @return \Brainloop\Soap\StructType\SendMessageResponse|bool
     */
    public function SendMessage(\Brainloop\Soap\StructType\SendMessage $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SendMessage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\SendItemResponse|\Brainloop\Soap\StructType\SendItemsResponse|\Brainloop\Soap\StructType\SendMessageResponse
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
