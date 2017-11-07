<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CollaborationItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CollaborationItem
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CollaborationItem extends TreeItem
{
    /**
     * The EndDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $EndDate;
    /**
     * Constructor method for CollaborationItem
     * @uses CollaborationItem::setEndDate()
     * @param string $endDate
     */
    public function __construct($endDate = null)
    {
        $this
            ->setEndDate($endDate);
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Brainloop\Soap\StructType\CollaborationItem
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CollaborationItem
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
