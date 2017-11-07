<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SessionTokenRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SessionTokenRequest
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SessionTokenRequest extends AbstractStructBase
{
    /**
     * The Expires
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Expires;
    /**
     * The Receiver
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Receiver;
    /**
     * Constructor method for SessionTokenRequest
     * @uses SessionTokenRequest::setExpires()
     * @uses SessionTokenRequest::setReceiver()
     * @param string $expires
     * @param string $receiver
     */
    public function __construct($expires = null, $receiver = null)
    {
        $this
            ->setExpires($expires)
            ->setReceiver($receiver);
    }
    /**
     * Get Expires value
     * @return string|null
     */
    public function getExpires()
    {
        return $this->Expires;
    }
    /**
     * Set Expires value
     * @param string $expires
     * @return \Brainloop\Soap\StructType\SessionTokenRequest
     */
    public function setExpires($expires = null)
    {
        // validation for constraint: string
        if (!is_null($expires) && !is_string($expires)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expires)), __LINE__);
        }
        $this->Expires = $expires;
        return $this;
    }
    /**
     * Get Receiver value
     * @return string|null
     */
    public function getReceiver()
    {
        return $this->Receiver;
    }
    /**
     * Set Receiver value
     * @param string $receiver
     * @return \Brainloop\Soap\StructType\SessionTokenRequest
     */
    public function setReceiver($receiver = null)
    {
        // validation for constraint: string
        if (!is_null($receiver) && !is_string($receiver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiver)), __LINE__);
        }
        $this->Receiver = $receiver;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SessionTokenRequest
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
