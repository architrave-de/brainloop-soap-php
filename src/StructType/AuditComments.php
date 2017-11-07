<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuditComments StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AuditComments
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class AuditComments extends AbstractStructBase
{
    /**
     * The Auditor
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Auditor;
    /**
     * The Created
     * @var string
     */
    public $Created;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Text;
    /**
     * Constructor method for AuditComments
     * @uses AuditComments::setAuditor()
     * @uses AuditComments::setCreated()
     * @uses AuditComments::setText()
     * @param string $auditor
     * @param string $created
     * @param string $text
     */
    public function __construct($auditor = null, $created = null, $text = null)
    {
        $this
            ->setAuditor($auditor)
            ->setCreated($created)
            ->setText($text);
    }
    /**
     * Get Auditor value
     * @return string|null
     */
    public function getAuditor()
    {
        return $this->Auditor;
    }
    /**
     * Set Auditor value
     * @param string $auditor
     * @return \Brainloop\Soap\StructType\AuditComments
     */
    public function setAuditor($auditor = null)
    {
        // validation for constraint: string
        if (!is_null($auditor) && !is_string($auditor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($auditor)), __LINE__);
        }
        $this->Auditor = $auditor;
        return $this;
    }
    /**
     * Get Created value
     * @return string|null
     */
    public function getCreated()
    {
        return $this->Created;
    }
    /**
     * Set Created value
     * @param string $created
     * @return \Brainloop\Soap\StructType\AuditComments
     */
    public function setCreated($created = null)
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($created)), __LINE__);
        }
        $this->Created = $created;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Brainloop\Soap\StructType\AuditComments
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\AuditComments
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
