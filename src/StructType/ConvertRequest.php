<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConvertRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ConvertRequest
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ConvertRequest extends AbstractStructBase
{
    /**
     * The ConversionType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ConversionType;
    /**
     * The CreateNewVersion
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $CreateNewVersion;
    /**
     * The CultureCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CultureCode;
    /**
     * The Encoding
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Encoding;
    /**
     * The ItemId
     * @var int
     */
    public $ItemId;
    /**
     * The LineDelimiter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LineDelimiter;
    /**
     * The ValueDelimiter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ValueDelimiter;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $Version;
    /**
     * Constructor method for ConvertRequest
     * @uses ConvertRequest::setConversionType()
     * @uses ConvertRequest::setCreateNewVersion()
     * @uses ConvertRequest::setCultureCode()
     * @uses ConvertRequest::setEncoding()
     * @uses ConvertRequest::setItemId()
     * @uses ConvertRequest::setLineDelimiter()
     * @uses ConvertRequest::setValueDelimiter()
     * @uses ConvertRequest::setVersion()
     * @param string $conversionType
     * @param bool $createNewVersion
     * @param string $cultureCode
     * @param string $encoding
     * @param int $itemId
     * @param string $lineDelimiter
     * @param string $valueDelimiter
     * @param int $version
     */
    public function __construct($conversionType = null, $createNewVersion = null, $cultureCode = null, $encoding = null, $itemId = null, $lineDelimiter = null, $valueDelimiter = null, $version = null)
    {
        $this
            ->setConversionType($conversionType)
            ->setCreateNewVersion($createNewVersion)
            ->setCultureCode($cultureCode)
            ->setEncoding($encoding)
            ->setItemId($itemId)
            ->setLineDelimiter($lineDelimiter)
            ->setValueDelimiter($valueDelimiter)
            ->setVersion($version);
    }
    /**
     * Get ConversionType value
     * @return string|null
     */
    public function getConversionType()
    {
        return $this->ConversionType;
    }
    /**
     * Set ConversionType value
     * @uses \Brainloop\Soap\EnumType\ExcelConversionType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ExcelConversionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $conversionType
     * @return \Brainloop\Soap\StructType\ConvertRequest
     */
    public function setConversionType($conversionType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ExcelConversionType::valueIsValid($conversionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $conversionType, implode(', ', \Brainloop\Soap\EnumType\ExcelConversionType::getValidValues())), __LINE__);
        }
        $this->ConversionType = $conversionType;
        return $this;
    }
    /**
     * Get CreateNewVersion value
     * @return bool|null
     */
    public function getCreateNewVersion()
    {
        return $this->CreateNewVersion;
    }
    /**
     * Set CreateNewVersion value
     * @param bool $createNewVersion
     * @return \Brainloop\Soap\StructType\ConvertRequest
     */
    public function setCreateNewVersion($createNewVersion = null)
    {
        // validation for constraint: boolean
        if (!is_null($createNewVersion) && !is_bool($createNewVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($createNewVersion)), __LINE__);
        }
        $this->CreateNewVersion = $createNewVersion;
        return $this;
    }
    /**
     * Get CultureCode value
     * @return string|null
     */
    public function getCultureCode()
    {
        return $this->CultureCode;
    }
    /**
     * Set CultureCode value
     * @param string $cultureCode
     * @return \Brainloop\Soap\StructType\ConvertRequest
     */
    public function setCultureCode($cultureCode = null)
    {
        // validation for constraint: string
        if (!is_null($cultureCode) && !is_string($cultureCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cultureCode)), __LINE__);
        }
        $this->CultureCode = $cultureCode;
        return $this;
    }
    /**
     * Get Encoding value
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->Encoding;
    }
    /**
     * Set Encoding value
     * @param string $encoding
     * @return \Brainloop\Soap\StructType\ConvertRequest
     */
    public function setEncoding($encoding = null)
    {
        // validation for constraint: string
        if (!is_null($encoding) && !is_string($encoding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($encoding)), __LINE__);
        }
        $this->Encoding = $encoding;
        return $this;
    }
    /**
     * Get ItemId value
     * @return int|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param int $itemId
     * @return \Brainloop\Soap\StructType\ConvertRequest
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: int
        if (!is_null($itemId) && !is_numeric($itemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemId)), __LINE__);
        }
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get LineDelimiter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLineDelimiter()
    {
        return isset($this->LineDelimiter) ? $this->LineDelimiter : null;
    }
    /**
     * Set LineDelimiter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lineDelimiter
     * @return \Brainloop\Soap\StructType\ConvertRequest
     */
    public function setLineDelimiter($lineDelimiter = null)
    {
        // validation for constraint: string
        if (!is_null($lineDelimiter) && !is_string($lineDelimiter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineDelimiter)), __LINE__);
        }
        if (is_null($lineDelimiter) || (is_array($lineDelimiter) && empty($lineDelimiter))) {
            unset($this->LineDelimiter);
        } else {
            $this->LineDelimiter = $lineDelimiter;
        }
        return $this;
    }
    /**
     * Get ValueDelimiter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValueDelimiter()
    {
        return isset($this->ValueDelimiter) ? $this->ValueDelimiter : null;
    }
    /**
     * Set ValueDelimiter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $valueDelimiter
     * @return \Brainloop\Soap\StructType\ConvertRequest
     */
    public function setValueDelimiter($valueDelimiter = null)
    {
        // validation for constraint: string
        if (!is_null($valueDelimiter) && !is_string($valueDelimiter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($valueDelimiter)), __LINE__);
        }
        if (is_null($valueDelimiter) || (is_array($valueDelimiter) && empty($valueDelimiter))) {
            unset($this->ValueDelimiter);
        } else {
            $this->ValueDelimiter = $valueDelimiter;
        }
        return $this;
    }
    /**
     * Get Version value
     * @return int|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \Brainloop\Soap\StructType\ConvertRequest
     */
    public function setVersion($version = null)
    {
        // validation for constraint: int
        if (!is_null($version) && !is_numeric($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ConvertRequest
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
