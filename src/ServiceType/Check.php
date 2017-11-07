<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Check ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Check extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CheckFileNameExists
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CheckFileNameExists $parameters
     * @return \Brainloop\Soap\StructType\CheckFileNameExistsResponse|bool
     */
    public function CheckFileNameExists(\Brainloop\Soap\StructType\CheckFileNameExists $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CheckFileNameExists($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CheckOutDocument
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CheckOutDocument $parameters
     * @return \Brainloop\Soap\StructType\CheckOutDocumentResponse|bool
     */
    public function CheckOutDocument(\Brainloop\Soap\StructType\CheckOutDocument $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CheckOutDocument($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CheckInDocument
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CheckInDocument $parameters
     * @return \Brainloop\Soap\StructType\CheckInDocumentResponse|bool
     */
    public function CheckInDocument(\Brainloop\Soap\StructType\CheckInDocument $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CheckInDocument($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\CheckFileNameExistsResponse|\Brainloop\Soap\StructType\CheckInDocumentResponse|\Brainloop\Soap\StructType\CheckOutDocumentResponse
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
