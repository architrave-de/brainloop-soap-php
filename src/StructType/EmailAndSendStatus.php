<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailAndSendStatus StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EmailAndSendStatus
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class EmailAndSendStatus extends StringAndItemSendStatus
{
    /**
     * The TokenHash
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TokenHash;
    /**
     * The TokenID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $TokenID;
    /**
     * Constructor method for EmailAndSendStatus
     * @uses EmailAndSendStatus::setTokenHash()
     * @uses EmailAndSendStatus::setTokenID()
     * @param string $tokenHash
     * @param int $tokenID
     */
    public function __construct($tokenHash = null, $tokenID = null)
    {
        $this
            ->setTokenHash($tokenHash)
            ->setTokenID($tokenID);
    }
    /**
     * Get TokenHash value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTokenHash()
    {
        return isset($this->TokenHash) ? $this->TokenHash : null;
    }
    /**
     * Set TokenHash value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tokenHash
     * @return \Brainloop\Soap\StructType\EmailAndSendStatus
     */
    public function setTokenHash($tokenHash = null)
    {
        // validation for constraint: string
        if (!is_null($tokenHash) && !is_string($tokenHash)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tokenHash)), __LINE__);
        }
        if (is_null($tokenHash) || (is_array($tokenHash) && empty($tokenHash))) {
            unset($this->TokenHash);
        } else {
            $this->TokenHash = $tokenHash;
        }
        return $this;
    }
    /**
     * Get TokenID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTokenID()
    {
        return isset($this->TokenID) ? $this->TokenID : null;
    }
    /**
     * Set TokenID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $tokenID
     * @return \Brainloop\Soap\StructType\EmailAndSendStatus
     */
    public function setTokenID($tokenID = null)
    {
        // validation for constraint: int
        if (!is_null($tokenID) && !is_numeric($tokenID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tokenID)), __LINE__);
        }
        if (is_null($tokenID) || (is_array($tokenID) && empty($tokenID))) {
            unset($this->TokenID);
        } else {
            $this->TokenID = $tokenID;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\EmailAndSendStatus
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
