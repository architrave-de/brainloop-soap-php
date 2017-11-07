<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAnnotation StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetAnnotation extends AbstractStructBase
{
    /**
     * The iAnnotationID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iAnnotationID;
    /**
     * Constructor method for GetAnnotation
     * @uses GetAnnotation::setIAnnotationID()
     * @param int $iAnnotationID
     */
    public function __construct($iAnnotationID = null)
    {
        $this
            ->setIAnnotationID($iAnnotationID);
    }
    /**
     * Get iAnnotationID value
     * @return int|null
     */
    public function getIAnnotationID()
    {
        return $this->iAnnotationID;
    }
    /**
     * Set iAnnotationID value
     * @param int $iAnnotationID
     * @return \Brainloop\Soap\StructType\GetAnnotation
     */
    public function setIAnnotationID($iAnnotationID = null)
    {
        // validation for constraint: int
        if (!is_null($iAnnotationID) && !is_numeric($iAnnotationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iAnnotationID)), __LINE__);
        }
        $this->iAnnotationID = $iAnnotationID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetAnnotation
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
