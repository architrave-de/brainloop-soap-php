<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDataroom StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateDataroom extends AbstractStructBase
{
    /**
     * The iTemplateID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iTemplateID;
    /**
     * The sName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sName;
    /**
     * The iDRCID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDRCID;
    /**
     * The eSecurityMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eSecurityMode;
    /**
     * Constructor method for CreateDataroom
     * @uses CreateDataroom::setITemplateID()
     * @uses CreateDataroom::setSName()
     * @uses CreateDataroom::setIDRCID()
     * @uses CreateDataroom::setESecurityMode()
     * @param int $iTemplateID
     * @param string $sName
     * @param int $iDRCID
     * @param string $eSecurityMode
     */
    public function __construct($iTemplateID = null, $sName = null, $iDRCID = null, $eSecurityMode = null)
    {
        $this
            ->setITemplateID($iTemplateID)
            ->setSName($sName)
            ->setIDRCID($iDRCID)
            ->setESecurityMode($eSecurityMode);
    }
    /**
     * Get iTemplateID value
     * @return int|null
     */
    public function getITemplateID()
    {
        return $this->iTemplateID;
    }
    /**
     * Set iTemplateID value
     * @param int $iTemplateID
     * @return \Brainloop\Soap\StructType\CreateDataroom
     */
    public function setITemplateID($iTemplateID = null)
    {
        // validation for constraint: int
        if (!is_null($iTemplateID) && !is_numeric($iTemplateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iTemplateID)), __LINE__);
        }
        $this->iTemplateID = $iTemplateID;
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
     * @return \Brainloop\Soap\StructType\CreateDataroom
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
     * Get iDRCID value
     * @return int|null
     */
    public function getIDRCID()
    {
        return $this->iDRCID;
    }
    /**
     * Set iDRCID value
     * @param int $iDRCID
     * @return \Brainloop\Soap\StructType\CreateDataroom
     */
    public function setIDRCID($iDRCID = null)
    {
        // validation for constraint: int
        if (!is_null($iDRCID) && !is_numeric($iDRCID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDRCID)), __LINE__);
        }
        $this->iDRCID = $iDRCID;
        return $this;
    }
    /**
     * Get eSecurityMode value
     * @return string|null
     */
    public function getESecurityMode()
    {
        return $this->eSecurityMode;
    }
    /**
     * Set eSecurityMode value
     * @uses \Brainloop\Soap\EnumType\LoginMethods::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\LoginMethods::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eSecurityMode
     * @return \Brainloop\Soap\StructType\CreateDataroom
     */
    public function setESecurityMode($eSecurityMode = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\LoginMethods::valueIsValid($eSecurityMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eSecurityMode, implode(', ', \Brainloop\Soap\EnumType\LoginMethods::getValidValues())), __LINE__);
        }
        $this->eSecurityMode = $eSecurityMode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateDataroom
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
