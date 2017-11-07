<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemVersions StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetItemVersions extends AbstractStructBase
{
    /**
     * The iItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iItemID;
    /**
     * The eFields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eFields;
    /**
     * Constructor method for GetItemVersions
     * @uses GetItemVersions::setIItemID()
     * @uses GetItemVersions::setEFields()
     * @param int $iItemID
     * @param string $eFields
     */
    public function __construct($iItemID = null, $eFields = null)
    {
        $this
            ->setIItemID($iItemID)
            ->setEFields($eFields);
    }
    /**
     * Get iItemID value
     * @return int|null
     */
    public function getIItemID()
    {
        return $this->iItemID;
    }
    /**
     * Set iItemID value
     * @param int $iItemID
     * @return \Brainloop\Soap\StructType\GetItemVersions
     */
    public function setIItemID($iItemID = null)
    {
        // validation for constraint: int
        if (!is_null($iItemID) && !is_numeric($iItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iItemID)), __LINE__);
        }
        $this->iItemID = $iItemID;
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
     * @uses \Brainloop\Soap\EnumType\ItemFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eFields
     * @return \Brainloop\Soap\StructType\GetItemVersions
     */
    public function setEFields($eFields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ItemFields::valueIsValid($eFields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eFields, implode(', ', \Brainloop\Soap\EnumType\ItemFields::getValidValues())), __LINE__);
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
     * @return \Brainloop\Soap\StructType\GetItemVersions
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
