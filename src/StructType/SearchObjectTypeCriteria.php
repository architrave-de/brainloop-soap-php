<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchObjectTypeCriteria StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SearchObjectTypeCriteria
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SearchObjectTypeCriteria extends SearchCriteria
{
    /**
     * The ItemTypes
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfItemType
     */
    public $ItemTypes;
    /**
     * Constructor method for SearchObjectTypeCriteria
     * @uses SearchObjectTypeCriteria::setItemTypes()
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemType $itemTypes
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfItemType $itemTypes = null)
    {
        $this
            ->setItemTypes($itemTypes);
    }
    /**
     * Get ItemTypes value
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemType|null
     */
    public function getItemTypes()
    {
        return $this->ItemTypes;
    }
    /**
     * Set ItemTypes value
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemType $itemTypes
     * @return \Brainloop\Soap\StructType\SearchObjectTypeCriteria
     */
    public function setItemTypes(\Brainloop\Soap\ArrayType\ArrayOfItemType $itemTypes = null)
    {
        $this->ItemTypes = $itemTypes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SearchObjectTypeCriteria
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
