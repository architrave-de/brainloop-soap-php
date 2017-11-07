<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetTimeBasedAccess StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetTimeBasedAccess extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The iUserID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iUserID;
    /**
     * The dtStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dtStart;
    /**
     * The dtEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dtEnd;
    /**
     * Constructor method for SetTimeBasedAccess
     * @uses SetTimeBasedAccess::setIDataroomID()
     * @uses SetTimeBasedAccess::setIUserID()
     * @uses SetTimeBasedAccess::setDtStart()
     * @uses SetTimeBasedAccess::setDtEnd()
     * @param int $iDataroomID
     * @param int $iUserID
     * @param string $dtStart
     * @param string $dtEnd
     */
    public function __construct($iDataroomID = null, $iUserID = null, $dtStart = null, $dtEnd = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setIUserID($iUserID)
            ->setDtStart($dtStart)
            ->setDtEnd($dtEnd);
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
     * @return \Brainloop\Soap\StructType\SetTimeBasedAccess
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
     * Get iUserID value
     * @return int|null
     */
    public function getIUserID()
    {
        return $this->iUserID;
    }
    /**
     * Set iUserID value
     * @param int $iUserID
     * @return \Brainloop\Soap\StructType\SetTimeBasedAccess
     */
    public function setIUserID($iUserID = null)
    {
        // validation for constraint: int
        if (!is_null($iUserID) && !is_numeric($iUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iUserID)), __LINE__);
        }
        $this->iUserID = $iUserID;
        return $this;
    }
    /**
     * Get dtStart value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDtStart()
    {
        return isset($this->dtStart) ? $this->dtStart : null;
    }
    /**
     * Set dtStart value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dtStart
     * @return \Brainloop\Soap\StructType\SetTimeBasedAccess
     */
    public function setDtStart($dtStart = null)
    {
        // validation for constraint: string
        if (!is_null($dtStart) && !is_string($dtStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtStart)), __LINE__);
        }
        if (is_null($dtStart) || (is_array($dtStart) && empty($dtStart))) {
            unset($this->dtStart);
        } else {
            $this->dtStart = $dtStart;
        }
        return $this;
    }
    /**
     * Get dtEnd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDtEnd()
    {
        return isset($this->dtEnd) ? $this->dtEnd : null;
    }
    /**
     * Set dtEnd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dtEnd
     * @return \Brainloop\Soap\StructType\SetTimeBasedAccess
     */
    public function setDtEnd($dtEnd = null)
    {
        // validation for constraint: string
        if (!is_null($dtEnd) && !is_string($dtEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtEnd)), __LINE__);
        }
        if (is_null($dtEnd) || (is_array($dtEnd) && empty($dtEnd))) {
            unset($this->dtEnd);
        } else {
            $this->dtEnd = $dtEnd;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SetTimeBasedAccess
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
