<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Forward ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Forward extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ForwardQuestion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\ForwardQuestion $parameters
     * @return \Brainloop\Soap\StructType\ForwardQuestionResponse|bool
     */
    public function ForwardQuestion(\Brainloop\Soap\StructType\ForwardQuestion $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ForwardQuestion($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\ForwardQuestionResponse
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
