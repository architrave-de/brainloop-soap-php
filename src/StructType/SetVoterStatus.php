<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetVoterStatus StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetVoterStatus extends AbstractStructBase
{
    /**
     * The iVoteID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iVoteID;
    /**
     * The eVoteStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eVoteStatus;
    /**
     * The sComment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sComment;
    /**
     * Constructor method for SetVoterStatus
     * @uses SetVoterStatus::setIVoteID()
     * @uses SetVoterStatus::setEVoteStatus()
     * @uses SetVoterStatus::setSComment()
     * @param int $iVoteID
     * @param string $eVoteStatus
     * @param string $sComment
     */
    public function __construct($iVoteID = null, $eVoteStatus = null, $sComment = null)
    {
        $this
            ->setIVoteID($iVoteID)
            ->setEVoteStatus($eVoteStatus)
            ->setSComment($sComment);
    }
    /**
     * Get iVoteID value
     * @return int|null
     */
    public function getIVoteID()
    {
        return $this->iVoteID;
    }
    /**
     * Set iVoteID value
     * @param int $iVoteID
     * @return \Brainloop\Soap\StructType\SetVoterStatus
     */
    public function setIVoteID($iVoteID = null)
    {
        // validation for constraint: int
        if (!is_null($iVoteID) && !is_numeric($iVoteID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iVoteID)), __LINE__);
        }
        $this->iVoteID = $iVoteID;
        return $this;
    }
    /**
     * Get eVoteStatus value
     * @return string|null
     */
    public function getEVoteStatus()
    {
        return $this->eVoteStatus;
    }
    /**
     * Set eVoteStatus value
     * @uses \Brainloop\Soap\EnumType\VoterStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\VoterStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eVoteStatus
     * @return \Brainloop\Soap\StructType\SetVoterStatus
     */
    public function setEVoteStatus($eVoteStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\VoterStatus::valueIsValid($eVoteStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eVoteStatus, implode(', ', \Brainloop\Soap\EnumType\VoterStatus::getValidValues())), __LINE__);
        }
        $this->eVoteStatus = $eVoteStatus;
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
     * @return \Brainloop\Soap\StructType\SetVoterStatus
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
     * @return \Brainloop\Soap\StructType\SetVoterStatus
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
