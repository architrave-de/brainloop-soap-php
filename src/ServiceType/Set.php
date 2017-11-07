<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Set extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SetOwner
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetOwner $parameters
     * @return \Brainloop\Soap\StructType\SetOwnerResponse|bool
     */
    public function SetOwner(\Brainloop\Soap\StructType\SetOwner $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetOwner($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetSecurityCategory
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetSecurityCategory $parameters
     * @return \Brainloop\Soap\StructType\SetSecurityCategoryResponse|bool
     */
    public function SetSecurityCategory(\Brainloop\Soap\StructType\SetSecurityCategory $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetSecurityCategory($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetPermissionsForUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetPermissionsForUser $parameters
     * @return \Brainloop\Soap\StructType\SetPermissionsForUserResponse|bool
     */
    public function SetPermissionsForUser(\Brainloop\Soap\StructType\SetPermissionsForUser $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetPermissionsForUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetPermissionsForGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetPermissionsForGroup $parameters
     * @return \Brainloop\Soap\StructType\SetPermissionsForGroupResponse|bool
     */
    public function SetPermissionsForGroup(\Brainloop\Soap\StructType\SetPermissionsForGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetPermissionsForGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetItemProperties
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetItemProperties $parameters
     * @return \Brainloop\Soap\StructType\SetItemPropertiesResponse|bool
     */
    public function SetItemProperties(\Brainloop\Soap\StructType\SetItemProperties $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetItemProperties($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetDRAttribute
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetDRAttribute $parameters
     * @return \Brainloop\Soap\StructType\SetDRAttributeResponse|bool
     */
    public function SetDRAttribute(\Brainloop\Soap\StructType\SetDRAttribute $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetDRAttribute($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetContributorStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetContributorStatus $parameters
     * @return \Brainloop\Soap\StructType\SetContributorStatusResponse|bool
     */
    public function SetContributorStatus(\Brainloop\Soap\StructType\SetContributorStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetContributorStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetVoterStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetVoterStatus $parameters
     * @return \Brainloop\Soap\StructType\SetVoterStatusResponse|bool
     */
    public function SetVoterStatus(\Brainloop\Soap\StructType\SetVoterStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetVoterStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetParticipantStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetParticipantStatus $parameters
     * @return \Brainloop\Soap\StructType\SetParticipantStatusResponse|bool
     */
    public function SetParticipantStatus(\Brainloop\Soap\StructType\SetParticipantStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetParticipantStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetItemNotification
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetItemNotification $parameters
     * @return \Brainloop\Soap\StructType\SetItemNotificationResponse|bool
     */
    public function SetItemNotification(\Brainloop\Soap\StructType\SetItemNotification $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetItemNotification($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetDataroomStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetDataroomStatus $parameters
     * @return \Brainloop\Soap\StructType\SetDataroomStatusResponse|bool
     */
    public function SetDataroomStatus(\Brainloop\Soap\StructType\SetDataroomStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetDataroomStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetDataroomProperties
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetDataroomProperties $parameters
     * @return \Brainloop\Soap\StructType\SetDataroomPropertiesResponse|bool
     */
    public function SetDataroomProperties(\Brainloop\Soap\StructType\SetDataroomProperties $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetDataroomProperties($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetDRPermissionsForSecurityGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetDRPermissionsForSecurityGroup $parameters
     * @return \Brainloop\Soap\StructType\SetDRPermissionsForSecurityGroupResponse|bool
     */
    public function SetDRPermissionsForSecurityGroup(\Brainloop\Soap\StructType\SetDRPermissionsForSecurityGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetDRPermissionsForSecurityGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetDRCPermissionsForSecurityGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetDRCPermissionsForSecurityGroup $parameters
     * @return \Brainloop\Soap\StructType\SetDRCPermissionsForSecurityGroupResponse|bool
     */
    public function SetDRCPermissionsForSecurityGroup(\Brainloop\Soap\StructType\SetDRCPermissionsForSecurityGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetDRCPermissionsForSecurityGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetTimeBasedAccess
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetTimeBasedAccess $parameters
     * @return \Brainloop\Soap\StructType\SetTimeBasedAccessResponse|bool
     */
    public function SetTimeBasedAccess(\Brainloop\Soap\StructType\SetTimeBasedAccess $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetTimeBasedAccess($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetUserProperties
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetUserProperties $parameters
     * @return \Brainloop\Soap\StructType\SetUserPropertiesResponse|bool
     */
    public function SetUserProperties(\Brainloop\Soap\StructType\SetUserProperties $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetUserProperties($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetDRCProperties
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\SetDRCProperties $parameters
     * @return \Brainloop\Soap\StructType\SetDRCPropertiesResponse|bool
     */
    public function SetDRCProperties(\Brainloop\Soap\StructType\SetDRCProperties $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SetDRCProperties($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\SetContributorStatusResponse|\Brainloop\Soap\StructType\SetDataroomPropertiesResponse|\Brainloop\Soap\StructType\SetDataroomStatusResponse|\Brainloop\Soap\StructType\SetDRAttributeResponse|\Brainloop\Soap\StructType\SetDRCPermissionsForSecurityGroupResponse|\Brainloop\Soap\StructType\SetDRCPropertiesResponse|\Brainloop\Soap\StructType\SetDRPermissionsForSecurityGroupResponse|\Brainloop\Soap\StructType\SetItemNotificationResponse|\Brainloop\Soap\StructType\SetItemPropertiesResponse|\Brainloop\Soap\StructType\SetOwnerResponse|\Brainloop\Soap\StructType\SetParticipantStatusResponse|\Brainloop\Soap\StructType\SetPermissionsForGroupResponse|\Brainloop\Soap\StructType\SetPermissionsForUserResponse|\Brainloop\Soap\StructType\SetSecurityCategoryResponse|\Brainloop\Soap\StructType\SetTimeBasedAccessResponse|\Brainloop\Soap\StructType\SetUserPropertiesResponse|\Brainloop\Soap\StructType\SetVoterStatusResponse
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
