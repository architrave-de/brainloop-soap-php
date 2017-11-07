<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetSecurityCategory StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetSecurityCategory extends AbstractStructBase
{
    /**
     * The iItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iItemID;
    /**
     * The iSecurityCategoryID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iSecurityCategoryID;
    /**
     * Constructor method for SetSecurityCategory
     * @uses SetSecurityCategory::setIItemID()
     * @uses SetSecurityCategory::setISecurityCategoryID()
     * @param int $iItemID
     * @param int $iSecurityCategoryID
     */
    public function __construct($iItemID = null, $iSecurityCategoryID = null)
    {
        $this
            ->setIItemID($iItemID)
            ->setISecurityCategoryID($iSecurityCategoryID);
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
     * @return \Brainloop\Soap\StructType\SetSecurityCategory
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
     * Get iSecurityCategoryID value
     * @return int|null
     */
    public function getISecurityCategoryID()
    {
        return $this->iSecurityCategoryID;
    }
    /**
     * Set iSecurityCategoryID value
     * @param int $iSecurityCategoryID
     * @return \Brainloop\Soap\StructType\SetSecurityCategory
     */
    public function setISecurityCategoryID($iSecurityCategoryID = null)
    {
        // validation for constraint: int
        if (!is_null($iSecurityCategoryID) && !is_numeric($iSecurityCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iSecurityCategoryID)), __LINE__);
        }
        $this->iSecurityCategoryID = $iSecurityCategoryID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SetSecurityCategory
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
