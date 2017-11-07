<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserByEmail StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetUserByEmail extends AbstractStructBase
{
    /**
     * The sEmailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sEmailAddress;
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * Constructor method for GetUserByEmail
     * @uses GetUserByEmail::setSEmailAddress()
     * @uses GetUserByEmail::setIDataroomID()
     * @param string $sEmailAddress
     * @param int $iDataroomID
     */
    public function __construct($sEmailAddress = null, $iDataroomID = null)
    {
        $this
            ->setSEmailAddress($sEmailAddress)
            ->setIDataroomID($iDataroomID);
    }
    /**
     * Get sEmailAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSEmailAddress()
    {
        return isset($this->sEmailAddress) ? $this->sEmailAddress : null;
    }
    /**
     * Set sEmailAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sEmailAddress
     * @return \Brainloop\Soap\StructType\GetUserByEmail
     */
    public function setSEmailAddress($sEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($sEmailAddress) && !is_string($sEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sEmailAddress)), __LINE__);
        }
        if (is_null($sEmailAddress) || (is_array($sEmailAddress) && empty($sEmailAddress))) {
            unset($this->sEmailAddress);
        } else {
            $this->sEmailAddress = $sEmailAddress;
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
     * @return \Brainloop\Soap\StructType\GetUserByEmail
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetUserByEmail
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
