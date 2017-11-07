<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReverseQuestion StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ReverseQuestion extends AbstractStructBase
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
     * The sComment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sComment;
    /**
     * Constructor method for ReverseQuestion
     * @uses ReverseQuestion::setIQuestionID()
     * @uses ReverseQuestion::setIGroupFrom()
     * @uses ReverseQuestion::setSComment()
     * @param int $iQuestionID
     * @param int $iGroupFrom
     * @param string $sComment
     */
    public function __construct($iQuestionID = null, $iGroupFrom = null, $sComment = null)
    {
        $this
            ->setIQuestionID($iQuestionID)
            ->setIGroupFrom($iGroupFrom)
            ->setSComment($sComment);
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
     * @return \Brainloop\Soap\StructType\ReverseQuestion
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
     * @return \Brainloop\Soap\StructType\ReverseQuestion
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
     * Get sComment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSComment()
    {
        return isset($this->sComment) ? $this->sComment : null;
    }
    /**
     * Set sComment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sComment
     * @return \Brainloop\Soap\StructType\ReverseQuestion
     */
    public function setSComment($sComment = null)
    {
        // validation for constraint: string
        if (!is_null($sComment) && !is_string($sComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sComment)), __LINE__);
        }
        if (is_null($sComment) || (is_array($sComment) && empty($sComment))) {
            unset($this->sComment);
        } else {
            $this->sComment = $sComment;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ReverseQuestion
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
