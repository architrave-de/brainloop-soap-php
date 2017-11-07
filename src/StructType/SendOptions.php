<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendOptions StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SendOptions
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SendOptions extends AbstractStructBase
{
    /**
     * The AllowEdit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowEdit;
    /**
     * The DownloadBrainmark
     * @var bool
     */
    public $DownloadBrainmark;
    /**
     * The DownloadOriginal
     * @var bool
     */
    public $DownloadOriginal;
    /**
     * The DueDays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $DueDays;
    /**
     * The ExpireDays
     * @var int
     */
    public $ExpireDays;
    /**
     * The LinkType
     * @var string
     */
    public $LinkType;
    /**
     * Constructor method for SendOptions
     * @uses SendOptions::setAllowEdit()
     * @uses SendOptions::setDownloadBrainmark()
     * @uses SendOptions::setDownloadOriginal()
     * @uses SendOptions::setDueDays()
     * @uses SendOptions::setExpireDays()
     * @uses SendOptions::setLinkType()
     * @param bool $allowEdit
     * @param bool $downloadBrainmark
     * @param bool $downloadOriginal
     * @param int $dueDays
     * @param int $expireDays
     * @param string $linkType
     */
    public function __construct($allowEdit = null, $downloadBrainmark = null, $downloadOriginal = null, $dueDays = null, $expireDays = null, $linkType = null)
    {
        $this
            ->setAllowEdit($allowEdit)
            ->setDownloadBrainmark($downloadBrainmark)
            ->setDownloadOriginal($downloadOriginal)
            ->setDueDays($dueDays)
            ->setExpireDays($expireDays)
            ->setLinkType($linkType);
    }
    /**
     * Get AllowEdit value
     * @return bool|null
     */
    public function getAllowEdit()
    {
        return $this->AllowEdit;
    }
    /**
     * Set AllowEdit value
     * @param bool $allowEdit
     * @return \Brainloop\Soap\StructType\SendOptions
     */
    public function setAllowEdit($allowEdit = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowEdit) && !is_bool($allowEdit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowEdit)), __LINE__);
        }
        $this->AllowEdit = $allowEdit;
        return $this;
    }
    /**
     * Get DownloadBrainmark value
     * @return bool|null
     */
    public function getDownloadBrainmark()
    {
        return $this->DownloadBrainmark;
    }
    /**
     * Set DownloadBrainmark value
     * @param bool $downloadBrainmark
     * @return \Brainloop\Soap\StructType\SendOptions
     */
    public function setDownloadBrainmark($downloadBrainmark = null)
    {
        // validation for constraint: boolean
        if (!is_null($downloadBrainmark) && !is_bool($downloadBrainmark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($downloadBrainmark)), __LINE__);
        }
        $this->DownloadBrainmark = $downloadBrainmark;
        return $this;
    }
    /**
     * Get DownloadOriginal value
     * @return bool|null
     */
    public function getDownloadOriginal()
    {
        return $this->DownloadOriginal;
    }
    /**
     * Set DownloadOriginal value
     * @param bool $downloadOriginal
     * @return \Brainloop\Soap\StructType\SendOptions
     */
    public function setDownloadOriginal($downloadOriginal = null)
    {
        // validation for constraint: boolean
        if (!is_null($downloadOriginal) && !is_bool($downloadOriginal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($downloadOriginal)), __LINE__);
        }
        $this->DownloadOriginal = $downloadOriginal;
        return $this;
    }
    /**
     * Get DueDays value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDueDays()
    {
        return isset($this->DueDays) ? $this->DueDays : null;
    }
    /**
     * Set DueDays value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $dueDays
     * @return \Brainloop\Soap\StructType\SendOptions
     */
    public function setDueDays($dueDays = null)
    {
        // validation for constraint: int
        if (!is_null($dueDays) && !is_numeric($dueDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dueDays)), __LINE__);
        }
        if (is_null($dueDays) || (is_array($dueDays) && empty($dueDays))) {
            unset($this->DueDays);
        } else {
            $this->DueDays = $dueDays;
        }
        return $this;
    }
    /**
     * Get ExpireDays value
     * @return int|null
     */
    public function getExpireDays()
    {
        return $this->ExpireDays;
    }
    /**
     * Set ExpireDays value
     * @param int $expireDays
     * @return \Brainloop\Soap\StructType\SendOptions
     */
    public function setExpireDays($expireDays = null)
    {
        // validation for constraint: int
        if (!is_null($expireDays) && !is_numeric($expireDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($expireDays)), __LINE__);
        }
        $this->ExpireDays = $expireDays;
        return $this;
    }
    /**
     * Get LinkType value
     * @return string|null
     */
    public function getLinkType()
    {
        return $this->LinkType;
    }
    /**
     * Set LinkType value
     * @uses \Brainloop\Soap\EnumType\SendLinkType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\SendLinkType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $linkType
     * @return \Brainloop\Soap\StructType\SendOptions
     */
    public function setLinkType($linkType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\SendLinkType::valueIsValid($linkType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $linkType, implode(', ', \Brainloop\Soap\EnumType\SendLinkType::getValidValues())), __LINE__);
        }
        $this->LinkType = $linkType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SendOptions
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
