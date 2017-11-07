<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemByRelativePath StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetItemByRelativePath extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The sPath
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sPath;
    /**
     * The iVersion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $iVersion;
    /**
     * Constructor method for GetItemByRelativePath
     * @uses GetItemByRelativePath::setIDataroomID()
     * @uses GetItemByRelativePath::setSPath()
     * @uses GetItemByRelativePath::setIVersion()
     * @param int $iDataroomID
     * @param string $sPath
     * @param int $iVersion
     */
    public function __construct($iDataroomID = null, $sPath = null, $iVersion = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setSPath($sPath)
            ->setIVersion($iVersion);
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
     * @return \Brainloop\Soap\StructType\GetItemByRelativePath
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
     * Get sPath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSPath()
    {
        return isset($this->sPath) ? $this->sPath : null;
    }
    /**
     * Set sPath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sPath
     * @return \Brainloop\Soap\StructType\GetItemByRelativePath
     */
    public function setSPath($sPath = null)
    {
        // validation for constraint: string
        if (!is_null($sPath) && !is_string($sPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sPath)), __LINE__);
        }
        if (is_null($sPath) || (is_array($sPath) && empty($sPath))) {
            unset($this->sPath);
        } else {
            $this->sPath = $sPath;
        }
        return $this;
    }
    /**
     * Get iVersion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getIVersion()
    {
        return isset($this->iVersion) ? $this->iVersion : null;
    }
    /**
     * Set iVersion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $iVersion
     * @return \Brainloop\Soap\StructType\GetItemByRelativePath
     */
    public function setIVersion($iVersion = null)
    {
        // validation for constraint: int
        if (!is_null($iVersion) && !is_numeric($iVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iVersion)), __LINE__);
        }
        if (is_null($iVersion) || (is_array($iVersion) && empty($iVersion))) {
            unset($this->iVersion);
        } else {
            $this->iVersion = $iVersion;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetItemByRelativePath
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
