<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDRC StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDRC extends AbstractStructBase
{
    /**
     * The drcId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $drcId;
    /**
     * The DRCFields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DRCFields;
    /**
     * The properties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfstring
     */
    public $properties;
    /**
     * Constructor method for GetDRC
     * @uses GetDRC::setDrcId()
     * @uses GetDRC::setDRCFields()
     * @uses GetDRC::setProperties()
     * @param int $drcId
     * @param string $dRCFields
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $properties
     */
    public function __construct($drcId = null, $dRCFields = null, \Brainloop\Soap\ArrayType\ArrayOfstring $properties = null)
    {
        $this
            ->setDrcId($drcId)
            ->setDRCFields($dRCFields)
            ->setProperties($properties);
    }
    /**
     * Get drcId value
     * @return int|null
     */
    public function getDrcId()
    {
        return $this->drcId;
    }
    /**
     * Set drcId value
     * @param int $drcId
     * @return \Brainloop\Soap\StructType\GetDRC
     */
    public function setDrcId($drcId = null)
    {
        // validation for constraint: int
        if (!is_null($drcId) && !is_numeric($drcId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($drcId)), __LINE__);
        }
        $this->drcId = $drcId;
        return $this;
    }
    /**
     * Get DRCFields value
     * @return string|null
     */
    public function getDRCFields()
    {
        return $this->DRCFields;
    }
    /**
     * Set DRCFields value
     * @uses \Brainloop\Soap\EnumType\DRCFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\DRCFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dRCFields
     * @return \Brainloop\Soap\StructType\GetDRC
     */
    public function setDRCFields($dRCFields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\DRCFields::valueIsValid($dRCFields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dRCFields, implode(', ', \Brainloop\Soap\EnumType\DRCFields::getValidValues())), __LINE__);
        }
        $this->DRCFields = $dRCFields;
        return $this;
    }
    /**
     * Get properties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfstring|null
     */
    public function getProperties()
    {
        return isset($this->properties) ? $this->properties : null;
    }
    /**
     * Set properties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $properties
     * @return \Brainloop\Soap\StructType\GetDRC
     */
    public function setProperties(\Brainloop\Soap\ArrayType\ArrayOfstring $properties = null)
    {
        if (is_null($properties) || (is_array($properties) && empty($properties))) {
            unset($this->properties);
        } else {
            $this->properties = $properties;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetDRC
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
