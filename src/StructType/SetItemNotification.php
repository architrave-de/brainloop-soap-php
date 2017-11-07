<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetItemNotification StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetItemNotification extends AbstractStructBase
{
    /**
     * The iItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iItemID;
    /**
     * The notificationgroups
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfNotificationGroup
     */
    public $notificationgroups;
    /**
     * The notificationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $notificationType;
    /**
     * Constructor method for SetItemNotification
     * @uses SetItemNotification::setIItemID()
     * @uses SetItemNotification::setNotificationgroups()
     * @uses SetItemNotification::setNotificationType()
     * @param int $iItemID
     * @param \Brainloop\Soap\ArrayType\ArrayOfNotificationGroup $notificationgroups
     * @param string $notificationType
     */
    public function __construct($iItemID = null, \Brainloop\Soap\ArrayType\ArrayOfNotificationGroup $notificationgroups = null, $notificationType = null)
    {
        $this
            ->setIItemID($iItemID)
            ->setNotificationgroups($notificationgroups)
            ->setNotificationType($notificationType);
    }
    /**
     * Get iItemID value
     * @return int|null
     */
    public function getIItemID()
    {
        return $this->iItemID;
    }
    /**
     * Set iItemID value
     * @param int $iItemID
     * @return \Brainloop\Soap\StructType\SetItemNotification
     */
    public function setIItemID($iItemID = null)
    {
        // validation for constraint: int
        if (!is_null($iItemID) && !is_numeric($iItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iItemID)), __LINE__);
        }
        $this->iItemID = $iItemID;
        return $this;
    }
    /**
     * Get notificationgroups value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfNotificationGroup|null
     */
    public function getNotificationgroups()
    {
        return isset($this->notificationgroups) ? $this->notificationgroups : null;
    }
    /**
     * Set notificationgroups value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfNotificationGroup $notificationgroups
     * @return \Brainloop\Soap\StructType\SetItemNotification
     */
    public function setNotificationgroups(\Brainloop\Soap\ArrayType\ArrayOfNotificationGroup $notificationgroups = null)
    {
        if (is_null($notificationgroups) || (is_array($notificationgroups) && empty($notificationgroups))) {
            unset($this->notificationgroups);
        } else {
            $this->notificationgroups = $notificationgroups;
        }
        return $this;
    }
    /**
     * Get notificationType value
     * @return string|null
     */
    public function getNotificationType()
    {
        return $this->notificationType;
    }
    /**
     * Set notificationType value
     * @uses \Brainloop\Soap\EnumType\NotificationDeliveryType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\NotificationDeliveryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $notificationType
     * @return \Brainloop\Soap\StructType\SetItemNotification
     */
    public function setNotificationType($notificationType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\NotificationDeliveryType::valueIsValid($notificationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $notificationType, implode(', ', \Brainloop\Soap\EnumType\NotificationDeliveryType::getValidValues())), __LINE__);
        }
        $this->notificationType = $notificationType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SetItemNotification
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
