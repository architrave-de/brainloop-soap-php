<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSecurityGroups StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetSecurityGroups extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The eFields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eFields;
    /**
     * Constructor method for GetSecurityGroups
     * @uses GetSecurityGroups::setIDataroomID()
     * @uses GetSecurityGroups::setEFields()
     * @param int $iDataroomID
     * @param string $eFields
     */
    public function __construct($iDataroomID = null, $eFields = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setEFields($eFields);
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
     * @return \Brainloop\Soap\StructType\GetSecurityGroups
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
     * Get eFields value
     * @return string|null
     */
    public function getEFields()
    {
        return $this->eFields;
    }
    /**
     * Set eFields value
     * @uses \Brainloop\Soap\EnumType\ServiceGroupFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ServiceGroupFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eFields
     * @return \Brainloop\Soap\StructType\GetSecurityGroups
     */
    public function setEFields($eFields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ServiceGroupFields::valueIsValid($eFields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eFields, implode(', ', \Brainloop\Soap\EnumType\ServiceGroupFields::getValidValues())), __LINE__);
        }
        $this->eFields = $eFields;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetSecurityGroups
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