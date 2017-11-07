<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetItemProperties StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetItemProperties extends AbstractStructBase
{
    /**
     * The iItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iItemID;
    /**
     * The aProperties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue
     */
    public $aProperties;
    /**
     * The dtTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dtTimestamp;
    /**
     * Constructor method for SetItemProperties
     * @uses SetItemProperties::setIItemID()
     * @uses SetItemProperties::setAProperties()
     * @uses SetItemProperties::setDtTimestamp()
     * @param int $iItemID
     * @param \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $aProperties
     * @param string $dtTimestamp
     */
    public function __construct($iItemID = null, \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $aProperties = null, $dtTimestamp = null)
    {
        $this
            ->setIItemID($iItemID)
            ->setAProperties($aProperties)
            ->setDtTimestamp($dtTimestamp);
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
     * @return \Brainloop\Soap\StructType\SetItemProperties
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
     * Get aProperties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue|null
     */
    public function getAProperties()
    {
        return isset($this->aProperties) ? $this->aProperties : null;
    }
    /**
     * Set aProperties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $aProperties
     * @return \Brainloop\Soap\StructType\SetItemProperties
     */
    public function setAProperties(\Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $aProperties = null)
    {
        if (is_null($aProperties) || (is_array($aProperties) && empty($aProperties))) {
            unset($this->aProperties);
        } else {
            $this->aProperties = $aProperties;
        }
        return $this;
    }
    /**
     * Get dtTimestamp value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDtTimestamp()
    {
        return isset($this->dtTimestamp) ? $this->dtTimestamp : null;
    }
    /**
     * Set dtTimestamp value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dtTimestamp
     * @return \Brainloop\Soap\StructType\SetItemProperties
     */
    public function setDtTimestamp($dtTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($dtTimestamp) && !is_string($dtTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtTimestamp)), __LINE__);
        }
        if (is_null($dtTimestamp) || (is_array($dtTimestamp) && empty($dtTimestamp))) {
            unset($this->dtTimestamp);
        } else {
            $this->dtTimestamp = $dtTimestamp;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SetItemProperties
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
