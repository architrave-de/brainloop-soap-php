<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetContributorStatus StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetContributorStatus extends AbstractStructBase
{
    /**
     * The iTaskID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iTaskID;
    /**
     * The eContributorStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eContributorStatus;
    /**
     * The sComment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sComment;
    /**
     * Constructor method for SetContributorStatus
     * @uses SetContributorStatus::setITaskID()
     * @uses SetContributorStatus::setEContributorStatus()
     * @uses SetContributorStatus::setSComment()
     * @param int $iTaskID
     * @param string $eContributorStatus
     * @param string $sComment
     */
    public function __construct($iTaskID = null, $eContributorStatus = null, $sComment = null)
    {
        $this
            ->setITaskID($iTaskID)
            ->setEContributorStatus($eContributorStatus)
            ->setSComment($sComment);
    }
    /**
     * Get iTaskID value
     * @return int|null
     */
    public function getITaskID()
    {
        return $this->iTaskID;
    }
    /**
     * Set iTaskID value
     * @param int $iTaskID
     * @return \Brainloop\Soap\StructType\SetContributorStatus
     */
    public function setITaskID($iTaskID = null)
    {
        // validation for constraint: int
        if (!is_null($iTaskID) && !is_numeric($iTaskID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iTaskID)), __LINE__);
        }
        $this->iTaskID = $iTaskID;
        return $this;
    }
    /**
     * Get eContributorStatus value
     * @return string|null
     */
    public function getEContributorStatus()
    {
        return $this->eContributorStatus;
    }
    /**
     * Set eContributorStatus value
     * @uses \Brainloop\Soap\EnumType\ContributorStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ContributorStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eContributorStatus
     * @return \Brainloop\Soap\StructType\SetContributorStatus
     */
    public function setEContributorStatus($eContributorStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ContributorStatus::valueIsValid($eContributorStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eContributorStatus, implode(', ', \Brainloop\Soap\EnumType\ContributorStatus::getValidValues())), __LINE__);
        }
        $this->eContributorStatus = $eContributorStatus;
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
     * @return \Brainloop\Soap\StructType\SetContributorStatus
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
     * @return \Brainloop\Soap\StructType\SetContributorStatus
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
