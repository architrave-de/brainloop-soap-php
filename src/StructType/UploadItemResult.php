<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadItemResult StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UploadItemResult
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class UploadItemResult extends UploadResult
{
    /**
     * The ContentModified
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContentModified;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ItemID;
    /**
     * The ItemVersion
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ItemVersion;
    /**
     * The ObjectModified
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ObjectModified;
    /**
     * Constructor method for UploadItemResult
     * @uses UploadItemResult::setContentModified()
     * @uses UploadItemResult::setItemID()
     * @uses UploadItemResult::setItemVersion()
     * @uses UploadItemResult::setObjectModified()
     * @param string $contentModified
     * @param int $itemID
     * @param int $itemVersion
     * @param string $objectModified
     */
    public function __construct($contentModified = null, $itemID = null, $itemVersion = null, $objectModified = null)
    {
        $this
            ->setContentModified($contentModified)
            ->setItemID($itemID)
            ->setItemVersion($itemVersion)
            ->setObjectModified($objectModified);
    }
    /**
     * Get ContentModified value
     * @return string|null
     */
    public function getContentModified()
    {
        return $this->ContentModified;
    }
    /**
     * Set ContentModified value
     * @param string $contentModified
     * @return \Brainloop\Soap\StructType\UploadItemResult
     */
    public function setContentModified($contentModified = null)
    {
        // validation for constraint: string
        if (!is_null($contentModified) && !is_string($contentModified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contentModified)), __LINE__);
        }
        $this->ContentModified = $contentModified;
        return $this;
    }
    /**
     * Get ItemID value
     * @return int|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param int $itemID
     * @return \Brainloop\Soap\StructType\UploadItemResult
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: int
        if (!is_null($itemID) && !is_numeric($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get ItemVersion value
     * @return int|null
     */
    public function getItemVersion()
    {
        return $this->ItemVersion;
    }
    /**
     * Set ItemVersion value
     * @param int $itemVersion
     * @return \Brainloop\Soap\StructType\UploadItemResult
     */
    public function setItemVersion($itemVersion = null)
    {
        // validation for constraint: int
        if (!is_null($itemVersion) && !is_numeric($itemVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemVersion)), __LINE__);
        }
        $this->ItemVersion = $itemVersion;
        return $this;
    }
    /**
     * Get ObjectModified value
     * @return string|null
     */
    public function getObjectModified()
    {
        return $this->ObjectModified;
    }
    /**
     * Set ObjectModified value
     * @param string $objectModified
     * @return \Brainloop\Soap\StructType\UploadItemResult
     */
    public function setObjectModified($objectModified = null)
    {
        // validation for constraint: string
        if (!is_null($objectModified) && !is_string($objectModified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($objectModified)), __LINE__);
        }
        $this->ObjectModified = $objectModified;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\UploadItemResult
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
