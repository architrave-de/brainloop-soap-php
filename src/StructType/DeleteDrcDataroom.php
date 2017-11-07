<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDrcDataroom StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class DeleteDrcDataroom extends AbstractStructBase
{
    /**
     * The dataroomId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $dataroomId;
    /**
     * Constructor method for DeleteDrcDataroom
     * @uses DeleteDrcDataroom::setDataroomId()
     * @param int $dataroomId
     */
    public function __construct($dataroomId = null)
    {
        $this
            ->setDataroomId($dataroomId);
    }
    /**
     * Get dataroomId value
     * @return int|null
     */
    public function getDataroomId()
    {
        return $this->dataroomId;
    }
    /**
     * Set dataroomId value
     * @param int $dataroomId
     * @return \Brainloop\Soap\StructType\DeleteDrcDataroom
     */
    public function setDataroomId($dataroomId = null)
    {
        // validation for constraint: int
        if (!is_null($dataroomId) && !is_numeric($dataroomId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dataroomId)), __LINE__);
        }
        $this->dataroomId = $dataroomId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\DeleteDrcDataroom
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
