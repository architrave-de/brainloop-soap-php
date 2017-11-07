<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReleaseQuestion StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ReleaseQuestion extends AbstractStructBase
{
    /**
     * The iQuestionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iQuestionID;
    /**
     * The iGroupFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iGroupFrom;
    /**
     * Constructor method for ReleaseQuestion
     * @uses ReleaseQuestion::setIQuestionID()
     * @uses ReleaseQuestion::setIGroupFrom()
     * @param int $iQuestionID
     * @param int $iGroupFrom
     */
    public function __construct($iQuestionID = null, $iGroupFrom = null)
    {
        $this
            ->setIQuestionID($iQuestionID)
            ->setIGroupFrom($iGroupFrom);
    }
    /**
     * Get iQuestionID value
     * @return int|null
     */
    public function getIQuestionID()
    {
        return $this->iQuestionID;
    }
    /**
     * Set iQuestionID value
     * @param int $iQuestionID
     * @return \Brainloop\Soap\StructType\ReleaseQuestion
     */
    public function setIQuestionID($iQuestionID = null)
    {
        // validation for constraint: int
        if (!is_null($iQuestionID) && !is_numeric($iQuestionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iQuestionID)), __LINE__);
        }
        $this->iQuestionID = $iQuestionID;
        return $this;
    }
    /**
     * Get iGroupFrom value
     * @return int|null
     */
    public function getIGroupFrom()
    {
        return $this->iGroupFrom;
    }
    /**
     * Set iGroupFrom value
     * @param int $iGroupFrom
     * @return \Brainloop\Soap\StructType\ReleaseQuestion
     */
    public function setIGroupFrom($iGroupFrom = null)
    {
        // validation for constraint: int
        if (!is_null($iGroupFrom) && !is_numeric($iGroupFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iGroupFrom)), __LINE__);
        }
        $this->iGroupFrom = $iGroupFrom;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ReleaseQuestion
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
