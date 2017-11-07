<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Download ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Download extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named DownloadItem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\DownloadItemRequest $parameters
     * @return \Brainloop\Soap\StructType\DownloadItemResponse|bool
     */
    public function DownloadItem(\Brainloop\Soap\StructType\DownloadItemRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DownloadItem($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DownloadCustomerFile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\DownloadCustomerFileRequest $parameters
     * @return \Brainloop\Soap\StructType\DownloadCustomerFileResponse|bool
     */
    public function DownloadCustomerFile(\Brainloop\Soap\StructType\DownloadCustomerFileRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DownloadCustomerFile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DownloadDataroomLogo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\DownloadDataroomLogoRequest $parameters
     * @return \Brainloop\Soap\StructType\DownloadDataroomLogoResponse|bool
     */
    public function DownloadDataroomLogo(\Brainloop\Soap\StructType\DownloadDataroomLogoRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DownloadDataroomLogo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DownloadDataroomLoginImage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\DownloadDataroomLoginImageRequest $parameters
     * @return \Brainloop\Soap\StructType\DownloadDataroomLoginImageResponse|bool
     */
    public function DownloadDataroomLoginImage(\Brainloop\Soap\StructType\DownloadDataroomLoginImageRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DownloadDataroomLoginImage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\DownloadCustomerFileResponse|\Brainloop\Soap\StructType\DownloadDataroomLoginImageResponse|\Brainloop\Soap\StructType\DownloadDataroomLogoResponse|\Brainloop\Soap\StructType\DownloadItemResponse
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
