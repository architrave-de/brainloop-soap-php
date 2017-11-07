<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Destroy ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Destroy extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named DestroyItem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\DestroyItem $parameters
     * @return \Brainloop\Soap\StructType\DestroyItemResponse|bool
     */
    public function DestroyItem(\Brainloop\Soap\StructType\DestroyItem $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DestroyItem($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\DestroyItemResponse
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
