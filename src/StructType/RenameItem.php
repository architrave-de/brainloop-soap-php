<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RenameItem StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class RenameItem extends AbstractStructBase
{
    /**
     * The iItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iItemID;
    /**
     * The sNewName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sNewName;
    /**
     * Constructor method for RenameItem
     * @uses RenameItem::setIItemID()
     * @uses RenameItem::setSNewName()
     * @param int $iItemID
     * @param string $sNewName
     */
    public function __construct($iItemID = null, $sNewName = null)
    {
        $this
            ->setIItemID($iItemID)
            ->setSNewName($sNewName);
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
     * @return \Brainloop\Soap\StructType\RenameItem
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
     * Get sNewName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSNewName()
    {
        return isset($this->sNewName) ? $this->sNewName : null;
    }
    /**
     * Set sNewName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sNewName
     * @return \Brainloop\Soap\StructType\RenameItem
     */
    public function setSNewName($sNewName = null)
    {
        // validation for constraint: string
        if (!is_null($sNewName) && !is_string($sNewName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sNewName)), __LINE__);
        }
        if (is_null($sNewName) || (is_array($sNewName) && empty($sNewName))) {
            unset($this->sNewName);
        } else {
            $this->sNewName = $sNewName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\RenameItem
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
