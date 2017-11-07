<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QandA StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QandA
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class QandA extends BLItem
{
    /**
     * The IsAnswered
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAnswered;
    /**
     * The IsPublic
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPublic;
    /**
     * The Question
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Question;
    /**
     * The ReferencedObjectID
     * @var int
     */
    public $ReferencedObjectID;
    /**
     * Constructor method for QandA
     * @uses QandA::setIsAnswered()
     * @uses QandA::setIsPublic()
     * @uses QandA::setQuestion()
     * @uses QandA::setReferencedObjectID()
     * @param bool $isAnswered
     * @param bool $isPublic
     * @param string $question
     * @param int $referencedObjectID
     */
    public function __construct($isAnswered = null, $isPublic = null, $question = null, $referencedObjectID = null)
    {
        $this
            ->setIsAnswered($isAnswered)
            ->setIsPublic($isPublic)
            ->setQuestion($question)
            ->setReferencedObjectID($referencedObjectID);
    }
    /**
     * Get IsAnswered value
     * @return bool|null
     */
    public function getIsAnswered()
    {
        return $this->IsAnswered;
    }
    /**
     * Set IsAnswered value
     * @param bool $isAnswered
     * @return \Brainloop\Soap\StructType\QandA
     */
    public function setIsAnswered($isAnswered = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAnswered) && !is_bool($isAnswered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAnswered)), __LINE__);
        }
        $this->IsAnswered = $isAnswered;
        return $this;
    }
    /**
     * Get IsPublic value
     * @return bool|null
     */
    public function getIsPublic()
    {
        return $this->IsPublic;
    }
    /**
     * Set IsPublic value
     * @param bool $isPublic
     * @return \Brainloop\Soap\StructType\QandA
     */
    public function setIsPublic($isPublic = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPublic) && !is_bool($isPublic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPublic)), __LINE__);
        }
        $this->IsPublic = $isPublic;
        return $this;
    }
    /**
     * Get Question value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getQuestion()
    {
        return isset($this->Question) ? $this->Question : null;
    }
    /**
     * Set Question value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $question
     * @return \Brainloop\Soap\StructType\QandA
     */
    public function setQuestion($question = null)
    {
        // validation for constraint: string
        if (!is_null($question) && !is_string($question)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($question)), __LINE__);
        }
        if (is_null($question) || (is_array($question) && empty($question))) {
            unset($this->Question);
        } else {
            $this->Question = $question;
        }
        return $this;
    }
    /**
     * Get ReferencedObjectID value
     * @return int|null
     */
    public function getReferencedObjectID()
    {
        return $this->ReferencedObjectID;
    }
    /**
     * Set ReferencedObjectID value
     * @param int $referencedObjectID
     * @return \Brainloop\Soap\StructType\QandA
     */
    public function setReferencedObjectID($referencedObjectID = null)
    {
        // validation for constraint: int
        if (!is_null($referencedObjectID) && !is_numeric($referencedObjectID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($referencedObjectID)), __LINE__);
        }
        $this->ReferencedObjectID = $referencedObjectID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\QandA
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
