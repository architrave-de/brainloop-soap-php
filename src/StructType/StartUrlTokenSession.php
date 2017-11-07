<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartUrlTokenSession StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class StartUrlTokenSession extends AbstractStructBase
{
    /**
     * The iTokenID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iTokenID;
    /**
     * The sTokenHash
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sTokenHash;
    /**
     * Constructor method for StartUrlTokenSession
     * @uses StartUrlTokenSession::setITokenID()
     * @uses StartUrlTokenSession::setSTokenHash()
     * @param int $iTokenID
     * @param string $sTokenHash
     */
    public function __construct($iTokenID = null, $sTokenHash = null)
    {
        $this
            ->setITokenID($iTokenID)
            ->setSTokenHash($sTokenHash);
    }
    /**
     * Get iTokenID value
     * @return int|null
     */
    public function getITokenID()
    {
        return $this->iTokenID;
    }
    /**
     * Set iTokenID value
     * @param int $iTokenID
     * @return \Brainloop\Soap\StructType\StartUrlTokenSession
     */
    public function setITokenID($iTokenID = null)
    {
        // validation for constraint: int
        if (!is_null($iTokenID) && !is_numeric($iTokenID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iTokenID)), __LINE__);
        }
        $this->iTokenID = $iTokenID;
        return $this;
    }
    /**
     * Get sTokenHash value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSTokenHash()
    {
        return isset($this->sTokenHash) ? $this->sTokenHash : null;
    }
    /**
     * Set sTokenHash value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sTokenHash
     * @return \Brainloop\Soap\StructType\StartUrlTokenSession
     */
    public function setSTokenHash($sTokenHash = null)
    {
        // validation for constraint: string
        if (!is_null($sTokenHash) && !is_string($sTokenHash)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sTokenHash)), __LINE__);
        }
        if (is_null($sTokenHash) || (is_array($sTokenHash) && empty($sTokenHash))) {
            unset($this->sTokenHash);
        } else {
            $this->sTokenHash = $sTokenHash;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\StartUrlTokenSession
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