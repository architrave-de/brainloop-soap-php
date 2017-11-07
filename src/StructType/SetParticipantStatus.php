<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetParticipantStatus StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetParticipantStatus extends AbstractStructBase
{
    /**
     * The iEventID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iEventID;
    /**
     * The eParticipantStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eParticipantStatus;
    /**
     * The sComment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sComment;
    /**
     * Constructor method for SetParticipantStatus
     * @uses SetParticipantStatus::setIEventID()
     * @uses SetParticipantStatus::setEParticipantStatus()
     * @uses SetParticipantStatus::setSComment()
     * @param int $iEventID
     * @param string $eParticipantStatus
     * @param string $sComment
     */
    public function __construct($iEventID = null, $eParticipantStatus = null, $sComment = null)
    {
        $this
            ->setIEventID($iEventID)
            ->setEParticipantStatus($eParticipantStatus)
            ->setSComment($sComment);
    }
    /**
     * Get iEventID value
     * @return int|null
     */
    public function getIEventID()
    {
        return $this->iEventID;
    }
    /**
     * Set iEventID value
     * @param int $iEventID
     * @return \Brainloop\Soap\StructType\SetParticipantStatus
     */
    public function setIEventID($iEventID = null)
    {
        // validation for constraint: int
        if (!is_null($iEventID) && !is_numeric($iEventID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iEventID)), __LINE__);
        }
        $this->iEventID = $iEventID;
        return $this;
    }
    /**
     * Get eParticipantStatus value
     * @return string|null
     */
    public function getEParticipantStatus()
    {
        return $this->eParticipantStatus;
    }
    /**
     * Set eParticipantStatus value
     * @uses \Brainloop\Soap\EnumType\ParticipantStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ParticipantStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eParticipantStatus
     * @return \Brainloop\Soap\StructType\SetParticipantStatus
     */
    public function setEParticipantStatus($eParticipantStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ParticipantStatus::valueIsValid($eParticipantStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eParticipantStatus, implode(', ', \Brainloop\Soap\EnumType\ParticipantStatus::getValidValues())), __LINE__);
        }
        $this->eParticipantStatus = $eParticipantStatus;
        return $this;
    }
    /**
     * Get sComment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSComment()
    {
        return isset($this->sComment) ? $this->sComment : null;
    }
    /**
     * Set sComment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sComment
     * @return \Brainloop\Soap\StructType\SetParticipantStatus
     */
    public function setSComment($sComment = null)
    {
        // validation for constraint: string
        if (!is_null($sComment) && !is_string($sComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sComment)), __LINE__);
        }
        if (is_null($sComment) || (is_array($sComment) && empty($sComment))) {
            unset($this->sComment);
        } else {
            $this->sComment = $sComment;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SetParticipantStatus
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
