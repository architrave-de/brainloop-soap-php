<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReviews StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetReviews extends AbstractStructBase
{
    /**
     * The iDocumentID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDocumentID;
    /**
     * The iDocumentVersion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDocumentVersion;
    /**
     * The eFields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eFields;
    /**
     * The iStartRowIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iStartRowIndex;
    /**
     * The iMaximumRowCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iMaximumRowCount;
    /**
     * Constructor method for GetReviews
     * @uses GetReviews::setIDocumentID()
     * @uses GetReviews::setIDocumentVersion()
     * @uses GetReviews::setEFields()
     * @uses GetReviews::setIStartRowIndex()
     * @uses GetReviews::setIMaximumRowCount()
     * @param int $iDocumentID
     * @param int $iDocumentVersion
     * @param string $eFields
     * @param int $iStartRowIndex
     * @param int $iMaximumRowCount
     */
    public function __construct($iDocumentID = null, $iDocumentVersion = null, $eFields = null, $iStartRowIndex = null, $iMaximumRowCount = null)
    {
        $this
            ->setIDocumentID($iDocumentID)
            ->setIDocumentVersion($iDocumentVersion)
            ->setEFields($eFields)
            ->setIStartRowIndex($iStartRowIndex)
            ->setIMaximumRowCount($iMaximumRowCount);
    }
    /**
     * Get iDocumentID value
     * @return int|null
     */
    public function getIDocumentID()
    {
        return $this->iDocumentID;
    }
    /**
     * Set iDocumentID value
     * @param int $iDocumentID
     * @return \Brainloop\Soap\StructType\GetReviews
     */
    public function setIDocumentID($iDocumentID = null)
    {
        // validation for constraint: int
        if (!is_null($iDocumentID) && !is_numeric($iDocumentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDocumentID)), __LINE__);
        }
        $this->iDocumentID = $iDocumentID;
        return $this;
    }
    /**
     * Get iDocumentVersion value
     * @return int|null
     */
    public function getIDocumentVersion()
    {
        return $this->iDocumentVersion;
    }
    /**
     * Set iDocumentVersion value
     * @param int $iDocumentVersion
     * @return \Brainloop\Soap\StructType\GetReviews
     */
    public function setIDocumentVersion($iDocumentVersion = null)
    {
        // validation for constraint: int
        if (!is_null($iDocumentVersion) && !is_numeric($iDocumentVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDocumentVersion)), __LINE__);
        }
        $this->iDocumentVersion = $iDocumentVersion;
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
     * @return \Brainloop\Soap\StructType\GetReviews
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
     * Get iStartRowIndex value
     * @return int|null
     */
    public function getIStartRowIndex()
    {
        return $this->iStartRowIndex;
    }
    /**
     * Set iStartRowIndex value
     * @param int $iStartRowIndex
     * @return \Brainloop\Soap\StructType\GetReviews
     */
    public function setIStartRowIndex($iStartRowIndex = null)
    {
        // validation for constraint: int
        if (!is_null($iStartRowIndex) && !is_numeric($iStartRowIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iStartRowIndex)), __LINE__);
        }
        $this->iStartRowIndex = $iStartRowIndex;
        return $this;
    }
    /**
     * Get iMaximumRowCount value
     * @return int|null
     */
    public function getIMaximumRowCount()
    {
        return $this->iMaximumRowCount;
    }
    /**
     * Set iMaximumRowCount value
     * @param int $iMaximumRowCount
     * @return \Brainloop\Soap\StructType\GetReviews
     */
    public function setIMaximumRowCount($iMaximumRowCount = null)
    {
        // validation for constraint: int
        if (!is_null($iMaximumRowCount) && !is_numeric($iMaximumRowCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iMaximumRowCount)), __LINE__);
        }
        $this->iMaximumRowCount = $iMaximumRowCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetReviews
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
