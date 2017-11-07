<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Folder StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Folder
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class Folder extends ContentItem
{
    /**
     * The HasChildren
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $HasChildren;
    /**
     * The Index
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Index;
    /**
     * The IndexForChildOn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IndexForChildOn;
    /**
     * The IntIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $IntIndex;
    /**
     * The IsEncrypted
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $IsEncrypted;
    /**
     * Constructor method for Folder
     * @uses Folder::setHasChildren()
     * @uses Folder::setIndex()
     * @uses Folder::setIndexForChildOn()
     * @uses Folder::setIntIndex()
     * @uses Folder::setIsEncrypted()
     * @param bool $hasChildren
     * @param string $index
     * @param bool $indexForChildOn
     * @param int $intIndex
     * @param bool $isEncrypted
     */
    public function __construct($hasChildren = null, $index = null, $indexForChildOn = null, $intIndex = null, $isEncrypted = null)
    {
        $this
            ->setHasChildren($hasChildren)
            ->setIndex($index)
            ->setIndexForChildOn($indexForChildOn)
            ->setIntIndex($intIndex)
            ->setIsEncrypted($isEncrypted);
    }
    /**
     * Get HasChildren value
     * @return bool|null
     */
    public function getHasChildren()
    {
        return $this->HasChildren;
    }
    /**
     * Set HasChildren value
     * @param bool $hasChildren
     * @return \Brainloop\Soap\StructType\Folder
     */
    public function setHasChildren($hasChildren = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasChildren) && !is_bool($hasChildren)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasChildren)), __LINE__);
        }
        $this->HasChildren = $hasChildren;
        return $this;
    }
    /**
     * Get Index value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIndex()
    {
        return isset($this->Index) ? $this->Index : null;
    }
    /**
     * Set Index value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $index
     * @return \Brainloop\Soap\StructType\Folder
     */
    public function setIndex($index = null)
    {
        // validation for constraint: string
        if (!is_null($index) && !is_string($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($index)), __LINE__);
        }
        if (is_null($index) || (is_array($index) && empty($index))) {
            unset($this->Index);
        } else {
            $this->Index = $index;
        }
        return $this;
    }
    /**
     * Get IndexForChildOn value
     * @return bool|null
     */
    public function getIndexForChildOn()
    {
        return $this->IndexForChildOn;
    }
    /**
     * Set IndexForChildOn value
     * @param bool $indexForChildOn
     * @return \Brainloop\Soap\StructType\Folder
     */
    public function setIndexForChildOn($indexForChildOn = null)
    {
        // validation for constraint: boolean
        if (!is_null($indexForChildOn) && !is_bool($indexForChildOn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indexForChildOn)), __LINE__);
        }
        $this->IndexForChildOn = $indexForChildOn;
        return $this;
    }
    /**
     * Get IntIndex value
     * @return int|null
     */
    public function getIntIndex()
    {
        return $this->IntIndex;
    }
    /**
     * Set IntIndex value
     * @param int $intIndex
     * @return \Brainloop\Soap\StructType\Folder
     */
    public function setIntIndex($intIndex = null)
    {
        // validation for constraint: int
        if (!is_null($intIndex) && !is_numeric($intIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($intIndex)), __LINE__);
        }
        $this->IntIndex = $intIndex;
        return $this;
    }
    /**
     * Get IsEncrypted value
     * @return bool|null
     */
    public function getIsEncrypted()
    {
        return $this->IsEncrypted;
    }
    /**
     * Set IsEncrypted value
     * @param bool $isEncrypted
     * @return \Brainloop\Soap\StructType\Folder
     */
    public function setIsEncrypted($isEncrypted = null)
    {
        // validation for constraint: boolean
        if (!is_null($isEncrypted) && !is_bool($isEncrypted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isEncrypted)), __LINE__);
        }
        $this->IsEncrypted = $isEncrypted;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\Folder
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
