<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMailItemTokenURLs ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMailItemTokenURLs
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfMailItemTokenURLs extends AbstractStructArrayBase
{
    /**
     * The MailItemTokenURLs
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\MailItemTokenURLs[]
     */
    public $MailItemTokenURLs;
    /**
     * Constructor method for ArrayOfMailItemTokenURLs
     * @uses ArrayOfMailItemTokenURLs::setMailItemTokenURLs()
     * @param \Brainloop\Soap\StructType\MailItemTokenURLs[] $mailItemTokenURLs
     */
    public function __construct(array $mailItemTokenURLs = array())
    {
        $this
            ->setMailItemTokenURLs($mailItemTokenURLs);
    }
    /**
     * Get MailItemTokenURLs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\MailItemTokenURLs[]|null
     */
    public function getMailItemTokenURLs()
    {
        return isset($this->MailItemTokenURLs) ? $this->MailItemTokenURLs : null;
    }
    /**
     * Set MailItemTokenURLs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\MailItemTokenURLs[] $mailItemTokenURLs
     * @return \Brainloop\Soap\ArrayType\ArrayOfMailItemTokenURLs
     */
    public function setMailItemTokenURLs(array $mailItemTokenURLs = array())
    {
        foreach ($mailItemTokenURLs as $arrayOfMailItemTokenURLsMailItemTokenURLsItem) {
            // validation for constraint: itemType
            if (!$arrayOfMailItemTokenURLsMailItemTokenURLsItem instanceof \Brainloop\Soap\StructType\MailItemTokenURLs) {
                throw new \InvalidArgumentException(sprintf('The MailItemTokenURLs property can only contain items of \Brainloop\Soap\StructType\MailItemTokenURLs, "%s" given', is_object($arrayOfMailItemTokenURLsMailItemTokenURLsItem) ? get_class($arrayOfMailItemTokenURLsMailItemTokenURLsItem) : gettype($arrayOfMailItemTokenURLsMailItemTokenURLsItem)), __LINE__);
            }
        }
        if (is_null($mailItemTokenURLs) || (is_array($mailItemTokenURLs) && empty($mailItemTokenURLs))) {
            unset($this->MailItemTokenURLs);
        } else {
            $this->MailItemTokenURLs = $mailItemTokenURLs;
        }
        return $this;
    }
    /**
     * Add item to MailItemTokenURLs value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\MailItemTokenURLs $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfMailItemTokenURLs
     */
    public function addToMailItemTokenURLs(\Brainloop\Soap\StructType\MailItemTokenURLs $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\MailItemTokenURLs) {
            throw new \InvalidArgumentException(sprintf('The MailItemTokenURLs property can only contain items of \Brainloop\Soap\StructType\MailItemTokenURLs, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MailItemTokenURLs[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\MailItemTokenURLs|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\MailItemTokenURLs|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\MailItemTokenURLs|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\MailItemTokenURLs|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\MailItemTokenURLs|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MailItemTokenURLs
     */
    public function getAttributeName()
    {
        return 'MailItemTokenURLs';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfMailItemTokenURLs
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
