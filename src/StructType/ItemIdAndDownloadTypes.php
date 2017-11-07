<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemIdAndDownloadTypes StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ItemIdAndDownloadTypes
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ItemIdAndDownloadTypes extends AbstractStructBase
{
    /**
     * The Downloadtypes
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfDownloadType
     */
    public $Downloadtypes;
    /**
     * The ID
     * @var int
     */
    public $ID;
    /**
     * Constructor method for ItemIdAndDownloadTypes
     * @uses ItemIdAndDownloadTypes::setDownloadtypes()
     * @uses ItemIdAndDownloadTypes::setID()
     * @param \Brainloop\Soap\ArrayType\ArrayOfDownloadType $downloadtypes
     * @param int $iD
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfDownloadType $downloadtypes = null, $iD = null)
    {
        $this
            ->setDownloadtypes($downloadtypes)
            ->setID($iD);
    }
    /**
     * Get Downloadtypes value
     * @return \Brainloop\Soap\ArrayType\ArrayOfDownloadType|null
     */
    public function getDownloadtypes()
    {
        return $this->Downloadtypes;
    }
    /**
     * Set Downloadtypes value
     * @param \Brainloop\Soap\ArrayType\ArrayOfDownloadType $downloadtypes
     * @return \Brainloop\Soap\StructType\ItemIdAndDownloadTypes
     */
    public function setDownloadtypes(\Brainloop\Soap\ArrayType\ArrayOfDownloadType $downloadtypes = null)
    {
        $this->Downloadtypes = $downloadtypes;
        return $this;
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
     * @return \Brainloop\Soap\StructType\ItemIdAndDownloadTypes
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ItemIdAndDownloadTypes
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
