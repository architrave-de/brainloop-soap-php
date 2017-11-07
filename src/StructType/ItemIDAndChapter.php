<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemIDAndChapter StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ItemIDAndChapter
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ItemIDAndChapter extends IntAndstring
{
    /**
     * The Version
     * @var int
     */
    public $Version;
    /**
     * Constructor method for ItemIDAndChapter
     * @uses ItemIDAndChapter::setVersion()
     * @param int $version
     */
    public function __construct($version = null)
    {
        $this
            ->setVersion($version);
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
     * @return \Brainloop\Soap\StructType\ItemIDAndChapter
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
     * @return \Brainloop\Soap\StructType\ItemIDAndChapter
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
