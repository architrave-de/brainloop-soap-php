<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserRegistrationParameters StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UserRegistrationParameters
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class UserRegistrationParameters extends AbstractStructBase
{
    /**
     * The DateFormat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DateFormat;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FirstName;
    /**
     * The LanguageID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $LanguageID;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastName;
    /**
     * The NotificationsDigests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $NotificationsDigests;
    /**
     * The NotificationsEmails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $NotificationsEmails;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Password;
    /**
     * The TimeFormat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TimeFormat;
    /**
     * The TimezoneOffsetInMinutes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TimezoneOffsetInMinutes;
    /**
     * Constructor method for UserRegistrationParameters
     * @uses UserRegistrationParameters::setDateFormat()
     * @uses UserRegistrationParameters::setFirstName()
     * @uses UserRegistrationParameters::setLanguageID()
     * @uses UserRegistrationParameters::setLastName()
     * @uses UserRegistrationParameters::setNotificationsDigests()
     * @uses UserRegistrationParameters::setNotificationsEmails()
     * @uses UserRegistrationParameters::setPassword()
     * @uses UserRegistrationParameters::setTimeFormat()
     * @uses UserRegistrationParameters::setTimezoneOffsetInMinutes()
     * @param string $dateFormat
     * @param string $firstName
     * @param int $languageID
     * @param string $lastName
     * @param bool $notificationsDigests
     * @param bool $notificationsEmails
     * @param string $password
     * @param string $timeFormat
     * @param int $timezoneOffsetInMinutes
     */
    public function __construct($dateFormat = null, $firstName = null, $languageID = null, $lastName = null, $notificationsDigests = null, $notificationsEmails = null, $password = null, $timeFormat = null, $timezoneOffsetInMinutes = null)
    {
        $this
            ->setDateFormat($dateFormat)
            ->setFirstName($firstName)
            ->setLanguageID($languageID)
            ->setLastName($lastName)
            ->setNotificationsDigests($notificationsDigests)
            ->setNotificationsEmails($notificationsEmails)
            ->setPassword($password)
            ->setTimeFormat($timeFormat)
            ->setTimezoneOffsetInMinutes($timezoneOffsetInMinutes);
    }
    /**
     * Get DateFormat value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDateFormat()
    {
        return isset($this->DateFormat) ? $this->DateFormat : null;
    }
    /**
     * Set DateFormat value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dateFormat
     * @return \Brainloop\Soap\StructType\UserRegistrationParameters
     */
    public function setDateFormat($dateFormat = null)
    {
        // validation for constraint: string
        if (!is_null($dateFormat) && !is_string($dateFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateFormat)), __LINE__);
        }
        if (is_null($dateFormat) || (is_array($dateFormat) && empty($dateFormat))) {
            unset($this->DateFormat);
        } else {
            $this->DateFormat = $dateFormat;
        }
        return $this;
    }
    /**
     * Get FirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstName()
    {
        return isset($this->FirstName) ? $this->FirstName : null;
    }
    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstName
     * @return \Brainloop\Soap\StructType\UserRegistrationParameters
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->FirstName);
        } else {
            $this->FirstName = $firstName;
        }
        return $this;
    }
    /**
     * Get LanguageID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getLanguageID()
    {
        return isset($this->LanguageID) ? $this->LanguageID : null;
    }
    /**
     * Set LanguageID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $languageID
     * @return \Brainloop\Soap\StructType\UserRegistrationParameters
     */
    public function setLanguageID($languageID = null)
    {
        // validation for constraint: int
        if (!is_null($languageID) && !is_numeric($languageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($languageID)), __LINE__);
        }
        if (is_null($languageID) || (is_array($languageID) && empty($languageID))) {
            unset($this->LanguageID);
        } else {
            $this->LanguageID = $languageID;
        }
        return $this;
    }
    /**
     * Get LastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastName()
    {
        return isset($this->LastName) ? $this->LastName : null;
    }
    /**
     * Set LastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastName
     * @return \Brainloop\Soap\StructType\UserRegistrationParameters
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        if (is_null($lastName) || (is_array($lastName) && empty($lastName))) {
            unset($this->LastName);
        } else {
            $this->LastName = $lastName;
        }
        return $this;
    }
    /**
     * Get NotificationsDigests value
     * @return bool|null
     */
    public function getNotificationsDigests()
    {
        return $this->NotificationsDigests;
    }
    /**
     * Set NotificationsDigests value
     * @param bool $notificationsDigests
     * @return \Brainloop\Soap\StructType\UserRegistrationParameters
     */
    public function setNotificationsDigests($notificationsDigests = null)
    {
        // validation for constraint: boolean
        if (!is_null($notificationsDigests) && !is_bool($notificationsDigests)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($notificationsDigests)), __LINE__);
        }
        $this->NotificationsDigests = $notificationsDigests;
        return $this;
    }
    /**
     * Get NotificationsEmails value
     * @return bool|null
     */
    public function getNotificationsEmails()
    {
        return $this->NotificationsEmails;
    }
    /**
     * Set NotificationsEmails value
     * @param bool $notificationsEmails
     * @return \Brainloop\Soap\StructType\UserRegistrationParameters
     */
    public function setNotificationsEmails($notificationsEmails = null)
    {
        // validation for constraint: boolean
        if (!is_null($notificationsEmails) && !is_bool($notificationsEmails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($notificationsEmails)), __LINE__);
        }
        $this->NotificationsEmails = $notificationsEmails;
        return $this;
    }
    /**
     * Get Password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword()
    {
        return isset($this->Password) ? $this->Password : null;
    }
    /**
     * Set Password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \Brainloop\Soap\StructType\UserRegistrationParameters
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->Password);
        } else {
            $this->Password = $password;
        }
        return $this;
    }
    /**
     * Get TimeFormat value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTimeFormat()
    {
        return isset($this->TimeFormat) ? $this->TimeFormat : null;
    }
    /**
     * Set TimeFormat value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $timeFormat
     * @return \Brainloop\Soap\StructType\UserRegistrationParameters
     */
    public function setTimeFormat($timeFormat = null)
    {
        // validation for constraint: string
        if (!is_null($timeFormat) && !is_string($timeFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeFormat)), __LINE__);
        }
        if (is_null($timeFormat) || (is_array($timeFormat) && empty($timeFormat))) {
            unset($this->TimeFormat);
        } else {
            $this->TimeFormat = $timeFormat;
        }
        return $this;
    }
    /**
     * Get TimezoneOffsetInMinutes value
     * @return int|null
     */
    public function getTimezoneOffsetInMinutes()
    {
        return $this->TimezoneOffsetInMinutes;
    }
    /**
     * Set TimezoneOffsetInMinutes value
     * @param int $timezoneOffsetInMinutes
     * @return \Brainloop\Soap\StructType\UserRegistrationParameters
     */
    public function setTimezoneOffsetInMinutes($timezoneOffsetInMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($timezoneOffsetInMinutes) && !is_numeric($timezoneOffsetInMinutes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($timezoneOffsetInMinutes)), __LINE__);
        }
        $this->TimezoneOffsetInMinutes = $timezoneOffsetInMinutes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\UserRegistrationParameters
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
