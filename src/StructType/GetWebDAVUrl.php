<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWebDAVUrl StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetWebDAVUrl extends AbstractStructBase
{
    /**
     * The iItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iItemID;
    /**
     * The iUserID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $iUserID;
    /**
     * Constructor method for GetWebDAVUrl
     * @uses GetWebDAVUrl::setIItemID()
     * @uses GetWebDAVUrl::setIUserID()
     * @param int $iItemID
     * @param int $iUserID
     */
    public function __construct($iItemID = null, $iUserID = null)
    {
        $this
            ->setIItemID($iItemID)
            ->setIUserID($iUserID);
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
     * @return \Brainloop\Soap\StructType\GetWebDAVUrl
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
     * Get iUserID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getIUserID()
    {
        return isset($this->iUserID) ? $this->iUserID : null;
    }
    /**
     * Set iUserID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $iUserID
     * @return \Brainloop\Soap\StructType\GetWebDAVUrl
     */
    public function setIUserID($iUserID = null)
    {
        // validation for constraint: int
        if (!is_null($iUserID) && !is_numeric($iUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iUserID)), __LINE__);
        }
        if (is_null($iUserID) || (is_array($iUserID) && empty($iUserID))) {
            unset($this->iUserID);
        } else {
            $this->iUserID = $iUserID;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetWebDAVUrl
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
