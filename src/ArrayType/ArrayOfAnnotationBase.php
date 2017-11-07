<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAnnotationBase ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAnnotationBase
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfAnnotationBase extends AbstractStructArrayBase
{
    /**
     * The AnnotationBase
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\AnnotationBase[]
     */
    public $AnnotationBase;
    /**
     * Constructor method for ArrayOfAnnotationBase
     * @uses ArrayOfAnnotationBase::setAnnotationBase()
     * @param \Brainloop\Soap\StructType\AnnotationBase[] $annotationBase
     */
    public function __construct(array $annotationBase = array())
    {
        $this
            ->setAnnotationBase($annotationBase);
    }
    /**
     * Get AnnotationBase value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\AnnotationBase[]|null
     */
    public function getAnnotationBase()
    {
        return isset($this->AnnotationBase) ? $this->AnnotationBase : null;
    }
    /**
     * Set AnnotationBase value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\AnnotationBase[] $annotationBase
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationBase
     */
    public function setAnnotationBase(array $annotationBase = array())
    {
        foreach ($annotationBase as $arrayOfAnnotationBaseAnnotationBaseItem) {
            // validation for constraint: itemType
            if (!$arrayOfAnnotationBaseAnnotationBaseItem instanceof \Brainloop\Soap\StructType\AnnotationBase) {
                throw new \InvalidArgumentException(sprintf('The AnnotationBase property can only contain items of \Brainloop\Soap\StructType\AnnotationBase, "%s" given', is_object($arrayOfAnnotationBaseAnnotationBaseItem) ? get_class($arrayOfAnnotationBaseAnnotationBaseItem) : gettype($arrayOfAnnotationBaseAnnotationBaseItem)), __LINE__);
            }
        }
        if (is_null($annotationBase) || (is_array($annotationBase) && empty($annotationBase))) {
            unset($this->AnnotationBase);
        } else {
            $this->AnnotationBase = $annotationBase;
        }
        return $this;
    }
    /**
     * Add item to AnnotationBase value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\AnnotationBase $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationBase
     */
    public function addToAnnotationBase(\Brainloop\Soap\StructType\AnnotationBase $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\AnnotationBase) {
            throw new \InvalidArgumentException(sprintf('The AnnotationBase property can only contain items of \Brainloop\Soap\StructType\AnnotationBase, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AnnotationBase[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\AnnotationBase|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\AnnotationBase|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\AnnotationBase|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\AnnotationBase|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\AnnotationBase|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AnnotationBase
     */
    public function getAttributeName()
    {
        return 'AnnotationBase';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationBase
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
