<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemsByID StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetItemsByID extends AbstractStructBase
{
    /**
     * The aServiceItemKeyVersions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion
     */
    public $aServiceItemKeyVersions;
    /**
     * The eFields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eFields;
    /**
     * The iPageIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iPageIndex;
    /**
     * The iPageSize
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iPageSize;
    /**
     * Constructor method for GetItemsByID
     * @uses GetItemsByID::setAServiceItemKeyVersions()
     * @uses GetItemsByID::setEFields()
     * @uses GetItemsByID::setIPageIndex()
     * @uses GetItemsByID::setIPageSize()
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion $aServiceItemKeyVersions
     * @param string $eFields
     * @param int $iPageIndex
     * @param int $iPageSize
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion $aServiceItemKeyVersions = null, $eFields = null, $iPageIndex = null, $iPageSize = null)
    {
        $this
            ->setAServiceItemKeyVersions($aServiceItemKeyVersions)
            ->setEFields($eFields)
            ->setIPageIndex($iPageIndex)
            ->setIPageSize($iPageSize);
    }
    /**
     * Get aServiceItemKeyVersions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion|null
     */
    public function getAServiceItemKeyVersions()
    {
        return isset($this->aServiceItemKeyVersions) ? $this->aServiceItemKeyVersions : null;
    }
    /**
     * Set aServiceItemKeyVersions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion $aServiceItemKeyVersions
     * @return \Brainloop\Soap\StructType\GetItemsByID
     */
    public function setAServiceItemKeyVersions(\Brainloop\Soap\ArrayType\ArrayOfItemIDAndVersion $aServiceItemKeyVersions = null)
    {
        if (is_null($aServiceItemKeyVersions) || (is_array($aServiceItemKeyVersions) && empty($aServiceItemKeyVersions))) {
            unset($this->aServiceItemKeyVersions);
        } else {
            $this->aServiceItemKeyVersions = $aServiceItemKeyVersions;
        }
        return $this;
    }
    /**
     * Get eFields value
     * @return string|null
     */
    public function getEFields()
    {
        return $this->eFields;
    }
    /**
     * Set eFields value
     * @uses \Brainloop\Soap\EnumType\ItemFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eFields
     * @return \Brainloop\Soap\StructType\GetItemsByID
     */
    public function setEFields($eFields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ItemFields::valueIsValid($eFields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eFields, implode(', ', \Brainloop\Soap\EnumType\ItemFields::getValidValues())), __LINE__);
        }
        $this->eFields = $eFields;
        return $this;
    }
    /**
     * Get iPageIndex value
     * @return int|null
     */
    public function getIPageIndex()
    {
        return $this->iPageIndex;
    }
    /**
     * Set iPageIndex value
     * @param int $iPageIndex
     * @return \Brainloop\Soap\StructType\GetItemsByID
     */
    public function setIPageIndex($iPageIndex = null)
    {
        // validation for constraint: int
        if (!is_null($iPageIndex) && !is_numeric($iPageIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iPageIndex)), __LINE__);
        }
        $this->iPageIndex = $iPageIndex;
        return $this;
    }
    /**
     * Get iPageSize value
     * @return int|null
     */
    public function getIPageSize()
    {
        return $this->iPageSize;
    }
    /**
     * Set iPageSize value
     * @param int $iPageSize
     * @return \Brainloop\Soap\StructType\GetItemsByID
     */
    public function setIPageSize($iPageSize = null)
    {
        // validation for constraint: int
        if (!is_null($iPageSize) && !is_numeric($iPageSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iPageSize)), __LINE__);
        }
        $this->iPageSize = $iPageSize;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetItemsByID
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
