<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EventTypeAttachment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EventTypeAttachment
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class EventTypeAttachment extends AbstractStructBase
{
    /**
     * The AttachmentType
     * @var string
     */
    public $AttachmentType;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * Constructor method for EventTypeAttachment
     * @uses EventTypeAttachment::setAttachmentType()
     * @uses EventTypeAttachment::setName()
     * @param string $attachmentType
     * @param string $name
     */
    public function __construct($attachmentType = null, $name = null)
    {
        $this
            ->setAttachmentType($attachmentType)
            ->setName($name);
    }
    /**
     * Get AttachmentType value
     * @return string|null
     */
    public function getAttachmentType()
    {
        return $this->AttachmentType;
    }
    /**
     * Set AttachmentType value
     * @uses \Brainloop\Soap\EnumType\ItemType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $attachmentType
     * @return \Brainloop\Soap\StructType\EventTypeAttachment
     */
    public function setAttachmentType($attachmentType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ItemType::valueIsValid($attachmentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $attachmentType, implode(', ', \Brainloop\Soap\EnumType\ItemType::getValidValues())), __LINE__);
        }
        $this->AttachmentType = $attachmentType;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Brainloop\Soap\StructType\EventTypeAttachment
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\EventTypeAttachment
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
