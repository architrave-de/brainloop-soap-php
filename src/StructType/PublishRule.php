<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PublishRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PublishRule
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class PublishRule extends AbstractStructBase
{
    /**
     * The DestinationFolderID
     * @var int
     */
    public $DestinationFolderID;
    /**
     * The ID
     * @var int
     */
    public $ID;
    /**
     * The OwnerHandling
     * @var string
     */
    public $OwnerHandling;
    /**
     * The SourceFolderID
     * @var int
     */
    public $SourceFolderID;
    /**
     * The Term
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Term;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * Constructor method for PublishRule
     * @uses PublishRule::setDestinationFolderID()
     * @uses PublishRule::setID()
     * @uses PublishRule::setOwnerHandling()
     * @uses PublishRule::setSourceFolderID()
     * @uses PublishRule::setTerm()
     * @uses PublishRule::setType()
     * @param int $destinationFolderID
     * @param int $iD
     * @param string $ownerHandling
     * @param int $sourceFolderID
     * @param string $term
     * @param string $type
     */
    public function __construct($destinationFolderID = null, $iD = null, $ownerHandling = null, $sourceFolderID = null, $term = null, $type = null)
    {
        $this
            ->setDestinationFolderID($destinationFolderID)
            ->setID($iD)
            ->setOwnerHandling($ownerHandling)
            ->setSourceFolderID($sourceFolderID)
            ->setTerm($term)
            ->setType($type);
    }
    /**
     * Get DestinationFolderID value
     * @return int|null
     */
    public function getDestinationFolderID()
    {
        return $this->DestinationFolderID;
    }
    /**
     * Set DestinationFolderID value
     * @param int $destinationFolderID
     * @return \Brainloop\Soap\StructType\PublishRule
     */
    public function setDestinationFolderID($destinationFolderID = null)
    {
        // validation for constraint: int
        if (!is_null($destinationFolderID) && !is_numeric($destinationFolderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($destinationFolderID)), __LINE__);
        }
        $this->DestinationFolderID = $destinationFolderID;
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
     * @return \Brainloop\Soap\StructType\PublishRule
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
     * Get OwnerHandling value
     * @return string|null
     */
    public function getOwnerHandling()
    {
        return $this->OwnerHandling;
    }
    /**
     * Set OwnerHandling value
     * @uses \Brainloop\Soap\EnumType\OwnerHandling::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\OwnerHandling::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ownerHandling
     * @return \Brainloop\Soap\StructType\PublishRule
     */
    public function setOwnerHandling($ownerHandling = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\OwnerHandling::valueIsValid($ownerHandling)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ownerHandling, implode(', ', \Brainloop\Soap\EnumType\OwnerHandling::getValidValues())), __LINE__);
        }
        $this->OwnerHandling = $ownerHandling;
        return $this;
    }
    /**
     * Get SourceFolderID value
     * @return int|null
     */
    public function getSourceFolderID()
    {
        return $this->SourceFolderID;
    }
    /**
     * Set SourceFolderID value
     * @param int $sourceFolderID
     * @return \Brainloop\Soap\StructType\PublishRule
     */
    public function setSourceFolderID($sourceFolderID = null)
    {
        // validation for constraint: int
        if (!is_null($sourceFolderID) && !is_numeric($sourceFolderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sourceFolderID)), __LINE__);
        }
        $this->SourceFolderID = $sourceFolderID;
        return $this;
    }
    /**
     * Get Term value
     * @return string|null
     */
    public function getTerm()
    {
        return $this->Term;
    }
    /**
     * Set Term value
     * @param string $term
     * @return \Brainloop\Soap\StructType\PublishRule
     */
    public function setTerm($term = null)
    {
        // validation for constraint: string
        if (!is_null($term) && !is_string($term)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($term)), __LINE__);
        }
        $this->Term = $term;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Brainloop\Soap\EnumType\PublishType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\PublishType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Brainloop\Soap\StructType\PublishRule
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\PublishType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Brainloop\Soap\EnumType\PublishType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\PublishRule
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
