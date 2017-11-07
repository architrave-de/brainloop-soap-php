<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Execute ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Execute extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ExecuteReport
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\ExecuteReport $parameters
     * @return \Brainloop\Soap\StructType\ExecuteReportResponse|bool
     */
    public function ExecuteReport(\Brainloop\Soap\StructType\ExecuteReport $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ExecuteReport($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ExecuteAdHocSearch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\ExecuteAdHocSearch $parameters
     * @return \Brainloop\Soap\StructType\ExecuteAdHocSearchResponse|bool
     */
    public function ExecuteAdHocSearch(\Brainloop\Soap\StructType\ExecuteAdHocSearch $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ExecuteAdHocSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ExecuteSavedSearch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\ExecuteSavedSearch $parameters
     * @return \Brainloop\Soap\StructType\ExecuteSavedSearchResponse|bool
     */
    public function ExecuteSavedSearch(\Brainloop\Soap\StructType\ExecuteSavedSearch $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ExecuteSavedSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\ExecuteAdHocSearchResponse|\Brainloop\Soap\StructType\ExecuteReportResponse|\Brainloop\Soap\StructType\ExecuteSavedSearchResponse
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
