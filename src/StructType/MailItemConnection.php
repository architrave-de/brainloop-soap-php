<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailItemConnection StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MailItemConnection
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class MailItemConnection extends ItemIDAndVersion
{
    /**
     * The ItemType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ItemType;
    /**
     * The LastAccessTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastAccessTime;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * Constructor method for MailItemConnection
     * @uses MailItemConnection::setItemType()
     * @uses MailItemConnection::setLastAccessTime()
     * @uses MailItemConnection::setName()
     * @param string $itemType
     * @param string $lastAccessTime
     * @param string $name
     */
    public function __construct($itemType = null, $lastAccessTime = null, $name = null)
    {
        $this
            ->setItemType($itemType)
            ->setLastAccessTime($lastAccessTime)
            ->setName($name);
    }
    /**
     * Get ItemType value
     * @return string|null
     */
    public function getItemType()
    {
        return $this->ItemType;
    }
    /**
     * Set ItemType value
     * @uses \Brainloop\Soap\EnumType\ItemType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $itemType
     * @return \Brainloop\Soap\StructType\MailItemConnection
     */
    public function setItemType($itemType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ItemType::valueIsValid($itemType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $itemType, implode(', ', \Brainloop\Soap\EnumType\ItemType::getValidValues())), __LINE__);
        }
        $this->ItemType = $itemType;
        return $this;
    }
    /**
     * Get LastAccessTime value
     * @return string|null
     */
    public function getLastAccessTime()
    {
        return $this->LastAccessTime;
    }
    /**
     * Set LastAccessTime value
     * @param string $lastAccessTime
     * @return \Brainloop\Soap\StructType\MailItemConnection
     */
    public function setLastAccessTime($lastAccessTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastAccessTime) && !is_string($lastAccessTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastAccessTime)), __LINE__);
        }
        $this->LastAccessTime = $lastAccessTime;
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Brainloop\Soap\StructType\MailItemConnection
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\MailItemConnection
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
