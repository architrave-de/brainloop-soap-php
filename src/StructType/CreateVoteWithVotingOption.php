<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateVoteWithVotingOption StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateVoteWithVotingOption extends AbstractStructBase
{
    /**
     * The iParentItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iParentItemID;
    /**
     * The sName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sName;
    /**
     * The sDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sDescription;
    /**
     * The aContributorEmails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfstring
     */
    public $aContributorEmails;
    /**
     * The oEndDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $oEndDate;
    /**
     * The bIndividualVotingVisibleToAll
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bIndividualVotingVisibleToAll;
    /**
     * The ePollResultType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ePollResultType;
    /**
     * The iPercentNeeded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iPercentNeeded;
    /**
     * The iPositiveVotesNeeded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iPositiveVotesNeeded;
    /**
     * The iLinkedObjectID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $iLinkedObjectID;
    /**
     * The bVotingOptionYesNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bVotingOptionYesNo;
    /**
     * Constructor method for CreateVoteWithVotingOption
     * @uses CreateVoteWithVotingOption::setIParentItemID()
     * @uses CreateVoteWithVotingOption::setSName()
     * @uses CreateVoteWithVotingOption::setSDescription()
     * @uses CreateVoteWithVotingOption::setAContributorEmails()
     * @uses CreateVoteWithVotingOption::setOEndDate()
     * @uses CreateVoteWithVotingOption::setBIndividualVotingVisibleToAll()
     * @uses CreateVoteWithVotingOption::setEPollResultType()
     * @uses CreateVoteWithVotingOption::setIPercentNeeded()
     * @uses CreateVoteWithVotingOption::setIPositiveVotesNeeded()
     * @uses CreateVoteWithVotingOption::setILinkedObjectID()
     * @uses CreateVoteWithVotingOption::setBVotingOptionYesNo()
     * @param int $iParentItemID
     * @param string $sName
     * @param string $sDescription
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $aContributorEmails
     * @param string $oEndDate
     * @param bool $bIndividualVotingVisibleToAll
     * @param string $ePollResultType
     * @param int $iPercentNeeded
     * @param int $iPositiveVotesNeeded
     * @param int $iLinkedObjectID
     * @param bool $bVotingOptionYesNo
     */
    public function __construct($iParentItemID = null, $sName = null, $sDescription = null, \Brainloop\Soap\ArrayType\ArrayOfstring $aContributorEmails = null, $oEndDate = null, $bIndividualVotingVisibleToAll = null, $ePollResultType = null, $iPercentNeeded = null, $iPositiveVotesNeeded = null, $iLinkedObjectID = null, $bVotingOptionYesNo = null)
    {
        $this
            ->setIParentItemID($iParentItemID)
            ->setSName($sName)
            ->setSDescription($sDescription)
            ->setAContributorEmails($aContributorEmails)
            ->setOEndDate($oEndDate)
            ->setBIndividualVotingVisibleToAll($bIndividualVotingVisibleToAll)
            ->setEPollResultType($ePollResultType)
            ->setIPercentNeeded($iPercentNeeded)
            ->setIPositiveVotesNeeded($iPositiveVotesNeeded)
            ->setILinkedObjectID($iLinkedObjectID)
            ->setBVotingOptionYesNo($bVotingOptionYesNo);
    }
    /**
     * Get iParentItemID value
     * @return int|null
     */
    public function getIParentItemID()
    {
        return $this->iParentItemID;
    }
    /**
     * Set iParentItemID value
     * @param int $iParentItemID
     * @return \Brainloop\Soap\StructType\CreateVoteWithVotingOption
     */
    public function setIParentItemID($iParentItemID = null)
    {
        // validation for constraint: int
        if (!is_null($iParentItemID) && !is_numeric($iParentItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iParentItemID)), __LINE__);
        }
        $this->iParentItemID = $iParentItemID;
        return $this;
    }
    /**
     * Get sName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSName()
    {
        return isset($this->sName) ? $this->sName : null;
    }
    /**
     * Set sName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sName
     * @return \Brainloop\Soap\StructType\CreateVoteWithVotingOption
     */
    public function setSName($sName = null)
    {
        // validation for constraint: string
        if (!is_null($sName) && !is_string($sName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sName)), __LINE__);
        }
        if (is_null($sName) || (is_array($sName) && empty($sName))) {
            unset($this->sName);
        } else {
            $this->sName = $sName;
        }
        return $this;
    }
    /**
     * Get sDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSDescription()
    {
        return isset($this->sDescription) ? $this->sDescription : null;
    }
    /**
     * Set sDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sDescription
     * @return \Brainloop\Soap\StructType\CreateVoteWithVotingOption
     */
    public function setSDescription($sDescription = null)
    {
        // validation for constraint: string
        if (!is_null($sDescription) && !is_string($sDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sDescription)), __LINE__);
        }
        if (is_null($sDescription) || (is_array($sDescription) && empty($sDescription))) {
            unset($this->sDescription);
        } else {
            $this->sDescription = $sDescription;
        }
        return $this;
    }
    /**
     * Get aContributorEmails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfstring|null
     */
    public function getAContributorEmails()
    {
        return isset($this->aContributorEmails) ? $this->aContributorEmails : null;
    }
    /**
     * Set aContributorEmails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $aContributorEmails
     * @return \Brainloop\Soap\StructType\CreateVoteWithVotingOption
     */
    public function setAContributorEmails(\Brainloop\Soap\ArrayType\ArrayOfstring $aContributorEmails = null)
    {
        if (is_null($aContributorEmails) || (is_array($aContributorEmails) && empty($aContributorEmails))) {
            unset($this->aContributorEmails);
        } else {
            $this->aContributorEmails = $aContributorEmails;
        }
        return $this;
    }
    /**
     * Get oEndDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOEndDate()
    {
        return isset($this->oEndDate) ? $this->oEndDate : null;
    }
    /**
     * Set oEndDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $oEndDate
     * @return \Brainloop\Soap\StructType\CreateVoteWithVotingOption
     */
    public function setOEndDate($oEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($oEndDate) && !is_string($oEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($oEndDate)), __LINE__);
        }
        if (is_null($oEndDate) || (is_array($oEndDate) && empty($oEndDate))) {
            unset($this->oEndDate);
        } else {
            $this->oEndDate = $oEndDate;
        }
        return $this;
    }
    /**
     * Get bIndividualVotingVisibleToAll value
     * @return bool|null
     */
    public function getBIndividualVotingVisibleToAll()
    {
        return $this->bIndividualVotingVisibleToAll;
    }
    /**
     * Set bIndividualVotingVisibleToAll value
     * @param bool $bIndividualVotingVisibleToAll
     * @return \Brainloop\Soap\StructType\CreateVoteWithVotingOption
     */
    public function setBIndividualVotingVisibleToAll($bIndividualVotingVisibleToAll = null)
    {
        // validation for constraint: boolean
        if (!is_null($bIndividualVotingVisibleToAll) && !is_bool($bIndividualVotingVisibleToAll)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bIndividualVotingVisibleToAll)), __LINE__);
        }
        $this->bIndividualVotingVisibleToAll = $bIndividualVotingVisibleToAll;
        return $this;
    }
    /**
     * Get ePollResultType value
     * @return string|null
     */
    public function getEPollResultType()
    {
        return $this->ePollResultType;
    }
    /**
     * Set ePollResultType value
     * @uses \Brainloop\Soap\EnumType\PollResultType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\PollResultType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ePollResultType
     * @return \Brainloop\Soap\StructType\CreateVoteWithVotingOption
     */
    public function setEPollResultType($ePollResultType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\PollResultType::valueIsValid($ePollResultType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ePollResultType, implode(', ', \Brainloop\Soap\EnumType\PollResultType::getValidValues())), __LINE__);
        }
        $this->ePollResultType = $ePollResultType;
        return $this;
    }
    /**
     * Get iPercentNeeded value
     * @return int|null
     */
    public function getIPercentNeeded()
    {
        return $this->iPercentNeeded;
    }
    /**
     * Set iPercentNeeded value
     * @param int $iPercentNeeded
     * @return \Brainloop\Soap\StructType\CreateVoteWithVotingOption
     */
    public function setIPercentNeeded($iPercentNeeded = null)
    {
        // validation for constraint: int
        if (!is_null($iPercentNeeded) && !is_numeric($iPercentNeeded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iPercentNeeded)), __LINE__);
        }
        $this->iPercentNeeded = $iPercentNeeded;
        return $this;
    }
    /**
     * Get iPositiveVotesNeeded value
     * @return int|null
     */
    public function getIPositiveVotesNeeded()
    {
        return $this->iPositiveVotesNeeded;
    }
    /**
     * Set iPositiveVotesNeeded value
     * @param int $iPositiveVotesNeeded
     * @return \Brainloop\Soap\StructType\CreateVoteWithVotingOption
     */
    public function setIPositiveVotesNeeded($iPositiveVotesNeeded = null)
    {
        // validation for constraint: int
        if (!is_null($iPositiveVotesNeeded) && !is_numeric($iPositiveVotesNeeded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iPositiveVotesNeeded)), __LINE__);
        }
        $this->iPositiveVotesNeeded = $iPositiveVotesNeeded;
        return $this;
    }
    /**
     * Get iLinkedObjectID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getILinkedObjectID()
    {
        return isset($this->iLinkedObjectID) ? $this->iLinkedObjectID : null;
    }
    /**
     * Set iLinkedObjectID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $iLinkedObjectID
     * @return \Brainloop\Soap\StructType\CreateVoteWithVotingOption
     */
    public function setILinkedObjectID($iLinkedObjectID = null)
    {
        // validation for constraint: int
        if (!is_null($iLinkedObjectID) && !is_numeric($iLinkedObjectID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iLinkedObjectID)), __LINE__);
        }
        if (is_null($iLinkedObjectID) || (is_array($iLinkedObjectID) && empty($iLinkedObjectID))) {
            unset($this->iLinkedObjectID);
        } else {
            $this->iLinkedObjectID = $iLinkedObjectID;
        }
        return $this;
    }
    /**
     * Get bVotingOptionYesNo value
     * @return bool|null
     */
    public function getBVotingOptionYesNo()
    {
        return $this->bVotingOptionYesNo;
    }
    /**
     * Set bVotingOptionYesNo value
     * @param bool $bVotingOptionYesNo
     * @return \Brainloop\Soap\StructType\CreateVoteWithVotingOption
     */
    public function setBVotingOptionYesNo($bVotingOptionYesNo = null)
    {
        // validation for constraint: boolean
        if (!is_null($bVotingOptionYesNo) && !is_bool($bVotingOptionYesNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bVotingOptionYesNo)), __LINE__);
        }
        $this->bVotingOptionYesNo = $bVotingOptionYesNo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateVoteWithVotingOption
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
