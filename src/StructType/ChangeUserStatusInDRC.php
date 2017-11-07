<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeUserStatusInDRC StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ChangeUserStatusInDRC extends AbstractStructBase
{
    /**
     * The iDrcId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDrcId;
    /**
     * The iUserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iUserId;
    /**
     * The eUserStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eUserStatus;
    /**
     * Constructor method for ChangeUserStatusInDRC
     * @uses ChangeUserStatusInDRC::setIDrcId()
     * @uses ChangeUserStatusInDRC::setIUserId()
     * @uses ChangeUserStatusInDRC::setEUserStatus()
     * @param int $iDrcId
     * @param int $iUserId
     * @param string $eUserStatus
     */
    public function __construct($iDrcId = null, $iUserId = null, $eUserStatus = null)
    {
        $this
            ->setIDrcId($iDrcId)
            ->setIUserId($iUserId)
            ->setEUserStatus($eUserStatus);
    }
    /**
     * Get iDrcId value
     * @return int|null
     */
    public function getIDrcId()
    {
        return $this->iDrcId;
    }
    /**
     * Set iDrcId value
     * @param int $iDrcId
     * @return \Brainloop\Soap\StructType\ChangeUserStatusInDRC
     */
    public function setIDrcId($iDrcId = null)
    {
        // validation for constraint: int
        if (!is_null($iDrcId) && !is_numeric($iDrcId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDrcId)), __LINE__);
        }
        $this->iDrcId = $iDrcId;
        return $this;
    }
    /**
     * Get iUserId value
     * @return int|null
     */
    public function getIUserId()
    {
        return $this->iUserId;
    }
    /**
     * Set iUserId value
     * @param int $iUserId
     * @return \Brainloop\Soap\StructType\ChangeUserStatusInDRC
     */
    public function setIUserId($iUserId = null)
    {
        // validation for constraint: int
        if (!is_null($iUserId) && !is_numeric($iUserId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iUserId)), __LINE__);
        }
        $this->iUserId = $iUserId;
        return $this;
    }
    /**
     * Get eUserStatus value
     * @return string|null
     */
    public function getEUserStatus()
    {
        return $this->eUserStatus;
    }
    /**
     * Set eUserStatus value
     * @uses \Brainloop\Soap\EnumType\UserStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\UserStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eUserStatus
     * @return \Brainloop\Soap\StructType\ChangeUserStatusInDRC
     */
    public function setEUserStatus($eUserStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\UserStatus::valueIsValid($eUserStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eUserStatus, implode(', ', \Brainloop\Soap\EnumType\UserStatus::getValidValues())), __LINE__);
        }
        $this->eUserStatus = $eUserStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ChangeUserStatusInDRC
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
