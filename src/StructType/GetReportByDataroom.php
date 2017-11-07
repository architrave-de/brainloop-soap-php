<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReportByDataroom StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetReportByDataroom extends AbstractStructBase
{
    /**
     * The sReportName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sReportName;
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * Constructor method for GetReportByDataroom
     * @uses GetReportByDataroom::setSReportName()
     * @uses GetReportByDataroom::setIDataroomID()
     * @param string $sReportName
     * @param int $iDataroomID
     */
    public function __construct($sReportName = null, $iDataroomID = null)
    {
        $this
            ->setSReportName($sReportName)
            ->setIDataroomID($iDataroomID);
    }
    /**
     * Get sReportName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSReportName()
    {
        return isset($this->sReportName) ? $this->sReportName : null;
    }
    /**
     * Set sReportName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sReportName
     * @return \Brainloop\Soap\StructType\GetReportByDataroom
     */
    public function setSReportName($sReportName = null)
    {
        // validation for constraint: string
        if (!is_null($sReportName) && !is_string($sReportName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sReportName)), __LINE__);
        }
        if (is_null($sReportName) || (is_array($sReportName) && empty($sReportName))) {
            unset($this->sReportName);
        } else {
            $this->sReportName = $sReportName;
        }
        return $this;
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
     * @return \Brainloop\Soap\StructType\GetReportByDataroom
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetReportByDataroom
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
