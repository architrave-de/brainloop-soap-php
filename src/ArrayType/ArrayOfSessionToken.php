<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSessionToken ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSessionToken
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfSessionToken extends AbstractStructArrayBase
{
    /**
     * The SessionToken
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\SessionToken[]
     */
    public $SessionToken;
    /**
     * Constructor method for ArrayOfSessionToken
     * @uses ArrayOfSessionToken::setSessionToken()
     * @param \Brainloop\Soap\StructType\SessionToken[] $sessionToken
     */
    public function __construct(array $sessionToken = array())
    {
        $this
            ->setSessionToken($sessionToken);
    }
    /**
     * Get SessionToken value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\SessionToken[]|null
     */
    public function getSessionToken()
    {
        return isset($this->SessionToken) ? $this->SessionToken : null;
    }
    /**
     * Set SessionToken value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\SessionToken[] $sessionToken
     * @return \Brainloop\Soap\ArrayType\ArrayOfSessionToken
     */
    public function setSessionToken(array $sessionToken = array())
    {
        foreach ($sessionToken as $arrayOfSessionTokenSessionTokenItem) {
            // validation for constraint: itemType
            if (!$arrayOfSessionTokenSessionTokenItem instanceof \Brainloop\Soap\StructType\SessionToken) {
                throw new \InvalidArgumentException(sprintf('The SessionToken property can only contain items of \Brainloop\Soap\StructType\SessionToken, "%s" given', is_object($arrayOfSessionTokenSessionTokenItem) ? get_class($arrayOfSessionTokenSessionTokenItem) : gettype($arrayOfSessionTokenSessionTokenItem)), __LINE__);
            }
        }
        if (is_null($sessionToken) || (is_array($sessionToken) && empty($sessionToken))) {
            unset($this->SessionToken);
        } else {
            $this->SessionToken = $sessionToken;
        }
        return $this;
    }
    /**
     * Add item to SessionToken value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\SessionToken $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfSessionToken
     */
    public function addToSessionToken(\Brainloop\Soap\StructType\SessionToken $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\SessionToken) {
            throw new \InvalidArgumentException(sprintf('The SessionToken property can only contain items of \Brainloop\Soap\StructType\SessionToken, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SessionToken[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\SessionToken|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\SessionToken|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\SessionToken|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\SessionToken|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\SessionToken|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SessionToken
     */
    public function getAttributeName()
    {
        return 'SessionToken';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfSessionToken
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
