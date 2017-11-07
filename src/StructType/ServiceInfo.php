<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ServiceInfo
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ServiceInfo extends AbstractStructBase
{
    /**
     * The ServerTime
     * @var string
     */
    public $ServerTime;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Version;
    /**
     * Constructor method for ServiceInfo
     * @uses ServiceInfo::setServerTime()
     * @uses ServiceInfo::setVersion()
     * @param string $serverTime
     * @param string $version
     */
    public function __construct($serverTime = null, $version = null)
    {
        $this
            ->setServerTime($serverTime)
            ->setVersion($version);
    }
    /**
     * Get ServerTime value
     * @return string|null
     */
    public function getServerTime()
    {
        return $this->ServerTime;
    }
    /**
     * Set ServerTime value
     * @param string $serverTime
     * @return \Brainloop\Soap\StructType\ServiceInfo
     */
    public function setServerTime($serverTime = null)
    {
        // validation for constraint: string
        if (!is_null($serverTime) && !is_string($serverTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serverTime)), __LINE__);
        }
        $this->ServerTime = $serverTime;
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \Brainloop\Soap\StructType\ServiceInfo
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
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
     * @return \Brainloop\Soap\StructType\ServiceInfo
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
