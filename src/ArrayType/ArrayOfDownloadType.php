<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDownloadType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDownloadType
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfDownloadType extends AbstractStructArrayBase
{
    /**
     * The DownloadType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DownloadType;
    /**
     * Constructor method for ArrayOfDownloadType
     * @uses ArrayOfDownloadType::setDownloadType()
     * @param string[] $downloadType
     */
    public function __construct(array $downloadType = array())
    {
        $this
            ->setDownloadType($downloadType);
    }
    /**
     * Get DownloadType value
     * @return string[]|null
     */
    public function getDownloadType()
    {
        return $this->DownloadType;
    }
    /**
     * Set DownloadType value
     * @uses \Brainloop\Soap\EnumType\DownloadType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\DownloadType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $downloadType
     * @return \Brainloop\Soap\ArrayType\ArrayOfDownloadType
     */
    public function setDownloadType(array $downloadType = array())
    {
        $invalidValues = array();
        foreach ($downloadType as $arrayOfDownloadTypeDownloadTypeItem) {
            if (!\Brainloop\Soap\EnumType\DownloadType::valueIsValid($arrayOfDownloadTypeDownloadTypeItem)) {
                $invalidValues[] = var_export($arrayOfDownloadTypeDownloadTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Brainloop\Soap\EnumType\DownloadType::getValidValues())), __LINE__);
        }
        $this->DownloadType = $downloadType;
        return $this;
    }
    /**
     * Add item to DownloadType value
     * @uses \Brainloop\Soap\EnumType\DownloadType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\DownloadType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfDownloadType
     */
    public function addToDownloadType($item)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\DownloadType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Brainloop\Soap\EnumType\DownloadType::getValidValues())), __LINE__);
        }
        $this->DownloadType[] = $item;
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
     * @uses \Brainloop\Soap\EnumType\DownloadType::valueIsValid()
     * @param string $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfDownloadType
     */
    public function add($item)
    {
        if (!\Brainloop\Soap\EnumType\DownloadType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Brainloop\Soap\EnumType\DownloadType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DownloadType
     */
    public function getAttributeName()
    {
        return 'DownloadType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfDownloadType
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
