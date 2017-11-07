<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateLinkToItem StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateLinkToItem extends AbstractStructBase
{
    /**
     * The iParentFolderID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iParentFolderID;
    /**
     * The oName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $oName;
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
     * Constructor method for CreateLinkToItem
     * @uses CreateLinkToItem::setIParentFolderID()
     * @uses CreateLinkToItem::setOName()
     * @uses CreateLinkToItem::setIItemID()
     * @uses CreateLinkToItem::setIVersion()
     * @param int $iParentFolderID
     * @param string $oName
     * @param int $iItemID
     * @param int $iVersion
     */
    public function __construct($iParentFolderID = null, $oName = null, $iItemID = null, $iVersion = null)
    {
        $this
            ->setIParentFolderID($iParentFolderID)
            ->setOName($oName)
            ->setIItemID($iItemID)
            ->setIVersion($iVersion);
    }
    /**
     * Get iParentFolderID value
     * @return int|null
     */
    public function getIParentFolderID()
    {
        return $this->iParentFolderID;
    }
    /**
     * Set iParentFolderID value
     * @param int $iParentFolderID
     * @return \Brainloop\Soap\StructType\CreateLinkToItem
     */
    public function setIParentFolderID($iParentFolderID = null)
    {
        // validation for constraint: int
        if (!is_null($iParentFolderID) && !is_numeric($iParentFolderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iParentFolderID)), __LINE__);
        }
        $this->iParentFolderID = $iParentFolderID;
        return $this;
    }
    /**
     * Get oName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOName()
    {
        return isset($this->oName) ? $this->oName : null;
    }
    /**
     * Set oName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $oName
     * @return \Brainloop\Soap\StructType\CreateLinkToItem
     */
    public function setOName($oName = null)
    {
        // validation for constraint: string
        if (!is_null($oName) && !is_string($oName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($oName)), __LINE__);
        }
        if (is_null($oName) || (is_array($oName) && empty($oName))) {
            unset($this->oName);
        } else {
            $this->oName = $oName;
        }
        return $this;
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
     * @return \Brainloop\Soap\StructType\CreateLinkToItem
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
     * @return \Brainloop\Soap\StructType\CreateLinkToItem
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
     * @return \Brainloop\Soap\StructType\CreateLinkToItem
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
