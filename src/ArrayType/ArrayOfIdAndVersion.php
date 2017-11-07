<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfIdAndVersion ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfIdAndVersion
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfIdAndVersion extends AbstractStructArrayBase
{
    /**
     * The IdAndVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\IdAndVersion[]
     */
    public $IdAndVersion;
    /**
     * Constructor method for ArrayOfIdAndVersion
     * @uses ArrayOfIdAndVersion::setIdAndVersion()
     * @param \Brainloop\Soap\StructType\IdAndVersion[] $idAndVersion
     */
    public function __construct(array $idAndVersion = array())
    {
        $this
            ->setIdAndVersion($idAndVersion);
    }
    /**
     * Get IdAndVersion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\IdAndVersion[]|null
     */
    public function getIdAndVersion()
    {
        return isset($this->IdAndVersion) ? $this->IdAndVersion : null;
    }
    /**
     * Set IdAndVersion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\IdAndVersion[] $idAndVersion
     * @return \Brainloop\Soap\ArrayType\ArrayOfIdAndVersion
     */
    public function setIdAndVersion(array $idAndVersion = array())
    {
        foreach ($idAndVersion as $arrayOfIdAndVersionIdAndVersionItem) {
            // validation for constraint: itemType
            if (!$arrayOfIdAndVersionIdAndVersionItem instanceof \Brainloop\Soap\StructType\IdAndVersion) {
                throw new \InvalidArgumentException(sprintf('The IdAndVersion property can only contain items of \Brainloop\Soap\StructType\IdAndVersion, "%s" given', is_object($arrayOfIdAndVersionIdAndVersionItem) ? get_class($arrayOfIdAndVersionIdAndVersionItem) : gettype($arrayOfIdAndVersionIdAndVersionItem)), __LINE__);
            }
        }
        if (is_null($idAndVersion) || (is_array($idAndVersion) && empty($idAndVersion))) {
            unset($this->IdAndVersion);
        } else {
            $this->IdAndVersion = $idAndVersion;
        }
        return $this;
    }
    /**
     * Add item to IdAndVersion value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\IdAndVersion $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfIdAndVersion
     */
    public function addToIdAndVersion(\Brainloop\Soap\StructType\IdAndVersion $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\IdAndVersion) {
            throw new \InvalidArgumentException(sprintf('The IdAndVersion property can only contain items of \Brainloop\Soap\StructType\IdAndVersion, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->IdAndVersion[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\IdAndVersion|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\IdAndVersion|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\IdAndVersion|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\IdAndVersion|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\IdAndVersion|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string IdAndVersion
     */
    public function getAttributeName()
    {
        return 'IdAndVersion';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfIdAndVersion
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
