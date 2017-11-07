<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Voter StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Voter
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class Voter extends User
{
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Comment;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * Constructor method for Voter
     * @uses Voter::setComment()
     * @uses Voter::setStatus()
     * @param string $comment
     * @param string $status
     */
    public function __construct($comment = null, $status = null)
    {
        $this
            ->setComment($comment)
            ->setStatus($status);
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
     * @return \Brainloop\Soap\StructType\Voter
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
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Brainloop\Soap\EnumType\VoterStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\VoterStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Brainloop\Soap\StructType\Voter
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\VoterStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Brainloop\Soap\EnumType\VoterStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\Voter
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
