<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadParameters StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UploadParameters
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class UploadParameters extends AbstractStructBase
{
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FileName;
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
     * Constructor method for UploadParameters
     * @uses UploadParameters::setFileName()
     * @uses UploadParameters::setLength()
     * @uses UploadParameters::setOffset()
     * @uses UploadParameters::setQuota()
     * @param string $fileName
     * @param int $length
     * @param int $offset
     * @param int $quota
     */
    public function __construct($fileName = null, $length = null, $offset = null, $quota = null)
    {
        $this
            ->setFileName($fileName)
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
     * @return \Brainloop\Soap\StructType\UploadParameters
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
     * @return \Brainloop\Soap\StructType\UploadParameters
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
     * @return \Brainloop\Soap\StructType\UploadParameters
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
     * @return \Brainloop\Soap\StructType\UploadParameters
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
     * @return \Brainloop\Soap\StructType\UploadParameters
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
