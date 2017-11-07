<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTermsAndConditions StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetTermsAndConditions extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The bHtmlContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bHtmlContent;
    /**
     * Constructor method for GetTermsAndConditions
     * @uses GetTermsAndConditions::setIDataroomID()
     * @uses GetTermsAndConditions::setBHtmlContent()
     * @param int $iDataroomID
     * @param bool $bHtmlContent
     */
    public function __construct($iDataroomID = null, $bHtmlContent = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setBHtmlContent($bHtmlContent);
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
     * @return \Brainloop\Soap\StructType\GetTermsAndConditions
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
     * Get bHtmlContent value
     * @return bool|null
     */
    public function getBHtmlContent()
    {
        return $this->bHtmlContent;
    }
    /**
     * Set bHtmlContent value
     * @param bool $bHtmlContent
     * @return \Brainloop\Soap\StructType\GetTermsAndConditions
     */
    public function setBHtmlContent($bHtmlContent = null)
    {
        // validation for constraint: boolean
        if (!is_null($bHtmlContent) && !is_bool($bHtmlContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bHtmlContent)), __LINE__);
        }
        $this->bHtmlContent = $bHtmlContent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetTermsAndConditions
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
