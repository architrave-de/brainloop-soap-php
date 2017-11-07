<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for ItemFields EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ItemFields
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class ItemFields
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Description'
     * @return string 'Description'
     */
    const VALUE_DESCRIPTION = 'Description';
    /**
     * Constant for value 'Path'
     * @return string 'Path'
     */
    const VALUE_PATH = 'Path';
    /**
     * Constant for value 'AutoVersioning'
     * @return string 'AutoVersioning'
     */
    const VALUE_AUTO_VERSIONING = 'AutoVersioning';
    /**
     * Constant for value 'SecurityCategory'
     * @return string 'SecurityCategory'
     */
    const VALUE_SECURITY_CATEGORY = 'SecurityCategory';
    /**
     * Constant for value 'Depth'
     * @return string 'Depth'
     */
    const VALUE_DEPTH = 'Depth';
    /**
     * Constant for value 'DocumentSize'
     * @return string 'DocumentSize'
     */
    const VALUE_DOCUMENT_SIZE = 'DocumentSize';
    /**
     * Constant for value 'DocumentCRC'
     * @return string 'DocumentCRC'
     */
    const VALUE_DOCUMENT_CRC = 'DocumentCRC';
    /**
     * Constant for value 'DocumentDetails'
     * @return string 'DocumentDetails'
     */
    const VALUE_DOCUMENT_DETAILS = 'DocumentDetails';
    /**
     * Constant for value 'FolderRetentionDays'
     * @return string 'FolderRetentionDays'
     */
    const VALUE_FOLDER_RETENTION_DAYS = 'FolderRetentionDays';
    /**
     * Constant for value 'FolderDetails'
     * @return string 'FolderDetails'
     */
    const VALUE_FOLDER_DETAILS = 'FolderDetails';
    /**
     * Constant for value 'StartDate'
     * @return string 'StartDate'
     */
    const VALUE_START_DATE = 'StartDate';
    /**
     * Constant for value 'EndDate'
     * @return string 'EndDate'
     */
    const VALUE_END_DATE = 'EndDate';
    /**
     * Constant for value 'Participants'
     * @return string 'Participants'
     */
    const VALUE_PARTICIPANTS = 'Participants';
    /**
     * Constant for value 'Status'
     * @return string 'Status'
     */
    const VALUE_STATUS = 'Status';
    /**
     * Constant for value 'CollaborationDetails'
     * @return string 'CollaborationDetails'
     */
    const VALUE_COLLABORATION_DETAILS = 'CollaborationDetails';
    /**
     * Constant for value 'UserCreator'
     * @return string 'UserCreator'
     */
    const VALUE_USER_CREATOR = 'UserCreator';
    /**
     * Constant for value 'Connections'
     * @return string 'Connections'
     */
    const VALUE_CONNECTIONS = 'Connections';
    /**
     * Constant for value 'TaskResultObject'
     * @return string 'TaskResultObject'
     */
    const VALUE_TASK_RESULT_OBJECT = 'TaskResultObject';
    /**
     * Constant for value 'EventLocation'
     * @return string 'EventLocation'
     */
    const VALUE_EVENT_LOCATION = 'EventLocation';
    /**
     * Constant for value 'EventDetails'
     * @return string 'EventDetails'
     */
    const VALUE_EVENT_DETAILS = 'EventDetails';
    /**
     * Constant for value 'HasChildren'
     * @return string 'HasChildren'
     */
    const VALUE_HAS_CHILDREN = 'HasChildren';
    /**
     * Constant for value 'LinkDetails'
     * @return string 'LinkDetails'
     */
    const VALUE_LINK_DETAILS = 'LinkDetails';
    /**
     * Constant for value 'Owner'
     * @return string 'Owner'
     */
    const VALUE_OWNER = 'Owner';
    /**
     * Constant for value 'IsPublic'
     * @return string 'IsPublic'
     */
    const VALUE_IS_PUBLIC = 'IsPublic';
    /**
     * Constant for value 'Reviews'
     * @return string 'Reviews'
     */
    const VALUE_REVIEWS = 'Reviews';
    /**
     * Constant for value 'Recipients'
     * @return string 'Recipients'
     */
    const VALUE_RECIPIENTS = 'Recipients';
    /**
     * Constant for value 'Modifier'
     * @return string 'Modifier'
     */
    const VALUE_MODIFIER = 'Modifier';
    /**
     * Constant for value 'CheckOutUserId'
     * @return string 'CheckOutUserId'
     */
    const VALUE_CHECK_OUT_USER_ID = 'CheckOutUserId';
    /**
     * Constant for value 'CheckOutDate'
     * @return string 'CheckOutDate'
     */
    const VALUE_CHECK_OUT_DATE = 'CheckOutDate';
    /**
     * Constant for value 'LinkedObject'
     * @return string 'LinkedObject'
     */
    const VALUE_LINKED_OBJECT = 'LinkedObject';
    /**
     * Constant for value 'MessageHtml'
     * @return string 'MessageHtml'
     */
    const VALUE_MESSAGE_HTML = 'MessageHtml';
    /**
     * Constant for value 'MessageTokens'
     * @return string 'MessageTokens'
     */
    const VALUE_MESSAGE_TOKENS = 'MessageTokens';
    /**
     * Constant for value 'MessageSender'
     * @return string 'MessageSender'
     */
    const VALUE_MESSAGE_SENDER = 'MessageSender';
    /**
     * Constant for value 'ExpireDate'
     * @return string 'ExpireDate'
     */
    const VALUE_EXPIRE_DATE = 'ExpireDate';
    /**
     * Constant for value 'intVotingOptionYesNo'
     * @return string 'intVotingOptionYesNo'
     */
    const VALUE_INT_VOTING_OPTION_YES_NO = 'intVotingOptionYesNo';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_DESCRIPTION
     * @uses self::VALUE_PATH
     * @uses self::VALUE_AUTO_VERSIONING
     * @uses self::VALUE_SECURITY_CATEGORY
     * @uses self::VALUE_DEPTH
     * @uses self::VALUE_DOCUMENT_SIZE
     * @uses self::VALUE_DOCUMENT_CRC
     * @uses self::VALUE_DOCUMENT_DETAILS
     * @uses self::VALUE_FOLDER_RETENTION_DAYS
     * @uses self::VALUE_FOLDER_DETAILS
     * @uses self::VALUE_START_DATE
     * @uses self::VALUE_END_DATE
     * @uses self::VALUE_PARTICIPANTS
     * @uses self::VALUE_STATUS
     * @uses self::VALUE_COLLABORATION_DETAILS
     * @uses self::VALUE_USER_CREATOR
     * @uses self::VALUE_CONNECTIONS
     * @uses self::VALUE_TASK_RESULT_OBJECT
     * @uses self::VALUE_EVENT_LOCATION
     * @uses self::VALUE_EVENT_DETAILS
     * @uses self::VALUE_HAS_CHILDREN
     * @uses self::VALUE_LINK_DETAILS
     * @uses self::VALUE_OWNER
     * @uses self::VALUE_IS_PUBLIC
     * @uses self::VALUE_REVIEWS
     * @uses self::VALUE_RECIPIENTS
     * @uses self::VALUE_MODIFIER
     * @uses self::VALUE_CHECK_OUT_USER_ID
     * @uses self::VALUE_CHECK_OUT_DATE
     * @uses self::VALUE_LINKED_OBJECT
     * @uses self::VALUE_MESSAGE_HTML
     * @uses self::VALUE_MESSAGE_TOKENS
     * @uses self::VALUE_MESSAGE_SENDER
     * @uses self::VALUE_EXPIRE_DATE
     * @uses self::VALUE_INT_VOTING_OPTION_YES_NO
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_DESCRIPTION,
            self::VALUE_PATH,
            self::VALUE_AUTO_VERSIONING,
            self::VALUE_SECURITY_CATEGORY,
            self::VALUE_DEPTH,
            self::VALUE_DOCUMENT_SIZE,
            self::VALUE_DOCUMENT_CRC,
            self::VALUE_DOCUMENT_DETAILS,
            self::VALUE_FOLDER_RETENTION_DAYS,
            self::VALUE_FOLDER_DETAILS,
            self::VALUE_START_DATE,
            self::VALUE_END_DATE,
            self::VALUE_PARTICIPANTS,
            self::VALUE_STATUS,
            self::VALUE_COLLABORATION_DETAILS,
            self::VALUE_USER_CREATOR,
            self::VALUE_CONNECTIONS,
            self::VALUE_TASK_RESULT_OBJECT,
            self::VALUE_EVENT_LOCATION,
            self::VALUE_EVENT_DETAILS,
            self::VALUE_HAS_CHILDREN,
            self::VALUE_LINK_DETAILS,
            self::VALUE_OWNER,
            self::VALUE_IS_PUBLIC,
            self::VALUE_REVIEWS,
            self::VALUE_RECIPIENTS,
            self::VALUE_MODIFIER,
            self::VALUE_CHECK_OUT_USER_ID,
            self::VALUE_CHECK_OUT_DATE,
            self::VALUE_LINKED_OBJECT,
            self::VALUE_MESSAGE_HTML,
            self::VALUE_MESSAGE_TOKENS,
            self::VALUE_MESSAGE_SENDER,
            self::VALUE_EXPIRE_DATE,
            self::VALUE_INT_VOTING_OPTION_YES_NO,
            self::VALUE_ALL,
        );
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
