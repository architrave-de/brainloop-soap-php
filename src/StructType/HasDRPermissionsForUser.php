<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HasDRPermissionsForUser StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class HasDRPermissionsForUser extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
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
     * The iUserID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $iUserID;
    /**
     * Constructor method for HasDRPermissionsForUser
     * @uses HasDRPermissionsForUser::setIDataroomID()
     * @uses HasDRPermissionsForUser::setEPermissionBits()
     * @uses HasDRPermissionsForUser::setBAny()
     * @uses HasDRPermissionsForUser::setIUserID()
     * @param int $iDataroomID
     * @param string $ePermissionBits
     * @param bool $bAny
     * @param int $iUserID
     */
    public function __construct($iDataroomID = null, $ePermissionBits = null, $bAny = null, $iUserID = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setEPermissionBits($ePermissionBits)
            ->setBAny($bAny)
            ->setIUserID($iUserID);
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
     * @return \Brainloop\Soap\StructType\HasDRPermissionsForUser
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
     * @return \Brainloop\Soap\StructType\HasDRPermissionsForUser
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
     * @return \Brainloop\Soap\StructType\HasDRPermissionsForUser
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
     * @return \Brainloop\Soap\StructType\HasDRPermissionsForUser
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\HasDRPermissionsForUser
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
