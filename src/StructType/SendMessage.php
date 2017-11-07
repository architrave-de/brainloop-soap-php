<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendMessage StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SendMessage extends AbstractStructBase
{
    /**
     * The drcid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $drcid;
    /**
     * The sSubject
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sSubject;
    /**
     * The sBody
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sBody;
    /**
     * The aRecipients
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfstring
     */
    public $aRecipients;
    /**
     * Constructor method for SendMessage
     * @uses SendMessage::setDrcid()
     * @uses SendMessage::setSSubject()
     * @uses SendMessage::setSBody()
     * @uses SendMessage::setARecipients()
     * @param int $drcid
     * @param string $sSubject
     * @param string $sBody
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $aRecipients
     */
    public function __construct($drcid = null, $sSubject = null, $sBody = null, \Brainloop\Soap\ArrayType\ArrayOfstring $aRecipients = null)
    {
        $this
            ->setDrcid($drcid)
            ->setSSubject($sSubject)
            ->setSBody($sBody)
            ->setARecipients($aRecipients);
    }
    /**
     * Get drcid value
     * @return int|null
     */
    public function getDrcid()
    {
        return $this->drcid;
    }
    /**
     * Set drcid value
     * @param int $drcid
     * @return \Brainloop\Soap\StructType\SendMessage
     */
    public function setDrcid($drcid = null)
    {
        // validation for constraint: int
        if (!is_null($drcid) && !is_numeric($drcid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($drcid)), __LINE__);
        }
        $this->drcid = $drcid;
        return $this;
    }
    /**
     * Get sSubject value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSSubject()
    {
        return isset($this->sSubject) ? $this->sSubject : null;
    }
    /**
     * Set sSubject value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sSubject
     * @return \Brainloop\Soap\StructType\SendMessage
     */
    public function setSSubject($sSubject = null)
    {
        // validation for constraint: string
        if (!is_null($sSubject) && !is_string($sSubject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sSubject)), __LINE__);
        }
        if (is_null($sSubject) || (is_array($sSubject) && empty($sSubject))) {
            unset($this->sSubject);
        } else {
            $this->sSubject = $sSubject;
        }
        return $this;
    }
    /**
     * Get sBody value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSBody()
    {
        return isset($this->sBody) ? $this->sBody : null;
    }
    /**
     * Set sBody value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sBody
     * @return \Brainloop\Soap\StructType\SendMessage
     */
    public function setSBody($sBody = null)
    {
        // validation for constraint: string
        if (!is_null($sBody) && !is_string($sBody)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sBody)), __LINE__);
        }
        if (is_null($sBody) || (is_array($sBody) && empty($sBody))) {
            unset($this->sBody);
        } else {
            $this->sBody = $sBody;
        }
        return $this;
    }
    /**
     * Get aRecipients value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfstring|null
     */
    public function getARecipients()
    {
        return isset($this->aRecipients) ? $this->aRecipients : null;
    }
    /**
     * Set aRecipients value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $aRecipients
     * @return \Brainloop\Soap\StructType\SendMessage
     */
    public function setARecipients(\Brainloop\Soap\ArrayType\ArrayOfstring $aRecipients = null)
    {
        if (is_null($aRecipients) || (is_array($aRecipients) && empty($aRecipients))) {
            unset($this->aRecipients);
        } else {
            $this->aRecipients = $aRecipients;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SendMessage
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
