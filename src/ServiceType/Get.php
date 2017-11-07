<?php

namespace Brainloop\Soap\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 * @generated on Tue, 07 Nov 17 12 44
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetUploadStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetUploadStatus $parameters
     * @return \Brainloop\Soap\StructType\GetUploadStatusResponse|bool
     */
    public function GetUploadStatus(\Brainloop\Soap\StructType\GetUploadStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetUploadStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDownloadTypes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDownloadTypes $parameters
     * @return \Brainloop\Soap\StructType\GetDownloadTypesResponse|bool
     */
    public function GetDownloadTypes(\Brainloop\Soap\StructType\GetDownloadTypes $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDownloadTypes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDownloadTypesWithRMS
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDownloadTypesWithRMS $parameters
     * @return \Brainloop\Soap\StructType\GetDownloadTypesWithRMSResponse|bool
     */
    public function GetDownloadTypesWithRMS(\Brainloop\Soap\StructType\GetDownloadTypesWithRMS $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDownloadTypesWithRMS($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDownloadTypesByVersion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDownloadTypesByVersion $parameters
     * @return \Brainloop\Soap\StructType\GetDownloadTypesByVersionResponse|bool
     */
    public function GetDownloadTypesByVersion(\Brainloop\Soap\StructType\GetDownloadTypesByVersion $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDownloadTypesByVersion($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMultipleDownloadTypesByVersion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetMultipleDownloadTypesByVersionRequest $parameters
     * @return \Brainloop\Soap\StructType\GetMultipleDownloadTypesByVersionResponse|bool
     */
    public function GetMultipleDownloadTypesByVersion(\Brainloop\Soap\StructType\GetMultipleDownloadTypesByVersionRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetMultipleDownloadTypesByVersion($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDownloadTypesByVersionWithRMS
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDownloadTypesByVersionWithRMS $parameters
     * @return \Brainloop\Soap\StructType\GetDownloadTypesByVersionWithRMSResponse|bool
     */
    public function GetDownloadTypesByVersionWithRMS(\Brainloop\Soap\StructType\GetDownloadTypesByVersionWithRMS $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDownloadTypesByVersionWithRMS($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSystemAnnouncements
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetSystemAnnouncements $parameters
     * @return \Brainloop\Soap\StructType\GetSystemAnnouncementsResponse|bool
     */
    public function GetSystemAnnouncements(\Brainloop\Soap\StructType\GetSystemAnnouncements $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSystemAnnouncements($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetItem $parameters
     * @return \Brainloop\Soap\StructType\GetItemResponse|bool
     */
    public function GetItem(\Brainloop\Soap\StructType\GetItem $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetItem($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDatarooms
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDatarooms $parameters
     * @return \Brainloop\Soap\StructType\GetDataroomsResponse|bool
     */
    public function GetDatarooms(\Brainloop\Soap\StructType\GetDatarooms $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDatarooms($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDataroomsByDRC
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDataroomsByDRC $parameters
     * @return \Brainloop\Soap\StructType\GetDataroomsByDRCResponse|bool
     */
    public function GetDataroomsByDRC(\Brainloop\Soap\StructType\GetDataroomsByDRC $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDataroomsByDRC($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTree
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetTree $parameters
     * @return \Brainloop\Soap\StructType\GetTreeResponse|bool
     */
    public function GetTree(\Brainloop\Soap\StructType\GetTree $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetTree($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTreeWithParameters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetTreeWithParameters $parameters
     * @return \Brainloop\Soap\StructType\GetTreeWithParametersResponse|bool
     */
    public function GetTreeWithParameters(\Brainloop\Soap\StructType\GetTreeWithParameters $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetTreeWithParameters($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSubtree
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetSubtree $parameters
     * @return \Brainloop\Soap\StructType\GetSubtreeResponse|bool
     */
    public function GetSubtree(\Brainloop\Soap\StructType\GetSubtree $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSubtree($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetURLForSentItem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetURLForSentItem $parameters
     * @return \Brainloop\Soap\StructType\GetURLForSentItemResponse|bool
     */
    public function GetURLForSentItem(\Brainloop\Soap\StructType\GetURLForSentItem $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetURLForSentItem($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMultipleBrainmarkStyles
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetMultipleBrainmarkStyles $parameters
     * @return \Brainloop\Soap\StructType\GetMultipleBrainmarkStylesResponse|bool
     */
    public function GetMultipleBrainmarkStyles(\Brainloop\Soap\StructType\GetMultipleBrainmarkStyles $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetMultipleBrainmarkStyles($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetItems $parameters
     * @return \Brainloop\Soap\StructType\GetItemsResponse|bool
     */
    public function GetItems(\Brainloop\Soap\StructType\GetItems $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetItems($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemByName
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetItemByName $parameters
     * @return \Brainloop\Soap\StructType\GetItemByNameResponse|bool
     */
    public function GetItemByName(\Brainloop\Soap\StructType\GetItemByName $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetItemByName($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRootItems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetRootItems $parameters
     * @return \Brainloop\Soap\StructType\GetRootItemsResponse|bool
     */
    public function GetRootItems(\Brainloop\Soap\StructType\GetRootItems $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetRootItems($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDataroomByName
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDataroomByName $parameters
     * @return \Brainloop\Soap\StructType\GetDataroomByNameResponse|bool
     */
    public function GetDataroomByName(\Brainloop\Soap\StructType\GetDataroomByName $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDataroomByName($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDataroom
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDataroom $parameters
     * @return \Brainloop\Soap\StructType\GetDataroomResponse|bool
     */
    public function GetDataroom(\Brainloop\Soap\StructType\GetDataroom $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDataroom($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemsByID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetItemsByID $parameters
     * @return \Brainloop\Soap\StructType\GetItemsByIDResponse|bool
     */
    public function GetItemsByID(\Brainloop\Soap\StructType\GetItemsByID $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetItemsByID($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemByPath
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetItemByPath $parameters
     * @return \Brainloop\Soap\StructType\GetItemByPathResponse|bool
     */
    public function GetItemByPath(\Brainloop\Soap\StructType\GetItemByPath $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetItemByPath($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemByRelativePath
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetItemByRelativePath $parameters
     * @return \Brainloop\Soap\StructType\GetItemByRelativePathResponse|bool
     */
    public function GetItemByRelativePath(\Brainloop\Soap\StructType\GetItemByRelativePath $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetItemByRelativePath($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWatchlistItems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetWatchlistItems $parameters
     * @return \Brainloop\Soap\StructType\GetWatchlistItemsResponse|bool
     */
    public function GetWatchlistItems(\Brainloop\Soap\StructType\GetWatchlistItems $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetWatchlistItems($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDeletedItems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDeletedItems $parameters
     * @return \Brainloop\Soap\StructType\GetDeletedItemsResponse|bool
     */
    public function GetDeletedItems(\Brainloop\Soap\StructType\GetDeletedItems $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDeletedItems($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPublishRules
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetPublishRules $parameters
     * @return \Brainloop\Soap\StructType\GetPublishRulesResponse|bool
     */
    public function GetPublishRules(\Brainloop\Soap\StructType\GetPublishRules $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPublishRules($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSecurityCategories
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetSecurityCategories $parameters
     * @return \Brainloop\Soap\StructType\GetSecurityCategoriesResponse|bool
     */
    public function GetSecurityCategories(\Brainloop\Soap\StructType\GetSecurityCategories $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSecurityCategories($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUsers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetUsers $parameters
     * @return \Brainloop\Soap\StructType\GetUsersResponse|bool
     */
    public function GetUsers(\Brainloop\Soap\StructType\GetUsers $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetUsers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetUser $parameters
     * @return \Brainloop\Soap\StructType\GetUserResponse|bool
     */
    public function GetUser(\Brainloop\Soap\StructType\GetUser $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserByEmail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetUserByEmail $parameters
     * @return \Brainloop\Soap\StructType\GetUserByEmailResponse|bool
     */
    public function GetUserByEmail(\Brainloop\Soap\StructType\GetUserByEmail $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetUserByEmail($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemVersions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetItemVersions $parameters
     * @return \Brainloop\Soap\StructType\GetItemVersionsResponse|bool
     */
    public function GetItemVersions(\Brainloop\Soap\StructType\GetItemVersions $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetItemVersions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPermissionsForUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetPermissionsForUser $parameters
     * @return \Brainloop\Soap\StructType\GetPermissionsForUserResponse|bool
     */
    public function GetPermissionsForUser(\Brainloop\Soap\StructType\GetPermissionsForUser $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPermissionsForUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSendOptionsMultipleFiles
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetSendOptionsMultipleFiles $parameters
     * @return \Brainloop\Soap\StructType\GetSendOptionsMultipleFilesResponse|bool
     */
    public function GetSendOptionsMultipleFiles(\Brainloop\Soap\StructType\GetSendOptionsMultipleFiles $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSendOptionsMultipleFiles($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSendOptions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetSendOptions $parameters
     * @return \Brainloop\Soap\StructType\GetSendOptionsResponse|bool
     */
    public function GetSendOptions(\Brainloop\Soap\StructType\GetSendOptions $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSendOptions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDataroomProperties
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDataroomProperties $parameters
     * @return \Brainloop\Soap\StructType\GetDataroomPropertiesResponse|bool
     */
    public function GetDataroomProperties(\Brainloop\Soap\StructType\GetDataroomProperties $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDataroomProperties($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemProperties
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetItemProperties $parameters
     * @return \Brainloop\Soap\StructType\GetItemPropertiesResponse|bool
     */
    public function GetItemProperties(\Brainloop\Soap\StructType\GetItemProperties $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetItemProperties($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTermsAndConditions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetTermsAndConditions $parameters
     * @return \Brainloop\Soap\StructType\GetTermsAndConditionsResponse|bool
     */
    public function GetTermsAndConditions(\Brainloop\Soap\StructType\GetTermsAndConditions $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetTermsAndConditions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSendRecipients
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetSendRecipients $parameters
     * @return \Brainloop\Soap\StructType\GetSendRecipientsResponse|bool
     */
    public function GetSendRecipients(\Brainloop\Soap\StructType\GetSendRecipients $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSendRecipients($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAttributes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetAttributes $parameters
     * @return \Brainloop\Soap\StructType\GetAttributesResponse|bool
     */
    public function GetAttributes(\Brainloop\Soap\StructType\GetAttributes $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetAttributes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetModifiedTree
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetModifiedTree $parameters
     * @return \Brainloop\Soap\StructType\GetModifiedTreeResponse|bool
     */
    public function GetModifiedTree(\Brainloop\Soap\StructType\GetModifiedTree $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetModifiedTree($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetModifiedSubTree
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetModifiedSubTree $parameters
     * @return \Brainloop\Soap\StructType\GetModifiedSubTreeResponse|bool
     */
    public function GetModifiedSubTree(\Brainloop\Soap\StructType\GetModifiedSubTree $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetModifiedSubTree($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetModifiedTreeWithTrashcan
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetModifiedTreeWithTrashcan $parameters
     * @return \Brainloop\Soap\StructType\GetModifiedTreeWithTrashcanResponse|bool
     */
    public function GetModifiedTreeWithTrashcan(\Brainloop\Soap\StructType\GetModifiedTreeWithTrashcan $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetModifiedTreeWithTrashcan($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAncestors
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetAncestors $parameters
     * @return \Brainloop\Soap\StructType\GetAncestorsResponse|bool
     */
    public function GetAncestors(\Brainloop\Soap\StructType\GetAncestors $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetAncestors($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNotificationEnabledItemIds
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetNotificationEnabledItemIds $parameters
     * @return \Brainloop\Soap\StructType\GetNotificationEnabledItemIdsResponse|bool
     */
    public function GetNotificationEnabledItemIds(\Brainloop\Soap\StructType\GetNotificationEnabledItemIds $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetNotificationEnabledItemIds($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWebDAVUrl
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetWebDAVUrl $parameters
     * @return \Brainloop\Soap\StructType\GetWebDAVUrlResponse|bool
     */
    public function GetWebDAVUrl(\Brainloop\Soap\StructType\GetWebDAVUrl $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetWebDAVUrl($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReplies
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetReplies $parameters
     * @return \Brainloop\Soap\StructType\GetRepliesResponse|bool
     */
    public function GetReplies(\Brainloop\Soap\StructType\GetReplies $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetReplies($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNextStageGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetNextStageGroups $parameters
     * @return \Brainloop\Soap\StructType\GetNextStageGroupsResponse|bool
     */
    public function GetNextStageGroups(\Brainloop\Soap\StructType\GetNextStageGroups $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetNextStageGroups($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStageGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetStageGroups $parameters
     * @return \Brainloop\Soap\StructType\GetStageGroupsResponse|bool
     */
    public function GetStageGroups(\Brainloop\Soap\StructType\GetStageGroups $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetStageGroups($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEventTypeTemplates
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetEventTypeTemplates $parameters
     * @return \Brainloop\Soap\StructType\GetEventTypeTemplatesResponse|bool
     */
    public function GetEventTypeTemplates(\Brainloop\Soap\StructType\GetEventTypeTemplates $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetEventTypeTemplates($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEventTypeAttachmentTemplates
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetEventTypeAttachmentTemplates $parameters
     * @return \Brainloop\Soap\StructType\GetEventTypeAttachmentTemplatesResponse|bool
     */
    public function GetEventTypeAttachmentTemplates(\Brainloop\Soap\StructType\GetEventTypeAttachmentTemplates $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetEventTypeAttachmentTemplates($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCalendarItems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetCalendarItems $parameters
     * @return \Brainloop\Soap\StructType\GetCalendarItemsResponse|bool
     */
    public function GetCalendarItems(\Brainloop\Soap\StructType\GetCalendarItems $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetCalendarItems($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCollaborators
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetCollaborators $parameters
     * @return \Brainloop\Soap\StructType\GetCollaboratorsResponse|bool
     */
    public function GetCollaborators(\Brainloop\Soap\StructType\GetCollaborators $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetCollaborators($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAttachments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetAttachments $parameters
     * @return \Brainloop\Soap\StructType\GetAttachmentsResponse|bool
     */
    public function GetAttachments(\Brainloop\Soap\StructType\GetAttachments $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetAttachments($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReview
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetReview $parameters
     * @return \Brainloop\Soap\StructType\GetReviewResponse|bool
     */
    public function GetReview(\Brainloop\Soap\StructType\GetReview $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetReview($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReviews
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetReviews $parameters
     * @return \Brainloop\Soap\StructType\GetReviewsResponse|bool
     */
    public function GetReviews(\Brainloop\Soap\StructType\GetReviews $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetReviews($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReviewsByUserParticipation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetReviewsByUserParticipation $parameters
     * @return \Brainloop\Soap\StructType\GetReviewsByUserParticipationResponse|bool
     */
    public function GetReviewsByUserParticipation(\Brainloop\Soap\StructType\GetReviewsByUserParticipation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetReviewsByUserParticipation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAnnotation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetAnnotation $parameters
     * @return \Brainloop\Soap\StructType\GetAnnotationResponse|bool
     */
    public function GetAnnotation(\Brainloop\Soap\StructType\GetAnnotation $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetAnnotation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAnnotations
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetAnnotations $parameters
     * @return \Brainloop\Soap\StructType\GetAnnotationsResponse|bool
     */
    public function GetAnnotations(\Brainloop\Soap\StructType\GetAnnotations $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetAnnotations($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMailItemsFromTokens
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetMailItemsFromTokens $parameters
     * @return \Brainloop\Soap\StructType\GetMailItemsFromTokensResponse|bool
     */
    public function GetMailItemsFromTokens(\Brainloop\Soap\StructType\GetMailItemsFromTokens $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetMailItemsFromTokens($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReports
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetReports $parameters
     * @return \Brainloop\Soap\StructType\GetReportsResponse|bool
     */
    public function GetReports(\Brainloop\Soap\StructType\GetReports $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetReports($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReportsByDataroom
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetReportsByDataroom $parameters
     * @return \Brainloop\Soap\StructType\GetReportsByDataroomResponse|bool
     */
    public function GetReportsByDataroom(\Brainloop\Soap\StructType\GetReportsByDataroom $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetReportsByDataroom($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReportsByDRC
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetReportsByDRC $parameters
     * @return \Brainloop\Soap\StructType\GetReportsByDRCResponse|bool
     */
    public function GetReportsByDRC(\Brainloop\Soap\StructType\GetReportsByDRC $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetReportsByDRC($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReport
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetReport $parameters
     * @return \Brainloop\Soap\StructType\GetReportResponse|bool
     */
    public function GetReport(\Brainloop\Soap\StructType\GetReport $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetReport($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReportByDRC
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetReportByDRC $parameters
     * @return \Brainloop\Soap\StructType\GetReportByDRCResponse|bool
     */
    public function GetReportByDRC(\Brainloop\Soap\StructType\GetReportByDRC $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetReportByDRC($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReportByDataroom
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetReportByDataroom $parameters
     * @return \Brainloop\Soap\StructType\GetReportByDataroomResponse|bool
     */
    public function GetReportByDataroom(\Brainloop\Soap\StructType\GetReportByDataroom $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetReportByDataroom($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCustomerFilenames
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetCustomerFilenames $parameters
     * @return \Brainloop\Soap\StructType\GetCustomerFilenamesResponse|bool
     */
    public function GetCustomerFilenames(\Brainloop\Soap\StructType\GetCustomerFilenames $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetCustomerFilenames($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSecurityGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetSecurityGroups $parameters
     * @return \Brainloop\Soap\StructType\GetSecurityGroupsResponse|bool
     */
    public function GetSecurityGroups(\Brainloop\Soap\StructType\GetSecurityGroups $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSecurityGroups($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSecurityGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetSecurityGroup $parameters
     * @return \Brainloop\Soap\StructType\GetSecurityGroupResponse|bool
     */
    public function GetSecurityGroup(\Brainloop\Soap\StructType\GetSecurityGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetSecurityGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRequiredPasswordStrength
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetRequiredPasswordStrength $parameters
     * @return \Brainloop\Soap\StructType\GetRequiredPasswordStrengthResponse|bool
     */
    public function GetRequiredPasswordStrength(\Brainloop\Soap\StructType\GetRequiredPasswordStrength $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetRequiredPasswordStrength($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMinPasswordLength
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetMinPasswordLength $parameters
     * @return \Brainloop\Soap\StructType\GetMinPasswordLengthResponse|bool
     */
    public function GetMinPasswordLength(\Brainloop\Soap\StructType\GetMinPasswordLength $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetMinPasswordLength($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDRCs
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDRCs $parameters
     * @return \Brainloop\Soap\StructType\GetDRCsResponse|bool
     */
    public function GetDRCs(\Brainloop\Soap\StructType\GetDRCs $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDRCs($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDRPermissionsForUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDRPermissionsForUser $parameters
     * @return \Brainloop\Soap\StructType\GetDRPermissionsForUserResponse|bool
     */
    public function GetDRPermissionsForUser(\Brainloop\Soap\StructType\GetDRPermissionsForUser $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDRPermissionsForUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDRCsByPermissions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDRCsByPermissions $parameters
     * @return \Brainloop\Soap\StructType\GetDRCsByPermissionsResponse|bool
     */
    public function GetDRCsByPermissions(\Brainloop\Soap\StructType\GetDRCsByPermissions $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDRCsByPermissions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserProperties
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetUserProperties $parameters
     * @return \Brainloop\Soap\StructType\GetUserPropertiesResponse|bool
     */
    public function GetUserProperties(\Brainloop\Soap\StructType\GetUserProperties $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetUserProperties($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProfile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetProfile $parameters
     * @return \Brainloop\Soap\StructType\GetProfileResponse|bool
     */
    public function GetProfile(\Brainloop\Soap\StructType\GetProfile $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetProfile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPasswordExpirationDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetPasswordExpirationDate $parameters
     * @return \Brainloop\Soap\StructType\GetPasswordExpirationDateResponse|bool
     */
    public function GetPasswordExpirationDate(\Brainloop\Soap\StructType\GetPasswordExpirationDate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPasswordExpirationDate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDrcUsers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDrcUsers $parameters
     * @return \Brainloop\Soap\StructType\GetDrcUsersResponse|bool
     */
    public function GetDrcUsers(\Brainloop\Soap\StructType\GetDrcUsers $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDrcUsers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAvailableTemplates
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetAvailableTemplates $parameters
     * @return \Brainloop\Soap\StructType\GetAvailableTemplatesResponse|bool
     */
    public function GetAvailableTemplates(\Brainloop\Soap\StructType\GetAvailableTemplates $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetAvailableTemplates($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDrcSecurityGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDrcSecurityGroups $parameters
     * @return \Brainloop\Soap\StructType\GetDrcSecurityGroupsResponse|bool
     */
    public function GetDrcSecurityGroups(\Brainloop\Soap\StructType\GetDrcSecurityGroups $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDrcSecurityGroups($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDrcUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDrcUser $parameters
     * @return \Brainloop\Soap\StructType\GetDrcUserResponse|bool
     */
    public function GetDrcUser(\Brainloop\Soap\StructType\GetDrcUser $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDrcUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAvailableDRCProperties
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetAvailableDRCProperties $parameters
     * @return \Brainloop\Soap\StructType\GetAvailableDRCPropertiesResponse|bool
     */
    public function GetAvailableDRCProperties(\Brainloop\Soap\StructType\GetAvailableDRCProperties $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetAvailableDRCProperties($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDRC
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetDRC $parameters
     * @return \Brainloop\Soap\StructType\GetDRCResponse|bool
     */
    public function GetDRC(\Brainloop\Soap\StructType\GetDRC $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetDRC($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOngoingAudits
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetOngoingAudits $parameters
     * @return \Brainloop\Soap\StructType\GetOngoingAuditsResponse|bool
     */
    public function GetOngoingAudits(\Brainloop\Soap\StructType\GetOngoingAudits $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetOngoingAudits($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAuditComments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetAuditComments $parameters
     * @return \Brainloop\Soap\StructType\GetAuditCommentsResponse|bool
     */
    public function GetAuditComments(\Brainloop\Soap\StructType\GetAuditComments $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetAuditComments($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCompletedAudits
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Brainloop\Soap\StructType\GetCompletedAudits $parameters
     * @return \Brainloop\Soap\StructType\GetCompletedAuditsResponse|bool
     */
    public function GetCompletedAudits(\Brainloop\Soap\StructType\GetCompletedAudits $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetCompletedAudits($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Brainloop\Soap\StructType\GetAncestorsResponse|\Brainloop\Soap\StructType\GetAnnotationResponse|\Brainloop\Soap\StructType\GetAnnotationsResponse|\Brainloop\Soap\StructType\GetAttachmentsResponse|\Brainloop\Soap\StructType\GetAttributesResponse|\Brainloop\Soap\StructType\GetAuditCommentsResponse|\Brainloop\Soap\StructType\GetAvailableDRCPropertiesResponse|\Brainloop\Soap\StructType\GetAvailableTemplatesResponse|\Brainloop\Soap\StructType\GetCalendarItemsResponse|\Brainloop\Soap\StructType\GetCollaboratorsResponse|\Brainloop\Soap\StructType\GetCompletedAuditsResponse|\Brainloop\Soap\StructType\GetCustomerFilenamesResponse|\Brainloop\Soap\StructType\GetDataroomByNameResponse|\Brainloop\Soap\StructType\GetDataroomPropertiesResponse|\Brainloop\Soap\StructType\GetDataroomResponse|\Brainloop\Soap\StructType\GetDataroomsByDRCResponse|\Brainloop\Soap\StructType\GetDataroomsResponse|\Brainloop\Soap\StructType\GetDeletedItemsResponse|\Brainloop\Soap\StructType\GetDownloadTypesByVersionResponse|\Brainloop\Soap\StructType\GetDownloadTypesByVersionWithRMSResponse|\Brainloop\Soap\StructType\GetDownloadTypesResponse|\Brainloop\Soap\StructType\GetDownloadTypesWithRMSResponse|\Brainloop\Soap\StructType\GetDRCResponse|\Brainloop\Soap\StructType\GetDRCsByPermissionsResponse|\Brainloop\Soap\StructType\GetDrcSecurityGroupsResponse|\Brainloop\Soap\StructType\GetDRCsResponse|\Brainloop\Soap\StructType\GetDrcUserResponse|\Brainloop\Soap\StructType\GetDrcUsersResponse|\Brainloop\Soap\StructType\GetDRPermissionsForUserResponse|\Brainloop\Soap\StructType\GetEventTypeAttachmentTemplatesResponse|\Brainloop\Soap\StructType\GetEventTypeTemplatesResponse|\Brainloop\Soap\StructType\GetItemByNameResponse|\Brainloop\Soap\StructType\GetItemByPathResponse|\Brainloop\Soap\StructType\GetItemByRelativePathResponse|\Brainloop\Soap\StructType\GetItemPropertiesResponse|\Brainloop\Soap\StructType\GetItemResponse|\Brainloop\Soap\StructType\GetItemsByIDResponse|\Brainloop\Soap\StructType\GetItemsResponse|\Brainloop\Soap\StructType\GetItemVersionsResponse|\Brainloop\Soap\StructType\GetMailItemsFromTokensResponse|\Brainloop\Soap\StructType\GetMinPasswordLengthResponse|\Brainloop\Soap\StructType\GetModifiedSubTreeResponse|\Brainloop\Soap\StructType\GetModifiedTreeResponse|\Brainloop\Soap\StructType\GetModifiedTreeWithTrashcanResponse|\Brainloop\Soap\StructType\GetMultipleBrainmarkStylesResponse|\Brainloop\Soap\StructType\GetMultipleDownloadTypesByVersionResponse|\Brainloop\Soap\StructType\GetNextStageGroupsResponse|\Brainloop\Soap\StructType\GetNotificationEnabledItemIdsResponse|\Brainloop\Soap\StructType\GetOngoingAuditsResponse|\Brainloop\Soap\StructType\GetPasswordExpirationDateResponse|\Brainloop\Soap\StructType\GetPermissionsForUserResponse|\Brainloop\Soap\StructType\GetProfileResponse|\Brainloop\Soap\StructType\GetPublishRulesResponse|\Brainloop\Soap\StructType\GetRepliesResponse|\Brainloop\Soap\StructType\GetReportByDataroomResponse|\Brainloop\Soap\StructType\GetReportByDRCResponse|\Brainloop\Soap\StructType\GetReportResponse|\Brainloop\Soap\StructType\GetReportsByDataroomResponse|\Brainloop\Soap\StructType\GetReportsByDRCResponse|\Brainloop\Soap\StructType\GetReportsResponse|\Brainloop\Soap\StructType\GetRequiredPasswordStrengthResponse|\Brainloop\Soap\StructType\GetReviewResponse|\Brainloop\Soap\StructType\GetReviewsByUserParticipationResponse|\Brainloop\Soap\StructType\GetReviewsResponse|\Brainloop\Soap\StructType\GetRootItemsResponse|\Brainloop\Soap\StructType\GetSecurityCategoriesResponse|\Brainloop\Soap\StructType\GetSecurityGroupResponse|\Brainloop\Soap\StructType\GetSecurityGroupsResponse|\Brainloop\Soap\StructType\GetSendOptionsMultipleFilesResponse|\Brainloop\Soap\StructType\GetSendOptionsResponse|\Brainloop\Soap\StructType\GetSendRecipientsResponse|\Brainloop\Soap\StructType\GetStageGroupsResponse|\Brainloop\Soap\StructType\GetSubtreeResponse|\Brainloop\Soap\StructType\GetSystemAnnouncementsResponse|\Brainloop\Soap\StructType\GetTermsAndConditionsResponse|\Brainloop\Soap\StructType\GetTreeResponse|\Brainloop\Soap\StructType\GetTreeWithParametersResponse|\Brainloop\Soap\StructType\GetUploadStatusResponse|\Brainloop\Soap\StructType\GetURLForSentItemResponse|\Brainloop\Soap\StructType\GetUserByEmailResponse|\Brainloop\Soap\StructType\GetUserPropertiesResponse|\Brainloop\Soap\StructType\GetUserResponse|\Brainloop\Soap\StructType\GetUsersResponse|\Brainloop\Soap\StructType\GetWatchlistItemsResponse|\Brainloop\Soap\StructType\GetWebDAVUrlResponse
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
