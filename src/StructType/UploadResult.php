<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadResult StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UploadResult
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class UploadResult extends AbstractStructBase
{
    /**
     * The Length
     * @var int
     */
    public $Length;
    /**
     * Constructor method for UploadResult
     * @uses UploadResult::setLength()
     * @param int $length
     */
    public function __construct($length = null)
    {
        $this
            ->setLength($length);
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
     * @return \Brainloop\Soap\StructType\UploadResult
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\UploadResult
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
