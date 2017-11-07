<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserPreferences StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UserPreferences
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class UserPreferences extends AbstractStructBase
{
    /**
     * The DisableFlashSMS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $DisableFlashSMS;
    /**
     * The MailEncryption
     * @var bool
     */
    public $MailEncryption;
    /**
     * The ShowFileExtensions
     * @var bool
     */
    public $ShowFileExtensions;
    /**
     * Constructor method for UserPreferences
     * @uses UserPreferences::setDisableFlashSMS()
     * @uses UserPreferences::setMailEncryption()
     * @uses UserPreferences::setShowFileExtensions()
     * @param bool $disableFlashSMS
     * @param bool $mailEncryption
     * @param bool $showFileExtensions
     */
    public function __construct($disableFlashSMS = null, $mailEncryption = null, $showFileExtensions = null)
    {
        $this
            ->setDisableFlashSMS($disableFlashSMS)
            ->setMailEncryption($mailEncryption)
            ->setShowFileExtensions($showFileExtensions);
    }
    /**
     * Get DisableFlashSMS value
     * @return bool|null
     */
    public function getDisableFlashSMS()
    {
        return $this->DisableFlashSMS;
    }
    /**
     * Set DisableFlashSMS value
     * @param bool $disableFlashSMS
     * @return \Brainloop\Soap\StructType\UserPreferences
     */
    public function setDisableFlashSMS($disableFlashSMS = null)
    {
        // validation for constraint: boolean
        if (!is_null($disableFlashSMS) && !is_bool($disableFlashSMS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($disableFlashSMS)), __LINE__);
        }
        $this->DisableFlashSMS = $disableFlashSMS;
        return $this;
    }
    /**
     * Get MailEncryption value
     * @return bool|null
     */
    public function getMailEncryption()
    {
        return $this->MailEncryption;
    }
    /**
     * Set MailEncryption value
     * @param bool $mailEncryption
     * @return \Brainloop\Soap\StructType\UserPreferences
     */
    public function setMailEncryption($mailEncryption = null)
    {
        // validation for constraint: boolean
        if (!is_null($mailEncryption) && !is_bool($mailEncryption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($mailEncryption)), __LINE__);
        }
        $this->MailEncryption = $mailEncryption;
        return $this;
    }
    /**
     * Get ShowFileExtensions value
     * @return bool|null
     */
    public function getShowFileExtensions()
    {
        return $this->ShowFileExtensions;
    }
    /**
     * Set ShowFileExtensions value
     * @param bool $showFileExtensions
     * @return \Brainloop\Soap\StructType\UserPreferences
     */
    public function setShowFileExtensions($showFileExtensions = null)
    {
        // validation for constraint: boolean
        if (!is_null($showFileExtensions) && !is_bool($showFileExtensions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($showFileExtensions)), __LINE__);
        }
        $this->ShowFileExtensions = $showFileExtensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\UserPreferences
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
