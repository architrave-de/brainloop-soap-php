<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contributor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Contributor
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class Contributor extends User
{
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Comment;
    /**
     * The ContributorStatus
     * @var string
     */
    public $ContributorStatus;
    /**
     * Constructor method for Contributor
     * @uses Contributor::setComment()
     * @uses Contributor::setContributorStatus()
     * @param string $comment
     * @param string $contributorStatus
     */
    public function __construct($comment = null, $contributorStatus = null)
    {
        $this
            ->setComment($comment)
            ->setContributorStatus($contributorStatus);
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Brainloop\Soap\StructType\Contributor
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get ContributorStatus value
     * @return string|null
     */
    public function getContributorStatus()
    {
        return $this->ContributorStatus;
    }
    /**
     * Set ContributorStatus value
     * @uses \Brainloop\Soap\EnumType\ContributorStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ContributorStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $contributorStatus
     * @return \Brainloop\Soap\StructType\Contributor
     */
    public function setContributorStatus($contributorStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ContributorStatus::valueIsValid($contributorStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $contributorStatus, implode(', ', \Brainloop\Soap\EnumType\ContributorStatus::getValidValues())), __LINE__);
        }
        $this->ContributorStatus = $contributorStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\Contributor
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
