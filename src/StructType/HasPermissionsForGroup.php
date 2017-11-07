<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HasPermissionsForGroup StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class HasPermissionsForGroup extends AbstractStructBase
{
    /**
     * The iItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iItemID;
    /**
     * The ePermissionBits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ePermissionBits;
    /**
     * The bAny
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bAny;
    /**
     * The iGroupID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iGroupID;
    /**
     * Constructor method for HasPermissionsForGroup
     * @uses HasPermissionsForGroup::setIItemID()
     * @uses HasPermissionsForGroup::setEPermissionBits()
     * @uses HasPermissionsForGroup::setBAny()
     * @uses HasPermissionsForGroup::setIGroupID()
     * @param int $iItemID
     * @param string $ePermissionBits
     * @param bool $bAny
     * @param int $iGroupID
     */
    public function __construct($iItemID = null, $ePermissionBits = null, $bAny = null, $iGroupID = null)
    {
        $this
            ->setIItemID($iItemID)
            ->setEPermissionBits($ePermissionBits)
            ->setBAny($bAny)
            ->setIGroupID($iGroupID);
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
     * @return \Brainloop\Soap\StructType\HasPermissionsForGroup
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
     * @return \Brainloop\Soap\StructType\HasPermissionsForGroup
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
     * Get bAny value
     * @return bool|null
     */
    public function getBAny()
    {
        return $this->bAny;
    }
    /**
     * Set bAny value
     * @param bool $bAny
     * @return \Brainloop\Soap\StructType\HasPermissionsForGroup
     */
    public function setBAny($bAny = null)
    {
        // validation for constraint: boolean
        if (!is_null($bAny) && !is_bool($bAny)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bAny)), __LINE__);
        }
        $this->bAny = $bAny;
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
     * @return \Brainloop\Soap\StructType\HasPermissionsForGroup
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\HasPermissionsForGroup
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
