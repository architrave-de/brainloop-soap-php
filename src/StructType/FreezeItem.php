<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreezeItem StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class FreezeItem extends AbstractStructBase
{
    /**
     * The iItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iItemID;
    /**
     * The oDocumentStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $oDocumentStatus;
    /**
     * The sDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sDescription;
    /**
     * The dtTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dtTimestamp;
    /**
     * Constructor method for FreezeItem
     * @uses FreezeItem::setIItemID()
     * @uses FreezeItem::setODocumentStatus()
     * @uses FreezeItem::setSDescription()
     * @uses FreezeItem::setDtTimestamp()
     * @param int $iItemID
     * @param string $oDocumentStatus
     * @param string $sDescription
     * @param string $dtTimestamp
     */
    public function __construct($iItemID = null, $oDocumentStatus = null, $sDescription = null, $dtTimestamp = null)
    {
        $this
            ->setIItemID($iItemID)
            ->setODocumentStatus($oDocumentStatus)
            ->setSDescription($sDescription)
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
     * @return \Brainloop\Soap\StructType\FreezeItem
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
     * Get oDocumentStatus value
     * @return string|null
     */
    public function getODocumentStatus()
    {
        return $this->oDocumentStatus;
    }
    /**
     * Set oDocumentStatus value
     * @uses \Brainloop\Soap\EnumType\VersionStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\VersionStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $oDocumentStatus
     * @return \Brainloop\Soap\StructType\FreezeItem
     */
    public function setODocumentStatus($oDocumentStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\VersionStatus::valueIsValid($oDocumentStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $oDocumentStatus, implode(', ', \Brainloop\Soap\EnumType\VersionStatus::getValidValues())), __LINE__);
        }
        $this->oDocumentStatus = $oDocumentStatus;
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
     * @return \Brainloop\Soap\StructType\FreezeItem
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
     * @return \Brainloop\Soap\StructType\FreezeItem
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
     * @return \Brainloop\Soap\StructType\FreezeItem
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
