<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReviewsByUserParticipation StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetReviewsByUserParticipation extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The bIncludeOrganizerReviews
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bIncludeOrganizerReviews;
    /**
     * The bIncludeParticipantReviews
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bIncludeParticipantReviews;
    /**
     * The bIncludeEndedReviews
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bIncludeEndedReviews;
    /**
     * The eFields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eFields;
    /**
     * The dtStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dtStart;
    /**
     * The dtEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dtEnd;
    /**
     * The iStartRowIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iStartRowIndex;
    /**
     * The iMaximumRowCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iMaximumRowCount;
    /**
     * Constructor method for GetReviewsByUserParticipation
     * @uses GetReviewsByUserParticipation::setIDataroomID()
     * @uses GetReviewsByUserParticipation::setBIncludeOrganizerReviews()
     * @uses GetReviewsByUserParticipation::setBIncludeParticipantReviews()
     * @uses GetReviewsByUserParticipation::setBIncludeEndedReviews()
     * @uses GetReviewsByUserParticipation::setEFields()
     * @uses GetReviewsByUserParticipation::setDtStart()
     * @uses GetReviewsByUserParticipation::setDtEnd()
     * @uses GetReviewsByUserParticipation::setIStartRowIndex()
     * @uses GetReviewsByUserParticipation::setIMaximumRowCount()
     * @param int $iDataroomID
     * @param bool $bIncludeOrganizerReviews
     * @param bool $bIncludeParticipantReviews
     * @param bool $bIncludeEndedReviews
     * @param string $eFields
     * @param string $dtStart
     * @param string $dtEnd
     * @param int $iStartRowIndex
     * @param int $iMaximumRowCount
     */
    public function __construct($iDataroomID = null, $bIncludeOrganizerReviews = null, $bIncludeParticipantReviews = null, $bIncludeEndedReviews = null, $eFields = null, $dtStart = null, $dtEnd = null, $iStartRowIndex = null, $iMaximumRowCount = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setBIncludeOrganizerReviews($bIncludeOrganizerReviews)
            ->setBIncludeParticipantReviews($bIncludeParticipantReviews)
            ->setBIncludeEndedReviews($bIncludeEndedReviews)
            ->setEFields($eFields)
            ->setDtStart($dtStart)
            ->setDtEnd($dtEnd)
            ->setIStartRowIndex($iStartRowIndex)
            ->setIMaximumRowCount($iMaximumRowCount);
    }
    /**
     * Get iDataroomID value
     * @return int|null
     */
    public function getIDataroomID()
    {
        return $this->iDataroomID;
    }
    /**
     * Set iDataroomID value
     * @param int $iDataroomID
     * @return \Brainloop\Soap\StructType\GetReviewsByUserParticipation
     */
    public function setIDataroomID($iDataroomID = null)
    {
        // validation for constraint: int
        if (!is_null($iDataroomID) && !is_numeric($iDataroomID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDataroomID)), __LINE__);
        }
        $this->iDataroomID = $iDataroomID;
        return $this;
    }
    /**
     * Get bIncludeOrganizerReviews value
     * @return bool|null
     */
    public function getBIncludeOrganizerReviews()
    {
        return $this->bIncludeOrganizerReviews;
    }
    /**
     * Set bIncludeOrganizerReviews value
     * @param bool $bIncludeOrganizerReviews
     * @return \Brainloop\Soap\StructType\GetReviewsByUserParticipation
     */
    public function setBIncludeOrganizerReviews($bIncludeOrganizerReviews = null)
    {
        // validation for constraint: boolean
        if (!is_null($bIncludeOrganizerReviews) && !is_bool($bIncludeOrganizerReviews)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bIncludeOrganizerReviews)), __LINE__);
        }
        $this->bIncludeOrganizerReviews = $bIncludeOrganizerReviews;
        return $this;
    }
    /**
     * Get bIncludeParticipantReviews value
     * @return bool|null
     */
    public function getBIncludeParticipantReviews()
    {
        return $this->bIncludeParticipantReviews;
    }
    /**
     * Set bIncludeParticipantReviews value
     * @param bool $bIncludeParticipantReviews
     * @return \Brainloop\Soap\StructType\GetReviewsByUserParticipation
     */
    public function setBIncludeParticipantReviews($bIncludeParticipantReviews = null)
    {
        // validation for constraint: boolean
        if (!is_null($bIncludeParticipantReviews) && !is_bool($bIncludeParticipantReviews)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bIncludeParticipantReviews)), __LINE__);
        }
        $this->bIncludeParticipantReviews = $bIncludeParticipantReviews;
        return $this;
    }
    /**
     * Get bIncludeEndedReviews value
     * @return bool|null
     */
    public function getBIncludeEndedReviews()
    {
        return $this->bIncludeEndedReviews;
    }
    /**
     * Set bIncludeEndedReviews value
     * @param bool $bIncludeEndedReviews
     * @return \Brainloop\Soap\StructType\GetReviewsByUserParticipation
     */
    public function setBIncludeEndedReviews($bIncludeEndedReviews = null)
    {
        // validation for constraint: boolean
        if (!is_null($bIncludeEndedReviews) && !is_bool($bIncludeEndedReviews)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bIncludeEndedReviews)), __LINE__);
        }
        $this->bIncludeEndedReviews = $bIncludeEndedReviews;
        return $this;
    }
    /**
     * Get eFields value
     * @return string|null
     */
    public function getEFields()
    {
        return $this->eFields;
    }
    /**
     * Set eFields value
     * @uses \Brainloop\Soap\EnumType\ReviewFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ReviewFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eFields
     * @return \Brainloop\Soap\StructType\GetReviewsByUserParticipation
     */
    public function setEFields($eFields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ReviewFields::valueIsValid($eFields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eFields, implode(', ', \Brainloop\Soap\EnumType\ReviewFields::getValidValues())), __LINE__);
        }
        $this->eFields = $eFields;
        return $this;
    }
    /**
     * Get dtStart value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDtStart()
    {
        return isset($this->dtStart) ? $this->dtStart : null;
    }
    /**
     * Set dtStart value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dtStart
     * @return \Brainloop\Soap\StructType\GetReviewsByUserParticipation
     */
    public function setDtStart($dtStart = null)
    {
        // validation for constraint: string
        if (!is_null($dtStart) && !is_string($dtStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtStart)), __LINE__);
        }
        if (is_null($dtStart) || (is_array($dtStart) && empty($dtStart))) {
            unset($this->dtStart);
        } else {
            $this->dtStart = $dtStart;
        }
        return $this;
    }
    /**
     * Get dtEnd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDtEnd()
    {
        return isset($this->dtEnd) ? $this->dtEnd : null;
    }
    /**
     * Set dtEnd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dtEnd
     * @return \Brainloop\Soap\StructType\GetReviewsByUserParticipation
     */
    public function setDtEnd($dtEnd = null)
    {
        // validation for constraint: string
        if (!is_null($dtEnd) && !is_string($dtEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtEnd)), __LINE__);
        }
        if (is_null($dtEnd) || (is_array($dtEnd) && empty($dtEnd))) {
            unset($this->dtEnd);
        } else {
            $this->dtEnd = $dtEnd;
        }
        return $this;
    }
    /**
     * Get iStartRowIndex value
     * @return int|null
     */
    public function getIStartRowIndex()
    {
        return $this->iStartRowIndex;
    }
    /**
     * Set iStartRowIndex value
     * @param int $iStartRowIndex
     * @return \Brainloop\Soap\StructType\GetReviewsByUserParticipation
     */
    public function setIStartRowIndex($iStartRowIndex = null)
    {
        // validation for constraint: int
        if (!is_null($iStartRowIndex) && !is_numeric($iStartRowIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iStartRowIndex)), __LINE__);
        }
        $this->iStartRowIndex = $iStartRowIndex;
        return $this;
    }
    /**
     * Get iMaximumRowCount value
     * @return int|null
     */
    public function getIMaximumRowCount()
    {
        return $this->iMaximumRowCount;
    }
    /**
     * Set iMaximumRowCount value
     * @param int $iMaximumRowCount
     * @return \Brainloop\Soap\StructType\GetReviewsByUserParticipation
     */
    public function setIMaximumRowCount($iMaximumRowCount = null)
    {
        // validation for constraint: int
        if (!is_null($iMaximumRowCount) && !is_numeric($iMaximumRowCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iMaximumRowCount)), __LINE__);
        }
        $this->iMaximumRowCount = $iMaximumRowCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetReviewsByUserParticipation
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
