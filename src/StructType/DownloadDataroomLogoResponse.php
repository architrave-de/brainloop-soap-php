<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownloadDataroomLogoResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class DownloadDataroomLogoResponse extends AbstractStructBase
{
    /**
     * The ContentStream
     * @var string
     */
    public $ContentStream;
    /**
     * Constructor method for DownloadDataroomLogoResponse
     * @uses DownloadDataroomLogoResponse::setContentStream()
     * @param string $contentStream
     */
    public function __construct($contentStream = null)
    {
        $this
            ->setContentStream($contentStream);
    }
    /**
     * Get ContentStream value
     * @return string|null
     */
    public function getContentStream()
    {
        return $this->ContentStream;
    }
    /**
     * Set ContentStream value
     * @param string $contentStream
     * @return \Brainloop\Soap\StructType\DownloadDataroomLogoResponse
     */
    public function setContentStream($contentStream = null)
    {
        // validation for constraint: string
        if (!is_null($contentStream) && !is_string($contentStream)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contentStream)), __LINE__);
        }
        $this->ContentStream = $contentStream;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\DownloadDataroomLogoResponse
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
