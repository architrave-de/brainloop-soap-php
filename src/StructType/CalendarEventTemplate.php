<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalendarEventTemplate StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CalendarEventTemplate
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CalendarEventTemplate extends AbstractStructBase
{
    /**
     * The AttachmentNames
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfstring
     */
    public $AttachmentNames;
    /**
     * The CreatorGroupID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $CreatorGroupID;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Location;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Subject;
    /**
     * The TemplateID
     * @var int
     */
    public $TemplateID;
    /**
     * The TemplateName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $TemplateName;
    /**
     * Constructor method for CalendarEventTemplate
     * @uses CalendarEventTemplate::setAttachmentNames()
     * @uses CalendarEventTemplate::setCreatorGroupID()
     * @uses CalendarEventTemplate::setDescription()
     * @uses CalendarEventTemplate::setLocation()
     * @uses CalendarEventTemplate::setSubject()
     * @uses CalendarEventTemplate::setTemplateID()
     * @uses CalendarEventTemplate::setTemplateName()
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $attachmentNames
     * @param int $creatorGroupID
     * @param string $description
     * @param string $location
     * @param string $subject
     * @param int $templateID
     * @param string $templateName
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfstring $attachmentNames = null, $creatorGroupID = null, $description = null, $location = null, $subject = null, $templateID = null, $templateName = null)
    {
        $this
            ->setAttachmentNames($attachmentNames)
            ->setCreatorGroupID($creatorGroupID)
            ->setDescription($description)
            ->setLocation($location)
            ->setSubject($subject)
            ->setTemplateID($templateID)
            ->setTemplateName($templateName);
    }
    /**
     * Get AttachmentNames value
     * @return \Brainloop\Soap\ArrayType\ArrayOfstring|null
     */
    public function getAttachmentNames()
    {
        return $this->AttachmentNames;
    }
    /**
     * Set AttachmentNames value
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $attachmentNames
     * @return \Brainloop\Soap\StructType\CalendarEventTemplate
     */
    public function setAttachmentNames(\Brainloop\Soap\ArrayType\ArrayOfstring $attachmentNames = null)
    {
        $this->AttachmentNames = $attachmentNames;
        return $this;
    }
    /**
     * Get CreatorGroupID value
     * @return int|null
     */
    public function getCreatorGroupID()
    {
        return $this->CreatorGroupID;
    }
    /**
     * Set CreatorGroupID value
     * @param int $creatorGroupID
     * @return \Brainloop\Soap\StructType\CalendarEventTemplate
     */
    public function setCreatorGroupID($creatorGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($creatorGroupID) && !is_numeric($creatorGroupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($creatorGroupID)), __LINE__);
        }
        $this->CreatorGroupID = $creatorGroupID;
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
     * @return \Brainloop\Soap\StructType\CalendarEventTemplate
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
     * @return \Brainloop\Soap\StructType\CalendarEventTemplate
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
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \Brainloop\Soap\StructType\CalendarEventTemplate
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
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
     * @return \Brainloop\Soap\StructType\CalendarEventTemplate
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
     * Get TemplateName value
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->TemplateName;
    }
    /**
     * Set TemplateName value
     * @param string $templateName
     * @return \Brainloop\Soap\StructType\CalendarEventTemplate
     */
    public function setTemplateName($templateName = null)
    {
        // validation for constraint: string
        if (!is_null($templateName) && !is_string($templateName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($templateName)), __LINE__);
        }
        $this->TemplateName = $templateName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CalendarEventTemplate
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
