<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for ItemType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ItemType
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class ItemType
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Folder'
     * @return string 'Folder'
     */
    const VALUE_FOLDER = 'Folder';
    /**
     * Constant for value 'Document'
     * @return string 'Document'
     */
    const VALUE_DOCUMENT = 'Document';
    /**
     * Constant for value 'Task'
     * @return string 'Task'
     */
    const VALUE_TASK = 'Task';
    /**
     * Constant for value 'Discussion'
     * @return string 'Discussion'
     */
    const VALUE_DISCUSSION = 'Discussion';
    /**
     * Constant for value 'Link'
     * @return string 'Link'
     */
    const VALUE_LINK = 'Link';
    /**
     * Constant for value 'DocCollection'
     * @return string 'DocCollection'
     */
    const VALUE_DOC_COLLECTION = 'DocCollection';
    /**
     * Constant for value 'Milestone'
     * @return string 'Milestone'
     */
    const VALUE_MILESTONE = 'Milestone';
    /**
     * Constant for value 'Search'
     * @return string 'Search'
     */
    const VALUE_SEARCH = 'Search';
    /**
     * Constant for value 'DiscussionReply'
     * @return string 'DiscussionReply'
     */
    const VALUE_DISCUSSION_REPLY = 'DiscussionReply';
    /**
     * Constant for value 'Article'
     * @return string 'Article'
     */
    const VALUE_ARTICLE = 'Article';
    /**
     * Constant for value 'MailItem'
     * @return string 'MailItem'
     */
    const VALUE_MAIL_ITEM = 'MailItem';
    /**
     * Constant for value 'QandA'
     * @return string 'QandA'
     */
    const VALUE_QAND_A = 'QandA';
    /**
     * Constant for value 'SecurityCategory'
     * @return string 'SecurityCategory'
     */
    const VALUE_SECURITY_CATEGORY = 'SecurityCategory';
    /**
     * Constant for value 'Vote'
     * @return string 'Vote'
     */
    const VALUE_VOTE = 'Vote';
    /**
     * Constant for value 'CalendarEvent'
     * @return string 'CalendarEvent'
     */
    const VALUE_CALENDAR_EVENT = 'CalendarEvent';
    /**
     * Constant for value 'Review'
     * @return string 'Review'
     */
    const VALUE_REVIEW = 'Review';
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
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_FOLDER
     * @uses self::VALUE_DOCUMENT
     * @uses self::VALUE_TASK
     * @uses self::VALUE_DISCUSSION
     * @uses self::VALUE_LINK
     * @uses self::VALUE_DOC_COLLECTION
     * @uses self::VALUE_MILESTONE
     * @uses self::VALUE_SEARCH
     * @uses self::VALUE_DISCUSSION_REPLY
     * @uses self::VALUE_ARTICLE
     * @uses self::VALUE_MAIL_ITEM
     * @uses self::VALUE_QAND_A
     * @uses self::VALUE_SECURITY_CATEGORY
     * @uses self::VALUE_VOTE
     * @uses self::VALUE_CALENDAR_EVENT
     * @uses self::VALUE_REVIEW
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_FOLDER,
            self::VALUE_DOCUMENT,
            self::VALUE_TASK,
            self::VALUE_DISCUSSION,
            self::VALUE_LINK,
            self::VALUE_DOC_COLLECTION,
            self::VALUE_MILESTONE,
            self::VALUE_SEARCH,
            self::VALUE_DISCUSSION_REPLY,
            self::VALUE_ARTICLE,
            self::VALUE_MAIL_ITEM,
            self::VALUE_QAND_A,
            self::VALUE_SECURITY_CATEGORY,
            self::VALUE_VOTE,
            self::VALUE_CALENDAR_EVENT,
            self::VALUE_REVIEW,
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
