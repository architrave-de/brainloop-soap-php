<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for SMSV ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class SMSV extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SMSValidate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SMSValidate $parameters
     * @return \Brainloop\Soap\StructType\SMSValidateResponse|bool
     */
    public function SMSValidate(\Brainloop\Soap\StructType\SMSValidate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SMSValidate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\SMSValidateResponse
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
