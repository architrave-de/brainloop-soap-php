<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SessionToken StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SessionToken
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SessionToken extends DataObjectOfSessionTokenMTBpn2vZ
{
    /**
     * The CreateDate
     * @var string
     */
    public $CreateDate;
    /**
     * The ExpireDate
     * @var string
     */
    public $ExpireDate;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string
     */
    public $ID;
    /**
     * The LoginType
     * @var string
     */
    public $LoginType;
    /**
     * The UserID
     * @var int
     */
    public $UserID;
    /**
     * Constructor method for SessionToken
     * @uses SessionToken::setCreateDate()
     * @uses SessionToken::setExpireDate()
     * @uses SessionToken::setID()
     * @uses SessionToken::setLoginType()
     * @uses SessionToken::setUserID()
     * @param string $createDate
     * @param string $expireDate
     * @param string $iD
     * @param string $loginType
     * @param int $userID
     */
    public function __construct($createDate = null, $expireDate = null, $iD = null, $loginType = null, $userID = null)
    {
        $this
            ->setCreateDate($createDate)
            ->setExpireDate($expireDate)
            ->setID($iD)
            ->setLoginType($loginType)
            ->setUserID($userID);
    }
    /**
     * Get CreateDate value
     * @return string|null
     */
    public function getCreateDate()
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \Brainloop\Soap\StructType\SessionToken
     */
    public function setCreateDate($createDate = null)
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createDate)), __LINE__);
        }
        $this->CreateDate = $createDate;
        return $this;
    }
    /**
     * Get ExpireDate value
     * @return string|null
     */
    public function getExpireDate()
    {
        return $this->ExpireDate;
    }
    /**
     * Set ExpireDate value
     * @param string $expireDate
     * @return \Brainloop\Soap\StructType\SessionToken
     */
    public function setExpireDate($expireDate = null)
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expireDate)), __LINE__);
        }
        $this->ExpireDate = $expireDate;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Brainloop\Soap\StructType\SessionToken
     */
    public function setID($iD = null)
    {
        // validation for constraint: pattern
        if (is_scalar($iD) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}", "%s" given', var_export($iD, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get LoginType value
     * @return string|null
     */
    public function getLoginType()
    {
        return $this->LoginType;
    }
    /**
     * Set LoginType value
     * @uses \Brainloop\Soap\EnumType\LoginMethods::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\LoginMethods::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $loginType
     * @return \Brainloop\Soap\StructType\SessionToken
     */
    public function setLoginType($loginType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\LoginMethods::valueIsValid($loginType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $loginType, implode(', ', \Brainloop\Soap\EnumType\LoginMethods::getValidValues())), __LINE__);
        }
        $this->LoginType = $loginType;
        return $this;
    }
    /**
     * Get UserID value
     * @return int|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param int $userID
     * @return \Brainloop\Soap\StructType\SessionToken
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: int
        if (!is_null($userID) && !is_numeric($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SessionToken
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
