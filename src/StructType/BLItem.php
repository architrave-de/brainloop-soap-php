<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BLItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BLItem
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class BLItem extends AbstractStructBase
{
    /**
     * The Created
     * @var string
     */
    public $Created;
    /**
     * The DataroomID
     * @var int
     */
    public $DataroomID;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The Fields
     * @var string
     */
    public $Fields;
    /**
     * The ID
     * @var int
     */
    public $ID;
    /**
     * The Index
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Index;
    /**
     * The IndexForChildOn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IndexForChildOn;
    /**
     * The IntIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $IntIndex;
    /**
     * The IsDeleted
     * @var bool
     */
    public $IsDeleted;
    /**
     * The Modified
     * @var string
     */
    public $Modified;
    /**
     * The ModifierID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $ModifierID;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The OwnerID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $OwnerID;
    /**
     * The Properties
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue
     */
    public $Properties;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * Constructor method for BLItem
     * @uses BLItem::setCreated()
     * @uses BLItem::setDataroomID()
     * @uses BLItem::setDescription()
     * @uses BLItem::setFields()
     * @uses BLItem::setID()
     * @uses BLItem::setIndex()
     * @uses BLItem::setIndexForChildOn()
     * @uses BLItem::setIntIndex()
     * @uses BLItem::setIsDeleted()
     * @uses BLItem::setModified()
     * @uses BLItem::setModifierID()
     * @uses BLItem::setName()
     * @uses BLItem::setOwnerID()
     * @uses BLItem::setProperties()
     * @uses BLItem::setType()
     * @param string $created
     * @param int $dataroomID
     * @param string $description
     * @param string $fields
     * @param int $iD
     * @param string $index
     * @param bool $indexForChildOn
     * @param int $intIndex
     * @param bool $isDeleted
     * @param string $modified
     * @param int $modifierID
     * @param string $name
     * @param int $ownerID
     * @param \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $properties
     * @param string $type
     */
    public function __construct($created = null, $dataroomID = null, $description = null, $fields = null, $iD = null, $index = null, $indexForChildOn = null, $intIndex = null, $isDeleted = null, $modified = null, $modifierID = null, $name = null, $ownerID = null, \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $properties = null, $type = null)
    {
        $this
            ->setCreated($created)
            ->setDataroomID($dataroomID)
            ->setDescription($description)
            ->setFields($fields)
            ->setID($iD)
            ->setIndex($index)
            ->setIndexForChildOn($indexForChildOn)
            ->setIntIndex($intIndex)
            ->setIsDeleted($isDeleted)
            ->setModified($modified)
            ->setModifierID($modifierID)
            ->setName($name)
            ->setOwnerID($ownerID)
            ->setProperties($properties)
            ->setType($type);
    }
    /**
     * Get Created value
     * @return string|null
     */
    public function getCreated()
    {
        return $this->Created;
    }
    /**
     * Set Created value
     * @param string $created
     * @return \Brainloop\Soap\StructType\BLItem
     */
    public function setCreated($created = null)
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($created)), __LINE__);
        }
        $this->Created = $created;
        return $this;
    }
    /**
     * Get DataroomID value
     * @return int|null
     */
    public function getDataroomID()
    {
        return $this->DataroomID;
    }
    /**
     * Set DataroomID value
     * @param int $dataroomID
     * @return \Brainloop\Soap\StructType\BLItem
     */
    public function setDataroomID($dataroomID = null)
    {
        // validation for constraint: int
        if (!is_null($dataroomID) && !is_numeric($dataroomID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dataroomID)), __LINE__);
        }
        $this->DataroomID = $dataroomID;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Brainloop\Soap\StructType\BLItem
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Fields value
     * @return string|null
     */
    public function getFields()
    {
        return $this->Fields;
    }
    /**
     * Set Fields value
     * @uses \Brainloop\Soap\EnumType\ItemFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fields
     * @return \Brainloop\Soap\StructType\BLItem
     */
    public function setFields($fields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ItemFields::valueIsValid($fields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fields, implode(', ', \Brainloop\Soap\EnumType\ItemFields::getValidValues())), __LINE__);
        }
        $this->Fields = $fields;
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
     * @return \Brainloop\Soap\StructType\BLItem
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
     * Get Index value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIndex()
    {
        return isset($this->Index) ? $this->Index : null;
    }
    /**
     * Set Index value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $index
     * @return \Brainloop\Soap\StructType\BLItem
     */
    public function setIndex($index = null)
    {
        // validation for constraint: string
        if (!is_null($index) && !is_string($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($index)), __LINE__);
        }
        if (is_null($index) || (is_array($index) && empty($index))) {
            unset($this->Index);
        } else {
            $this->Index = $index;
        }
        return $this;
    }
    /**
     * Get IndexForChildOn value
     * @return bool|null
     */
    public function getIndexForChildOn()
    {
        return $this->IndexForChildOn;
    }
    /**
     * Set IndexForChildOn value
     * @param bool $indexForChildOn
     * @return \Brainloop\Soap\StructType\BLItem
     */
    public function setIndexForChildOn($indexForChildOn = null)
    {
        // validation for constraint: boolean
        if (!is_null($indexForChildOn) && !is_bool($indexForChildOn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indexForChildOn)), __LINE__);
        }
        $this->IndexForChildOn = $indexForChildOn;
        return $this;
    }
    /**
     * Get IntIndex value
     * @return int|null
     */
    public function getIntIndex()
    {
        return $this->IntIndex;
    }
    /**
     * Set IntIndex value
     * @param int $intIndex
     * @return \Brainloop\Soap\StructType\BLItem
     */
    public function setIntIndex($intIndex = null)
    {
        // validation for constraint: int
        if (!is_null($intIndex) && !is_numeric($intIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($intIndex)), __LINE__);
        }
        $this->IntIndex = $intIndex;
        return $this;
    }
    /**
     * Get IsDeleted value
     * @return bool|null
     */
    public function getIsDeleted()
    {
        return $this->IsDeleted;
    }
    /**
     * Set IsDeleted value
     * @param bool $isDeleted
     * @return \Brainloop\Soap\StructType\BLItem
     */
    public function setIsDeleted($isDeleted = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDeleted) && !is_bool($isDeleted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDeleted)), __LINE__);
        }
        $this->IsDeleted = $isDeleted;
        return $this;
    }
    /**
     * Get Modified value
     * @return string|null
     */
    public function getModified()
    {
        return $this->Modified;
    }
    /**
     * Set Modified value
     * @param string $modified
     * @return \Brainloop\Soap\StructType\BLItem
     */
    public function setModified($modified = null)
    {
        // validation for constraint: string
        if (!is_null($modified) && !is_string($modified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modified)), __LINE__);
        }
        $this->Modified = $modified;
        return $this;
    }
    /**
     * Get ModifierID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getModifierID()
    {
        return isset($this->ModifierID) ? $this->ModifierID : null;
    }
    /**
     * Set ModifierID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $modifierID
     * @return \Brainloop\Soap\StructType\BLItem
     */
    public function setModifierID($modifierID = null)
    {
        // validation for constraint: int
        if (!is_null($modifierID) && !is_numeric($modifierID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($modifierID)), __LINE__);
        }
        if (is_null($modifierID) || (is_array($modifierID) && empty($modifierID))) {
            unset($this->ModifierID);
        } else {
            $this->ModifierID = $modifierID;
        }
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Brainloop\Soap\StructType\BLItem
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get OwnerID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOwnerID()
    {
        return isset($this->OwnerID) ? $this->OwnerID : null;
    }
    /**
     * Set OwnerID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $ownerID
     * @return \Brainloop\Soap\StructType\BLItem
     */
    public function setOwnerID($ownerID = null)
    {
        // validation for constraint: int
        if (!is_null($ownerID) && !is_numeric($ownerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ownerID)), __LINE__);
        }
        if (is_null($ownerID) || (is_array($ownerID) && empty($ownerID))) {
            unset($this->OwnerID);
        } else {
            $this->OwnerID = $ownerID;
        }
        return $this;
    }
    /**
     * Get Properties value
     * @return \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue|null
     */
    public function getProperties()
    {
        return $this->Properties;
    }
    /**
     * Set Properties value
     * @param \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $properties
     * @return \Brainloop\Soap\StructType\BLItem
     */
    public function setProperties(\Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $properties = null)
    {
        $this->Properties = $properties;
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
     * @uses \Brainloop\Soap\EnumType\ItemType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Brainloop\Soap\StructType\BLItem
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ItemType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Brainloop\Soap\EnumType\ItemType::getValidValues())), __LINE__);
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
     * @return \Brainloop\Soap\StructType\BLItem
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
