<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAnnotationFields ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAnnotationFields
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfAnnotationFields extends AbstractStructArrayBase
{
    /**
     * The AnnotationFields
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\AnnotationFields[]
     */
    public $AnnotationFields;
    /**
     * Constructor method for ArrayOfAnnotationFields
     * @uses ArrayOfAnnotationFields::setAnnotationFields()
     * @param \Brainloop\Soap\StructType\AnnotationFields[] $annotationFields
     */
    public function __construct(array $annotationFields = array())
    {
        $this
            ->setAnnotationFields($annotationFields);
    }
    /**
     * Get AnnotationFields value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\AnnotationFields[]|null
     */
    public function getAnnotationFields()
    {
        return isset($this->AnnotationFields) ? $this->AnnotationFields : null;
    }
    /**
     * Set AnnotationFields value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\AnnotationFields[] $annotationFields
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationFields
     */
    public function setAnnotationFields(array $annotationFields = array())
    {
        foreach ($annotationFields as $arrayOfAnnotationFieldsAnnotationFieldsItem) {
            // validation for constraint: itemType
            if (!$arrayOfAnnotationFieldsAnnotationFieldsItem instanceof \Brainloop\Soap\StructType\AnnotationFields) {
                throw new \InvalidArgumentException(sprintf('The AnnotationFields property can only contain items of \Brainloop\Soap\StructType\AnnotationFields, "%s" given', is_object($arrayOfAnnotationFieldsAnnotationFieldsItem) ? get_class($arrayOfAnnotationFieldsAnnotationFieldsItem) : gettype($arrayOfAnnotationFieldsAnnotationFieldsItem)), __LINE__);
            }
        }
        if (is_null($annotationFields) || (is_array($annotationFields) && empty($annotationFields))) {
            unset($this->AnnotationFields);
        } else {
            $this->AnnotationFields = $annotationFields;
        }
        return $this;
    }
    /**
     * Add item to AnnotationFields value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\AnnotationFields $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationFields
     */
    public function addToAnnotationFields(\Brainloop\Soap\StructType\AnnotationFields $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\AnnotationFields) {
            throw new \InvalidArgumentException(sprintf('The AnnotationFields property can only contain items of \Brainloop\Soap\StructType\AnnotationFields, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AnnotationFields[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\AnnotationFields|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\AnnotationFields|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\AnnotationFields|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\AnnotationFields|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\AnnotationFields|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AnnotationFields
     */
    public function getAttributeName()
    {
        return 'AnnotationFields';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationFields
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
