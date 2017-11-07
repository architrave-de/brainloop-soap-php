<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Task StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Task
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class Task extends CollaborationItem
{
    /**
     * The Contributors
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfContributorIDAndStatus
     */
    public $Contributors;
    /**
     * The ResultObjectID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ResultObjectID;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Status;
    /**
     * Constructor method for Task
     * @uses Task::setContributors()
     * @uses Task::setResultObjectID()
     * @uses Task::setStatus()
     * @param \Brainloop\Soap\ArrayType\ArrayOfContributorIDAndStatus $contributors
     * @param int $resultObjectID
     * @param string $status
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfContributorIDAndStatus $contributors = null, $resultObjectID = null, $status = null)
    {
        $this
            ->setContributors($contributors)
            ->setResultObjectID($resultObjectID)
            ->setStatus($status);
    }
    /**
     * Get Contributors value
     * @return \Brainloop\Soap\ArrayType\ArrayOfContributorIDAndStatus|null
     */
    public function getContributors()
    {
        return $this->Contributors;
    }
    /**
     * Set Contributors value
     * @param \Brainloop\Soap\ArrayType\ArrayOfContributorIDAndStatus $contributors
     * @return \Brainloop\Soap\StructType\Task
     */
    public function setContributors(\Brainloop\Soap\ArrayType\ArrayOfContributorIDAndStatus $contributors = null)
    {
        $this->Contributors = $contributors;
        return $this;
    }
    /**
     * Get ResultObjectID value
     * @return int|null
     */
    public function getResultObjectID()
    {
        return $this->ResultObjectID;
    }
    /**
     * Set ResultObjectID value
     * @param int $resultObjectID
     * @return \Brainloop\Soap\StructType\Task
     */
    public function setResultObjectID($resultObjectID = null)
    {
        // validation for constraint: int
        if (!is_null($resultObjectID) && !is_numeric($resultObjectID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($resultObjectID)), __LINE__);
        }
        $this->ResultObjectID = $resultObjectID;
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
     * @uses \Brainloop\Soap\EnumType\TaskStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\TaskStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Brainloop\Soap\StructType\Task
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\TaskStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Brainloop\Soap\EnumType\TaskStatus::getValidValues())), __LINE__);
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
     * @return \Brainloop\Soap\StructType\Task
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
