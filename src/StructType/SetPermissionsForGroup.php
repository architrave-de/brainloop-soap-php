<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPermissionsForGroup StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetPermissionsForGroup extends AbstractStructBase
{
    /**
     * The iItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iItemID;
    /**
     * The iGroupID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iGroupID;
    /**
     * The ePermissions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ePermissions;
    /**
     * The bRecursive
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bRecursive;
    /**
     * Constructor method for SetPermissionsForGroup
     * @uses SetPermissionsForGroup::setIItemID()
     * @uses SetPermissionsForGroup::setIGroupID()
     * @uses SetPermissionsForGroup::setEPermissions()
     * @uses SetPermissionsForGroup::setBRecursive()
     * @param int $iItemID
     * @param int $iGroupID
     * @param string $ePermissions
     * @param bool $bRecursive
     */
    public function __construct($iItemID = null, $iGroupID = null, $ePermissions = null, $bRecursive = null)
    {
        $this
            ->setIItemID($iItemID)
            ->setIGroupID($iGroupID)
            ->setEPermissions($ePermissions)
            ->setBRecursive($bRecursive);
    }
    /**
     * Get iItemID value
     * @return int|null
     */
    public function getIItemID()
    {
        return $this->iItemID;
    }
    /**
     * Set iItemID value
     * @param int $iItemID
     * @return \Brainloop\Soap\StructType\SetPermissionsForGroup
     */
    public function setIItemID($iItemID = null)
    {
        // validation for constraint: int
        if (!is_null($iItemID) && !is_numeric($iItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iItemID)), __LINE__);
        }
        $this->iItemID = $iItemID;
        return $this;
    }
    /**
     * Get iGroupID value
     * @return int|null
     */
    public function getIGroupID()
    {
        return $this->iGroupID;
    }
    /**
     * Set iGroupID value
     * @param int $iGroupID
     * @return \Brainloop\Soap\StructType\SetPermissionsForGroup
     */
    public function setIGroupID($iGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($iGroupID) && !is_numeric($iGroupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iGroupID)), __LINE__);
        }
        $this->iGroupID = $iGroupID;
        return $this;
    }
    /**
     * Get ePermissions value
     * @return string|null
     */
    public function getEPermissions()
    {
        return $this->ePermissions;
    }
    /**
     * Set ePermissions value
     * @uses \Brainloop\Soap\EnumType\PermissionBits::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\PermissionBits::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ePermissions
     * @return \Brainloop\Soap\StructType\SetPermissionsForGroup
     */
    public function setEPermissions($ePermissions = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\PermissionBits::valueIsValid($ePermissions)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ePermissions, implode(', ', \Brainloop\Soap\EnumType\PermissionBits::getValidValues())), __LINE__);
        }
        $this->ePermissions = $ePermissions;
        return $this;
    }
    /**
     * Get bRecursive value
     * @return bool|null
     */
    public function getBRecursive()
    {
        return $this->bRecursive;
    }
    /**
     * Set bRecursive value
     * @param bool $bRecursive
     * @return \Brainloop\Soap\StructType\SetPermissionsForGroup
     */
    public function setBRecursive($bRecursive = null)
    {
        // validation for constraint: boolean
        if (!is_null($bRecursive) && !is_bool($bRecursive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bRecursive)), __LINE__);
        }
        $this->bRecursive = $bRecursive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SetPermissionsForGroup
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
