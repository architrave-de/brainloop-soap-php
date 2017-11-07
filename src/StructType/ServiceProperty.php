<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceProperty StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ServiceProperty
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ServiceProperty extends AbstractStructBase
{
    /**
     * The ObjectField
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ObjectField;
    /**
     * The PropertyName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $PropertyName;
    /**
     * The ReadOnly
     * @var bool
     */
    public $ReadOnly;
    /**
     * Constructor method for ServiceProperty
     * @uses ServiceProperty::setObjectField()
     * @uses ServiceProperty::setPropertyName()
     * @uses ServiceProperty::setReadOnly()
     * @param string $objectField
     * @param string $propertyName
     * @param bool $readOnly
     */
    public function __construct($objectField = null, $propertyName = null, $readOnly = null)
    {
        $this
            ->setObjectField($objectField)
            ->setPropertyName($propertyName)
            ->setReadOnly($readOnly);
    }
    /**
     * Get ObjectField value
     * @return string|null
     */
    public function getObjectField()
    {
        return $this->ObjectField;
    }
    /**
     * Set ObjectField value
     * @param string $objectField
     * @return \Brainloop\Soap\StructType\ServiceProperty
     */
    public function setObjectField($objectField = null)
    {
        // validation for constraint: string
        if (!is_null($objectField) && !is_string($objectField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($objectField)), __LINE__);
        }
        $this->ObjectField = $objectField;
        return $this;
    }
    /**
     * Get PropertyName value
     * @return string|null
     */
    public function getPropertyName()
    {
        return $this->PropertyName;
    }
    /**
     * Set PropertyName value
     * @param string $propertyName
     * @return \Brainloop\Soap\StructType\ServiceProperty
     */
    public function setPropertyName($propertyName = null)
    {
        // validation for constraint: string
        if (!is_null($propertyName) && !is_string($propertyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($propertyName)), __LINE__);
        }
        $this->PropertyName = $propertyName;
        return $this;
    }
    /**
     * Get ReadOnly value
     * @return bool|null
     */
    public function getReadOnly()
    {
        return $this->ReadOnly;
    }
    /**
     * Set ReadOnly value
     * @param bool $readOnly
     * @return \Brainloop\Soap\StructType\ServiceProperty
     */
    public function setReadOnly($readOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($readOnly) && !is_bool($readOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($readOnly)), __LINE__);
        }
        $this->ReadOnly = $readOnly;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ServiceProperty
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
