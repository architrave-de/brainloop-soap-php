<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCompletedAudits StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetCompletedAudits extends AbstractStructBase
{
    /**
     * The drcId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $drcId;
    /**
     * The dtStartDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dtStartDate;
    /**
     * The dataroomId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $dataroomId;
    /**
     * The dtEndDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dtEndDate;
    /**
     * Constructor method for GetCompletedAudits
     * @uses GetCompletedAudits::setDrcId()
     * @uses GetCompletedAudits::setDtStartDate()
     * @uses GetCompletedAudits::setDataroomId()
     * @uses GetCompletedAudits::setDtEndDate()
     * @param int $drcId
     * @param string $dtStartDate
     * @param int $dataroomId
     * @param string $dtEndDate
     */
    public function __construct($drcId = null, $dtStartDate = null, $dataroomId = null, $dtEndDate = null)
    {
        $this
            ->setDrcId($drcId)
            ->setDtStartDate($dtStartDate)
            ->setDataroomId($dataroomId)
            ->setDtEndDate($dtEndDate);
    }
    /**
     * Get drcId value
     * @return int|null
     */
    public function getDrcId()
    {
        return $this->drcId;
    }
    /**
     * Set drcId value
     * @param int $drcId
     * @return \Brainloop\Soap\StructType\GetCompletedAudits
     */
    public function setDrcId($drcId = null)
    {
        // validation for constraint: int
        if (!is_null($drcId) && !is_numeric($drcId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($drcId)), __LINE__);
        }
        $this->drcId = $drcId;
        return $this;
    }
    /**
     * Get dtStartDate value
     * @return string|null
     */
    public function getDtStartDate()
    {
        return $this->dtStartDate;
    }
    /**
     * Set dtStartDate value
     * @param string $dtStartDate
     * @return \Brainloop\Soap\StructType\GetCompletedAudits
     */
    public function setDtStartDate($dtStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($dtStartDate) && !is_string($dtStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtStartDate)), __LINE__);
        }
        $this->dtStartDate = $dtStartDate;
        return $this;
    }
    /**
     * Get dataroomId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDataroomId()
    {
        return isset($this->dataroomId) ? $this->dataroomId : null;
    }
    /**
     * Set dataroomId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $dataroomId
     * @return \Brainloop\Soap\StructType\GetCompletedAudits
     */
    public function setDataroomId($dataroomId = null)
    {
        // validation for constraint: int
        if (!is_null($dataroomId) && !is_numeric($dataroomId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dataroomId)), __LINE__);
        }
        if (is_null($dataroomId) || (is_array($dataroomId) && empty($dataroomId))) {
            unset($this->dataroomId);
        } else {
            $this->dataroomId = $dataroomId;
        }
        return $this;
    }
    /**
     * Get dtEndDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDtEndDate()
    {
        return isset($this->dtEndDate) ? $this->dtEndDate : null;
    }
    /**
     * Set dtEndDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dtEndDate
     * @return \Brainloop\Soap\StructType\GetCompletedAudits
     */
    public function setDtEndDate($dtEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($dtEndDate) && !is_string($dtEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtEndDate)), __LINE__);
        }
        if (is_null($dtEndDate) || (is_array($dtEndDate) && empty($dtEndDate))) {
            unset($this->dtEndDate);
        } else {
            $this->dtEndDate = $dtEndDate;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetCompletedAudits
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
