<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportParameter StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ReportParameter
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ReportParameter extends AbstractStructBase
{
    /**
     * The AllowBlankValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowBlankValue;
    /**
     * The AllowedValues
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfNameValue
     */
    public $AllowedValues;
    /**
     * The Caption
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Caption;
    /**
     * The DataType
     * @var string
     */
    public $DataType;
    /**
     * The DefaultValue
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var mixed
     */
    public $DefaultValue;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The Nullable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Nullable;
    /**
     * The RangeMax
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var mixed
     */
    public $RangeMax;
    /**
     * The RangeMin
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var mixed
     */
    public $RangeMin;
    /**
     * Constructor method for ReportParameter
     * @uses ReportParameter::setAllowBlankValue()
     * @uses ReportParameter::setAllowedValues()
     * @uses ReportParameter::setCaption()
     * @uses ReportParameter::setDataType()
     * @uses ReportParameter::setDefaultValue()
     * @uses ReportParameter::setDescription()
     * @uses ReportParameter::setName()
     * @uses ReportParameter::setNullable()
     * @uses ReportParameter::setRangeMax()
     * @uses ReportParameter::setRangeMin()
     * @param bool $allowBlankValue
     * @param \Brainloop\Soap\ArrayType\ArrayOfNameValue $allowedValues
     * @param string $caption
     * @param string $dataType
     * @param mixed $defaultValue
     * @param string $description
     * @param string $name
     * @param bool $nullable
     * @param mixed $rangeMax
     * @param mixed $rangeMin
     */
    public function __construct($allowBlankValue = null, \Brainloop\Soap\ArrayType\ArrayOfNameValue $allowedValues = null, $caption = null, $dataType = null, $defaultValue = null, $description = null, $name = null, $nullable = null, $rangeMax = null, $rangeMin = null)
    {
        $this
            ->setAllowBlankValue($allowBlankValue)
            ->setAllowedValues($allowedValues)
            ->setCaption($caption)
            ->setDataType($dataType)
            ->setDefaultValue($defaultValue)
            ->setDescription($description)
            ->setName($name)
            ->setNullable($nullable)
            ->setRangeMax($rangeMax)
            ->setRangeMin($rangeMin);
    }
    /**
     * Get AllowBlankValue value
     * @return bool|null
     */
    public function getAllowBlankValue()
    {
        return $this->AllowBlankValue;
    }
    /**
     * Set AllowBlankValue value
     * @param bool $allowBlankValue
     * @return \Brainloop\Soap\StructType\ReportParameter
     */
    public function setAllowBlankValue($allowBlankValue = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowBlankValue) && !is_bool($allowBlankValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowBlankValue)), __LINE__);
        }
        $this->AllowBlankValue = $allowBlankValue;
        return $this;
    }
    /**
     * Get AllowedValues value
     * @return \Brainloop\Soap\ArrayType\ArrayOfNameValue|null
     */
    public function getAllowedValues()
    {
        return $this->AllowedValues;
    }
    /**
     * Set AllowedValues value
     * @param \Brainloop\Soap\ArrayType\ArrayOfNameValue $allowedValues
     * @return \Brainloop\Soap\StructType\ReportParameter
     */
    public function setAllowedValues(\Brainloop\Soap\ArrayType\ArrayOfNameValue $allowedValues = null)
    {
        $this->AllowedValues = $allowedValues;
        return $this;
    }
    /**
     * Get Caption value
     * @return string|null
     */
    public function getCaption()
    {
        return $this->Caption;
    }
    /**
     * Set Caption value
     * @param string $caption
     * @return \Brainloop\Soap\StructType\ReportParameter
     */
    public function setCaption($caption = null)
    {
        // validation for constraint: string
        if (!is_null($caption) && !is_string($caption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($caption)), __LINE__);
        }
        $this->Caption = $caption;
        return $this;
    }
    /**
     * Get DataType value
     * @return string|null
     */
    public function getDataType()
    {
        return $this->DataType;
    }
    /**
     * Set DataType value
     * @uses \Brainloop\Soap\EnumType\ReportDataType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ReportDataType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dataType
     * @return \Brainloop\Soap\StructType\ReportParameter
     */
    public function setDataType($dataType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ReportDataType::valueIsValid($dataType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dataType, implode(', ', \Brainloop\Soap\EnumType\ReportDataType::getValidValues())), __LINE__);
        }
        $this->DataType = $dataType;
        return $this;
    }
    /**
     * Get DefaultValue value
     * @return mixed|null
     */
    public function getDefaultValue()
    {
        return $this->DefaultValue;
    }
    /**
     * Set DefaultValue value
     * @param mixed $defaultValue
     * @return \Brainloop\Soap\StructType\ReportParameter
     */
    public function setDefaultValue($defaultValue = null)
    {
        $this->DefaultValue = $defaultValue;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Brainloop\Soap\StructType\ReportParameter
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
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
     * @return \Brainloop\Soap\StructType\ReportParameter
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
     * Get Nullable value
     * @return bool|null
     */
    public function getNullable()
    {
        return $this->Nullable;
    }
    /**
     * Set Nullable value
     * @param bool $nullable
     * @return \Brainloop\Soap\StructType\ReportParameter
     */
    public function setNullable($nullable = null)
    {
        // validation for constraint: boolean
        if (!is_null($nullable) && !is_bool($nullable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($nullable)), __LINE__);
        }
        $this->Nullable = $nullable;
        return $this;
    }
    /**
     * Get RangeMax value
     * @return mixed|null
     */
    public function getRangeMax()
    {
        return $this->RangeMax;
    }
    /**
     * Set RangeMax value
     * @param mixed $rangeMax
     * @return \Brainloop\Soap\StructType\ReportParameter
     */
    public function setRangeMax($rangeMax = null)
    {
        $this->RangeMax = $rangeMax;
        return $this;
    }
    /**
     * Get RangeMin value
     * @return mixed|null
     */
    public function getRangeMin()
    {
        return $this->RangeMin;
    }
    /**
     * Set RangeMin value
     * @param mixed $rangeMin
     * @return \Brainloop\Soap\StructType\ReportParameter
     */
    public function setRangeMin($rangeMin = null)
    {
        $this->RangeMin = $rangeMin;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ReportParameter
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
