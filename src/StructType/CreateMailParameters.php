<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMailParameters StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CreateMailParameters
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateMailParameters extends SendOptions
{
    /**
     * The CCEmails
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfstring
     */
    public $CCEmails;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Comment;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Subject;
    /**
     * The TOEmails
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfstring
     */
    public $TOEmails;
    /**
     * The AttachedItems
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $AttachedItems;
    /**
     * The DataroomID
     * @var int
     */
    public $DataroomID;
    /**
     * Constructor method for CreateMailParameters
     * @uses CreateMailParameters::setCCEmails()
     * @uses CreateMailParameters::setComment()
     * @uses CreateMailParameters::setSubject()
     * @uses CreateMailParameters::setTOEmails()
     * @uses CreateMailParameters::setAttachedItems()
     * @uses CreateMailParameters::setDataroomID()
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $cCEmails
     * @param string $comment
     * @param string $subject
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $tOEmails
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $attachedItems
     * @param int $dataroomID
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfstring $cCEmails = null, $comment = null, $subject = null, \Brainloop\Soap\ArrayType\ArrayOfstring $tOEmails = null, \Brainloop\Soap\ArrayType\ArrayOfint $attachedItems = null, $dataroomID = null)
    {
        $this
            ->setCCEmails($cCEmails)
            ->setComment($comment)
            ->setSubject($subject)
            ->setTOEmails($tOEmails)
            ->setAttachedItems($attachedItems)
            ->setDataroomID($dataroomID);
    }
    /**
     * Get CCEmails value
     * @return \Brainloop\Soap\ArrayType\ArrayOfstring|null
     */
    public function getCCEmails()
    {
        return $this->CCEmails;
    }
    /**
     * Set CCEmails value
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $cCEmails
     * @return \Brainloop\Soap\StructType\CreateMailParameters
     */
    public function setCCEmails(\Brainloop\Soap\ArrayType\ArrayOfstring $cCEmails = null)
    {
        $this->CCEmails = $cCEmails;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Brainloop\Soap\StructType\CreateMailParameters
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \Brainloop\Soap\StructType\CreateMailParameters
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get TOEmails value
     * @return \Brainloop\Soap\ArrayType\ArrayOfstring|null
     */
    public function getTOEmails()
    {
        return $this->TOEmails;
    }
    /**
     * Set TOEmails value
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $tOEmails
     * @return \Brainloop\Soap\StructType\CreateMailParameters
     */
    public function setTOEmails(\Brainloop\Soap\ArrayType\ArrayOfstring $tOEmails = null)
    {
        $this->TOEmails = $tOEmails;
        return $this;
    }
    /**
     * Get AttachedItems value
     * @return \Brainloop\Soap\ArrayType\ArrayOfint|null
     */
    public function getAttachedItems()
    {
        return $this->AttachedItems;
    }
    /**
     * Set AttachedItems value
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $attachedItems
     * @return \Brainloop\Soap\StructType\CreateMailParameters
     */
    public function setAttachedItems(\Brainloop\Soap\ArrayType\ArrayOfint $attachedItems = null)
    {
        $this->AttachedItems = $attachedItems;
        return $this;
    }
    /**
     * Get DataroomID value
     * @return int|null
     */
    public function getDataroomID()
    {
        return $this->DataroomID;
    }
    /**
     * Set DataroomID value
     * @param int $dataroomID
     * @return \Brainloop\Soap\StructType\CreateMailParameters
     */
    public function setDataroomID($dataroomID = null)
    {
        // validation for constraint: int
        if (!is_null($dataroomID) && !is_numeric($dataroomID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dataroomID)), __LINE__);
        }
        $this->DataroomID = $dataroomID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateMailParameters
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
