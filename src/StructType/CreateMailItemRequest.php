<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMailItemRequest StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateMailItemRequest extends AbstractStructBase
{
    /**
     * The HtmlStream
     * @var string
     */
    public $HtmlStream;
    /**
     * Constructor method for CreateMailItemRequest
     * @uses CreateMailItemRequest::setHtmlStream()
     * @param string $htmlStream
     */
    public function __construct($htmlStream = null)
    {
        $this
            ->setHtmlStream($htmlStream);
    }
    /**
     * Get HtmlStream value
     * @return string|null
     */
    public function getHtmlStream()
    {
        return $this->HtmlStream;
    }
    /**
     * Set HtmlStream value
     * @param string $htmlStream
     * @return \Brainloop\Soap\StructType\CreateMailItemRequest
     */
    public function setHtmlStream($htmlStream = null)
    {
        // validation for constraint: string
        if (!is_null($htmlStream) && !is_string($htmlStream)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($htmlStream)), __LINE__);
        }
        $this->HtmlStream = $htmlStream;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateMailItemRequest
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
