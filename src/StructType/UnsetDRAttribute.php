<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnsetDRAttribute StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class UnsetDRAttribute extends AbstractStructBase
{
    /**
     * The iItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iItemID;
    /**
     * The sAttributeName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sAttributeName;
    /**
     * The sAttributeValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sAttributeValue;
    /**
     * Constructor method for UnsetDRAttribute
     * @uses UnsetDRAttribute::setIItemID()
     * @uses UnsetDRAttribute::setSAttributeName()
     * @uses UnsetDRAttribute::setSAttributeValue()
     * @param int $iItemID
     * @param string $sAttributeName
     * @param string $sAttributeValue
     */
    public function __construct($iItemID = null, $sAttributeName = null, $sAttributeValue = null)
    {
        $this
            ->setIItemID($iItemID)
            ->setSAttributeName($sAttributeName)
            ->setSAttributeValue($sAttributeValue);
    }
    /**
     * Get iItemID value
     * @return int|null
     */
    public function getIItemID()
    {
        return $this->iItemID;
    }
    /**
     * Set iItemID value
     * @param int $iItemID
     * @return \Brainloop\Soap\StructType\UnsetDRAttribute
     */
    public function setIItemID($iItemID = null)
    {
        // validation for constraint: int
        if (!is_null($iItemID) && !is_numeric($iItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iItemID)), __LINE__);
        }
        $this->iItemID = $iItemID;
        return $this;
    }
    /**
     * Get sAttributeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSAttributeName()
    {
        return isset($this->sAttributeName) ? $this->sAttributeName : null;
    }
    /**
     * Set sAttributeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sAttributeName
     * @return \Brainloop\Soap\StructType\UnsetDRAttribute
     */
    public function setSAttributeName($sAttributeName = null)
    {
        // validation for constraint: string
        if (!is_null($sAttributeName) && !is_string($sAttributeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sAttributeName)), __LINE__);
        }
        if (is_null($sAttributeName) || (is_array($sAttributeName) && empty($sAttributeName))) {
            unset($this->sAttributeName);
        } else {
            $this->sAttributeName = $sAttributeName;
        }
        return $this;
    }
    /**
     * Get sAttributeValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSAttributeValue()
    {
        return isset($this->sAttributeValue) ? $this->sAttributeValue : null;
    }
    /**
     * Set sAttributeValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sAttributeValue
     * @return \Brainloop\Soap\StructType\UnsetDRAttribute
     */
    public function setSAttributeValue($sAttributeValue = null)
    {
        // validation for constraint: string
        if (!is_null($sAttributeValue) && !is_string($sAttributeValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sAttributeValue)), __LINE__);
        }
        if (is_null($sAttributeValue) || (is_array($sAttributeValue) && empty($sAttributeValue))) {
            unset($this->sAttributeValue);
        } else {
            $this->sAttributeValue = $sAttributeValue;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\UnsetDRAttribute
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
