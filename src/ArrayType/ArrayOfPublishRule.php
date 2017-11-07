<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPublishRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPublishRule
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfPublishRule extends AbstractStructArrayBase
{
    /**
     * The PublishRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\PublishRule[]
     */
    public $PublishRule;
    /**
     * Constructor method for ArrayOfPublishRule
     * @uses ArrayOfPublishRule::setPublishRule()
     * @param \Brainloop\Soap\StructType\PublishRule[] $publishRule
     */
    public function __construct(array $publishRule = array())
    {
        $this
            ->setPublishRule($publishRule);
    }
    /**
     * Get PublishRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\PublishRule[]|null
     */
    public function getPublishRule()
    {
        return isset($this->PublishRule) ? $this->PublishRule : null;
    }
    /**
     * Set PublishRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\PublishRule[] $publishRule
     * @return \Brainloop\Soap\ArrayType\ArrayOfPublishRule
     */
    public function setPublishRule(array $publishRule = array())
    {
        foreach ($publishRule as $arrayOfPublishRulePublishRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfPublishRulePublishRuleItem instanceof \Brainloop\Soap\StructType\PublishRule) {
                throw new \InvalidArgumentException(sprintf('The PublishRule property can only contain items of \Brainloop\Soap\StructType\PublishRule, "%s" given', is_object($arrayOfPublishRulePublishRuleItem) ? get_class($arrayOfPublishRulePublishRuleItem) : gettype($arrayOfPublishRulePublishRuleItem)), __LINE__);
            }
        }
        if (is_null($publishRule) || (is_array($publishRule) && empty($publishRule))) {
            unset($this->PublishRule);
        } else {
            $this->PublishRule = $publishRule;
        }
        return $this;
    }
    /**
     * Add item to PublishRule value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\PublishRule $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfPublishRule
     */
    public function addToPublishRule(\Brainloop\Soap\StructType\PublishRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\PublishRule) {
            throw new \InvalidArgumentException(sprintf('The PublishRule property can only contain items of \Brainloop\Soap\StructType\PublishRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PublishRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\PublishRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\PublishRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\PublishRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\PublishRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\PublishRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PublishRule
     */
    public function getAttributeName()
    {
        return 'PublishRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfPublishRule
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
