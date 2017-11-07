<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDrcSecurityGroup StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateDrcSecurityGroup extends AbstractStructBase
{
    /**
     * The drcId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $drcId;
    /**
     * The sName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sName;
    /**
     * The aUserIDArray
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $aUserIDArray;
    /**
     * Constructor method for CreateDrcSecurityGroup
     * @uses CreateDrcSecurityGroup::setDrcId()
     * @uses CreateDrcSecurityGroup::setSName()
     * @uses CreateDrcSecurityGroup::setAUserIDArray()
     * @param int $drcId
     * @param string $sName
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aUserIDArray
     */
    public function __construct($drcId = null, $sName = null, \Brainloop\Soap\ArrayType\ArrayOfint $aUserIDArray = null)
    {
        $this
            ->setDrcId($drcId)
            ->setSName($sName)
            ->setAUserIDArray($aUserIDArray);
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
     * @return \Brainloop\Soap\StructType\CreateDrcSecurityGroup
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
     * Get sName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSName()
    {
        return isset($this->sName) ? $this->sName : null;
    }
    /**
     * Set sName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sName
     * @return \Brainloop\Soap\StructType\CreateDrcSecurityGroup
     */
    public function setSName($sName = null)
    {
        // validation for constraint: string
        if (!is_null($sName) && !is_string($sName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sName)), __LINE__);
        }
        if (is_null($sName) || (is_array($sName) && empty($sName))) {
            unset($this->sName);
        } else {
            $this->sName = $sName;
        }
        return $this;
    }
    /**
     * Get aUserIDArray value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfint|null
     */
    public function getAUserIDArray()
    {
        return isset($this->aUserIDArray) ? $this->aUserIDArray : null;
    }
    /**
     * Set aUserIDArray value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aUserIDArray
     * @return \Brainloop\Soap\StructType\CreateDrcSecurityGroup
     */
    public function setAUserIDArray(\Brainloop\Soap\ArrayType\ArrayOfint $aUserIDArray = null)
    {
        if (is_null($aUserIDArray) || (is_array($aUserIDArray) && empty($aUserIDArray))) {
            unset($this->aUserIDArray);
        } else {
            $this->aUserIDArray = $aUserIDArray;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateDrcSecurityGroup
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
