<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPermissionsForUser StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetPermissionsForUser extends AbstractStructBase
{
    /**
     * The iItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iItemID;
    /**
     * The iUserID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $iUserID;
    /**
     * The ePermissionBits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ePermissionBits;
    /**
     * The bRecursive
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bRecursive;
    /**
     * Constructor method for SetPermissionsForUser
     * @uses SetPermissionsForUser::setIItemID()
     * @uses SetPermissionsForUser::setIUserID()
     * @uses SetPermissionsForUser::setEPermissionBits()
     * @uses SetPermissionsForUser::setBRecursive()
     * @param int $iItemID
     * @param int $iUserID
     * @param string $ePermissionBits
     * @param bool $bRecursive
     */
    public function __construct($iItemID = null, $iUserID = null, $ePermissionBits = null, $bRecursive = null)
    {
        $this
            ->setIItemID($iItemID)
            ->setIUserID($iUserID)
            ->setEPermissionBits($ePermissionBits)
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
     * @return \Brainloop\Soap\StructType\SetPermissionsForUser
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
     * Get iUserID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getIUserID()
    {
        return isset($this->iUserID) ? $this->iUserID : null;
    }
    /**
     * Set iUserID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $iUserID
     * @return \Brainloop\Soap\StructType\SetPermissionsForUser
     */
    public function setIUserID($iUserID = null)
    {
        // validation for constraint: int
        if (!is_null($iUserID) && !is_numeric($iUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iUserID)), __LINE__);
        }
        if (is_null($iUserID) || (is_array($iUserID) && empty($iUserID))) {
            unset($this->iUserID);
        } else {
            $this->iUserID = $iUserID;
        }
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
     * @return \Brainloop\Soap\StructType\SetPermissionsForUser
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
     * @return \Brainloop\Soap\StructType\SetPermissionsForUser
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
     * @return \Brainloop\Soap\StructType\SetPermissionsForUser
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
