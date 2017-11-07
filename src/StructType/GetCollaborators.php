<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCollaborators StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetCollaborators extends AbstractStructBase
{
    /**
     * The iCollaborationItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iCollaborationItemID;
    /**
     * The eUserFields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eUserFields;
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
     * Constructor method for GetCollaborators
     * @uses GetCollaborators::setICollaborationItemID()
     * @uses GetCollaborators::setEUserFields()
     * @uses GetCollaborators::setIStartRowIndex()
     * @uses GetCollaborators::setIMaximumRowCount()
     * @param int $iCollaborationItemID
     * @param string $eUserFields
     * @param int $iStartRowIndex
     * @param int $iMaximumRowCount
     */
    public function __construct($iCollaborationItemID = null, $eUserFields = null, $iStartRowIndex = null, $iMaximumRowCount = null)
    {
        $this
            ->setICollaborationItemID($iCollaborationItemID)
            ->setEUserFields($eUserFields)
            ->setIStartRowIndex($iStartRowIndex)
            ->setIMaximumRowCount($iMaximumRowCount);
    }
    /**
     * Get iCollaborationItemID value
     * @return int|null
     */
    public function getICollaborationItemID()
    {
        return $this->iCollaborationItemID;
    }
    /**
     * Set iCollaborationItemID value
     * @param int $iCollaborationItemID
     * @return \Brainloop\Soap\StructType\GetCollaborators
     */
    public function setICollaborationItemID($iCollaborationItemID = null)
    {
        // validation for constraint: int
        if (!is_null($iCollaborationItemID) && !is_numeric($iCollaborationItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iCollaborationItemID)), __LINE__);
        }
        $this->iCollaborationItemID = $iCollaborationItemID;
        return $this;
    }
    /**
     * Get eUserFields value
     * @return string|null
     */
    public function getEUserFields()
    {
        return $this->eUserFields;
    }
    /**
     * Set eUserFields value
     * @uses \Brainloop\Soap\EnumType\UserFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\UserFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eUserFields
     * @return \Brainloop\Soap\StructType\GetCollaborators
     */
    public function setEUserFields($eUserFields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\UserFields::valueIsValid($eUserFields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eUserFields, implode(', ', \Brainloop\Soap\EnumType\UserFields::getValidValues())), __LINE__);
        }
        $this->eUserFields = $eUserFields;
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
     * @return \Brainloop\Soap\StructType\GetCollaborators
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
     * @return \Brainloop\Soap\StructType\GetCollaborators
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
     * @return \Brainloop\Soap\StructType\GetCollaborators
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
