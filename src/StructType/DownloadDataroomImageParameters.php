<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownloadDataroomImageParameters StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DownloadDataroomImageParameters
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class DownloadDataroomImageParameters extends DownloadParameters
{
    /**
     * The DataroomID
     * @var int
     */
    public $DataroomID;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $Height;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $Width;
    /**
     * Constructor method for DownloadDataroomImageParameters
     * @uses DownloadDataroomImageParameters::setDataroomID()
     * @uses DownloadDataroomImageParameters::setHeight()
     * @uses DownloadDataroomImageParameters::setWidth()
     * @param int $dataroomID
     * @param int $height
     * @param int $width
     */
    public function __construct($dataroomID = null, $height = null, $width = null)
    {
        $this
            ->setDataroomID($dataroomID)
            ->setHeight($height)
            ->setWidth($width);
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
     * @return \Brainloop\Soap\StructType\DownloadDataroomImageParameters
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
     * Get Height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param int $height
     * @return \Brainloop\Soap\StructType\DownloadDataroomImageParameters
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !is_numeric($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($height)), __LINE__);
        }
        $this->Height = $height;
        return $this;
    }
    /**
     * Get Width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param int $width
     * @return \Brainloop\Soap\StructType\DownloadDataroomImageParameters
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !is_numeric($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($width)), __LINE__);
        }
        $this->Width = $width;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\DownloadDataroomImageParameters
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
