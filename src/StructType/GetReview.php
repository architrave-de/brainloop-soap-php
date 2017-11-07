<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReview StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetReview extends AbstractStructBase
{
    /**
     * The iReviewID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iReviewID;
    /**
     * The eFields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eFields;
    /**
     * Constructor method for GetReview
     * @uses GetReview::setIReviewID()
     * @uses GetReview::setEFields()
     * @param int $iReviewID
     * @param string $eFields
     */
    public function __construct($iReviewID = null, $eFields = null)
    {
        $this
            ->setIReviewID($iReviewID)
            ->setEFields($eFields);
    }
    /**
     * Get iReviewID value
     * @return int|null
     */
    public function getIReviewID()
    {
        return $this->iReviewID;
    }
    /**
     * Set iReviewID value
     * @param int $iReviewID
     * @return \Brainloop\Soap\StructType\GetReview
     */
    public function setIReviewID($iReviewID = null)
    {
        // validation for constraint: int
        if (!is_null($iReviewID) && !is_numeric($iReviewID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iReviewID)), __LINE__);
        }
        $this->iReviewID = $iReviewID;
        return $this;
    }
    /**
     * Get eFields value
     * @return string|null
     */
    public function getEFields()
    {
        return $this->eFields;
    }
    /**
     * Set eFields value
     * @uses \Brainloop\Soap\EnumType\ReviewFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ReviewFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eFields
     * @return \Brainloop\Soap\StructType\GetReview
     */
    public function setEFields($eFields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ReviewFields::valueIsValid($eFields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eFields, implode(', ', \Brainloop\Soap\EnumType\ReviewFields::getValidValues())), __LINE__);
        }
        $this->eFields = $eFields;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetReview
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
