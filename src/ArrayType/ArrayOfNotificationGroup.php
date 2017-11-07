<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNotificationGroup ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfNotificationGroup
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfNotificationGroup extends AbstractStructArrayBase
{
    /**
     * The NotificationGroup
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $NotificationGroup;
    /**
     * Constructor method for ArrayOfNotificationGroup
     * @uses ArrayOfNotificationGroup::setNotificationGroup()
     * @param string[] $notificationGroup
     */
    public function __construct(array $notificationGroup = array())
    {
        $this
            ->setNotificationGroup($notificationGroup);
    }
    /**
     * Get NotificationGroup value
     * @return string[]|null
     */
    public function getNotificationGroup()
    {
        return $this->NotificationGroup;
    }
    /**
     * Set NotificationGroup value
     * @uses \Brainloop\Soap\EnumType\NotificationGroup::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\NotificationGroup::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $notificationGroup
     * @return \Brainloop\Soap\ArrayType\ArrayOfNotificationGroup
     */
    public function setNotificationGroup(array $notificationGroup = array())
    {
        $invalidValues = array();
        foreach ($notificationGroup as $arrayOfNotificationGroupNotificationGroupItem) {
            if (!\Brainloop\Soap\EnumType\NotificationGroup::valueIsValid($arrayOfNotificationGroupNotificationGroupItem)) {
                $invalidValues[] = var_export($arrayOfNotificationGroupNotificationGroupItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Brainloop\Soap\EnumType\NotificationGroup::getValidValues())), __LINE__);
        }
        $this->NotificationGroup = $notificationGroup;
        return $this;
    }
    /**
     * Add item to NotificationGroup value
     * @uses \Brainloop\Soap\EnumType\NotificationGroup::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\NotificationGroup::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfNotificationGroup
     */
    public function addToNotificationGroup($item)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\NotificationGroup::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Brainloop\Soap\EnumType\NotificationGroup::getValidValues())), __LINE__);
        }
        $this->NotificationGroup[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \Brainloop\Soap\EnumType\NotificationGroup::valueIsValid()
     * @param string $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfNotificationGroup
     */
    public function add($item)
    {
        if (!\Brainloop\Soap\EnumType\NotificationGroup::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Brainloop\Soap\EnumType\NotificationGroup::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NotificationGroup
     */
    public function getAttributeName()
    {
        return 'NotificationGroup';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfNotificationGroup
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
