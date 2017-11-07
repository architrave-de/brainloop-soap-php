<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuditAddComment StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class AuditAddComment extends AbstractStructBase
{
    /**
     * The iDataroomID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDataroomID;
    /**
     * The iAuditorID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iAuditorID;
    /**
     * The strComment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $strComment;
    /**
     * Constructor method for AuditAddComment
     * @uses AuditAddComment::setIDataroomID()
     * @uses AuditAddComment::setIAuditorID()
     * @uses AuditAddComment::setStrComment()
     * @param int $iDataroomID
     * @param int $iAuditorID
     * @param string $strComment
     */
    public function __construct($iDataroomID = null, $iAuditorID = null, $strComment = null)
    {
        $this
            ->setIDataroomID($iDataroomID)
            ->setIAuditorID($iAuditorID)
            ->setStrComment($strComment);
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
     * @return \Brainloop\Soap\StructType\AuditAddComment
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
     * Get iAuditorID value
     * @return int|null
     */
    public function getIAuditorID()
    {
        return $this->iAuditorID;
    }
    /**
     * Set iAuditorID value
     * @param int $iAuditorID
     * @return \Brainloop\Soap\StructType\AuditAddComment
     */
    public function setIAuditorID($iAuditorID = null)
    {
        // validation for constraint: int
        if (!is_null($iAuditorID) && !is_numeric($iAuditorID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iAuditorID)), __LINE__);
        }
        $this->iAuditorID = $iAuditorID;
        return $this;
    }
    /**
     * Get strComment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStrComment()
    {
        return isset($this->strComment) ? $this->strComment : null;
    }
    /**
     * Set strComment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $strComment
     * @return \Brainloop\Soap\StructType\AuditAddComment
     */
    public function setStrComment($strComment = null)
    {
        // validation for constraint: string
        if (!is_null($strComment) && !is_string($strComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($strComment)), __LINE__);
        }
        if (is_null($strComment) || (is_array($strComment) && empty($strComment))) {
            unset($this->strComment);
        } else {
            $this->strComment = $strComment;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\AuditAddComment
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
