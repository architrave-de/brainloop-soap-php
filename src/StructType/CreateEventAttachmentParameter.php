<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateEventAttachmentParameter StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CreateEventAttachmentParameter
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateEventAttachmentParameter extends AbstractStructBase
{
    /**
     * The AttachedItem
     * @var int
     */
    public $AttachedItem;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * Constructor method for CreateEventAttachmentParameter
     * @uses CreateEventAttachmentParameter::setAttachedItem()
     * @uses CreateEventAttachmentParameter::setName()
     * @param int $attachedItem
     * @param string $name
     */
    public function __construct($attachedItem = null, $name = null)
    {
        $this
            ->setAttachedItem($attachedItem)
            ->setName($name);
    }
    /**
     * Get AttachedItem value
     * @return int|null
     */
    public function getAttachedItem()
    {
        return $this->AttachedItem;
    }
    /**
     * Set AttachedItem value
     * @param int $attachedItem
     * @return \Brainloop\Soap\StructType\CreateEventAttachmentParameter
     */
    public function setAttachedItem($attachedItem = null)
    {
        // validation for constraint: int
        if (!is_null($attachedItem) && !is_numeric($attachedItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($attachedItem)), __LINE__);
        }
        $this->AttachedItem = $attachedItem;
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
     * @return \Brainloop\Soap\StructType\CreateEventAttachmentParameter
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
     * @return \Brainloop\Soap\StructType\CreateEventAttachmentParameter
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
