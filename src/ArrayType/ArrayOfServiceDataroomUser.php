<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceDataroomUser ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfServiceDataroomUser
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfServiceDataroomUser extends AbstractStructArrayBase
{
    /**
     * The ServiceDataroomUser
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ServiceDataroomUser[]
     */
    public $ServiceDataroomUser;
    /**
     * Constructor method for ArrayOfServiceDataroomUser
     * @uses ArrayOfServiceDataroomUser::setServiceDataroomUser()
     * @param \Brainloop\Soap\StructType\ServiceDataroomUser[] $serviceDataroomUser
     */
    public function __construct(array $serviceDataroomUser = array())
    {
        $this
            ->setServiceDataroomUser($serviceDataroomUser);
    }
    /**
     * Get ServiceDataroomUser value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ServiceDataroomUser[]|null
     */
    public function getServiceDataroomUser()
    {
        return isset($this->ServiceDataroomUser) ? $this->ServiceDataroomUser : null;
    }
    /**
     * Set ServiceDataroomUser value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\ServiceDataroomUser[] $serviceDataroomUser
     * @return \Brainloop\Soap\ArrayType\ArrayOfServiceDataroomUser
     */
    public function setServiceDataroomUser(array $serviceDataroomUser = array())
    {
        foreach ($serviceDataroomUser as $arrayOfServiceDataroomUserServiceDataroomUserItem) {
            // validation for constraint: itemType
            if (!$arrayOfServiceDataroomUserServiceDataroomUserItem instanceof \Brainloop\Soap\StructType\ServiceDataroomUser) {
                throw new \InvalidArgumentException(sprintf('The ServiceDataroomUser property can only contain items of \Brainloop\Soap\StructType\ServiceDataroomUser, "%s" given', is_object($arrayOfServiceDataroomUserServiceDataroomUserItem) ? get_class($arrayOfServiceDataroomUserServiceDataroomUserItem) : gettype($arrayOfServiceDataroomUserServiceDataroomUserItem)), __LINE__);
            }
        }
        if (is_null($serviceDataroomUser) || (is_array($serviceDataroomUser) && empty($serviceDataroomUser))) {
            unset($this->ServiceDataroomUser);
        } else {
            $this->ServiceDataroomUser = $serviceDataroomUser;
        }
        return $this;
    }
    /**
     * Add item to ServiceDataroomUser value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\ServiceDataroomUser $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfServiceDataroomUser
     */
    public function addToServiceDataroomUser(\Brainloop\Soap\StructType\ServiceDataroomUser $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\ServiceDataroomUser) {
            throw new \InvalidArgumentException(sprintf('The ServiceDataroomUser property can only contain items of \Brainloop\Soap\StructType\ServiceDataroomUser, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ServiceDataroomUser[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\ServiceDataroomUser|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\ServiceDataroomUser|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\ServiceDataroomUser|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\ServiceDataroomUser|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\ServiceDataroomUser|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ServiceDataroomUser
     */
    public function getAttributeName()
    {
        return 'ServiceDataroomUser';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfServiceDataroomUser
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
