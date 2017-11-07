<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCalendarEventTemplate ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCalendarEventTemplate
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfCalendarEventTemplate extends AbstractStructArrayBase
{
    /**
     * The CalendarEventTemplate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\CalendarEventTemplate[]
     */
    public $CalendarEventTemplate;
    /**
     * Constructor method for ArrayOfCalendarEventTemplate
     * @uses ArrayOfCalendarEventTemplate::setCalendarEventTemplate()
     * @param \Brainloop\Soap\StructType\CalendarEventTemplate[] $calendarEventTemplate
     */
    public function __construct(array $calendarEventTemplate = array())
    {
        $this
            ->setCalendarEventTemplate($calendarEventTemplate);
    }
    /**
     * Get CalendarEventTemplate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\CalendarEventTemplate[]|null
     */
    public function getCalendarEventTemplate()
    {
        return isset($this->CalendarEventTemplate) ? $this->CalendarEventTemplate : null;
    }
    /**
     * Set CalendarEventTemplate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\CalendarEventTemplate[] $calendarEventTemplate
     * @return \Brainloop\Soap\ArrayType\ArrayOfCalendarEventTemplate
     */
    public function setCalendarEventTemplate(array $calendarEventTemplate = array())
    {
        foreach ($calendarEventTemplate as $arrayOfCalendarEventTemplateCalendarEventTemplateItem) {
            // validation for constraint: itemType
            if (!$arrayOfCalendarEventTemplateCalendarEventTemplateItem instanceof \Brainloop\Soap\StructType\CalendarEventTemplate) {
                throw new \InvalidArgumentException(sprintf('The CalendarEventTemplate property can only contain items of \Brainloop\Soap\StructType\CalendarEventTemplate, "%s" given', is_object($arrayOfCalendarEventTemplateCalendarEventTemplateItem) ? get_class($arrayOfCalendarEventTemplateCalendarEventTemplateItem) : gettype($arrayOfCalendarEventTemplateCalendarEventTemplateItem)), __LINE__);
            }
        }
        if (is_null($calendarEventTemplate) || (is_array($calendarEventTemplate) && empty($calendarEventTemplate))) {
            unset($this->CalendarEventTemplate);
        } else {
            $this->CalendarEventTemplate = $calendarEventTemplate;
        }
        return $this;
    }
    /**
     * Add item to CalendarEventTemplate value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\CalendarEventTemplate $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfCalendarEventTemplate
     */
    public function addToCalendarEventTemplate(\Brainloop\Soap\StructType\CalendarEventTemplate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\CalendarEventTemplate) {
            throw new \InvalidArgumentException(sprintf('The CalendarEventTemplate property can only contain items of \Brainloop\Soap\StructType\CalendarEventTemplate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CalendarEventTemplate[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\CalendarEventTemplate|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\CalendarEventTemplate|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\CalendarEventTemplate|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\CalendarEventTemplate|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\CalendarEventTemplate|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CalendarEventTemplate
     */
    public function getAttributeName()
    {
        return 'CalendarEventTemplate';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfCalendarEventTemplate
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
