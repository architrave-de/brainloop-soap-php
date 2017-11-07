<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchVersionCriteria StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SearchVersionCriteria
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SearchVersionCriteria extends SearchCriteria
{
    /**
     * The CurrentVersionOnly
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CurrentVersionOnly;
    /**
     * The SpecificVersion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SpecificVersion;
    /**
     * Constructor method for SearchVersionCriteria
     * @uses SearchVersionCriteria::setCurrentVersionOnly()
     * @uses SearchVersionCriteria::setSpecificVersion()
     * @param bool $currentVersionOnly
     * @param int $specificVersion
     */
    public function __construct($currentVersionOnly = null, $specificVersion = null)
    {
        $this
            ->setCurrentVersionOnly($currentVersionOnly)
            ->setSpecificVersion($specificVersion);
    }
    /**
     * Get CurrentVersionOnly value
     * @return bool|null
     */
    public function getCurrentVersionOnly()
    {
        return $this->CurrentVersionOnly;
    }
    /**
     * Set CurrentVersionOnly value
     * @param bool $currentVersionOnly
     * @return \Brainloop\Soap\StructType\SearchVersionCriteria
     */
    public function setCurrentVersionOnly($currentVersionOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($currentVersionOnly) && !is_bool($currentVersionOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($currentVersionOnly)), __LINE__);
        }
        $this->CurrentVersionOnly = $currentVersionOnly;
        return $this;
    }
    /**
     * Get SpecificVersion value
     * @return int|null
     */
    public function getSpecificVersion()
    {
        return $this->SpecificVersion;
    }
    /**
     * Set SpecificVersion value
     * @param int $specificVersion
     * @return \Brainloop\Soap\StructType\SearchVersionCriteria
     */
    public function setSpecificVersion($specificVersion = null)
    {
        // validation for constraint: int
        if (!is_null($specificVersion) && !is_numeric($specificVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($specificVersion)), __LINE__);
        }
        $this->SpecificVersion = $specificVersion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SearchVersionCriteria
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
