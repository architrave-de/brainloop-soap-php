<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfReview ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfReview
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfReview extends AbstractStructArrayBase
{
    /**
     * The Review
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Review[]
     */
    public $Review;
    /**
     * Constructor method for ArrayOfReview
     * @uses ArrayOfReview::setReview()
     * @param \Brainloop\Soap\StructType\Review[] $review
     */
    public function __construct(array $review = array())
    {
        $this
            ->setReview($review);
    }
    /**
     * Get Review value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Review[]|null
     */
    public function getReview()
    {
        return isset($this->Review) ? $this->Review : null;
    }
    /**
     * Set Review value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\Review[] $review
     * @return \Brainloop\Soap\ArrayType\ArrayOfReview
     */
    public function setReview(array $review = array())
    {
        foreach ($review as $arrayOfReviewReviewItem) {
            // validation for constraint: itemType
            if (!$arrayOfReviewReviewItem instanceof \Brainloop\Soap\StructType\Review) {
                throw new \InvalidArgumentException(sprintf('The Review property can only contain items of \Brainloop\Soap\StructType\Review, "%s" given', is_object($arrayOfReviewReviewItem) ? get_class($arrayOfReviewReviewItem) : gettype($arrayOfReviewReviewItem)), __LINE__);
            }
        }
        if (is_null($review) || (is_array($review) && empty($review))) {
            unset($this->Review);
        } else {
            $this->Review = $review;
        }
        return $this;
    }
    /**
     * Add item to Review value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\Review $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfReview
     */
    public function addToReview(\Brainloop\Soap\StructType\Review $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\Review) {
            throw new \InvalidArgumentException(sprintf('The Review property can only contain items of \Brainloop\Soap\StructType\Review, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Review[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\Review|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\Review|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\Review|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\Review|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\Review|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Review
     */
    public function getAttributeName()
    {
        return 'Review';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfReview
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
