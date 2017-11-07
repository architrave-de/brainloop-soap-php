<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TermsAndConditions StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TermsAndConditions
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class TermsAndConditions extends BLItem
{
    /**
     * The CanAcept
     * @var bool
     */
    public $CanAcept;
    /**
     * The Document
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\StructType\BLItem
     */
    public $Document;
    /**
     * The Html
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Html;
    /**
     * The IsAccepted
     * @var bool
     */
    public $IsAccepted;
    /**
     * The Token
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Token;
    /**
     * Constructor method for TermsAndConditions
     * @uses TermsAndConditions::setCanAcept()
     * @uses TermsAndConditions::setDocument()
     * @uses TermsAndConditions::setHtml()
     * @uses TermsAndConditions::setIsAccepted()
     * @uses TermsAndConditions::setToken()
     * @param bool $canAcept
     * @param \Brainloop\Soap\StructType\BLItem $document
     * @param string $html
     * @param bool $isAccepted
     * @param string $token
     */
    public function __construct($canAcept = null, \Brainloop\Soap\StructType\BLItem $document = null, $html = null, $isAccepted = null, $token = null)
    {
        $this
            ->setCanAcept($canAcept)
            ->setDocument($document)
            ->setHtml($html)
            ->setIsAccepted($isAccepted)
            ->setToken($token);
    }
    /**
     * Get CanAcept value
     * @return bool|null
     */
    public function getCanAcept()
    {
        return $this->CanAcept;
    }
    /**
     * Set CanAcept value
     * @param bool $canAcept
     * @return \Brainloop\Soap\StructType\TermsAndConditions
     */
    public function setCanAcept($canAcept = null)
    {
        // validation for constraint: boolean
        if (!is_null($canAcept) && !is_bool($canAcept)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($canAcept)), __LINE__);
        }
        $this->CanAcept = $canAcept;
        return $this;
    }
    /**
     * Get Document value
     * @return \Brainloop\Soap\StructType\BLItem|null
     */
    public function getDocument()
    {
        return $this->Document;
    }
    /**
     * Set Document value
     * @param \Brainloop\Soap\StructType\BLItem $document
     * @return \Brainloop\Soap\StructType\TermsAndConditions
     */
    public function setDocument(\Brainloop\Soap\StructType\BLItem $document = null)
    {
        $this->Document = $document;
        return $this;
    }
    /**
     * Get Html value
     * @return string|null
     */
    public function getHtml()
    {
        return $this->Html;
    }
    /**
     * Set Html value
     * @param string $html
     * @return \Brainloop\Soap\StructType\TermsAndConditions
     */
    public function setHtml($html = null)
    {
        // validation for constraint: string
        if (!is_null($html) && !is_string($html)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($html)), __LINE__);
        }
        $this->Html = $html;
        return $this;
    }
    /**
     * Get IsAccepted value
     * @return bool|null
     */
    public function getIsAccepted()
    {
        return $this->IsAccepted;
    }
    /**
     * Set IsAccepted value
     * @param bool $isAccepted
     * @return \Brainloop\Soap\StructType\TermsAndConditions
     */
    public function setIsAccepted($isAccepted = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAccepted) && !is_bool($isAccepted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAccepted)), __LINE__);
        }
        $this->IsAccepted = $isAccepted;
        return $this;
    }
    /**
     * Get Token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param string $token
     * @return \Brainloop\Soap\StructType\TermsAndConditions
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($token)), __LINE__);
        }
        $this->Token = $token;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\TermsAndConditions
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
