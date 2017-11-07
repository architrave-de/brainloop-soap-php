<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateEventParameters StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CreateEventParameters
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateEventParameters extends AbstractStructBase
{
    /**
     * The AttachedItems
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfCreateEventAttachmentParameter
     */
    public $AttachedItems;
    /**
     * The ContributorEmails
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfstring
     */
    public $ContributorEmails;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The EndDate
     * @var string
     */
    public $EndDate;
    /**
     * The IsPrivate
     * @var bool
     */
    public $IsPrivate;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Location;
    /**
     * The ModifierGroupID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ModifierGroupID;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The StartDate
     * @var string
     */
    public $StartDate;
    /**
     * The TemplateID
     * @var int
     */
    public $TemplateID;
    /**
     * Constructor method for CreateEventParameters
     * @uses CreateEventParameters::setAttachedItems()
     * @uses CreateEventParameters::setContributorEmails()
     * @uses CreateEventParameters::setDescription()
     * @uses CreateEventParameters::setEndDate()
     * @uses CreateEventParameters::setIsPrivate()
     * @uses CreateEventParameters::setLocation()
     * @uses CreateEventParameters::setModifierGroupID()
     * @uses CreateEventParameters::setName()
     * @uses CreateEventParameters::setStartDate()
     * @uses CreateEventParameters::setTemplateID()
     * @param \Brainloop\Soap\ArrayType\ArrayOfCreateEventAttachmentParameter $attachedItems
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $contributorEmails
     * @param string $description
     * @param string $endDate
     * @param bool $isPrivate
     * @param string $location
     * @param int $modifierGroupID
     * @param string $name
     * @param string $startDate
     * @param int $templateID
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfCreateEventAttachmentParameter $attachedItems = null, \Brainloop\Soap\ArrayType\ArrayOfstring $contributorEmails = null, $description = null, $endDate = null, $isPrivate = null, $location = null, $modifierGroupID = null, $name = null, $startDate = null, $templateID = null)
    {
        $this
            ->setAttachedItems($attachedItems)
            ->setContributorEmails($contributorEmails)
            ->setDescription($description)
            ->setEndDate($endDate)
            ->setIsPrivate($isPrivate)
            ->setLocation($location)
            ->setModifierGroupID($modifierGroupID)
            ->setName($name)
            ->setStartDate($startDate)
            ->setTemplateID($templateID);
    }
    /**
     * Get AttachedItems value
     * @return \Brainloop\Soap\ArrayType\ArrayOfCreateEventAttachmentParameter|null
     */
    public function getAttachedItems()
    {
        return $this->AttachedItems;
    }
    /**
     * Set AttachedItems value
     * @param \Brainloop\Soap\ArrayType\ArrayOfCreateEventAttachmentParameter $attachedItems
     * @return \Brainloop\Soap\StructType\CreateEventParameters
     */
    public function setAttachedItems(\Brainloop\Soap\ArrayType\ArrayOfCreateEventAttachmentParameter $attachedItems = null)
    {
        $this->AttachedItems = $attachedItems;
        return $this;
    }
    /**
     * Get ContributorEmails value
     * @return \Brainloop\Soap\ArrayType\ArrayOfstring|null
     */
    public function getContributorEmails()
    {
        return $this->ContributorEmails;
    }
    /**
     * Set ContributorEmails value
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $contributorEmails
     * @return \Brainloop\Soap\StructType\CreateEventParameters
     */
    public function setContributorEmails(\Brainloop\Soap\ArrayType\ArrayOfstring $contributorEmails = null)
    {
        $this->ContributorEmails = $contributorEmails;
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
     * @return \Brainloop\Soap\StructType\CreateEventParameters
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
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Brainloop\Soap\StructType\CreateEventParameters
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Get IsPrivate value
     * @return bool|null
     */
    public function getIsPrivate()
    {
        return $this->IsPrivate;
    }
    /**
     * Set IsPrivate value
     * @param bool $isPrivate
     * @return \Brainloop\Soap\StructType\CreateEventParameters
     */
    public function setIsPrivate($isPrivate = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPrivate) && !is_bool($isPrivate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPrivate)), __LINE__);
        }
        $this->IsPrivate = $isPrivate;
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Brainloop\Soap\StructType\CreateEventParameters
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Get ModifierGroupID value
     * @return int|null
     */
    public function getModifierGroupID()
    {
        return $this->ModifierGroupID;
    }
    /**
     * Set ModifierGroupID value
     * @param int $modifierGroupID
     * @return \Brainloop\Soap\StructType\CreateEventParameters
     */
    public function setModifierGroupID($modifierGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($modifierGroupID) && !is_numeric($modifierGroupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($modifierGroupID)), __LINE__);
        }
        $this->ModifierGroupID = $modifierGroupID;
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
     * @return \Brainloop\Soap\StructType\CreateEventParameters
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
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Brainloop\Soap\StructType\CreateEventParameters
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
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
     * @return \Brainloop\Soap\StructType\CreateEventParameters
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateEventParameters
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
