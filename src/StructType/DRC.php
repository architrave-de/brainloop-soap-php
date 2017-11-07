<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DRC StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DRC
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class DRC extends AbstractStructBase
{
    /**
     * The AdditionalDiskSpaceMB
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $AdditionalDiskSpaceMB;
    /**
     * The BrainmarkStyle
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BrainmarkStyle;
    /**
     * The CreatorID
     * @var int
     */
    public $CreatorID;
    /**
     * The Decription
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Decription;
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
     * The IsTemplate
     * @var bool
     */
    public $IsTemplate;
    /**
     * The LoginPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LoginPolicy;
    /**
     * The MaxDataroomCount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $MaxDataroomCount;
    /**
     * The MaxTemplateCount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $MaxTemplateCount;
    /**
     * The MaxUserCount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $MaxUserCount;
    /**
     * The MinUserCount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $MinUserCount;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The OrderedUserCount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $OrderedUserCount;
    /**
     * The Properties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue
     */
    public $Properties;
    /**
     * The SendItemLinkType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SendItemLinkType;
    /**
     * The TemplateID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $TemplateID;
    /**
     * The UserDiskSpaceMB
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $UserDiskSpaceMB;
    /**
     * Constructor method for DRC
     * @uses DRC::setAdditionalDiskSpaceMB()
     * @uses DRC::setBrainmarkStyle()
     * @uses DRC::setCreatorID()
     * @uses DRC::setDecription()
     * @uses DRC::setFields()
     * @uses DRC::setID()
     * @uses DRC::setIsTemplate()
     * @uses DRC::setLoginPolicy()
     * @uses DRC::setMaxDataroomCount()
     * @uses DRC::setMaxTemplateCount()
     * @uses DRC::setMaxUserCount()
     * @uses DRC::setMinUserCount()
     * @uses DRC::setName()
     * @uses DRC::setOrderedUserCount()
     * @uses DRC::setProperties()
     * @uses DRC::setSendItemLinkType()
     * @uses DRC::setTemplateID()
     * @uses DRC::setUserDiskSpaceMB()
     * @param int $additionalDiskSpaceMB
     * @param string $brainmarkStyle
     * @param int $creatorID
     * @param string $decription
     * @param string $fields
     * @param int $iD
     * @param bool $isTemplate
     * @param string $loginPolicy
     * @param int $maxDataroomCount
     * @param int $maxTemplateCount
     * @param int $maxUserCount
     * @param int $minUserCount
     * @param string $name
     * @param int $orderedUserCount
     * @param \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $properties
     * @param string $sendItemLinkType
     * @param int $templateID
     * @param int $userDiskSpaceMB
     */
    public function __construct($additionalDiskSpaceMB = null, $brainmarkStyle = null, $creatorID = null, $decription = null, $fields = null, $iD = null, $isTemplate = null, $loginPolicy = null, $maxDataroomCount = null, $maxTemplateCount = null, $maxUserCount = null, $minUserCount = null, $name = null, $orderedUserCount = null, \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $properties = null, $sendItemLinkType = null, $templateID = null, $userDiskSpaceMB = null)
    {
        $this
            ->setAdditionalDiskSpaceMB($additionalDiskSpaceMB)
            ->setBrainmarkStyle($brainmarkStyle)
            ->setCreatorID($creatorID)
            ->setDecription($decription)
            ->setFields($fields)
            ->setID($iD)
            ->setIsTemplate($isTemplate)
            ->setLoginPolicy($loginPolicy)
            ->setMaxDataroomCount($maxDataroomCount)
            ->setMaxTemplateCount($maxTemplateCount)
            ->setMaxUserCount($maxUserCount)
            ->setMinUserCount($minUserCount)
            ->setName($name)
            ->setOrderedUserCount($orderedUserCount)
            ->setProperties($properties)
            ->setSendItemLinkType($sendItemLinkType)
            ->setTemplateID($templateID)
            ->setUserDiskSpaceMB($userDiskSpaceMB);
    }
    /**
     * Get AdditionalDiskSpaceMB value
     * @return int|null
     */
    public function getAdditionalDiskSpaceMB()
    {
        return $this->AdditionalDiskSpaceMB;
    }
    /**
     * Set AdditionalDiskSpaceMB value
     * @param int $additionalDiskSpaceMB
     * @return \Brainloop\Soap\StructType\DRC
     */
    public function setAdditionalDiskSpaceMB($additionalDiskSpaceMB = null)
    {
        // validation for constraint: int
        if (!is_null($additionalDiskSpaceMB) && !is_numeric($additionalDiskSpaceMB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($additionalDiskSpaceMB)), __LINE__);
        }
        $this->AdditionalDiskSpaceMB = $additionalDiskSpaceMB;
        return $this;
    }
    /**
     * Get BrainmarkStyle value
     * @return string|null
     */
    public function getBrainmarkStyle()
    {
        return $this->BrainmarkStyle;
    }
    /**
     * Set BrainmarkStyle value
     * @uses \Brainloop\Soap\EnumType\BrainmarkStyle::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\BrainmarkStyle::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $brainmarkStyle
     * @return \Brainloop\Soap\StructType\DRC
     */
    public function setBrainmarkStyle($brainmarkStyle = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\BrainmarkStyle::valueIsValid($brainmarkStyle)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $brainmarkStyle, implode(', ', \Brainloop\Soap\EnumType\BrainmarkStyle::getValidValues())), __LINE__);
        }
        $this->BrainmarkStyle = $brainmarkStyle;
        return $this;
    }
    /**
     * Get CreatorID value
     * @return int|null
     */
    public function getCreatorID()
    {
        return $this->CreatorID;
    }
    /**
     * Set CreatorID value
     * @param int $creatorID
     * @return \Brainloop\Soap\StructType\DRC
     */
    public function setCreatorID($creatorID = null)
    {
        // validation for constraint: int
        if (!is_null($creatorID) && !is_numeric($creatorID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($creatorID)), __LINE__);
        }
        $this->CreatorID = $creatorID;
        return $this;
    }
    /**
     * Get Decription value
     * @return string|null
     */
    public function getDecription()
    {
        return $this->Decription;
    }
    /**
     * Set Decription value
     * @param string $decription
     * @return \Brainloop\Soap\StructType\DRC
     */
    public function setDecription($decription = null)
    {
        // validation for constraint: string
        if (!is_null($decription) && !is_string($decription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($decription)), __LINE__);
        }
        $this->Decription = $decription;
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
     * @uses \Brainloop\Soap\EnumType\DRCFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\DRCFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fields
     * @return \Brainloop\Soap\StructType\DRC
     */
    public function setFields($fields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\DRCFields::valueIsValid($fields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fields, implode(', ', \Brainloop\Soap\EnumType\DRCFields::getValidValues())), __LINE__);
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
     * @return \Brainloop\Soap\StructType\DRC
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
     * Get IsTemplate value
     * @return bool|null
     */
    public function getIsTemplate()
    {
        return $this->IsTemplate;
    }
    /**
     * Set IsTemplate value
     * @param bool $isTemplate
     * @return \Brainloop\Soap\StructType\DRC
     */
    public function setIsTemplate($isTemplate = null)
    {
        // validation for constraint: boolean
        if (!is_null($isTemplate) && !is_bool($isTemplate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isTemplate)), __LINE__);
        }
        $this->IsTemplate = $isTemplate;
        return $this;
    }
    /**
     * Get LoginPolicy value
     * @return string|null
     */
    public function getLoginPolicy()
    {
        return $this->LoginPolicy;
    }
    /**
     * Set LoginPolicy value
     * @uses \Brainloop\Soap\EnumType\LoginMethods::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\LoginMethods::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $loginPolicy
     * @return \Brainloop\Soap\StructType\DRC
     */
    public function setLoginPolicy($loginPolicy = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\LoginMethods::valueIsValid($loginPolicy)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $loginPolicy, implode(', ', \Brainloop\Soap\EnumType\LoginMethods::getValidValues())), __LINE__);
        }
        $this->LoginPolicy = $loginPolicy;
        return $this;
    }
    /**
     * Get MaxDataroomCount value
     * @return int|null
     */
    public function getMaxDataroomCount()
    {
        return $this->MaxDataroomCount;
    }
    /**
     * Set MaxDataroomCount value
     * @param int $maxDataroomCount
     * @return \Brainloop\Soap\StructType\DRC
     */
    public function setMaxDataroomCount($maxDataroomCount = null)
    {
        // validation for constraint: int
        if (!is_null($maxDataroomCount) && !is_numeric($maxDataroomCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxDataroomCount)), __LINE__);
        }
        $this->MaxDataroomCount = $maxDataroomCount;
        return $this;
    }
    /**
     * Get MaxTemplateCount value
     * @return int|null
     */
    public function getMaxTemplateCount()
    {
        return $this->MaxTemplateCount;
    }
    /**
     * Set MaxTemplateCount value
     * @param int $maxTemplateCount
     * @return \Brainloop\Soap\StructType\DRC
     */
    public function setMaxTemplateCount($maxTemplateCount = null)
    {
        // validation for constraint: int
        if (!is_null($maxTemplateCount) && !is_numeric($maxTemplateCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxTemplateCount)), __LINE__);
        }
        $this->MaxTemplateCount = $maxTemplateCount;
        return $this;
    }
    /**
     * Get MaxUserCount value
     * @return int|null
     */
    public function getMaxUserCount()
    {
        return $this->MaxUserCount;
    }
    /**
     * Set MaxUserCount value
     * @param int $maxUserCount
     * @return \Brainloop\Soap\StructType\DRC
     */
    public function setMaxUserCount($maxUserCount = null)
    {
        // validation for constraint: int
        if (!is_null($maxUserCount) && !is_numeric($maxUserCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxUserCount)), __LINE__);
        }
        $this->MaxUserCount = $maxUserCount;
        return $this;
    }
    /**
     * Get MinUserCount value
     * @return int|null
     */
    public function getMinUserCount()
    {
        return $this->MinUserCount;
    }
    /**
     * Set MinUserCount value
     * @param int $minUserCount
     * @return \Brainloop\Soap\StructType\DRC
     */
    public function setMinUserCount($minUserCount = null)
    {
        // validation for constraint: int
        if (!is_null($minUserCount) && !is_numeric($minUserCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minUserCount)), __LINE__);
        }
        $this->MinUserCount = $minUserCount;
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
     * @return \Brainloop\Soap\StructType\DRC
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
     * Get OrderedUserCount value
     * @return int|null
     */
    public function getOrderedUserCount()
    {
        return $this->OrderedUserCount;
    }
    /**
     * Set OrderedUserCount value
     * @param int $orderedUserCount
     * @return \Brainloop\Soap\StructType\DRC
     */
    public function setOrderedUserCount($orderedUserCount = null)
    {
        // validation for constraint: int
        if (!is_null($orderedUserCount) && !is_numeric($orderedUserCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($orderedUserCount)), __LINE__);
        }
        $this->OrderedUserCount = $orderedUserCount;
        return $this;
    }
    /**
     * Get Properties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue|null
     */
    public function getProperties()
    {
        return isset($this->Properties) ? $this->Properties : null;
    }
    /**
     * Set Properties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $properties
     * @return \Brainloop\Soap\StructType\DRC
     */
    public function setProperties(\Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $properties = null)
    {
        if (is_null($properties) || (is_array($properties) && empty($properties))) {
            unset($this->Properties);
        } else {
            $this->Properties = $properties;
        }
        return $this;
    }
    /**
     * Get SendItemLinkType value
     * @return string|null
     */
    public function getSendItemLinkType()
    {
        return $this->SendItemLinkType;
    }
    /**
     * Set SendItemLinkType value
     * @uses \Brainloop\Soap\EnumType\ItemDownloadType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemDownloadType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sendItemLinkType
     * @return \Brainloop\Soap\StructType\DRC
     */
    public function setSendItemLinkType($sendItemLinkType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ItemDownloadType::valueIsValid($sendItemLinkType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sendItemLinkType, implode(', ', \Brainloop\Soap\EnumType\ItemDownloadType::getValidValues())), __LINE__);
        }
        $this->SendItemLinkType = $sendItemLinkType;
        return $this;
    }
    /**
     * Get TemplateID value
     * @return int|null
     */
    public function getTemplateID()
    {
        return $this->TemplateID;
    }
    /**
     * Set TemplateID value
     * @param int $templateID
     * @return \Brainloop\Soap\StructType\DRC
     */
    public function setTemplateID($templateID = null)
    {
        // validation for constraint: int
        if (!is_null($templateID) && !is_numeric($templateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($templateID)), __LINE__);
        }
        $this->TemplateID = $templateID;
        return $this;
    }
    /**
     * Get UserDiskSpaceMB value
     * @return int|null
     */
    public function getUserDiskSpaceMB()
    {
        return $this->UserDiskSpaceMB;
    }
    /**
     * Set UserDiskSpaceMB value
     * @param int $userDiskSpaceMB
     * @return \Brainloop\Soap\StructType\DRC
     */
    public function setUserDiskSpaceMB($userDiskSpaceMB = null)
    {
        // validation for constraint: int
        if (!is_null($userDiskSpaceMB) && !is_numeric($userDiskSpaceMB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($userDiskSpaceMB)), __LINE__);
        }
        $this->UserDiskSpaceMB = $userDiskSpaceMB;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\DRC
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
