<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateAnswer StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateAnswer extends AbstractStructBase
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
     * The iGroupTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $iGroupTo;
    /**
     * The sAnswer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sAnswer;
    /**
     * The sComment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sComment;
    /**
     * The iAnswerReferenceObjectID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $iAnswerReferenceObjectID;
    /**
     * The bMakePublic
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bMakePublic;
    /**
     * Constructor method for CreateAnswer
     * @uses CreateAnswer::setIQuestionID()
     * @uses CreateAnswer::setIGroupFrom()
     * @uses CreateAnswer::setIGroupTo()
     * @uses CreateAnswer::setSAnswer()
     * @uses CreateAnswer::setSComment()
     * @uses CreateAnswer::setIAnswerReferenceObjectID()
     * @uses CreateAnswer::setBMakePublic()
     * @param int $iQuestionID
     * @param int $iGroupFrom
     * @param int $iGroupTo
     * @param string $sAnswer
     * @param string $sComment
     * @param int $iAnswerReferenceObjectID
     * @param bool $bMakePublic
     */
    public function __construct($iQuestionID = null, $iGroupFrom = null, $iGroupTo = null, $sAnswer = null, $sComment = null, $iAnswerReferenceObjectID = null, $bMakePublic = null)
    {
        $this
            ->setIQuestionID($iQuestionID)
            ->setIGroupFrom($iGroupFrom)
            ->setIGroupTo($iGroupTo)
            ->setSAnswer($sAnswer)
            ->setSComment($sComment)
            ->setIAnswerReferenceObjectID($iAnswerReferenceObjectID)
            ->setBMakePublic($bMakePublic);
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
     * @return \Brainloop\Soap\StructType\CreateAnswer
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
     * @return \Brainloop\Soap\StructType\CreateAnswer
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
     * Get iGroupTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getIGroupTo()
    {
        return isset($this->iGroupTo) ? $this->iGroupTo : null;
    }
    /**
     * Set iGroupTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $iGroupTo
     * @return \Brainloop\Soap\StructType\CreateAnswer
     */
    public function setIGroupTo($iGroupTo = null)
    {
        // validation for constraint: int
        if (!is_null($iGroupTo) && !is_numeric($iGroupTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iGroupTo)), __LINE__);
        }
        if (is_null($iGroupTo) || (is_array($iGroupTo) && empty($iGroupTo))) {
            unset($this->iGroupTo);
        } else {
            $this->iGroupTo = $iGroupTo;
        }
        return $this;
    }
    /**
     * Get sAnswer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSAnswer()
    {
        return isset($this->sAnswer) ? $this->sAnswer : null;
    }
    /**
     * Set sAnswer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sAnswer
     * @return \Brainloop\Soap\StructType\CreateAnswer
     */
    public function setSAnswer($sAnswer = null)
    {
        // validation for constraint: string
        if (!is_null($sAnswer) && !is_string($sAnswer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sAnswer)), __LINE__);
        }
        if (is_null($sAnswer) || (is_array($sAnswer) && empty($sAnswer))) {
            unset($this->sAnswer);
        } else {
            $this->sAnswer = $sAnswer;
        }
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
     * @return \Brainloop\Soap\StructType\CreateAnswer
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
     * Get iAnswerReferenceObjectID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getIAnswerReferenceObjectID()
    {
        return isset($this->iAnswerReferenceObjectID) ? $this->iAnswerReferenceObjectID : null;
    }
    /**
     * Set iAnswerReferenceObjectID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $iAnswerReferenceObjectID
     * @return \Brainloop\Soap\StructType\CreateAnswer
     */
    public function setIAnswerReferenceObjectID($iAnswerReferenceObjectID = null)
    {
        // validation for constraint: int
        if (!is_null($iAnswerReferenceObjectID) && !is_numeric($iAnswerReferenceObjectID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iAnswerReferenceObjectID)), __LINE__);
        }
        if (is_null($iAnswerReferenceObjectID) || (is_array($iAnswerReferenceObjectID) && empty($iAnswerReferenceObjectID))) {
            unset($this->iAnswerReferenceObjectID);
        } else {
            $this->iAnswerReferenceObjectID = $iAnswerReferenceObjectID;
        }
        return $this;
    }
    /**
     * Get bMakePublic value
     * @return bool|null
     */
    public function getBMakePublic()
    {
        return $this->bMakePublic;
    }
    /**
     * Set bMakePublic value
     * @param bool $bMakePublic
     * @return \Brainloop\Soap\StructType\CreateAnswer
     */
    public function setBMakePublic($bMakePublic = null)
    {
        // validation for constraint: boolean
        if (!is_null($bMakePublic) && !is_bool($bMakePublic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bMakePublic)), __LINE__);
        }
        $this->bMakePublic = $bMakePublic;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateAnswer
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
