<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSystemAnnouncements StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetSystemAnnouncements extends AbstractStructBase
{
    /**
     * The eDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eDetails;
    /**
     * The languageId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $languageId;
    /**
     * Constructor method for GetSystemAnnouncements
     * @uses GetSystemAnnouncements::setEDetails()
     * @uses GetSystemAnnouncements::setLanguageId()
     * @param string $eDetails
     * @param int $languageId
     */
    public function __construct($eDetails = null, $languageId = null)
    {
        $this
            ->setEDetails($eDetails)
            ->setLanguageId($languageId);
    }
    /**
     * Get eDetails value
     * @return string|null
     */
    public function getEDetails()
    {
        return $this->eDetails;
    }
    /**
     * Set eDetails value
     * @uses \Brainloop\Soap\EnumType\ItemFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eDetails
     * @return \Brainloop\Soap\StructType\GetSystemAnnouncements
     */
    public function setEDetails($eDetails = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ItemFields::valueIsValid($eDetails)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eDetails, implode(', ', \Brainloop\Soap\EnumType\ItemFields::getValidValues())), __LINE__);
        }
        $this->eDetails = $eDetails;
        return $this;
    }
    /**
     * Get languageId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getLanguageId()
    {
        return isset($this->languageId) ? $this->languageId : null;
    }
    /**
     * Set languageId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $languageId
     * @return \Brainloop\Soap\StructType\GetSystemAnnouncements
     */
    public function setLanguageId($languageId = null)
    {
        // validation for constraint: int
        if (!is_null($languageId) && !is_numeric($languageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($languageId)), __LINE__);
        }
        if (is_null($languageId) || (is_array($languageId) && empty($languageId))) {
            unset($this->languageId);
        } else {
            $this->languageId = $languageId;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetSystemAnnouncements
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
