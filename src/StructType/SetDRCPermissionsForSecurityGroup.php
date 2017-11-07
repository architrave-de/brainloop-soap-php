<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetDRCPermissionsForSecurityGroup StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetDRCPermissionsForSecurityGroup extends AbstractStructBase
{
    /**
     * The iDRCID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDRCID;
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
     * Constructor method for SetDRCPermissionsForSecurityGroup
     * @uses SetDRCPermissionsForSecurityGroup::setIDRCID()
     * @uses SetDRCPermissionsForSecurityGroup::setISecurityGroupID()
     * @uses SetDRCPermissionsForSecurityGroup::setEPermissionBits()
     * @param int $iDRCID
     * @param int $iSecurityGroupID
     * @param string $ePermissionBits
     */
    public function __construct($iDRCID = null, $iSecurityGroupID = null, $ePermissionBits = null)
    {
        $this
            ->setIDRCID($iDRCID)
            ->setISecurityGroupID($iSecurityGroupID)
            ->setEPermissionBits($ePermissionBits);
    }
    /**
     * Get iDRCID value
     * @return int|null
     */
    public function getIDRCID()
    {
        return $this->iDRCID;
    }
    /**
     * Set iDRCID value
     * @param int $iDRCID
     * @return \Brainloop\Soap\StructType\SetDRCPermissionsForSecurityGroup
     */
    public function setIDRCID($iDRCID = null)
    {
        // validation for constraint: int
        if (!is_null($iDRCID) && !is_numeric($iDRCID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDRCID)), __LINE__);
        }
        $this->iDRCID = $iDRCID;
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
     * @return \Brainloop\Soap\StructType\SetDRCPermissionsForSecurityGroup
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
     * @return \Brainloop\Soap\StructType\SetDRCPermissionsForSecurityGroup
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
     * @return \Brainloop\Soap\StructType\SetDRCPermissionsForSecurityGroup
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
