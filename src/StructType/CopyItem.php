<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CopyItem StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CopyItem extends AbstractStructBase
{
    /**
     * The iItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iItemID;
    /**
     * The iFolderID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iFolderID;
    /**
     * Constructor method for CopyItem
     * @uses CopyItem::setIItemID()
     * @uses CopyItem::setIFolderID()
     * @param int $iItemID
     * @param int $iFolderID
     */
    public function __construct($iItemID = null, $iFolderID = null)
    {
        $this
            ->setIItemID($iItemID)
            ->setIFolderID($iFolderID);
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
     * @return \Brainloop\Soap\StructType\CopyItem
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
     * Get iFolderID value
     * @return int|null
     */
    public function getIFolderID()
    {
        return $this->iFolderID;
    }
    /**
     * Set iFolderID value
     * @param int $iFolderID
     * @return \Brainloop\Soap\StructType\CopyItem
     */
    public function setIFolderID($iFolderID = null)
    {
        // validation for constraint: int
        if (!is_null($iFolderID) && !is_numeric($iFolderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iFolderID)), __LINE__);
        }
        $this->iFolderID = $iFolderID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CopyItem
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
