<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnotationFields StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AnnotationFields
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class AnnotationFields extends AbstractStructBase
{
    /**
     * The Flags
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Flags;
    /**
     * The Guid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string
     */
    public $Guid;
    /**
     * The Intent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Intent;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The Page
     * @var int
     */
    public $Page;
    /**
     * The Reftype
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Reftype;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Subject;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Title;
    /**
     * Constructor method for AnnotationFields
     * @uses AnnotationFields::setFlags()
     * @uses AnnotationFields::setGuid()
     * @uses AnnotationFields::setIntent()
     * @uses AnnotationFields::setName()
     * @uses AnnotationFields::setPage()
     * @uses AnnotationFields::setReftype()
     * @uses AnnotationFields::setSubject()
     * @uses AnnotationFields::setTitle()
     * @param string $flags
     * @param string $guid
     * @param string $intent
     * @param string $name
     * @param int $page
     * @param string $reftype
     * @param string $subject
     * @param string $title
     */
    public function __construct($flags = null, $guid = null, $intent = null, $name = null, $page = null, $reftype = null, $subject = null, $title = null)
    {
        $this
            ->setFlags($flags)
            ->setGuid($guid)
            ->setIntent($intent)
            ->setName($name)
            ->setPage($page)
            ->setReftype($reftype)
            ->setSubject($subject)
            ->setTitle($title);
    }
    /**
     * Get Flags value
     * @return string|null
     */
    public function getFlags()
    {
        return $this->Flags;
    }
    /**
     * Set Flags value
     * @uses \Brainloop\Soap\EnumType\AnnotationXfdfFlagType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\AnnotationXfdfFlagType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $flags
     * @return \Brainloop\Soap\StructType\AnnotationFields
     */
    public function setFlags($flags = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\AnnotationXfdfFlagType::valueIsValid($flags)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $flags, implode(', ', \Brainloop\Soap\EnumType\AnnotationXfdfFlagType::getValidValues())), __LINE__);
        }
        $this->Flags = $flags;
        return $this;
    }
    /**
     * Get Guid value
     * @return string|null
     */
    public function getGuid()
    {
        return $this->Guid;
    }
    /**
     * Set Guid value
     * @param string $guid
     * @return \Brainloop\Soap\StructType\AnnotationFields
     */
    public function setGuid($guid = null)
    {
        // validation for constraint: pattern
        if (is_scalar($guid) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}", "%s" given', var_export($guid, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($guid)), __LINE__);
        }
        $this->Guid = $guid;
        return $this;
    }
    /**
     * Get Intent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIntent()
    {
        return isset($this->Intent) ? $this->Intent : null;
    }
    /**
     * Set Intent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $intent
     * @return \Brainloop\Soap\StructType\AnnotationFields
     */
    public function setIntent($intent = null)
    {
        // validation for constraint: string
        if (!is_null($intent) && !is_string($intent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($intent)), __LINE__);
        }
        if (is_null($intent) || (is_array($intent) && empty($intent))) {
            unset($this->Intent);
        } else {
            $this->Intent = $intent;
        }
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Brainloop\Soap\StructType\AnnotationFields
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get Page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->Page;
    }
    /**
     * Set Page value
     * @param int $page
     * @return \Brainloop\Soap\StructType\AnnotationFields
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !is_numeric($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($page)), __LINE__);
        }
        $this->Page = $page;
        return $this;
    }
    /**
     * Get Reftype value
     * @return string|null
     */
    public function getReftype()
    {
        return $this->Reftype;
    }
    /**
     * Set Reftype value
     * @uses \Brainloop\Soap\EnumType\AnnotationRefType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\AnnotationRefType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $reftype
     * @return \Brainloop\Soap\StructType\AnnotationFields
     */
    public function setReftype($reftype = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\AnnotationRefType::valueIsValid($reftype)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $reftype, implode(', ', \Brainloop\Soap\EnumType\AnnotationRefType::getValidValues())), __LINE__);
        }
        $this->Reftype = $reftype;
        return $this;
    }
    /**
     * Get Subject value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSubject()
    {
        return isset($this->Subject) ? $this->Subject : null;
    }
    /**
     * Set Subject value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $subject
     * @return \Brainloop\Soap\StructType\AnnotationFields
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject)), __LINE__);
        }
        if (is_null($subject) || (is_array($subject) && empty($subject))) {
            unset($this->Subject);
        } else {
            $this->Subject = $subject;
        }
        return $this;
    }
    /**
     * Get Title value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTitle()
    {
        return isset($this->Title) ? $this->Title : null;
    }
    /**
     * Set Title value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $title
     * @return \Brainloop\Soap\StructType\AnnotationFields
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->Title);
        } else {
            $this->Title = $title;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\AnnotationFields
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
