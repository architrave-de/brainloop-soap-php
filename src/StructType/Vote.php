<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vote StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Vote
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class Vote extends CollaborationItem
{
    /**
     * The HasAllVoteOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasAllVoteOptions;
    /**
     * The LinkedItemID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $LinkedItemID;
    /**
     * The NegativeCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $NegativeCount;
    /**
     * The NeutralCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $NeutralCount;
    /**
     * The PositiveCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $PositiveCount;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Status;
    /**
     * The TotalCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalCount;
    /**
     * The Voters
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfVoterIDAndStatus
     */
    public $Voters;
    /**
     * Constructor method for Vote
     * @uses Vote::setHasAllVoteOptions()
     * @uses Vote::setLinkedItemID()
     * @uses Vote::setNegativeCount()
     * @uses Vote::setNeutralCount()
     * @uses Vote::setPositiveCount()
     * @uses Vote::setStatus()
     * @uses Vote::setTotalCount()
     * @uses Vote::setVoters()
     * @param bool $hasAllVoteOptions
     * @param int $linkedItemID
     * @param int $negativeCount
     * @param int $neutralCount
     * @param int $positiveCount
     * @param string $status
     * @param int $totalCount
     * @param \Brainloop\Soap\ArrayType\ArrayOfVoterIDAndStatus $voters
     */
    public function __construct($hasAllVoteOptions = null, $linkedItemID = null, $negativeCount = null, $neutralCount = null, $positiveCount = null, $status = null, $totalCount = null, \Brainloop\Soap\ArrayType\ArrayOfVoterIDAndStatus $voters = null)
    {
        $this
            ->setHasAllVoteOptions($hasAllVoteOptions)
            ->setLinkedItemID($linkedItemID)
            ->setNegativeCount($negativeCount)
            ->setNeutralCount($neutralCount)
            ->setPositiveCount($positiveCount)
            ->setStatus($status)
            ->setTotalCount($totalCount)
            ->setVoters($voters);
    }
    /**
     * Get HasAllVoteOptions value
     * @return bool|null
     */
    public function getHasAllVoteOptions()
    {
        return $this->HasAllVoteOptions;
    }
    /**
     * Set HasAllVoteOptions value
     * @param bool $hasAllVoteOptions
     * @return \Brainloop\Soap\StructType\Vote
     */
    public function setHasAllVoteOptions($hasAllVoteOptions = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasAllVoteOptions) && !is_bool($hasAllVoteOptions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasAllVoteOptions)), __LINE__);
        }
        $this->HasAllVoteOptions = $hasAllVoteOptions;
        return $this;
    }
    /**
     * Get LinkedItemID value
     * @return int|null
     */
    public function getLinkedItemID()
    {
        return $this->LinkedItemID;
    }
    /**
     * Set LinkedItemID value
     * @param int $linkedItemID
     * @return \Brainloop\Soap\StructType\Vote
     */
    public function setLinkedItemID($linkedItemID = null)
    {
        // validation for constraint: int
        if (!is_null($linkedItemID) && !is_numeric($linkedItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($linkedItemID)), __LINE__);
        }
        $this->LinkedItemID = $linkedItemID;
        return $this;
    }
    /**
     * Get NegativeCount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getNegativeCount()
    {
        return isset($this->NegativeCount) ? $this->NegativeCount : null;
    }
    /**
     * Set NegativeCount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $negativeCount
     * @return \Brainloop\Soap\StructType\Vote
     */
    public function setNegativeCount($negativeCount = null)
    {
        // validation for constraint: int
        if (!is_null($negativeCount) && !is_numeric($negativeCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($negativeCount)), __LINE__);
        }
        if (is_null($negativeCount) || (is_array($negativeCount) && empty($negativeCount))) {
            unset($this->NegativeCount);
        } else {
            $this->NegativeCount = $negativeCount;
        }
        return $this;
    }
    /**
     * Get NeutralCount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getNeutralCount()
    {
        return isset($this->NeutralCount) ? $this->NeutralCount : null;
    }
    /**
     * Set NeutralCount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $neutralCount
     * @return \Brainloop\Soap\StructType\Vote
     */
    public function setNeutralCount($neutralCount = null)
    {
        // validation for constraint: int
        if (!is_null($neutralCount) && !is_numeric($neutralCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($neutralCount)), __LINE__);
        }
        if (is_null($neutralCount) || (is_array($neutralCount) && empty($neutralCount))) {
            unset($this->NeutralCount);
        } else {
            $this->NeutralCount = $neutralCount;
        }
        return $this;
    }
    /**
     * Get PositiveCount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPositiveCount()
    {
        return isset($this->PositiveCount) ? $this->PositiveCount : null;
    }
    /**
     * Set PositiveCount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $positiveCount
     * @return \Brainloop\Soap\StructType\Vote
     */
    public function setPositiveCount($positiveCount = null)
    {
        // validation for constraint: int
        if (!is_null($positiveCount) && !is_numeric($positiveCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($positiveCount)), __LINE__);
        }
        if (is_null($positiveCount) || (is_array($positiveCount) && empty($positiveCount))) {
            unset($this->PositiveCount);
        } else {
            $this->PositiveCount = $positiveCount;
        }
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
     * @uses \Brainloop\Soap\EnumType\VoteStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\VoteStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Brainloop\Soap\StructType\Vote
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\VoteStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Brainloop\Soap\EnumType\VoteStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get TotalCount value
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->TotalCount;
    }
    /**
     * Set TotalCount value
     * @param int $totalCount
     * @return \Brainloop\Soap\StructType\Vote
     */
    public function setTotalCount($totalCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalCount) && !is_numeric($totalCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalCount)), __LINE__);
        }
        $this->TotalCount = $totalCount;
        return $this;
    }
    /**
     * Get Voters value
     * @return \Brainloop\Soap\ArrayType\ArrayOfVoterIDAndStatus|null
     */
    public function getVoters()
    {
        return $this->Voters;
    }
    /**
     * Set Voters value
     * @param \Brainloop\Soap\ArrayType\ArrayOfVoterIDAndStatus $voters
     * @return \Brainloop\Soap\StructType\Vote
     */
    public function setVoters(\Brainloop\Soap\ArrayType\ArrayOfVoterIDAndStatus $voters = null)
    {
        $this->Voters = $voters;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\Vote
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
