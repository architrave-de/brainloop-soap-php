<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named UpdateDocumentCollection
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\UpdateDocumentCollection $parameters
     * @return \Brainloop\Soap\StructType\UpdateDocumentCollectionResponse|bool
     */
    public function UpdateDocumentCollection(\Brainloop\Soap\StructType\UpdateDocumentCollection $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->UpdateDocumentCollection($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateAnnotation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\UpdateAnnotation $parameters
     * @return \Brainloop\Soap\StructType\UpdateAnnotationResponse|bool
     */
    public function UpdateAnnotation(\Brainloop\Soap\StructType\UpdateAnnotation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->UpdateAnnotation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\UpdateAnnotationResponse|\Brainloop\Soap\StructType\UpdateDocumentCollectionResponse
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
