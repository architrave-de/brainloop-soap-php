<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendItem StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SendItem extends AbstractStructBase
{
    /**
     * The iItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iItemID;
    /**
     * The oSendParams
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\SendParameters
     */
    public $oSendParams;
    /**
     * The iVersion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $iVersion;
    /**
     * Constructor method for SendItem
     * @uses SendItem::setIItemID()
     * @uses SendItem::setOSendParams()
     * @uses SendItem::setIVersion()
     * @param int $iItemID
     * @param \Brainloop\Soap\StructType\SendParameters $oSendParams
     * @param int $iVersion
     */
    public function __construct($iItemID = null, \Brainloop\Soap\StructType\SendParameters $oSendParams = null, $iVersion = null)
    {
        $this
            ->setIItemID($iItemID)
            ->setOSendParams($oSendParams)
            ->setIVersion($iVersion);
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
     * @return \Brainloop\Soap\StructType\SendItem
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
     * Get oSendParams value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\SendParameters|null
     */
    public function getOSendParams()
    {
        return isset($this->oSendParams) ? $this->oSendParams : null;
    }
    /**
     * Set oSendParams value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\SendParameters $oSendParams
     * @return \Brainloop\Soap\StructType\SendItem
     */
    public function setOSendParams(\Brainloop\Soap\StructType\SendParameters $oSendParams = null)
    {
        if (is_null($oSendParams) || (is_array($oSendParams) && empty($oSendParams))) {
            unset($this->oSendParams);
        } else {
            $this->oSendParams = $oSendParams;
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
     * @return \Brainloop\Soap\StructType\SendItem
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
     * @return \Brainloop\Soap\StructType\SendItem
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
