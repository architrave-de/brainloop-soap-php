<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Publish ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Publish extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named PublishDocument
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\PublishDocument $parameters
     * @return \Brainloop\Soap\StructType\PublishDocumentResponse|bool
     */
    public function PublishDocument(\Brainloop\Soap\StructType\PublishDocument $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->PublishDocument($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\PublishDocumentResponse
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
