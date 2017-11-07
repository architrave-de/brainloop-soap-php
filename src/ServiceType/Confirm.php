<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Confirm ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Confirm extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ConfirmMobileChange
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\ConfirmMobileChange $parameters
     * @return \Brainloop\Soap\StructType\ConfirmMobileChangeResponse|bool
     */
    public function ConfirmMobileChange(\Brainloop\Soap\StructType\ConfirmMobileChange $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ConfirmMobileChange($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ConfirmMobileDeletion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\ConfirmMobileDeletion $parameters
     * @return \Brainloop\Soap\StructType\ConfirmMobileDeletionResponse|bool
     */
    public function ConfirmMobileDeletion(\Brainloop\Soap\StructType\ConfirmMobileDeletion $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ConfirmMobileDeletion($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\ConfirmMobileChangeResponse|\Brainloop\Soap\StructType\ConfirmMobileDeletionResponse
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
