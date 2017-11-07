<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Milestone StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Milestone
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class Milestone extends CollaborationItem
{
    /**
     * The Connections
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion
     */
    public $Connections;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Status;
    /**
     * Constructor method for Milestone
     * @uses Milestone::setConnections()
     * @uses Milestone::setStatus()
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion $connections
     * @param string $status
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion $connections = null, $status = null)
    {
        $this
            ->setConnections($connections)
            ->setStatus($status);
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
     * @return \Brainloop\Soap\StructType\Milestone
     */
    public function setConnections(\Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion $connections = null)
    {
        $this->Connections = $connections;
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
     * @uses \Brainloop\Soap\EnumType\MilestoneStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\MilestoneStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Brainloop\Soap\StructType\Milestone
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\MilestoneStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Brainloop\Soap\EnumType\MilestoneStatus::getValidValues())), __LINE__);
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
     * @return \Brainloop\Soap\StructType\Milestone
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
