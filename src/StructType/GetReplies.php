<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReplies StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetReplies extends AbstractStructBase
{
    /**
     * The iQuestionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iQuestionID;
    /**
     * Constructor method for GetReplies
     * @uses GetReplies::setIQuestionID()
     * @param int $iQuestionID
     */
    public function __construct($iQuestionID = null)
    {
        $this
            ->setIQuestionID($iQuestionID);
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
     * @return \Brainloop\Soap\StructType\GetReplies
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetReplies
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
