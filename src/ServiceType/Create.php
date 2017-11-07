<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Sets the CreateParameters SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Brainloop\Soap\StructType\CreateMailParameters $createParameters
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderCreateParameters(\Brainloop\Soap\StructType\CreateMailParameters $createParameters, $nameSpace = 'http://tempuri.org/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'CreateParameters', $createParameters, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named CreateNewItemVersion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateNewItemVersion $parameters
     * @return \Brainloop\Soap\StructType\CreateNewItemVersionResponse|bool
     */
    public function CreateNewItemVersion(\Brainloop\Soap\StructType\CreateNewItemVersion $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateNewItemVersion($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateFolder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateFolder $parameters
     * @return \Brainloop\Soap\StructType\CreateFolderResponse|bool
     */
    public function CreateFolder(\Brainloop\Soap\StructType\CreateFolder $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateFolder($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateDocumentCollection
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateDocumentCollection $parameters
     * @return \Brainloop\Soap\StructType\CreateDocumentCollectionResponse|bool
     */
    public function CreateDocumentCollection(\Brainloop\Soap\StructType\CreateDocumentCollection $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateDocumentCollection($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateLinkToItem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateLinkToItem $parameters
     * @return \Brainloop\Soap\StructType\CreateLinkToItemResponse|bool
     */
    public function CreateLinkToItem(\Brainloop\Soap\StructType\CreateLinkToItem $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateLinkToItem($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateLinkToExternalURL
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateLinkToExternalURL $parameters
     * @return \Brainloop\Soap\StructType\CreateLinkToExternalURLResponse|bool
     */
    public function CreateLinkToExternalURL(\Brainloop\Soap\StructType\CreateLinkToExternalURL $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateLinkToExternalURL($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateTask $parameters
     * @return \Brainloop\Soap\StructType\CreateTaskResponse|bool
     */
    public function CreateTask(\Brainloop\Soap\StructType\CreateTask $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateTask($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateVote
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateVote $parameters
     * @return \Brainloop\Soap\StructType\CreateVoteResponse|bool
     */
    public function CreateVote(\Brainloop\Soap\StructType\CreateVote $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateVote($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateVoteWithVotingOption
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateVoteWithVotingOption $parameters
     * @return \Brainloop\Soap\StructType\CreateVoteWithVotingOptionResponse|bool
     */
    public function CreateVoteWithVotingOption(\Brainloop\Soap\StructType\CreateVoteWithVotingOption $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateVoteWithVotingOption($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateMilestone
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateMilestone $parameters
     * @return \Brainloop\Soap\StructType\CreateMilestoneResponse|bool
     */
    public function CreateMilestone(\Brainloop\Soap\StructType\CreateMilestone $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateMilestone($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateQuestion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateQuestion $parameters
     * @return \Brainloop\Soap\StructType\CreateQuestionResponse|bool
     */
    public function CreateQuestion(\Brainloop\Soap\StructType\CreateQuestion $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateQuestion($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateAnswer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateAnswer $parameters
     * @return \Brainloop\Soap\StructType\CreateAnswerResponse|bool
     */
    public function CreateAnswer(\Brainloop\Soap\StructType\CreateAnswer $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateAnswer($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateCalendarEvent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateCalendarEvent $parameters
     * @return \Brainloop\Soap\StructType\CreateCalendarEventResponse|bool
     */
    public function CreateCalendarEvent(\Brainloop\Soap\StructType\CreateCalendarEvent $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateCalendarEvent($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateMailItem
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: CreateParameters
     * - SOAPHeaderNamespaces: http://tempuri.org/
     * - SOAPHeaderTypes: \Brainloop\Soap\StructType\CreateMailParameters
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateMailItemRequest $parameters
     * @return \Brainloop\Soap\StructType\CreateMailItemResponse|bool
     */
    public function CreateMailItem(\Brainloop\Soap\StructType\CreateMailItemRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateMailItem($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateReview
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateReview $parameters
     * @return \Brainloop\Soap\StructType\CreateReviewResponse|bool
     */
    public function CreateReview(\Brainloop\Soap\StructType\CreateReview $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateReview($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateTextAnnotation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateTextAnnotation $parameters
     * @return \Brainloop\Soap\StructType\CreateTextAnnotationResponse|bool
     */
    public function CreateTextAnnotation(\Brainloop\Soap\StructType\CreateTextAnnotation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateTextAnnotation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateFreeTextAnnotation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateFreeTextAnnotation $parameters
     * @return \Brainloop\Soap\StructType\CreateFreeTextAnnotationResponse|bool
     */
    public function CreateFreeTextAnnotation(\Brainloop\Soap\StructType\CreateFreeTextAnnotation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateFreeTextAnnotation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateHighlightAnnotation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateHighlightAnnotation $parameters
     * @return \Brainloop\Soap\StructType\CreateHighlightAnnotationResponse|bool
     */
    public function CreateHighlightAnnotation(\Brainloop\Soap\StructType\CreateHighlightAnnotation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateHighlightAnnotation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateStrikeoutAnnotation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateStrikeoutAnnotation $parameters
     * @return \Brainloop\Soap\StructType\CreateStrikeoutAnnotationResponse|bool
     */
    public function CreateStrikeoutAnnotation(\Brainloop\Soap\StructType\CreateStrikeoutAnnotation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateStrikeoutAnnotation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateUnderlineAnnotation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateUnderlineAnnotation $parameters
     * @return \Brainloop\Soap\StructType\CreateUnderlineAnnotationResponse|bool
     */
    public function CreateUnderlineAnnotation(\Brainloop\Soap\StructType\CreateUnderlineAnnotation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateUnderlineAnnotation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateInkAnnotation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateInkAnnotation $parameters
     * @return \Brainloop\Soap\StructType\CreateInkAnnotationResponse|bool
     */
    public function CreateInkAnnotation(\Brainloop\Soap\StructType\CreateInkAnnotation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateInkAnnotation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateAnnotations
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateAnnotations $parameters
     * @return \Brainloop\Soap\StructType\CreateAnnotationsResponse|bool
     */
    public function CreateAnnotations(\Brainloop\Soap\StructType\CreateAnnotations $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateAnnotations($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateAnnotation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateAnnotation $parameters
     * @return \Brainloop\Soap\StructType\CreateAnnotationResponse|bool
     */
    public function CreateAnnotation(\Brainloop\Soap\StructType\CreateAnnotation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateAnnotation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateSecurityGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateSecurityGroup $parameters
     * @return \Brainloop\Soap\StructType\CreateSecurityGroupResponse|bool
     */
    public function CreateSecurityGroup(\Brainloop\Soap\StructType\CreateSecurityGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateSecurityGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateDataroom
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateDataroom $parameters
     * @return \Brainloop\Soap\StructType\CreateDataroomResponse|bool
     */
    public function CreateDataroom(\Brainloop\Soap\StructType\CreateDataroom $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateDataroom($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateDataroomWithParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateDataroomWithParameters $parameters
     * @return \Brainloop\Soap\StructType\CreateDataroomWithParametersResponse|bool
     */
    public function CreateDataroomWithParameters(\Brainloop\Soap\StructType\CreateDataroomWithParameters $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateDataroomWithParameters($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateDataroomWithOwner
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateDataroomWithOwner $parameters
     * @return \Brainloop\Soap\StructType\CreateDataroomWithOwnerResponse|bool
     */
    public function CreateDataroomWithOwner(\Brainloop\Soap\StructType\CreateDataroomWithOwner $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateDataroomWithOwner($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateTemplate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateTemplate $parameters
     * @return \Brainloop\Soap\StructType\CreateTemplateResponse|bool
     */
    public function CreateTemplate(\Brainloop\Soap\StructType\CreateTemplate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateTemplate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateDrcSecurityGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\CreateDrcSecurityGroup $parameters
     * @return \Brainloop\Soap\StructType\CreateDrcSecurityGroupResponse|bool
     */
    public function CreateDrcSecurityGroup(\Brainloop\Soap\StructType\CreateDrcSecurityGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateDrcSecurityGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\CreateAnnotationResponse|\Brainloop\Soap\StructType\CreateAnnotationsResponse|\Brainloop\Soap\StructType\CreateAnswerResponse|\Brainloop\Soap\StructType\CreateCalendarEventResponse|\Brainloop\Soap\StructType\CreateDataroomResponse|\Brainloop\Soap\StructType\CreateDataroomWithOwnerResponse|\Brainloop\Soap\StructType\CreateDataroomWithParametersResponse|\Brainloop\Soap\StructType\CreateDocumentCollectionResponse|\Brainloop\Soap\StructType\CreateDrcSecurityGroupResponse|\Brainloop\Soap\StructType\CreateFolderResponse|\Brainloop\Soap\StructType\CreateFreeTextAnnotationResponse|\Brainloop\Soap\StructType\CreateHighlightAnnotationResponse|\Brainloop\Soap\StructType\CreateInkAnnotationResponse|\Brainloop\Soap\StructType\CreateLinkToExternalURLResponse|\Brainloop\Soap\StructType\CreateLinkToItemResponse|\Brainloop\Soap\StructType\CreateMailItemResponse|\Brainloop\Soap\StructType\CreateMilestoneResponse|\Brainloop\Soap\StructType\CreateNewItemVersionResponse|\Brainloop\Soap\StructType\CreateQuestionResponse|\Brainloop\Soap\StructType\CreateReviewResponse|\Brainloop\Soap\StructType\CreateSecurityGroupResponse|\Brainloop\Soap\StructType\CreateStrikeoutAnnotationResponse|\Brainloop\Soap\StructType\CreateTaskResponse|\Brainloop\Soap\StructType\CreateTemplateResponse|\Brainloop\Soap\StructType\CreateTextAnnotationResponse|\Brainloop\Soap\StructType\CreateUnderlineAnnotationResponse|\Brainloop\Soap\StructType\CreateVoteResponse|\Brainloop\Soap\StructType\CreateVoteWithVotingOptionResponse
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
