<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Report StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Report
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class Report extends ReportIdentification
{
    /**
     * The AllowSorting
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowSorting;
    /**
     * The Caption
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Caption;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The Fields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ReportColumnCollection
     */
    public $Fields;
    /**
     * The Group
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Group;
    /**
     * The IsDynamic
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDynamic;
    /**
     * The Parameters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ReportParameterCollection
     */
    public $Parameters;
    /**
     * The UtcOffset
     * Meta informations extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string
     */
    public $UtcOffset;
    /**
     * The VersionDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $VersionDate;
    /**
     * Constructor method for Report
     * @uses Report::setAllowSorting()
     * @uses Report::setCaption()
     * @uses Report::setDescription()
     * @uses Report::setFields()
     * @uses Report::setGroup()
     * @uses Report::setIsDynamic()
     * @uses Report::setParameters()
     * @uses Report::setUtcOffset()
     * @uses Report::setVersionDate()
     * @param bool $allowSorting
     * @param string $caption
     * @param string $description
     * @param \Brainloop\Soap\StructType\ReportColumnCollection $fields
     * @param string $group
     * @param bool $isDynamic
     * @param \Brainloop\Soap\StructType\ReportParameterCollection $parameters
     * @param string $utcOffset
     * @param string $versionDate
     */
    public function __construct($allowSorting = null, $caption = null, $description = null, \Brainloop\Soap\StructType\ReportColumnCollection $fields = null, $group = null, $isDynamic = null, \Brainloop\Soap\StructType\ReportParameterCollection $parameters = null, $utcOffset = null, $versionDate = null)
    {
        $this
            ->setAllowSorting($allowSorting)
            ->setCaption($caption)
            ->setDescription($description)
            ->setFields($fields)
            ->setGroup($group)
            ->setIsDynamic($isDynamic)
            ->setParameters($parameters)
            ->setUtcOffset($utcOffset)
            ->setVersionDate($versionDate);
    }
    /**
     * Get AllowSorting value
     * @return bool|null
     */
    public function getAllowSorting()
    {
        return $this->AllowSorting;
    }
    /**
     * Set AllowSorting value
     * @param bool $allowSorting
     * @return \Brainloop\Soap\StructType\Report
     */
    public function setAllowSorting($allowSorting = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowSorting) && !is_bool($allowSorting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowSorting)), __LINE__);
        }
        $this->AllowSorting = $allowSorting;
        return $this;
    }
    /**
     * Get Caption value
     * @return string|null
     */
    public function getCaption()
    {
        return $this->Caption;
    }
    /**
     * Set Caption value
     * @param string $caption
     * @return \Brainloop\Soap\StructType\Report
     */
    public function setCaption($caption = null)
    {
        // validation for constraint: string
        if (!is_null($caption) && !is_string($caption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($caption)), __LINE__);
        }
        $this->Caption = $caption;
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
     * @return \Brainloop\Soap\StructType\Report
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
     * Get Fields value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ReportColumnCollection|null
     */
    public function getFields()
    {
        return isset($this->Fields) ? $this->Fields : null;
    }
    /**
     * Set Fields value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\ReportColumnCollection $fields
     * @return \Brainloop\Soap\StructType\Report
     */
    public function setFields(\Brainloop\Soap\StructType\ReportColumnCollection $fields = null)
    {
        if (is_null($fields) || (is_array($fields) && empty($fields))) {
            unset($this->Fields);
        } else {
            $this->Fields = $fields;
        }
        return $this;
    }
    /**
     * Get Group value
     * @return string|null
     */
    public function getGroup()
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param string $group
     * @return \Brainloop\Soap\StructType\Report
     */
    public function setGroup($group = null)
    {
        // validation for constraint: string
        if (!is_null($group) && !is_string($group)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($group)), __LINE__);
        }
        $this->Group = $group;
        return $this;
    }
    /**
     * Get IsDynamic value
     * @return bool|null
     */
    public function getIsDynamic()
    {
        return $this->IsDynamic;
    }
    /**
     * Set IsDynamic value
     * @param bool $isDynamic
     * @return \Brainloop\Soap\StructType\Report
     */
    public function setIsDynamic($isDynamic = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDynamic) && !is_bool($isDynamic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDynamic)), __LINE__);
        }
        $this->IsDynamic = $isDynamic;
        return $this;
    }
    /**
     * Get Parameters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ReportParameterCollection|null
     */
    public function getParameters()
    {
        return isset($this->Parameters) ? $this->Parameters : null;
    }
    /**
     * Set Parameters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\ReportParameterCollection $parameters
     * @return \Brainloop\Soap\StructType\Report
     */
    public function setParameters(\Brainloop\Soap\StructType\ReportParameterCollection $parameters = null)
    {
        if (is_null($parameters) || (is_array($parameters) && empty($parameters))) {
            unset($this->Parameters);
        } else {
            $this->Parameters = $parameters;
        }
        return $this;
    }
    /**
     * Get UtcOffset value
     * @return string|null
     */
    public function getUtcOffset()
    {
        return $this->UtcOffset;
    }
    /**
     * Set UtcOffset value
     * @param string $utcOffset
     * @return \Brainloop\Soap\StructType\Report
     */
    public function setUtcOffset($utcOffset = null)
    {
        // validation for constraint: maxInclusive
        if ($utcOffset > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 0, "%s" given', $utcOffset), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($utcOffset < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $utcOffset), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($utcOffset) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $utcOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?", "%s" given', var_export($utcOffset, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($utcOffset) && !is_string($utcOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($utcOffset)), __LINE__);
        }
        $this->UtcOffset = $utcOffset;
        return $this;
    }
    /**
     * Get VersionDate value
     * @return string|null
     */
    public function getVersionDate()
    {
        return $this->VersionDate;
    }
    /**
     * Set VersionDate value
     * @param string $versionDate
     * @return \Brainloop\Soap\StructType\Report
     */
    public function setVersionDate($versionDate = null)
    {
        // validation for constraint: string
        if (!is_null($versionDate) && !is_string($versionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($versionDate)), __LINE__);
        }
        $this->VersionDate = $versionDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\Report
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
