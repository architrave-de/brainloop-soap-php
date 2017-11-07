<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEventTypeAttachmentTemplates StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetEventTypeAttachmentTemplates extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The iTemplateID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iTemplateID;
    /**
     * Constructor method for GetEventTypeAttachmentTemplates
     * @uses GetEventTypeAttachmentTemplates::setIDataroomID()
     * @uses GetEventTypeAttachmentTemplates::setITemplateID()
     * @param int $iDataroomID
     * @param int $iTemplateID
     */
    public function __construct($iDataroomID = null, $iTemplateID = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setITemplateID($iTemplateID);
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
     * @return \Brainloop\Soap\StructType\GetEventTypeAttachmentTemplates
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
     * Get iTemplateID value
     * @return int|null
     */
    public function getITemplateID()
    {
        return $this->iTemplateID;
    }
    /**
     * Set iTemplateID value
     * @param int $iTemplateID
     * @return \Brainloop\Soap\StructType\GetEventTypeAttachmentTemplates
     */
    public function setITemplateID($iTemplateID = null)
    {
        // validation for constraint: int
        if (!is_null($iTemplateID) && !is_numeric($iTemplateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iTemplateID)), __LINE__);
        }
        $this->iTemplateID = $iTemplateID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetEventTypeAttachmentTemplates
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
