<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateQuestion StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateQuestion extends AbstractStructBase
{
    /**
     * The iLinkedItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iLinkedItemID;
    /**
     * The bIsPublic
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bIsPublic;
    /**
     * The sQuestion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sQuestion;
    /**
     * Constructor method for CreateQuestion
     * @uses CreateQuestion::setILinkedItemID()
     * @uses CreateQuestion::setBIsPublic()
     * @uses CreateQuestion::setSQuestion()
     * @param int $iLinkedItemID
     * @param bool $bIsPublic
     * @param string $sQuestion
     */
    public function __construct($iLinkedItemID = null, $bIsPublic = null, $sQuestion = null)
    {
        $this
            ->setILinkedItemID($iLinkedItemID)
            ->setBIsPublic($bIsPublic)
            ->setSQuestion($sQuestion);
    }
    /**
     * Get iLinkedItemID value
     * @return int|null
     */
    public function getILinkedItemID()
    {
        return $this->iLinkedItemID;
    }
    /**
     * Set iLinkedItemID value
     * @param int $iLinkedItemID
     * @return \Brainloop\Soap\StructType\CreateQuestion
     */
    public function setILinkedItemID($iLinkedItemID = null)
    {
        // validation for constraint: int
        if (!is_null($iLinkedItemID) && !is_numeric($iLinkedItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iLinkedItemID)), __LINE__);
        }
        $this->iLinkedItemID = $iLinkedItemID;
        return $this;
    }
    /**
     * Get bIsPublic value
     * @return bool|null
     */
    public function getBIsPublic()
    {
        return $this->bIsPublic;
    }
    /**
     * Set bIsPublic value
     * @param bool $bIsPublic
     * @return \Brainloop\Soap\StructType\CreateQuestion
     */
    public function setBIsPublic($bIsPublic = null)
    {
        // validation for constraint: boolean
        if (!is_null($bIsPublic) && !is_bool($bIsPublic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bIsPublic)), __LINE__);
        }
        $this->bIsPublic = $bIsPublic;
        return $this;
    }
    /**
     * Get sQuestion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSQuestion()
    {
        return isset($this->sQuestion) ? $this->sQuestion : null;
    }
    /**
     * Set sQuestion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sQuestion
     * @return \Brainloop\Soap\StructType\CreateQuestion
     */
    public function setSQuestion($sQuestion = null)
    {
        // validation for constraint: string
        if (!is_null($sQuestion) && !is_string($sQuestion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sQuestion)), __LINE__);
        }
        if (is_null($sQuestion) || (is_array($sQuestion) && empty($sQuestion))) {
            unset($this->sQuestion);
        } else {
            $this->sQuestion = $sQuestion;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateQuestion
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
