<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for DataroomStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DataroomStatus
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class DataroomStatus
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Dataroom'
     * @return string 'Dataroom'
     */
    const VALUE_DATAROOM = 'Dataroom';
    /**
     * Constant for value 'ActiveTemplate'
     * @return string 'ActiveTemplate'
     */
    const VALUE_ACTIVE_TEMPLATE = 'ActiveTemplate';
    /**
     * Constant for value 'InactiveTemplate'
     * @return string 'InactiveTemplate'
     */
    const VALUE_INACTIVE_TEMPLATE = 'InactiveTemplate';
    /**
     * Constant for value 'QueuedForCreation'
     * @return string 'QueuedForCreation'
     */
    const VALUE_QUEUED_FOR_CREATION = 'QueuedForCreation';
    /**
     * Constant for value 'BeingCreated'
     * @return string 'BeingCreated'
     */
    const VALUE_BEING_CREATED = 'BeingCreated';
    /**
     * Constant for value 'BrokenDataroom'
     * @return string 'BrokenDataroom'
     */
    const VALUE_BROKEN_DATAROOM = 'BrokenDataroom';
    /**
     * Constant for value 'BeingRestored'
     * @return string 'BeingRestored'
     */
    const VALUE_BEING_RESTORED = 'BeingRestored';
    /**
     * Constant for value 'BeingBackedUp'
     * @return string 'BeingBackedUp'
     */
    const VALUE_BEING_BACKED_UP = 'BeingBackedUp';
    /**
     * Constant for value 'WaitingForKeys'
     * @return string 'WaitingForKeys'
     */
    const VALUE_WAITING_FOR_KEYS = 'WaitingForKeys';
    /**
     * Constant for value 'Closed'
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Constant for value 'Deleted'
     * @return string 'Deleted'
     */
    const VALUE_DELETED = 'Deleted';
    /**
     * Constant for value 'Destroyed'
     * @return string 'Destroyed'
     */
    const VALUE_DESTROYED = 'Destroyed';
    /**
     * Constant for value 'UnderAudit'
     * @return string 'UnderAudit'
     */
    const VALUE_UNDER_AUDIT = 'UnderAudit';
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
     * @uses self::VALUE_DATAROOM
     * @uses self::VALUE_ACTIVE_TEMPLATE
     * @uses self::VALUE_INACTIVE_TEMPLATE
     * @uses self::VALUE_QUEUED_FOR_CREATION
     * @uses self::VALUE_BEING_CREATED
     * @uses self::VALUE_BROKEN_DATAROOM
     * @uses self::VALUE_BEING_RESTORED
     * @uses self::VALUE_BEING_BACKED_UP
     * @uses self::VALUE_WAITING_FOR_KEYS
     * @uses self::VALUE_CLOSED
     * @uses self::VALUE_DELETED
     * @uses self::VALUE_DESTROYED
     * @uses self::VALUE_UNDER_AUDIT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_DATAROOM,
            self::VALUE_ACTIVE_TEMPLATE,
            self::VALUE_INACTIVE_TEMPLATE,
            self::VALUE_QUEUED_FOR_CREATION,
            self::VALUE_BEING_CREATED,
            self::VALUE_BROKEN_DATAROOM,
            self::VALUE_BEING_RESTORED,
            self::VALUE_BEING_BACKED_UP,
            self::VALUE_WAITING_FOR_KEYS,
            self::VALUE_CLOSED,
            self::VALUE_DELETED,
            self::VALUE_DESTROYED,
            self::VALUE_UNDER_AUDIT,
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
