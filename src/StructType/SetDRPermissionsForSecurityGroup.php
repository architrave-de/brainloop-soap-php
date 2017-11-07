<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetDRPermissionsForSecurityGroup StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetDRPermissionsForSecurityGroup extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The iSecurityGroupID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iSecurityGroupID;
    /**
     * The ePermissionBits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ePermissionBits;
    /**
     * Constructor method for SetDRPermissionsForSecurityGroup
     * @uses SetDRPermissionsForSecurityGroup::setIDataroomID()
     * @uses SetDRPermissionsForSecurityGroup::setISecurityGroupID()
     * @uses SetDRPermissionsForSecurityGroup::setEPermissionBits()
     * @param int $iDataroomID
     * @param int $iSecurityGroupID
     * @param string $ePermissionBits
     */
    public function __construct($iDataroomID = null, $iSecurityGroupID = null, $ePermissionBits = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setISecurityGroupID($iSecurityGroupID)
            ->setEPermissionBits($ePermissionBits);
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
     * @return \Brainloop\Soap\StructType\SetDRPermissionsForSecurityGroup
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
     * Get iSecurityGroupID value
     * @return int|null
     */
    public function getISecurityGroupID()
    {
        return $this->iSecurityGroupID;
    }
    /**
     * Set iSecurityGroupID value
     * @param int $iSecurityGroupID
     * @return \Brainloop\Soap\StructType\SetDRPermissionsForSecurityGroup
     */
    public function setISecurityGroupID($iSecurityGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($iSecurityGroupID) && !is_numeric($iSecurityGroupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iSecurityGroupID)), __LINE__);
        }
        $this->iSecurityGroupID = $iSecurityGroupID;
        return $this;
    }
    /**
     * Get ePermissionBits value
     * @return string|null
     */
    public function getEPermissionBits()
    {
        return $this->ePermissionBits;
    }
    /**
     * Set ePermissionBits value
     * @uses \Brainloop\Soap\EnumType\PermissionBits::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\PermissionBits::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ePermissionBits
     * @return \Brainloop\Soap\StructType\SetDRPermissionsForSecurityGroup
     */
    public function setEPermissionBits($ePermissionBits = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\PermissionBits::valueIsValid($ePermissionBits)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ePermissionBits, implode(', ', \Brainloop\Soap\EnumType\PermissionBits::getValidValues())), __LINE__);
        }
        $this->ePermissionBits = $ePermissionBits;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SetDRPermissionsForSecurityGroup
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
