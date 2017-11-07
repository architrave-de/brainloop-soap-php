<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAttachments StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetAttachments extends AbstractStructBase
{
    /**
     * The iEventID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iEventID;
    /**
     * The eItemFields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eItemFields;
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
     * Constructor method for GetAttachments
     * @uses GetAttachments::setIEventID()
     * @uses GetAttachments::setEItemFields()
     * @uses GetAttachments::setIStartRowIndex()
     * @uses GetAttachments::setIMaximumRowCount()
     * @param int $iEventID
     * @param string $eItemFields
     * @param int $iStartRowIndex
     * @param int $iMaximumRowCount
     */
    public function __construct($iEventID = null, $eItemFields = null, $iStartRowIndex = null, $iMaximumRowCount = null)
    {
        $this
            ->setIEventID($iEventID)
            ->setEItemFields($eItemFields)
            ->setIStartRowIndex($iStartRowIndex)
            ->setIMaximumRowCount($iMaximumRowCount);
    }
    /**
     * Get iEventID value
     * @return int|null
     */
    public function getIEventID()
    {
        return $this->iEventID;
    }
    /**
     * Set iEventID value
     * @param int $iEventID
     * @return \Brainloop\Soap\StructType\GetAttachments
     */
    public function setIEventID($iEventID = null)
    {
        // validation for constraint: int
        if (!is_null($iEventID) && !is_numeric($iEventID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iEventID)), __LINE__);
        }
        $this->iEventID = $iEventID;
        return $this;
    }
    /**
     * Get eItemFields value
     * @return string|null
     */
    public function getEItemFields()
    {
        return $this->eItemFields;
    }
    /**
     * Set eItemFields value
     * @uses \Brainloop\Soap\EnumType\ItemFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eItemFields
     * @return \Brainloop\Soap\StructType\GetAttachments
     */
    public function setEItemFields($eItemFields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ItemFields::valueIsValid($eItemFields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eItemFields, implode(', ', \Brainloop\Soap\EnumType\ItemFields::getValidValues())), __LINE__);
        }
        $this->eItemFields = $eItemFields;
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
     * @return \Brainloop\Soap\StructType\GetAttachments
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
     * @return \Brainloop\Soap\StructType\GetAttachments
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
     * @return \Brainloop\Soap\StructType\GetAttachments
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
