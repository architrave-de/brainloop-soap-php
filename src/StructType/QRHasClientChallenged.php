<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QRHasClientChallenged StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class QRHasClientChallenged extends AbstractStructBase
{
    /**
     * The sSessionKey
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sSessionKey;
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The deleteToken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $deleteToken;
    /**
     * Constructor method for QRHasClientChallenged
     * @uses QRHasClientChallenged::setSSessionKey()
     * @uses QRHasClientChallenged::setIDataroomID()
     * @uses QRHasClientChallenged::setDeleteToken()
     * @param string $sSessionKey
     * @param int $iDataroomID
     * @param bool $deleteToken
     */
    public function __construct($sSessionKey = null, $iDataroomID = null, $deleteToken = null)
    {
        $this
            ->setSSessionKey($sSessionKey)
            ->setIDataroomID($iDataroomID)
            ->setDeleteToken($deleteToken);
    }
    /**
     * Get sSessionKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSSessionKey()
    {
        return isset($this->sSessionKey) ? $this->sSessionKey : null;
    }
    /**
     * Set sSessionKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sSessionKey
     * @return \Brainloop\Soap\StructType\QRHasClientChallenged
     */
    public function setSSessionKey($sSessionKey = null)
    {
        // validation for constraint: string
        if (!is_null($sSessionKey) && !is_string($sSessionKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sSessionKey)), __LINE__);
        }
        if (is_null($sSessionKey) || (is_array($sSessionKey) && empty($sSessionKey))) {
            unset($this->sSessionKey);
        } else {
            $this->sSessionKey = $sSessionKey;
        }
        return $this;
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
     * @return \Brainloop\Soap\StructType\QRHasClientChallenged
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
     * Get deleteToken value
     * @return bool|null
     */
    public function getDeleteToken()
    {
        return $this->deleteToken;
    }
    /**
     * Set deleteToken value
     * @param bool $deleteToken
     * @return \Brainloop\Soap\StructType\QRHasClientChallenged
     */
    public function setDeleteToken($deleteToken = null)
    {
        // validation for constraint: boolean
        if (!is_null($deleteToken) && !is_bool($deleteToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($deleteToken)), __LINE__);
        }
        $this->deleteToken = $deleteToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\QRHasClientChallenged
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
