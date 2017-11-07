<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InviteUsers StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class InviteUsers extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
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
     * The bSendMail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bSendMail;
    /**
     * Constructor method for InviteUsers
     * @uses InviteUsers::setIDataroomID()
     * @uses InviteUsers::setAUsers()
     * @uses InviteUsers::setIGroupID()
     * @uses InviteUsers::setILanguageID()
     * @uses InviteUsers::setSComment()
     * @uses InviteUsers::setBSendMail()
     * @param int $iDataroomID
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $aUsers
     * @param int $iGroupID
     * @param int $iLanguageID
     * @param string $sComment
     * @param bool $bSendMail
     */
    public function __construct($iDataroomID = null, \Brainloop\Soap\ArrayType\ArrayOfstring $aUsers = null, $iGroupID = null, $iLanguageID = null, $sComment = null, $bSendMail = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setAUsers($aUsers)
            ->setIGroupID($iGroupID)
            ->setILanguageID($iLanguageID)
            ->setSComment($sComment)
            ->setBSendMail($bSendMail);
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
     * @return \Brainloop\Soap\StructType\InviteUsers
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
     * @return \Brainloop\Soap\StructType\InviteUsers
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
     * @return \Brainloop\Soap\StructType\InviteUsers
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
     * @return \Brainloop\Soap\StructType\InviteUsers
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
     * @return \Brainloop\Soap\StructType\InviteUsers
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
     * Get bSendMail value
     * @return bool|null
     */
    public function getBSendMail()
    {
        return $this->bSendMail;
    }
    /**
     * Set bSendMail value
     * @param bool $bSendMail
     * @return \Brainloop\Soap\StructType\InviteUsers
     */
    public function setBSendMail($bSendMail = null)
    {
        // validation for constraint: boolean
        if (!is_null($bSendMail) && !is_bool($bSendMail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bSendMail)), __LINE__);
        }
        $this->bSendMail = $bSendMail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\InviteUsers
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
