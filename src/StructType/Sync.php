<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sync StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class Sync extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The dtmLastSync
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dtmLastSync;
    /**
     * Constructor method for Sync
     * @uses Sync::setIDataroomID()
     * @uses Sync::setDtmLastSync()
     * @param int $iDataroomID
     * @param string $dtmLastSync
     */
    public function __construct($iDataroomID = null, $dtmLastSync = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setDtmLastSync($dtmLastSync);
    }
    /**
     * Get iDataroomID value
     * @return int|null
     */
    public function getIDataroomID()
    {
        return $this->iDataroomID;
    }
    /**
     * Set iDataroomID value
     * @param int $iDataroomID
     * @return \Brainloop\Soap\StructType\Sync
     */
    public function setIDataroomID($iDataroomID = null)
    {
        // validation for constraint: int
        if (!is_null($iDataroomID) && !is_numeric($iDataroomID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDataroomID)), __LINE__);
        }
        $this->iDataroomID = $iDataroomID;
        return $this;
    }
    /**
     * Get dtmLastSync value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDtmLastSync()
    {
        return isset($this->dtmLastSync) ? $this->dtmLastSync : null;
    }
    /**
     * Set dtmLastSync value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dtmLastSync
     * @return \Brainloop\Soap\StructType\Sync
     */
    public function setDtmLastSync($dtmLastSync = null)
    {
        // validation for constraint: string
        if (!is_null($dtmLastSync) && !is_string($dtmLastSync)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtmLastSync)), __LINE__);
        }
        if (is_null($dtmLastSync) || (is_array($dtmLastSync) && empty($dtmLastSync))) {
            unset($this->dtmLastSync);
        } else {
            $this->dtmLastSync = $dtmLastSync;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\Sync
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
