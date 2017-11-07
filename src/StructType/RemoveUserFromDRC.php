<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveUserFromDRC StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class RemoveUserFromDRC extends AbstractStructBase
{
    /**
     * The iDRCID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDRCID;
    /**
     * The iUserID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iUserID;
    /**
     * The iReplacementUserID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iReplacementUserID;
    /**
     * Constructor method for RemoveUserFromDRC
     * @uses RemoveUserFromDRC::setIDRCID()
     * @uses RemoveUserFromDRC::setIUserID()
     * @uses RemoveUserFromDRC::setIReplacementUserID()
     * @param int $iDRCID
     * @param int $iUserID
     * @param int $iReplacementUserID
     */
    public function __construct($iDRCID = null, $iUserID = null, $iReplacementUserID = null)
    {
        $this
            ->setIDRCID($iDRCID)
            ->setIUserID($iUserID)
            ->setIReplacementUserID($iReplacementUserID);
    }
    /**
     * Get iDRCID value
     * @return int|null
     */
    public function getIDRCID()
    {
        return $this->iDRCID;
    }
    /**
     * Set iDRCID value
     * @param int $iDRCID
     * @return \Brainloop\Soap\StructType\RemoveUserFromDRC
     */
    public function setIDRCID($iDRCID = null)
    {
        // validation for constraint: int
        if (!is_null($iDRCID) && !is_numeric($iDRCID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDRCID)), __LINE__);
        }
        $this->iDRCID = $iDRCID;
        return $this;
    }
    /**
     * Get iUserID value
     * @return int|null
     */
    public function getIUserID()
    {
        return $this->iUserID;
    }
    /**
     * Set iUserID value
     * @param int $iUserID
     * @return \Brainloop\Soap\StructType\RemoveUserFromDRC
     */
    public function setIUserID($iUserID = null)
    {
        // validation for constraint: int
        if (!is_null($iUserID) && !is_numeric($iUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iUserID)), __LINE__);
        }
        $this->iUserID = $iUserID;
        return $this;
    }
    /**
     * Get iReplacementUserID value
     * @return int|null
     */
    public function getIReplacementUserID()
    {
        return $this->iReplacementUserID;
    }
    /**
     * Set iReplacementUserID value
     * @param int $iReplacementUserID
     * @return \Brainloop\Soap\StructType\RemoveUserFromDRC
     */
    public function setIReplacementUserID($iReplacementUserID = null)
    {
        // validation for constraint: int
        if (!is_null($iReplacementUserID) && !is_numeric($iReplacementUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iReplacementUserID)), __LINE__);
        }
        $this->iReplacementUserID = $iReplacementUserID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\RemoveUserFromDRC
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
