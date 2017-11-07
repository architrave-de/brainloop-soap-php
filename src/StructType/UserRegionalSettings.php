<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserRegionalSettings StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UserRegionalSettings
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class UserRegionalSettings extends AbstractStructBase
{
    /**
     * The DateFormat
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $DateFormat;
    /**
     * The LanguageID
     * @var int
     */
    public $LanguageID;
    /**
     * The TimeFormat
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $TimeFormat;
    /**
     * Constructor method for UserRegionalSettings
     * @uses UserRegionalSettings::setDateFormat()
     * @uses UserRegionalSettings::setLanguageID()
     * @uses UserRegionalSettings::setTimeFormat()
     * @param string $dateFormat
     * @param int $languageID
     * @param string $timeFormat
     */
    public function __construct($dateFormat = null, $languageID = null, $timeFormat = null)
    {
        $this
            ->setDateFormat($dateFormat)
            ->setLanguageID($languageID)
            ->setTimeFormat($timeFormat);
    }
    /**
     * Get DateFormat value
     * @return string|null
     */
    public function getDateFormat()
    {
        return $this->DateFormat;
    }
    /**
     * Set DateFormat value
     * @param string $dateFormat
     * @return \Brainloop\Soap\StructType\UserRegionalSettings
     */
    public function setDateFormat($dateFormat = null)
    {
        // validation for constraint: string
        if (!is_null($dateFormat) && !is_string($dateFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateFormat)), __LINE__);
        }
        $this->DateFormat = $dateFormat;
        return $this;
    }
    /**
     * Get LanguageID value
     * @return int|null
     */
    public function getLanguageID()
    {
        return $this->LanguageID;
    }
    /**
     * Set LanguageID value
     * @param int $languageID
     * @return \Brainloop\Soap\StructType\UserRegionalSettings
     */
    public function setLanguageID($languageID = null)
    {
        // validation for constraint: int
        if (!is_null($languageID) && !is_numeric($languageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($languageID)), __LINE__);
        }
        $this->LanguageID = $languageID;
        return $this;
    }
    /**
     * Get TimeFormat value
     * @return string|null
     */
    public function getTimeFormat()
    {
        return $this->TimeFormat;
    }
    /**
     * Set TimeFormat value
     * @param string $timeFormat
     * @return \Brainloop\Soap\StructType\UserRegionalSettings
     */
    public function setTimeFormat($timeFormat = null)
    {
        // validation for constraint: string
        if (!is_null($timeFormat) && !is_string($timeFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeFormat)), __LINE__);
        }
        $this->TimeFormat = $timeFormat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\UserRegionalSettings
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
