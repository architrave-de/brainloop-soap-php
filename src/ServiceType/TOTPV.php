<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for TOTPV ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class TOTPV extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named TOTPValidate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\TOTPValidate $parameters
     * @return \Brainloop\Soap\StructType\TOTPValidateResponse|bool
     */
    public function TOTPValidate(\Brainloop\Soap\StructType\TOTPValidate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->TOTPValidate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\TOTPValidateResponse
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
