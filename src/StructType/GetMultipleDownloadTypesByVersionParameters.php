<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMultipleDownloadTypesByVersionParameters StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetMultipleDownloadTypesByVersionParameters
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetMultipleDownloadTypesByVersionParameters extends AbstractStructBase
{
    /**
     * The Items
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfIdAndVersion
     */
    public $Items;
    /**
     * Constructor method for GetMultipleDownloadTypesByVersionParameters
     * @uses GetMultipleDownloadTypesByVersionParameters::setItems()
     * @param \Brainloop\Soap\ArrayType\ArrayOfIdAndVersion $items
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfIdAndVersion $items = null)
    {
        $this
            ->setItems($items);
    }
    /**
     * Get Items value
     * @return \Brainloop\Soap\ArrayType\ArrayOfIdAndVersion|null
     */
    public function getItems()
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \Brainloop\Soap\ArrayType\ArrayOfIdAndVersion $items
     * @return \Brainloop\Soap\StructType\GetMultipleDownloadTypesByVersionParameters
     */
    public function setItems(\Brainloop\Soap\ArrayType\ArrayOfIdAndVersion $items = null)
    {
        $this->Items = $items;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetMultipleDownloadTypesByVersionParameters
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
