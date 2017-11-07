<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdAndVersion StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:IdAndVersion
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class IdAndVersion extends AbstractStructBase
{
    /**
     * The ID
     * @var int
     */
    public $ID;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $Version;
    /**
     * Constructor method for IdAndVersion
     * @uses IdAndVersion::setID()
     * @uses IdAndVersion::setVersion()
     * @param int $iD
     * @param int $version
     */
    public function __construct($iD = null, $version = null)
    {
        $this
            ->setID($iD)
            ->setVersion($version);
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \Brainloop\Soap\StructType\IdAndVersion
     */
    public function setID($iD = null)
    {
        // validation for constraint: int
        if (!is_null($iD) && !is_numeric($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
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
     * @return \Brainloop\Soap\StructType\IdAndVersion
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
     * @return \Brainloop\Soap\StructType\IdAndVersion
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
