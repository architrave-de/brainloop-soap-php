<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TreeItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TreeItem
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class TreeItem extends BLItem
{
    /**
     * The Depth
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $Depth;
    /**
     * The ParentID
     * @var int
     */
    public $ParentID;
    /**
     * The Path
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Path;
    /**
     * Constructor method for TreeItem
     * @uses TreeItem::setDepth()
     * @uses TreeItem::setParentID()
     * @uses TreeItem::setPath()
     * @param int $depth
     * @param int $parentID
     * @param string $path
     */
    public function __construct($depth = null, $parentID = null, $path = null)
    {
        $this
            ->setDepth($depth)
            ->setParentID($parentID)
            ->setPath($path);
    }
    /**
     * Get Depth value
     * @return int|null
     */
    public function getDepth()
    {
        return $this->Depth;
    }
    /**
     * Set Depth value
     * @param int $depth
     * @return \Brainloop\Soap\StructType\TreeItem
     */
    public function setDepth($depth = null)
    {
        // validation for constraint: int
        if (!is_null($depth) && !is_numeric($depth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($depth)), __LINE__);
        }
        $this->Depth = $depth;
        return $this;
    }
    /**
     * Get ParentID value
     * @return int|null
     */
    public function getParentID()
    {
        return $this->ParentID;
    }
    /**
     * Set ParentID value
     * @param int $parentID
     * @return \Brainloop\Soap\StructType\TreeItem
     */
    public function setParentID($parentID = null)
    {
        // validation for constraint: int
        if (!is_null($parentID) && !is_numeric($parentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($parentID)), __LINE__);
        }
        $this->ParentID = $parentID;
        return $this;
    }
    /**
     * Get Path value
     * @return string|null
     */
    public function getPath()
    {
        return $this->Path;
    }
    /**
     * Set Path value
     * @param string $path
     * @return \Brainloop\Soap\StructType\TreeItem
     */
    public function setPath($path = null)
    {
        // validation for constraint: string
        if (!is_null($path) && !is_string($path)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($path)), __LINE__);
        }
        $this->Path = $path;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\TreeItem
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
