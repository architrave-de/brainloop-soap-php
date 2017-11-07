<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalendarEvent StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CalendarEvent
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CalendarEvent extends BLItem
{
    /**
     * The Connections
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion
     */
    public $Connections;
    /**
     * The EndDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $EndDate;
    /**
     * The IsPublic
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $IsPublic;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Location;
    /**
     * The Participants
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfParticipantIDAndStatus
     */
    public $Participants;
    /**
     * The StartDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $StartDate;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Status;
    /**
     * The TemplateID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $TemplateID;
    /**
     * Constructor method for CalendarEvent
     * @uses CalendarEvent::setConnections()
     * @uses CalendarEvent::setEndDate()
     * @uses CalendarEvent::setIsPublic()
     * @uses CalendarEvent::setLocation()
     * @uses CalendarEvent::setParticipants()
     * @uses CalendarEvent::setStartDate()
     * @uses CalendarEvent::setStatus()
     * @uses CalendarEvent::setTemplateID()
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion $connections
     * @param string $endDate
     * @param bool $isPublic
     * @param string $location
     * @param \Brainloop\Soap\ArrayType\ArrayOfParticipantIDAndStatus $participants
     * @param string $startDate
     * @param string $status
     * @param int $templateID
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion $connections = null, $endDate = null, $isPublic = null, $location = null, \Brainloop\Soap\ArrayType\ArrayOfParticipantIDAndStatus $participants = null, $startDate = null, $status = null, $templateID = null)
    {
        $this
            ->setConnections($connections)
            ->setEndDate($endDate)
            ->setIsPublic($isPublic)
            ->setLocation($location)
            ->setParticipants($participants)
            ->setStartDate($startDate)
            ->setStatus($status)
            ->setTemplateID($templateID);
    }
    /**
     * Get Connections value
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion|null
     */
    public function getConnections()
    {
        return $this->Connections;
    }
    /**
     * Set Connections value
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion $connections
     * @return \Brainloop\Soap\StructType\CalendarEvent
     */
    public function setConnections(\Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion $connections = null)
    {
        $this->Connections = $connections;
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
     * @return \Brainloop\Soap\StructType\CalendarEvent
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
     * Get IsPublic value
     * @return bool|null
     */
    public function getIsPublic()
    {
        return $this->IsPublic;
    }
    /**
     * Set IsPublic value
     * @param bool $isPublic
     * @return \Brainloop\Soap\StructType\CalendarEvent
     */
    public function setIsPublic($isPublic = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPublic) && !is_bool($isPublic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPublic)), __LINE__);
        }
        $this->IsPublic = $isPublic;
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
     * @return \Brainloop\Soap\StructType\CalendarEvent
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
     * Get Participants value
     * @return \Brainloop\Soap\ArrayType\ArrayOfParticipantIDAndStatus|null
     */
    public function getParticipants()
    {
        return $this->Participants;
    }
    /**
     * Set Participants value
     * @param \Brainloop\Soap\ArrayType\ArrayOfParticipantIDAndStatus $participants
     * @return \Brainloop\Soap\StructType\CalendarEvent
     */
    public function setParticipants(\Brainloop\Soap\ArrayType\ArrayOfParticipantIDAndStatus $participants = null)
    {
        $this->Participants = $participants;
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
     * @return \Brainloop\Soap\StructType\CalendarEvent
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
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Brainloop\Soap\EnumType\CalendarEventStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\CalendarEventStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Brainloop\Soap\StructType\CalendarEvent
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\CalendarEventStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Brainloop\Soap\EnumType\CalendarEventStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
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
     * @return \Brainloop\Soap\StructType\CalendarEvent
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
     * @return \Brainloop\Soap\StructType\CalendarEvent
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
