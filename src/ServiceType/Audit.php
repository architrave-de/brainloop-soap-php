<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Audit ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Audit extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AuditCompleted
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\AuditCompleted $parameters
     * @return \Brainloop\Soap\StructType\AuditCompletedResponse|bool
     */
    public function AuditCompleted(\Brainloop\Soap\StructType\AuditCompleted $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AuditCompleted($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AuditAddComment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\AuditAddComment $parameters
     * @return \Brainloop\Soap\StructType\AuditAddCommentResponse|bool
     */
    public function AuditAddComment(\Brainloop\Soap\StructType\AuditAddComment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AuditAddComment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\AuditAddCommentResponse|\Brainloop\Soap\StructType\AuditCompletedResponse
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
