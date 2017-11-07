<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownloadResult StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DownloadResult
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class DownloadResult extends AbstractStructBase
{
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FileName;
    /**
     * The Fingerprint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Fingerprint;
    /**
     * The Length
     * @var int
     */
    public $Length;
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
     * Constructor method for DownloadResult
     * @uses DownloadResult::setFileName()
     * @uses DownloadResult::setFingerprint()
     * @uses DownloadResult::setLength()
     * @uses DownloadResult::setOffset()
     * @uses DownloadResult::setQuota()
     * @param string $fileName
     * @param string $fingerprint
     * @param int $length
     * @param int $offset
     * @param int $quota
     */
    public function __construct($fileName = null, $fingerprint = null, $length = null, $offset = null, $quota = null)
    {
        $this
            ->setFileName($fileName)
            ->setFingerprint($fingerprint)
            ->setLength($length)
            ->setOffset($offset)
            ->setQuota($quota);
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \Brainloop\Soap\StructType\DownloadResult
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
        return $this;
    }
    /**
     * Get Fingerprint value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFingerprint()
    {
        return isset($this->Fingerprint) ? $this->Fingerprint : null;
    }
    /**
     * Set Fingerprint value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fingerprint
     * @return \Brainloop\Soap\StructType\DownloadResult
     */
    public function setFingerprint($fingerprint = null)
    {
        // validation for constraint: string
        if (!is_null($fingerprint) && !is_string($fingerprint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fingerprint)), __LINE__);
        }
        if (is_null($fingerprint) || (is_array($fingerprint) && empty($fingerprint))) {
            unset($this->Fingerprint);
        } else {
            $this->Fingerprint = $fingerprint;
        }
        return $this;
    }
    /**
     * Get Length value
     * @return int|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param int $length
     * @return \Brainloop\Soap\StructType\DownloadResult
     */
    public function setLength($length = null)
    {
        // validation for constraint: int
        if (!is_null($length) && !is_numeric($length)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($length)), __LINE__);
        }
        $this->Length = $length;
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
     * @return \Brainloop\Soap\StructType\DownloadResult
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
     * @return \Brainloop\Soap\StructType\DownloadResult
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
     * @return \Brainloop\Soap\StructType\DownloadResult
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
