<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchLocationCriteria StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SearchLocationCriteria
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SearchLocationCriteria extends SearchCriteria
{
    /**
     * The ObjectID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ObjectID;
    /**
     * The ObjectType
     * @var string
     */
    public $ObjectType;
    /**
     * Constructor method for SearchLocationCriteria
     * @uses SearchLocationCriteria::setObjectID()
     * @uses SearchLocationCriteria::setObjectType()
     * @param int $objectID
     * @param string $objectType
     */
    public function __construct($objectID = null, $objectType = null)
    {
        $this
            ->setObjectID($objectID)
            ->setObjectType($objectType);
    }
    /**
     * Get ObjectID value
     * @return int|null
     */
    public function getObjectID()
    {
        return $this->ObjectID;
    }
    /**
     * Set ObjectID value
     * @param int $objectID
     * @return \Brainloop\Soap\StructType\SearchLocationCriteria
     */
    public function setObjectID($objectID = null)
    {
        // validation for constraint: int
        if (!is_null($objectID) && !is_numeric($objectID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($objectID)), __LINE__);
        }
        $this->ObjectID = $objectID;
        return $this;
    }
    /**
     * Get ObjectType value
     * @return string|null
     */
    public function getObjectType()
    {
        return $this->ObjectType;
    }
    /**
     * Set ObjectType value
     * @uses \Brainloop\Soap\EnumType\SearchLocationType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\SearchLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $objectType
     * @return \Brainloop\Soap\StructType\SearchLocationCriteria
     */
    public function setObjectType($objectType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\SearchLocationType::valueIsValid($objectType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $objectType, implode(', ', \Brainloop\Soap\EnumType\SearchLocationType::getValidValues())), __LINE__);
        }
        $this->ObjectType = $objectType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SearchLocationCriteria
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
