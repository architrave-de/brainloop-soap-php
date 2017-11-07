<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAuditComments StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetAuditComments extends AbstractStructBase
{
    /**
     * The drcId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $drcId;
    /**
     * The dataroomId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $dataroomId;
    /**
     * The auditorId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $auditorId;
    /**
     * The startDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $startDate;
    /**
     * The endDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $endDate;
    /**
     * Constructor method for GetAuditComments
     * @uses GetAuditComments::setDrcId()
     * @uses GetAuditComments::setDataroomId()
     * @uses GetAuditComments::setAuditorId()
     * @uses GetAuditComments::setStartDate()
     * @uses GetAuditComments::setEndDate()
     * @param int $drcId
     * @param int $dataroomId
     * @param int $auditorId
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct($drcId = null, $dataroomId = null, $auditorId = null, $startDate = null, $endDate = null)
    {
        $this
            ->setDrcId($drcId)
            ->setDataroomId($dataroomId)
            ->setAuditorId($auditorId)
            ->setStartDate($startDate)
            ->setEndDate($endDate);
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
     * @return \Brainloop\Soap\StructType\GetAuditComments
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
     * Get dataroomId value
     * @return int|null
     */
    public function getDataroomId()
    {
        return $this->dataroomId;
    }
    /**
     * Set dataroomId value
     * @param int $dataroomId
     * @return \Brainloop\Soap\StructType\GetAuditComments
     */
    public function setDataroomId($dataroomId = null)
    {
        // validation for constraint: int
        if (!is_null($dataroomId) && !is_numeric($dataroomId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dataroomId)), __LINE__);
        }
        $this->dataroomId = $dataroomId;
        return $this;
    }
    /**
     * Get auditorId value
     * @return int|null
     */
    public function getAuditorId()
    {
        return $this->auditorId;
    }
    /**
     * Set auditorId value
     * @param int $auditorId
     * @return \Brainloop\Soap\StructType\GetAuditComments
     */
    public function setAuditorId($auditorId = null)
    {
        // validation for constraint: int
        if (!is_null($auditorId) && !is_numeric($auditorId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($auditorId)), __LINE__);
        }
        $this->auditorId = $auditorId;
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Brainloop\Soap\StructType\GetAuditComments
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * Get endDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDate()
    {
        return isset($this->endDate) ? $this->endDate : null;
    }
    /**
     * Set endDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDate
     * @return \Brainloop\Soap\StructType\GetAuditComments
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        if (is_null($endDate) || (is_array($endDate) && empty($endDate))) {
            unset($this->endDate);
        } else {
            $this->endDate = $endDate;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetAuditComments
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
