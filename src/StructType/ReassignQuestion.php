<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReassignQuestion StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ReassignQuestion extends AbstractStructBase
{
    /**
     * The iQuestionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iQuestionID;
    /**
     * The aGroupID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $aGroupID;
    /**
     * The sComment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sComment;
    /**
     * The iAssignToUserID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $iAssignToUserID;
    /**
     * Constructor method for ReassignQuestion
     * @uses ReassignQuestion::setIQuestionID()
     * @uses ReassignQuestion::setAGroupID()
     * @uses ReassignQuestion::setSComment()
     * @uses ReassignQuestion::setIAssignToUserID()
     * @param int $iQuestionID
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aGroupID
     * @param string $sComment
     * @param int $iAssignToUserID
     */
    public function __construct($iQuestionID = null, \Brainloop\Soap\ArrayType\ArrayOfint $aGroupID = null, $sComment = null, $iAssignToUserID = null)
    {
        $this
            ->setIQuestionID($iQuestionID)
            ->setAGroupID($aGroupID)
            ->setSComment($sComment)
            ->setIAssignToUserID($iAssignToUserID);
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
     * @return \Brainloop\Soap\StructType\ReassignQuestion
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
     * Get aGroupID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfint|null
     */
    public function getAGroupID()
    {
        return isset($this->aGroupID) ? $this->aGroupID : null;
    }
    /**
     * Set aGroupID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aGroupID
     * @return \Brainloop\Soap\StructType\ReassignQuestion
     */
    public function setAGroupID(\Brainloop\Soap\ArrayType\ArrayOfint $aGroupID = null)
    {
        if (is_null($aGroupID) || (is_array($aGroupID) && empty($aGroupID))) {
            unset($this->aGroupID);
        } else {
            $this->aGroupID = $aGroupID;
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
     * @return \Brainloop\Soap\StructType\ReassignQuestion
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
     * Get iAssignToUserID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getIAssignToUserID()
    {
        return isset($this->iAssignToUserID) ? $this->iAssignToUserID : null;
    }
    /**
     * Set iAssignToUserID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $iAssignToUserID
     * @return \Brainloop\Soap\StructType\ReassignQuestion
     */
    public function setIAssignToUserID($iAssignToUserID = null)
    {
        // validation for constraint: int
        if (!is_null($iAssignToUserID) && !is_numeric($iAssignToUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iAssignToUserID)), __LINE__);
        }
        if (is_null($iAssignToUserID) || (is_array($iAssignToUserID) && empty($iAssignToUserID))) {
            unset($this->iAssignToUserID);
        } else {
            $this->iAssignToUserID = $iAssignToUserID;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ReassignQuestion
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
