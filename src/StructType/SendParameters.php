<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendParameters StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SendParameters
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SendParameters extends SendOptions
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
     * The EmailLanguageID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $EmailLanguageID;
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
     * Constructor method for SendParameters
     * @uses SendParameters::setCCEmails()
     * @uses SendParameters::setComment()
     * @uses SendParameters::setEmailLanguageID()
     * @uses SendParameters::setSubject()
     * @uses SendParameters::setTOEmails()
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $cCEmails
     * @param string $comment
     * @param int $emailLanguageID
     * @param string $subject
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $tOEmails
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfstring $cCEmails = null, $comment = null, $emailLanguageID = null, $subject = null, \Brainloop\Soap\ArrayType\ArrayOfstring $tOEmails = null)
    {
        $this
            ->setCCEmails($cCEmails)
            ->setComment($comment)
            ->setEmailLanguageID($emailLanguageID)
            ->setSubject($subject)
            ->setTOEmails($tOEmails);
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
     * @return \Brainloop\Soap\StructType\SendParameters
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
     * @return \Brainloop\Soap\StructType\SendParameters
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
     * Get EmailLanguageID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getEmailLanguageID()
    {
        return isset($this->EmailLanguageID) ? $this->EmailLanguageID : null;
    }
    /**
     * Set EmailLanguageID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $emailLanguageID
     * @return \Brainloop\Soap\StructType\SendParameters
     */
    public function setEmailLanguageID($emailLanguageID = null)
    {
        // validation for constraint: int
        if (!is_null($emailLanguageID) && !is_numeric($emailLanguageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($emailLanguageID)), __LINE__);
        }
        if (is_null($emailLanguageID) || (is_array($emailLanguageID) && empty($emailLanguageID))) {
            unset($this->EmailLanguageID);
        } else {
            $this->EmailLanguageID = $emailLanguageID;
        }
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
     * @return \Brainloop\Soap\StructType\SendParameters
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
     * @return \Brainloop\Soap\StructType\SendParameters
     */
    public function setTOEmails(\Brainloop\Soap\ArrayType\ArrayOfstring $tOEmails = null)
    {
        $this->TOEmails = $tOEmails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SendParameters
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
