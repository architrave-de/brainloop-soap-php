<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDataroom StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDataroom extends AbstractStructBase
{
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ID;
    /**
     * The eFields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eFields;
    /**
     * The aProperties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfstring
     */
    public $aProperties;
    /**
     * Constructor method for GetDataroom
     * @uses GetDataroom::setID()
     * @uses GetDataroom::setEFields()
     * @uses GetDataroom::setAProperties()
     * @param int $iD
     * @param string $eFields
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $aProperties
     */
    public function __construct($iD = null, $eFields = null, \Brainloop\Soap\ArrayType\ArrayOfstring $aProperties = null)
    {
        $this
            ->setID($iD)
            ->setEFields($eFields)
            ->setAProperties($aProperties);
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \Brainloop\Soap\StructType\GetDataroom
     */
    public function setID($iD = null)
    {
        // validation for constraint: int
        if (!is_null($iD) && !is_numeric($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get eFields value
     * @return string|null
     */
    public function getEFields()
    {
        return $this->eFields;
    }
    /**
     * Set eFields value
     * @uses \Brainloop\Soap\EnumType\DataroomFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\DataroomFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eFields
     * @return \Brainloop\Soap\StructType\GetDataroom
     */
    public function setEFields($eFields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\DataroomFields::valueIsValid($eFields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eFields, implode(', ', \Brainloop\Soap\EnumType\DataroomFields::getValidValues())), __LINE__);
        }
        $this->eFields = $eFields;
        return $this;
    }
    /**
     * Get aProperties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfstring|null
     */
    public function getAProperties()
    {
        return isset($this->aProperties) ? $this->aProperties : null;
    }
    /**
     * Set aProperties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $aProperties
     * @return \Brainloop\Soap\StructType\GetDataroom
     */
    public function setAProperties(\Brainloop\Soap\ArrayType\ArrayOfstring $aProperties = null)
    {
        if (is_null($aProperties) || (is_array($aProperties) && empty($aProperties))) {
            unset($this->aProperties);
        } else {
            $this->aProperties = $aProperties;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetDataroom
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
