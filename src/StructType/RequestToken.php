<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestToken StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class RequestToken extends AbstractStructBase
{
    /**
     * The sUsername
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sUsername;
    /**
     * Constructor method for RequestToken
     * @uses RequestToken::setSUsername()
     * @param string $sUsername
     */
    public function __construct($sUsername = null)
    {
        $this
            ->setSUsername($sUsername);
    }
    /**
     * Get sUsername value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSUsername()
    {
        return isset($this->sUsername) ? $this->sUsername : null;
    }
    /**
     * Set sUsername value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sUsername
     * @return \Brainloop\Soap\StructType\RequestToken
     */
    public function setSUsername($sUsername = null)
    {
        // validation for constraint: string
        if (!is_null($sUsername) && !is_string($sUsername)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sUsername)), __LINE__);
        }
        if (is_null($sUsername) || (is_array($sUsername) && empty($sUsername))) {
            unset($this->sUsername);
        } else {
            $this->sUsername = $sUsername;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\RequestToken
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
