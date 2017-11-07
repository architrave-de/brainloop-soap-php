<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CanSendItem StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CanSendItem extends AbstractStructBase
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
     * Constructor method for CanSendItem
     * @uses CanSendItem::setIItemID()
     * @uses CanSendItem::setOSendParams()
     * @param int $iItemID
     * @param \Brainloop\Soap\StructType\SendParameters $oSendParams
     */
    public function __construct($iItemID = null, \Brainloop\Soap\StructType\SendParameters $oSendParams = null)
    {
        $this
            ->setIItemID($iItemID)
            ->setOSendParams($oSendParams);
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
     * @return \Brainloop\Soap\StructType\CanSendItem
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
     * @return \Brainloop\Soap\StructType\CanSendItem
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CanSendItem
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