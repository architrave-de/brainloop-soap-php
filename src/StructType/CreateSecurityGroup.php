<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateSecurityGroup StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateSecurityGroup extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The sName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sName;
    /**
     * The sDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sDescription;
    /**
     * The aUserIDArray
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $aUserIDArray;
    /**
     * The bVisibleToAll
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bVisibleToAll;
    /**
     * Constructor method for CreateSecurityGroup
     * @uses CreateSecurityGroup::setIDataroomID()
     * @uses CreateSecurityGroup::setSName()
     * @uses CreateSecurityGroup::setSDescription()
     * @uses CreateSecurityGroup::setAUserIDArray()
     * @uses CreateSecurityGroup::setBVisibleToAll()
     * @param int $iDataroomID
     * @param string $sName
     * @param string $sDescription
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aUserIDArray
     * @param bool $bVisibleToAll
     */
    public function __construct($iDataroomID = null, $sName = null, $sDescription = null, \Brainloop\Soap\ArrayType\ArrayOfint $aUserIDArray = null, $bVisibleToAll = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setSName($sName)
            ->setSDescription($sDescription)
            ->setAUserIDArray($aUserIDArray)
            ->setBVisibleToAll($bVisibleToAll);
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
     * @return \Brainloop\Soap\StructType\CreateSecurityGroup
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
     * @return \Brainloop\Soap\StructType\CreateSecurityGroup
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
     * Get sDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSDescription()
    {
        return isset($this->sDescription) ? $this->sDescription : null;
    }
    /**
     * Set sDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sDescription
     * @return \Brainloop\Soap\StructType\CreateSecurityGroup
     */
    public function setSDescription($sDescription = null)
    {
        // validation for constraint: string
        if (!is_null($sDescription) && !is_string($sDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sDescription)), __LINE__);
        }
        if (is_null($sDescription) || (is_array($sDescription) && empty($sDescription))) {
            unset($this->sDescription);
        } else {
            $this->sDescription = $sDescription;
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
     * @return \Brainloop\Soap\StructType\CreateSecurityGroup
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
     * Get bVisibleToAll value
     * @return bool|null
     */
    public function getBVisibleToAll()
    {
        return $this->bVisibleToAll;
    }
    /**
     * Set bVisibleToAll value
     * @param bool $bVisibleToAll
     * @return \Brainloop\Soap\StructType\CreateSecurityGroup
     */
    public function setBVisibleToAll($bVisibleToAll = null)
    {
        // validation for constraint: boolean
        if (!is_null($bVisibleToAll) && !is_bool($bVisibleToAll)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bVisibleToAll)), __LINE__);
        }
        $this->bVisibleToAll = $bVisibleToAll;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateSecurityGroup
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
