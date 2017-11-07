<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAnnotationRegion ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAnnotationRegion
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfAnnotationRegion extends AbstractStructArrayBase
{
    /**
     * The AnnotationRegion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\AnnotationRegion[]
     */
    public $AnnotationRegion;
    /**
     * Constructor method for ArrayOfAnnotationRegion
     * @uses ArrayOfAnnotationRegion::setAnnotationRegion()
     * @param \Brainloop\Soap\StructType\AnnotationRegion[] $annotationRegion
     */
    public function __construct(array $annotationRegion = array())
    {
        $this
            ->setAnnotationRegion($annotationRegion);
    }
    /**
     * Get AnnotationRegion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\AnnotationRegion[]|null
     */
    public function getAnnotationRegion()
    {
        return isset($this->AnnotationRegion) ? $this->AnnotationRegion : null;
    }
    /**
     * Set AnnotationRegion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\AnnotationRegion[] $annotationRegion
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationRegion
     */
    public function setAnnotationRegion(array $annotationRegion = array())
    {
        foreach ($annotationRegion as $arrayOfAnnotationRegionAnnotationRegionItem) {
            // validation for constraint: itemType
            if (!$arrayOfAnnotationRegionAnnotationRegionItem instanceof \Brainloop\Soap\StructType\AnnotationRegion) {
                throw new \InvalidArgumentException(sprintf('The AnnotationRegion property can only contain items of \Brainloop\Soap\StructType\AnnotationRegion, "%s" given', is_object($arrayOfAnnotationRegionAnnotationRegionItem) ? get_class($arrayOfAnnotationRegionAnnotationRegionItem) : gettype($arrayOfAnnotationRegionAnnotationRegionItem)), __LINE__);
            }
        }
        if (is_null($annotationRegion) || (is_array($annotationRegion) && empty($annotationRegion))) {
            unset($this->AnnotationRegion);
        } else {
            $this->AnnotationRegion = $annotationRegion;
        }
        return $this;
    }
    /**
     * Add item to AnnotationRegion value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\AnnotationRegion $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationRegion
     */
    public function addToAnnotationRegion(\Brainloop\Soap\StructType\AnnotationRegion $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\AnnotationRegion) {
            throw new \InvalidArgumentException(sprintf('The AnnotationRegion property can only contain items of \Brainloop\Soap\StructType\AnnotationRegion, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AnnotationRegion[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\AnnotationRegion|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\AnnotationRegion|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\AnnotationRegion|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\AnnotationRegion|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\AnnotationRegion|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AnnotationRegion
     */
    public function getAttributeName()
    {
        return 'AnnotationRegion';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationRegion
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
