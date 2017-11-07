<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSendOptions StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetSendOptions extends AbstractStructBase
{
    /**
     * The iItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iItemID;
    /**
     * The iVersion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iVersion;
    /**
     * Constructor method for GetSendOptions
     * @uses GetSendOptions::setIItemID()
     * @uses GetSendOptions::setIVersion()
     * @param int $iItemID
     * @param int $iVersion
     */
    public function __construct($iItemID = null, $iVersion = null)
    {
        $this
            ->setIItemID($iItemID)
            ->setIVersion($iVersion);
    }
    /**
     * Get iItemID value
     * @return int|null
     */
    public function getIItemID()
    {
        return $this->iItemID;
    }
    /**
     * Set iItemID value
     * @param int $iItemID
     * @return \Brainloop\Soap\StructType\GetSendOptions
     */
    public function setIItemID($iItemID = null)
    {
        // validation for constraint: int
        if (!is_null($iItemID) && !is_numeric($iItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iItemID)), __LINE__);
        }
        $this->iItemID = $iItemID;
        return $this;
    }
    /**
     * Get iVersion value
     * @return int|null
     */
    public function getIVersion()
    {
        return $this->iVersion;
    }
    /**
     * Set iVersion value
     * @param int $iVersion
     * @return \Brainloop\Soap\StructType\GetSendOptions
     */
    public function setIVersion($iVersion = null)
    {
        // validation for constraint: int
        if (!is_null($iVersion) && !is_numeric($iVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iVersion)), __LINE__);
        }
        $this->iVersion = $iVersion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetSendOptions
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
