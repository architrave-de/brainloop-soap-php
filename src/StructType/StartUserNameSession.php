<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartUserNameSession StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class StartUserNameSession extends AbstractStructBase
{
    /**
     * The sUserName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sUserName;
    /**
     * The sPassword
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sPassword;
    /**
     * Constructor method for StartUserNameSession
     * @uses StartUserNameSession::setSUserName()
     * @uses StartUserNameSession::setSPassword()
     * @param string $sUserName
     * @param string $sPassword
     */
    public function __construct($sUserName = null, $sPassword = null)
    {
        $this
            ->setSUserName($sUserName)
            ->setSPassword($sPassword);
    }
    /**
     * Get sUserName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSUserName()
    {
        return isset($this->sUserName) ? $this->sUserName : null;
    }
    /**
     * Set sUserName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sUserName
     * @return \Brainloop\Soap\StructType\StartUserNameSession
     */
    public function setSUserName($sUserName = null)
    {
        // validation for constraint: string
        if (!is_null($sUserName) && !is_string($sUserName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sUserName)), __LINE__);
        }
        if (is_null($sUserName) || (is_array($sUserName) && empty($sUserName))) {
            unset($this->sUserName);
        } else {
            $this->sUserName = $sUserName;
        }
        return $this;
    }
    /**
     * Get sPassword value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSPassword()
    {
        return isset($this->sPassword) ? $this->sPassword : null;
    }
    /**
     * Set sPassword value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sPassword
     * @return \Brainloop\Soap\StructType\StartUserNameSession
     */
    public function setSPassword($sPassword = null)
    {
        // validation for constraint: string
        if (!is_null($sPassword) && !is_string($sPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sPassword)), __LINE__);
        }
        if (is_null($sPassword) || (is_array($sPassword) && empty($sPassword))) {
            unset($this->sPassword);
        } else {
            $this->sPassword = $sPassword;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\StartUserNameSession
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
