<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptTermsAndConditions StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class AcceptTermsAndConditions extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The sToken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sToken;
    /**
     * Constructor method for AcceptTermsAndConditions
     * @uses AcceptTermsAndConditions::setIDataroomID()
     * @uses AcceptTermsAndConditions::setSToken()
     * @param int $iDataroomID
     * @param string $sToken
     */
    public function __construct($iDataroomID = null, $sToken = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setSToken($sToken);
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
     * @return \Brainloop\Soap\StructType\AcceptTermsAndConditions
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
     * Get sToken value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSToken()
    {
        return isset($this->sToken) ? $this->sToken : null;
    }
    /**
     * Set sToken value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sToken
     * @return \Brainloop\Soap\StructType\AcceptTermsAndConditions
     */
    public function setSToken($sToken = null)
    {
        // validation for constraint: string
        if (!is_null($sToken) && !is_string($sToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sToken)), __LINE__);
        }
        if (is_null($sToken) || (is_array($sToken) && empty($sToken))) {
            unset($this->sToken);
        } else {
            $this->sToken = $sToken;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\AcceptTermsAndConditions
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
