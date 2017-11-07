<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportIdentification StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ReportIdentification
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ReportIdentification extends AbstractStructBase
{
    /**
     * The DRCID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $DRCID;
    /**
     * The DataroomID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $DataroomID;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ItemID;
    /**
     * The ReportName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ReportName;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * Constructor method for ReportIdentification
     * @uses ReportIdentification::setDRCID()
     * @uses ReportIdentification::setDataroomID()
     * @uses ReportIdentification::setItemID()
     * @uses ReportIdentification::setReportName()
     * @uses ReportIdentification::setType()
     * @param int $dRCID
     * @param int $dataroomID
     * @param int $itemID
     * @param string $reportName
     * @param string $type
     */
    public function __construct($dRCID = null, $dataroomID = null, $itemID = null, $reportName = null, $type = null)
    {
        $this
            ->setDRCID($dRCID)
            ->setDataroomID($dataroomID)
            ->setItemID($itemID)
            ->setReportName($reportName)
            ->setType($type);
    }
    /**
     * Get DRCID value
     * @return int|null
     */
    public function getDRCID()
    {
        return $this->DRCID;
    }
    /**
     * Set DRCID value
     * @param int $dRCID
     * @return \Brainloop\Soap\StructType\ReportIdentification
     */
    public function setDRCID($dRCID = null)
    {
        // validation for constraint: int
        if (!is_null($dRCID) && !is_numeric($dRCID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dRCID)), __LINE__);
        }
        $this->DRCID = $dRCID;
        return $this;
    }
    /**
     * Get DataroomID value
     * @return int|null
     */
    public function getDataroomID()
    {
        return $this->DataroomID;
    }
    /**
     * Set DataroomID value
     * @param int $dataroomID
     * @return \Brainloop\Soap\StructType\ReportIdentification
     */
    public function setDataroomID($dataroomID = null)
    {
        // validation for constraint: int
        if (!is_null($dataroomID) && !is_numeric($dataroomID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dataroomID)), __LINE__);
        }
        $this->DataroomID = $dataroomID;
        return $this;
    }
    /**
     * Get ItemID value
     * @return int|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param int $itemID
     * @return \Brainloop\Soap\StructType\ReportIdentification
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: int
        if (!is_null($itemID) && !is_numeric($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get ReportName value
     * @return string|null
     */
    public function getReportName()
    {
        return $this->ReportName;
    }
    /**
     * Set ReportName value
     * @param string $reportName
     * @return \Brainloop\Soap\StructType\ReportIdentification
     */
    public function setReportName($reportName = null)
    {
        // validation for constraint: string
        if (!is_null($reportName) && !is_string($reportName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reportName)), __LINE__);
        }
        $this->ReportName = $reportName;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Brainloop\Soap\EnumType\ReportType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ReportType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Brainloop\Soap\StructType\ReportIdentification
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ReportType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Brainloop\Soap\EnumType\ReportType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ReportIdentification
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
