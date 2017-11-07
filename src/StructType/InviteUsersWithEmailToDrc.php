<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InviteUsersWithEmailToDrc StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class InviteUsersWithEmailToDrc extends AbstractStructBase
{
    /**
     * The drcId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $drcId;
    /**
     * The aUsers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfstring
     */
    public $aUsers;
    /**
     * The iGroupID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iGroupID;
    /**
     * The iLanguageID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iLanguageID;
    /**
     * The sComment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sComment;
    /**
     * The sendEmail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $sendEmail;
    /**
     * Constructor method for InviteUsersWithEmailToDrc
     * @uses InviteUsersWithEmailToDrc::setDrcId()
     * @uses InviteUsersWithEmailToDrc::setAUsers()
     * @uses InviteUsersWithEmailToDrc::setIGroupID()
     * @uses InviteUsersWithEmailToDrc::setILanguageID()
     * @uses InviteUsersWithEmailToDrc::setSComment()
     * @uses InviteUsersWithEmailToDrc::setSendEmail()
     * @param int $drcId
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $aUsers
     * @param int $iGroupID
     * @param int $iLanguageID
     * @param string $sComment
     * @param bool $sendEmail
     */
    public function __construct($drcId = null, \Brainloop\Soap\ArrayType\ArrayOfstring $aUsers = null, $iGroupID = null, $iLanguageID = null, $sComment = null, $sendEmail = null)
    {
        $this
            ->setDrcId($drcId)
            ->setAUsers($aUsers)
            ->setIGroupID($iGroupID)
            ->setILanguageID($iLanguageID)
            ->setSComment($sComment)
            ->setSendEmail($sendEmail);
    }
    /**
     * Get drcId value
     * @return int|null
     */
    public function getDrcId()
    {
        return $this->drcId;
    }
    /**
     * Set drcId value
     * @param int $drcId
     * @return \Brainloop\Soap\StructType\InviteUsersWithEmailToDrc
     */
    public function setDrcId($drcId = null)
    {
        // validation for constraint: int
        if (!is_null($drcId) && !is_numeric($drcId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($drcId)), __LINE__);
        }
        $this->drcId = $drcId;
        return $this;
    }
    /**
     * Get aUsers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfstring|null
     */
    public function getAUsers()
    {
        return isset($this->aUsers) ? $this->aUsers : null;
    }
    /**
     * Set aUsers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $aUsers
     * @return \Brainloop\Soap\StructType\InviteUsersWithEmailToDrc
     */
    public function setAUsers(\Brainloop\Soap\ArrayType\ArrayOfstring $aUsers = null)
    {
        if (is_null($aUsers) || (is_array($aUsers) && empty($aUsers))) {
            unset($this->aUsers);
        } else {
            $this->aUsers = $aUsers;
        }
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
     * @return \Brainloop\Soap\StructType\InviteUsersWithEmailToDrc
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
     * Get iLanguageID value
     * @return int|null
     */
    public function getILanguageID()
    {
        return $this->iLanguageID;
    }
    /**
     * Set iLanguageID value
     * @param int $iLanguageID
     * @return \Brainloop\Soap\StructType\InviteUsersWithEmailToDrc
     */
    public function setILanguageID($iLanguageID = null)
    {
        // validation for constraint: int
        if (!is_null($iLanguageID) && !is_numeric($iLanguageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iLanguageID)), __LINE__);
        }
        $this->iLanguageID = $iLanguageID;
        return $this;
    }
    /**
     * Get sComment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSComment()
    {
        return isset($this->sComment) ? $this->sComment : null;
    }
    /**
     * Set sComment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sComment
     * @return \Brainloop\Soap\StructType\InviteUsersWithEmailToDrc
     */
    public function setSComment($sComment = null)
    {
        // validation for constraint: string
        if (!is_null($sComment) && !is_string($sComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sComment)), __LINE__);
        }
        if (is_null($sComment) || (is_array($sComment) && empty($sComment))) {
            unset($this->sComment);
        } else {
            $this->sComment = $sComment;
        }
        return $this;
    }
    /**
     * Get sendEmail value
     * @return bool|null
     */
    public function getSendEmail()
    {
        return $this->sendEmail;
    }
    /**
     * Set sendEmail value
     * @param bool $sendEmail
     * @return \Brainloop\Soap\StructType\InviteUsersWithEmailToDrc
     */
    public function setSendEmail($sendEmail = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendEmail) && !is_bool($sendEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sendEmail)), __LINE__);
        }
        $this->sendEmail = $sendEmail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\InviteUsersWithEmailToDrc
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
