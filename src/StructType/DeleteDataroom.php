<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDataroom StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class DeleteDataroom extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The bDestroy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bDestroy;
    /**
     * Constructor method for DeleteDataroom
     * @uses DeleteDataroom::setIDataroomID()
     * @uses DeleteDataroom::setBDestroy()
     * @param int $iDataroomID
     * @param bool $bDestroy
     */
    public function __construct($iDataroomID = null, $bDestroy = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setBDestroy($bDestroy);
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
     * @return \Brainloop\Soap\StructType\DeleteDataroom
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
     * Get bDestroy value
     * @return bool|null
     */
    public function getBDestroy()
    {
        return $this->bDestroy;
    }
    /**
     * Set bDestroy value
     * @param bool $bDestroy
     * @return \Brainloop\Soap\StructType\DeleteDataroom
     */
    public function setBDestroy($bDestroy = null)
    {
        // validation for constraint: boolean
        if (!is_null($bDestroy) && !is_bool($bDestroy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bDestroy)), __LINE__);
        }
        $this->bDestroy = $bDestroy;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\DeleteDataroom
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
