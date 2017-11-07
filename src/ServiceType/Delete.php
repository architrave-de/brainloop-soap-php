<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named DeleteItem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\DeleteItem $parameters
     * @return \Brainloop\Soap\StructType\DeleteItemResponse|bool
     */
    public function DeleteItem(\Brainloop\Soap\StructType\DeleteItem $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DeleteItem($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteAnnotation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\DeleteAnnotation $parameters
     * @return \Brainloop\Soap\StructType\DeleteAnnotationResponse|bool
     */
    public function DeleteAnnotation(\Brainloop\Soap\StructType\DeleteAnnotation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DeleteAnnotation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteSecurityGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\DeleteSecurityGroup $parameters
     * @return \Brainloop\Soap\StructType\DeleteSecurityGroupResponse|bool
     */
    public function DeleteSecurityGroup(\Brainloop\Soap\StructType\DeleteSecurityGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DeleteSecurityGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteDataroom
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\DeleteDataroom $parameters
     * @return \Brainloop\Soap\StructType\DeleteDataroomResponse|bool
     */
    public function DeleteDataroom(\Brainloop\Soap\StructType\DeleteDataroom $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DeleteDataroom($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteUserFromDRC
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\DeleteUserFromDRC $parameters
     * @return \Brainloop\Soap\StructType\DeleteUserFromDRCResponse|bool
     */
    public function DeleteUserFromDRC(\Brainloop\Soap\StructType\DeleteUserFromDRC $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DeleteUserFromDRC($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteDrcDataroom
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\DeleteDrcDataroom $parameters
     * @return \Brainloop\Soap\StructType\DeleteDrcDataroomResponse|bool
     */
    public function DeleteDrcDataroom(\Brainloop\Soap\StructType\DeleteDrcDataroom $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->DeleteDrcDataroom($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\DeleteAnnotationResponse|\Brainloop\Soap\StructType\DeleteDataroomResponse|\Brainloop\Soap\StructType\DeleteDrcDataroomResponse|\Brainloop\Soap\StructType\DeleteItemResponse|\Brainloop\Soap\StructType\DeleteSecurityGroupResponse|\Brainloop\Soap\StructType\DeleteUserFromDRCResponse
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
