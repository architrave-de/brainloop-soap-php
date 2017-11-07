<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Link StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Link
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class Link extends TreeItem
{
    /**
     * The IsDataroomLink
     * @var bool
     */
    public $IsDataroomLink;
    /**
     * The LinkedItemID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $LinkedItemID;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $URL;
    /**
     * Constructor method for Link
     * @uses Link::setIsDataroomLink()
     * @uses Link::setLinkedItemID()
     * @uses Link::setURL()
     * @param bool $isDataroomLink
     * @param int $linkedItemID
     * @param string $uRL
     */
    public function __construct($isDataroomLink = null, $linkedItemID = null, $uRL = null)
    {
        $this
            ->setIsDataroomLink($isDataroomLink)
            ->setLinkedItemID($linkedItemID)
            ->setURL($uRL);
    }
    /**
     * Get IsDataroomLink value
     * @return bool|null
     */
    public function getIsDataroomLink()
    {
        return $this->IsDataroomLink;
    }
    /**
     * Set IsDataroomLink value
     * @param bool $isDataroomLink
     * @return \Brainloop\Soap\StructType\Link
     */
    public function setIsDataroomLink($isDataroomLink = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDataroomLink) && !is_bool($isDataroomLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDataroomLink)), __LINE__);
        }
        $this->IsDataroomLink = $isDataroomLink;
        return $this;
    }
    /**
     * Get LinkedItemID value
     * @return int|null
     */
    public function getLinkedItemID()
    {
        return $this->LinkedItemID;
    }
    /**
     * Set LinkedItemID value
     * @param int $linkedItemID
     * @return \Brainloop\Soap\StructType\Link
     */
    public function setLinkedItemID($linkedItemID = null)
    {
        // validation for constraint: int
        if (!is_null($linkedItemID) && !is_numeric($linkedItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($linkedItemID)), __LINE__);
        }
        $this->LinkedItemID = $linkedItemID;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \Brainloop\Soap\StructType\Link
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\Link
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
