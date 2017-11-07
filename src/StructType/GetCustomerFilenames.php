<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerFilenames StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetCustomerFilenames extends AbstractStructBase
{
    /**
     * The iDRCID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $iDRCID;
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $iDataroomID;
    /**
     * The eType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eType;
    /**
     * Constructor method for GetCustomerFilenames
     * @uses GetCustomerFilenames::setIDRCID()
     * @uses GetCustomerFilenames::setIDataroomID()
     * @uses GetCustomerFilenames::setEType()
     * @param int $iDRCID
     * @param int $iDataroomID
     * @param string $eType
     */
    public function __construct($iDRCID = null, $iDataroomID = null, $eType = null)
    {
        $this
            ->setIDRCID($iDRCID)
            ->setIDataroomID($iDataroomID)
            ->setEType($eType);
    }
    /**
     * Get iDRCID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getIDRCID()
    {
        return isset($this->iDRCID) ? $this->iDRCID : null;
    }
    /**
     * Set iDRCID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $iDRCID
     * @return \Brainloop\Soap\StructType\GetCustomerFilenames
     */
    public function setIDRCID($iDRCID = null)
    {
        // validation for constraint: int
        if (!is_null($iDRCID) && !is_numeric($iDRCID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDRCID)), __LINE__);
        }
        if (is_null($iDRCID) || (is_array($iDRCID) && empty($iDRCID))) {
            unset($this->iDRCID);
        } else {
            $this->iDRCID = $iDRCID;
        }
        return $this;
    }
    /**
     * Get iDataroomID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getIDataroomID()
    {
        return isset($this->iDataroomID) ? $this->iDataroomID : null;
    }
    /**
     * Set iDataroomID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $iDataroomID
     * @return \Brainloop\Soap\StructType\GetCustomerFilenames
     */
    public function setIDataroomID($iDataroomID = null)
    {
        // validation for constraint: int
        if (!is_null($iDataroomID) && !is_numeric($iDataroomID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDataroomID)), __LINE__);
        }
        if (is_null($iDataroomID) || (is_array($iDataroomID) && empty($iDataroomID))) {
            unset($this->iDataroomID);
        } else {
            $this->iDataroomID = $iDataroomID;
        }
        return $this;
    }
    /**
     * Get eType value
     * @return string|null
     */
    public function getEType()
    {
        return $this->eType;
    }
    /**
     * Set eType value
     * @uses \Brainloop\Soap\EnumType\CustomerFileTypes::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\CustomerFileTypes::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eType
     * @return \Brainloop\Soap\StructType\GetCustomerFilenames
     */
    public function setEType($eType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\CustomerFileTypes::valueIsValid($eType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eType, implode(', ', \Brainloop\Soap\EnumType\CustomerFileTypes::getValidValues())), __LINE__);
        }
        $this->eType = $eType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetCustomerFilenames
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
