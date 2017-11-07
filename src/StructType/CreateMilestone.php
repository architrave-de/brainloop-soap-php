<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMilestone StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateMilestone extends AbstractStructBase
{
    /**
     * The iFolderID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iFolderID;
    /**
     * The sName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sName;
    /**
     * The aItemIDs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $aItemIDs;
    /**
     * Constructor method for CreateMilestone
     * @uses CreateMilestone::setIFolderID()
     * @uses CreateMilestone::setSName()
     * @uses CreateMilestone::setAItemIDs()
     * @param int $iFolderID
     * @param string $sName
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aItemIDs
     */
    public function __construct($iFolderID = null, $sName = null, \Brainloop\Soap\ArrayType\ArrayOfint $aItemIDs = null)
    {
        $this
            ->setIFolderID($iFolderID)
            ->setSName($sName)
            ->setAItemIDs($aItemIDs);
    }
    /**
     * Get iFolderID value
     * @return int|null
     */
    public function getIFolderID()
    {
        return $this->iFolderID;
    }
    /**
     * Set iFolderID value
     * @param int $iFolderID
     * @return \Brainloop\Soap\StructType\CreateMilestone
     */
    public function setIFolderID($iFolderID = null)
    {
        // validation for constraint: int
        if (!is_null($iFolderID) && !is_numeric($iFolderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iFolderID)), __LINE__);
        }
        $this->iFolderID = $iFolderID;
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
     * @return \Brainloop\Soap\StructType\CreateMilestone
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
     * Get aItemIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfint|null
     */
    public function getAItemIDs()
    {
        return isset($this->aItemIDs) ? $this->aItemIDs : null;
    }
    /**
     * Set aItemIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aItemIDs
     * @return \Brainloop\Soap\StructType\CreateMilestone
     */
    public function setAItemIDs(\Brainloop\Soap\ArrayType\ArrayOfint $aItemIDs = null)
    {
        if (is_null($aItemIDs) || (is_array($aItemIDs) && empty($aItemIDs))) {
            unset($this->aItemIDs);
        } else {
            $this->aItemIDs = $aItemIDs;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateMilestone
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
