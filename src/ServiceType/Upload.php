<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Upload ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Upload extends AbstractSoapClientBase
{
    /**
     * Sets the ItemParameters SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Brainloop\Soap\StructType\UploadItemParameters $itemParameters
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderItemParameters(\Brainloop\Soap\StructType\UploadItemParameters $itemParameters, $nameSpace = 'http://tempuri.org/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'ItemParameters', $itemParameters, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named UploadItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: ItemParameters
     * - SOAPHeaderNamespaces: http://tempuri.org/
     * - SOAPHeaderTypes: \Brainloop\Soap\StructType\UploadItemParameters
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\UploadItemRequest $parameters
     * @return \Brainloop\Soap\StructType\UploadItemResponse|bool
     */
    public function UploadItem(\Brainloop\Soap\StructType\UploadItemRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->UploadItem($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\UploadItemResponse
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
