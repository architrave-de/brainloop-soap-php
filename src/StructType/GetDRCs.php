<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDRCs StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDRCs extends AbstractStructBase
{
    /**
     * The bAdminAccess
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bAdminAccess;
    /**
     * The eDRCFields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eDRCFields;
    /**
     * The iStartRowIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iStartRowIndex;
    /**
     * The iMaxRowCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iMaxRowCount;
    /**
     * The aProperties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfstring
     */
    public $aProperties;
    /**
     * Constructor method for GetDRCs
     * @uses GetDRCs::setBAdminAccess()
     * @uses GetDRCs::setEDRCFields()
     * @uses GetDRCs::setIStartRowIndex()
     * @uses GetDRCs::setIMaxRowCount()
     * @uses GetDRCs::setAProperties()
     * @param bool $bAdminAccess
     * @param string $eDRCFields
     * @param int $iStartRowIndex
     * @param int $iMaxRowCount
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $aProperties
     */
    public function __construct($bAdminAccess = null, $eDRCFields = null, $iStartRowIndex = null, $iMaxRowCount = null, \Brainloop\Soap\ArrayType\ArrayOfstring $aProperties = null)
    {
        $this
            ->setBAdminAccess($bAdminAccess)
            ->setEDRCFields($eDRCFields)
            ->setIStartRowIndex($iStartRowIndex)
            ->setIMaxRowCount($iMaxRowCount)
            ->setAProperties($aProperties);
    }
    /**
     * Get bAdminAccess value
     * @return bool|null
     */
    public function getBAdminAccess()
    {
        return $this->bAdminAccess;
    }
    /**
     * Set bAdminAccess value
     * @param bool $bAdminAccess
     * @return \Brainloop\Soap\StructType\GetDRCs
     */
    public function setBAdminAccess($bAdminAccess = null)
    {
        // validation for constraint: boolean
        if (!is_null($bAdminAccess) && !is_bool($bAdminAccess)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bAdminAccess)), __LINE__);
        }
        $this->bAdminAccess = $bAdminAccess;
        return $this;
    }
    /**
     * Get eDRCFields value
     * @return string|null
     */
    public function getEDRCFields()
    {
        return $this->eDRCFields;
    }
    /**
     * Set eDRCFields value
     * @uses \Brainloop\Soap\EnumType\DRCFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\DRCFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eDRCFields
     * @return \Brainloop\Soap\StructType\GetDRCs
     */
    public function setEDRCFields($eDRCFields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\DRCFields::valueIsValid($eDRCFields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eDRCFields, implode(', ', \Brainloop\Soap\EnumType\DRCFields::getValidValues())), __LINE__);
        }
        $this->eDRCFields = $eDRCFields;
        return $this;
    }
    /**
     * Get iStartRowIndex value
     * @return int|null
     */
    public function getIStartRowIndex()
    {
        return $this->iStartRowIndex;
    }
    /**
     * Set iStartRowIndex value
     * @param int $iStartRowIndex
     * @return \Brainloop\Soap\StructType\GetDRCs
     */
    public function setIStartRowIndex($iStartRowIndex = null)
    {
        // validation for constraint: int
        if (!is_null($iStartRowIndex) && !is_numeric($iStartRowIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iStartRowIndex)), __LINE__);
        }
        $this->iStartRowIndex = $iStartRowIndex;
        return $this;
    }
    /**
     * Get iMaxRowCount value
     * @return int|null
     */
    public function getIMaxRowCount()
    {
        return $this->iMaxRowCount;
    }
    /**
     * Set iMaxRowCount value
     * @param int $iMaxRowCount
     * @return \Brainloop\Soap\StructType\GetDRCs
     */
    public function setIMaxRowCount($iMaxRowCount = null)
    {
        // validation for constraint: int
        if (!is_null($iMaxRowCount) && !is_numeric($iMaxRowCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iMaxRowCount)), __LINE__);
        }
        $this->iMaxRowCount = $iMaxRowCount;
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
     * @return \Brainloop\Soap\StructType\GetDRCs
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
     * @return \Brainloop\Soap\StructType\GetDRCs
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
