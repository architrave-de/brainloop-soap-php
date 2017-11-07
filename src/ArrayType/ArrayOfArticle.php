<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfArticle ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfArticle
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfArticle extends AbstractStructArrayBase
{
    /**
     * The Article
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Article[]
     */
    public $Article;
    /**
     * Constructor method for ArrayOfArticle
     * @uses ArrayOfArticle::setArticle()
     * @param \Brainloop\Soap\StructType\Article[] $article
     */
    public function __construct(array $article = array())
    {
        $this
            ->setArticle($article);
    }
    /**
     * Get Article value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Article[]|null
     */
    public function getArticle()
    {
        return isset($this->Article) ? $this->Article : null;
    }
    /**
     * Set Article value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\Article[] $article
     * @return \Brainloop\Soap\ArrayType\ArrayOfArticle
     */
    public function setArticle(array $article = array())
    {
        foreach ($article as $arrayOfArticleArticleItem) {
            // validation for constraint: itemType
            if (!$arrayOfArticleArticleItem instanceof \Brainloop\Soap\StructType\Article) {
                throw new \InvalidArgumentException(sprintf('The Article property can only contain items of \Brainloop\Soap\StructType\Article, "%s" given', is_object($arrayOfArticleArticleItem) ? get_class($arrayOfArticleArticleItem) : gettype($arrayOfArticleArticleItem)), __LINE__);
            }
        }
        if (is_null($article) || (is_array($article) && empty($article))) {
            unset($this->Article);
        } else {
            $this->Article = $article;
        }
        return $this;
    }
    /**
     * Add item to Article value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\Article $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfArticle
     */
    public function addToArticle(\Brainloop\Soap\StructType\Article $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\Article) {
            throw new \InvalidArgumentException(sprintf('The Article property can only contain items of \Brainloop\Soap\StructType\Article, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Article[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\Article|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\Article|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\Article|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\Article|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\Article|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Article
     */
    public function getAttributeName()
    {
        return 'Article';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfArticle
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
