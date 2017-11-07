<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCalendarEvent StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateCalendarEvent extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The oServiceCreateParams
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\CreateEventParameters
     */
    public $oServiceCreateParams;
    /**
     * Constructor method for CreateCalendarEvent
     * @uses CreateCalendarEvent::setIDataroomID()
     * @uses CreateCalendarEvent::setOServiceCreateParams()
     * @param int $iDataroomID
     * @param \Brainloop\Soap\StructType\CreateEventParameters $oServiceCreateParams
     */
    public function __construct($iDataroomID = null, \Brainloop\Soap\StructType\CreateEventParameters $oServiceCreateParams = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setOServiceCreateParams($oServiceCreateParams);
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
     * @return \Brainloop\Soap\StructType\CreateCalendarEvent
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
     * Get oServiceCreateParams value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\CreateEventParameters|null
     */
    public function getOServiceCreateParams()
    {
        return isset($this->oServiceCreateParams) ? $this->oServiceCreateParams : null;
    }
    /**
     * Set oServiceCreateParams value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\CreateEventParameters $oServiceCreateParams
     * @return \Brainloop\Soap\StructType\CreateCalendarEvent
     */
    public function setOServiceCreateParams(\Brainloop\Soap\StructType\CreateEventParameters $oServiceCreateParams = null)
    {
        if (is_null($oServiceCreateParams) || (is_array($oServiceCreateParams) && empty($oServiceCreateParams))) {
            unset($this->oServiceCreateParams);
        } else {
            $this->oServiceCreateParams = $oServiceCreateParams;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateCalendarEvent
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
