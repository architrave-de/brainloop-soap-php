<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrainloopFault StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BrainloopFault
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class BrainloopFault extends AbstractStructBase
{
    /**
     * The Code
     * @var string
     */
    public $Code;
    /**
     * The CodeValue
     * @var int
     */
    public $CodeValue;
    /**
     * The DataroomID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $DataroomID;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The DrcID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $DrcID;
    /**
     * The ResumeMinutes
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ResumeMinutes;
    /**
     * The ResumeTime
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ResumeTime;
    /**
     * The SubCode
     * @var string
     */
    public $SubCode;
    /**
     * The SubCodeValue
     * @var int
     */
    public $SubCodeValue;
    /**
     * The TOTPLoginRequired
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $TOTPLoginRequired;
    /**
     * Constructor method for BrainloopFault
     * @uses BrainloopFault::setCode()
     * @uses BrainloopFault::setCodeValue()
     * @uses BrainloopFault::setDataroomID()
     * @uses BrainloopFault::setDescription()
     * @uses BrainloopFault::setDrcID()
     * @uses BrainloopFault::setResumeMinutes()
     * @uses BrainloopFault::setResumeTime()
     * @uses BrainloopFault::setSubCode()
     * @uses BrainloopFault::setSubCodeValue()
     * @uses BrainloopFault::setTOTPLoginRequired()
     * @param string $code
     * @param int $codeValue
     * @param int $dataroomID
     * @param string $description
     * @param int $drcID
     * @param int $resumeMinutes
     * @param string $resumeTime
     * @param string $subCode
     * @param int $subCodeValue
     * @param bool $tOTPLoginRequired
     */
    public function __construct($code = null, $codeValue = null, $dataroomID = null, $description = null, $drcID = null, $resumeMinutes = null, $resumeTime = null, $subCode = null, $subCodeValue = null, $tOTPLoginRequired = null)
    {
        $this
            ->setCode($code)
            ->setCodeValue($codeValue)
            ->setDataroomID($dataroomID)
            ->setDescription($description)
            ->setDrcID($drcID)
            ->setResumeMinutes($resumeMinutes)
            ->setResumeTime($resumeTime)
            ->setSubCode($subCode)
            ->setSubCodeValue($subCodeValue)
            ->setTOTPLoginRequired($tOTPLoginRequired);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @uses \Brainloop\Soap\EnumType\BrainloopFaultCode::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\BrainloopFaultCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $code
     * @return \Brainloop\Soap\StructType\BrainloopFault
     */
    public function setCode($code = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\BrainloopFaultCode::valueIsValid($code)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $code, implode(', ', \Brainloop\Soap\EnumType\BrainloopFaultCode::getValidValues())), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get CodeValue value
     * @return int|null
     */
    public function getCodeValue()
    {
        return $this->CodeValue;
    }
    /**
     * Set CodeValue value
     * @param int $codeValue
     * @return \Brainloop\Soap\StructType\BrainloopFault
     */
    public function setCodeValue($codeValue = null)
    {
        // validation for constraint: int
        if (!is_null($codeValue) && !is_numeric($codeValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($codeValue)), __LINE__);
        }
        $this->CodeValue = $codeValue;
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
     * @return \Brainloop\Soap\StructType\BrainloopFault
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
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Brainloop\Soap\StructType\BrainloopFault
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get DrcID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDrcID()
    {
        return isset($this->DrcID) ? $this->DrcID : null;
    }
    /**
     * Set DrcID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $drcID
     * @return \Brainloop\Soap\StructType\BrainloopFault
     */
    public function setDrcID($drcID = null)
    {
        // validation for constraint: int
        if (!is_null($drcID) && !is_numeric($drcID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($drcID)), __LINE__);
        }
        if (is_null($drcID) || (is_array($drcID) && empty($drcID))) {
            unset($this->DrcID);
        } else {
            $this->DrcID = $drcID;
        }
        return $this;
    }
    /**
     * Get ResumeMinutes value
     * @return int|null
     */
    public function getResumeMinutes()
    {
        return $this->ResumeMinutes;
    }
    /**
     * Set ResumeMinutes value
     * @param int $resumeMinutes
     * @return \Brainloop\Soap\StructType\BrainloopFault
     */
    public function setResumeMinutes($resumeMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($resumeMinutes) && !is_numeric($resumeMinutes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($resumeMinutes)), __LINE__);
        }
        $this->ResumeMinutes = $resumeMinutes;
        return $this;
    }
    /**
     * Get ResumeTime value
     * @return string|null
     */
    public function getResumeTime()
    {
        return $this->ResumeTime;
    }
    /**
     * Set ResumeTime value
     * @param string $resumeTime
     * @return \Brainloop\Soap\StructType\BrainloopFault
     */
    public function setResumeTime($resumeTime = null)
    {
        // validation for constraint: string
        if (!is_null($resumeTime) && !is_string($resumeTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resumeTime)), __LINE__);
        }
        $this->ResumeTime = $resumeTime;
        return $this;
    }
    /**
     * Get SubCode value
     * @return string|null
     */
    public function getSubCode()
    {
        return $this->SubCode;
    }
    /**
     * Set SubCode value
     * @uses \Brainloop\Soap\EnumType\BrainloopFaultCode::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\BrainloopFaultCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subCode
     * @return \Brainloop\Soap\StructType\BrainloopFault
     */
    public function setSubCode($subCode = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\BrainloopFaultCode::valueIsValid($subCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $subCode, implode(', ', \Brainloop\Soap\EnumType\BrainloopFaultCode::getValidValues())), __LINE__);
        }
        $this->SubCode = $subCode;
        return $this;
    }
    /**
     * Get SubCodeValue value
     * @return int|null
     */
    public function getSubCodeValue()
    {
        return $this->SubCodeValue;
    }
    /**
     * Set SubCodeValue value
     * @param int $subCodeValue
     * @return \Brainloop\Soap\StructType\BrainloopFault
     */
    public function setSubCodeValue($subCodeValue = null)
    {
        // validation for constraint: int
        if (!is_null($subCodeValue) && !is_numeric($subCodeValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($subCodeValue)), __LINE__);
        }
        $this->SubCodeValue = $subCodeValue;
        return $this;
    }
    /**
     * Get TOTPLoginRequired value
     * @return bool|null
     */
    public function getTOTPLoginRequired()
    {
        return $this->TOTPLoginRequired;
    }
    /**
     * Set TOTPLoginRequired value
     * @param bool $tOTPLoginRequired
     * @return \Brainloop\Soap\StructType\BrainloopFault
     */
    public function setTOTPLoginRequired($tOTPLoginRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($tOTPLoginRequired) && !is_bool($tOTPLoginRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($tOTPLoginRequired)), __LINE__);
        }
        $this->TOTPLoginRequired = $tOTPLoginRequired;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\BrainloopFault
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
