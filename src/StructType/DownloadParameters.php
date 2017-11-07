<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownloadParameters StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DownloadParameters
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class DownloadParameters extends AbstractStructBase
{
    /**
     * The IncludeFingerprint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeFingerprint;
    /**
     * The Offset
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $Offset;
    /**
     * The Quota
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $Quota;
    /**
     * Constructor method for DownloadParameters
     * @uses DownloadParameters::setIncludeFingerprint()
     * @uses DownloadParameters::setOffset()
     * @uses DownloadParameters::setQuota()
     * @param bool $includeFingerprint
     * @param int $offset
     * @param int $quota
     */
    public function __construct($includeFingerprint = null, $offset = null, $quota = null)
    {
        $this
            ->setIncludeFingerprint($includeFingerprint)
            ->setOffset($offset)
            ->setQuota($quota);
    }
    /**
     * Get IncludeFingerprint value
     * @return bool|null
     */
    public function getIncludeFingerprint()
    {
        return $this->IncludeFingerprint;
    }
    /**
     * Set IncludeFingerprint value
     * @param bool $includeFingerprint
     * @return \Brainloop\Soap\StructType\DownloadParameters
     */
    public function setIncludeFingerprint($includeFingerprint = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeFingerprint) && !is_bool($includeFingerprint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeFingerprint)), __LINE__);
        }
        $this->IncludeFingerprint = $includeFingerprint;
        return $this;
    }
    /**
     * Get Offset value
     * @return int|null
     */
    public function getOffset()
    {
        return $this->Offset;
    }
    /**
     * Set Offset value
     * @param int $offset
     * @return \Brainloop\Soap\StructType\DownloadParameters
     */
    public function setOffset($offset = null)
    {
        // validation for constraint: int
        if (!is_null($offset) && !is_numeric($offset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($offset)), __LINE__);
        }
        $this->Offset = $offset;
        return $this;
    }
    /**
     * Get Quota value
     * @return int|null
     */
    public function getQuota()
    {
        return $this->Quota;
    }
    /**
     * Set Quota value
     * @param int $quota
     * @return \Brainloop\Soap\StructType\DownloadParameters
     */
    public function setQuota($quota = null)
    {
        // validation for constraint: int
        if (!is_null($quota) && !is_numeric($quota)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quota)), __LINE__);
        }
        $this->Quota = $quota;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\DownloadParameters
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
