<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Identify StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class Identify extends AbstractStructBase
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
     * The sClient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sClient;
    /**
     * The sVersion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sVersion;
    /**
     * The sClientKey
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sClientKey;
    /**
     * The sOS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sOS;
    /**
     * The lTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $lTimestamp;
    /**
     * The sHash
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sHash;
    /**
     * Constructor method for Identify
     * @uses Identify::setSSessionKey()
     * @uses Identify::setSClient()
     * @uses Identify::setSVersion()
     * @uses Identify::setSClientKey()
     * @uses Identify::setSOS()
     * @uses Identify::setLTimestamp()
     * @uses Identify::setSHash()
     * @param string $sSessionKey
     * @param string $sClient
     * @param string $sVersion
     * @param string $sClientKey
     * @param string $sOS
     * @param int $lTimestamp
     * @param string $sHash
     */
    public function __construct($sSessionKey = null, $sClient = null, $sVersion = null, $sClientKey = null, $sOS = null, $lTimestamp = null, $sHash = null)
    {
        $this
            ->setSSessionKey($sSessionKey)
            ->setSClient($sClient)
            ->setSVersion($sVersion)
            ->setSClientKey($sClientKey)
            ->setSOS($sOS)
            ->setLTimestamp($lTimestamp)
            ->setSHash($sHash);
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
     * @return \Brainloop\Soap\StructType\Identify
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
     * Get sClient value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSClient()
    {
        return isset($this->sClient) ? $this->sClient : null;
    }
    /**
     * Set sClient value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sClient
     * @return \Brainloop\Soap\StructType\Identify
     */
    public function setSClient($sClient = null)
    {
        // validation for constraint: string
        if (!is_null($sClient) && !is_string($sClient)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sClient)), __LINE__);
        }
        if (is_null($sClient) || (is_array($sClient) && empty($sClient))) {
            unset($this->sClient);
        } else {
            $this->sClient = $sClient;
        }
        return $this;
    }
    /**
     * Get sVersion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSVersion()
    {
        return isset($this->sVersion) ? $this->sVersion : null;
    }
    /**
     * Set sVersion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sVersion
     * @return \Brainloop\Soap\StructType\Identify
     */
    public function setSVersion($sVersion = null)
    {
        // validation for constraint: string
        if (!is_null($sVersion) && !is_string($sVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sVersion)), __LINE__);
        }
        if (is_null($sVersion) || (is_array($sVersion) && empty($sVersion))) {
            unset($this->sVersion);
        } else {
            $this->sVersion = $sVersion;
        }
        return $this;
    }
    /**
     * Get sClientKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSClientKey()
    {
        return isset($this->sClientKey) ? $this->sClientKey : null;
    }
    /**
     * Set sClientKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sClientKey
     * @return \Brainloop\Soap\StructType\Identify
     */
    public function setSClientKey($sClientKey = null)
    {
        // validation for constraint: string
        if (!is_null($sClientKey) && !is_string($sClientKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sClientKey)), __LINE__);
        }
        if (is_null($sClientKey) || (is_array($sClientKey) && empty($sClientKey))) {
            unset($this->sClientKey);
        } else {
            $this->sClientKey = $sClientKey;
        }
        return $this;
    }
    /**
     * Get sOS value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSOS()
    {
        return isset($this->sOS) ? $this->sOS : null;
    }
    /**
     * Set sOS value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sOS
     * @return \Brainloop\Soap\StructType\Identify
     */
    public function setSOS($sOS = null)
    {
        // validation for constraint: string
        if (!is_null($sOS) && !is_string($sOS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sOS)), __LINE__);
        }
        if (is_null($sOS) || (is_array($sOS) && empty($sOS))) {
            unset($this->sOS);
        } else {
            $this->sOS = $sOS;
        }
        return $this;
    }
    /**
     * Get lTimestamp value
     * @return int|null
     */
    public function getLTimestamp()
    {
        return $this->lTimestamp;
    }
    /**
     * Set lTimestamp value
     * @param int $lTimestamp
     * @return \Brainloop\Soap\StructType\Identify
     */
    public function setLTimestamp($lTimestamp = null)
    {
        // validation for constraint: int
        if (!is_null($lTimestamp) && !is_numeric($lTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lTimestamp)), __LINE__);
        }
        $this->lTimestamp = $lTimestamp;
        return $this;
    }
    /**
     * Get sHash value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSHash()
    {
        return isset($this->sHash) ? $this->sHash : null;
    }
    /**
     * Set sHash value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sHash
     * @return \Brainloop\Soap\StructType\Identify
     */
    public function setSHash($sHash = null)
    {
        // validation for constraint: string
        if (!is_null($sHash) && !is_string($sHash)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sHash)), __LINE__);
        }
        if (is_null($sHash) || (is_array($sHash) && empty($sHash))) {
            unset($this->sHash);
        } else {
            $this->sHash = $sHash;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\Identify
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
