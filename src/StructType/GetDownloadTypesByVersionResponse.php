<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDownloadTypesByVersionResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDownloadTypesByVersionResponse extends AbstractStructBase
{
    /**
     * The GetDownloadTypesByVersionResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfDownloadType
     */
    public $GetDownloadTypesByVersionResult;
    /**
     * Constructor method for GetDownloadTypesByVersionResponse
     * @uses GetDownloadTypesByVersionResponse::setGetDownloadTypesByVersionResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfDownloadType $getDownloadTypesByVersionResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfDownloadType $getDownloadTypesByVersionResult = null)
    {
        $this
            ->setGetDownloadTypesByVersionResult($getDownloadTypesByVersionResult);
    }
    /**
     * Get GetDownloadTypesByVersionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfDownloadType|null
     */
    public function getGetDownloadTypesByVersionResult()
    {
        return isset($this->GetDownloadTypesByVersionResult) ? $this->GetDownloadTypesByVersionResult : null;
    }
    /**
     * Set GetDownloadTypesByVersionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfDownloadType $getDownloadTypesByVersionResult
     * @return \Brainloop\Soap\StructType\GetDownloadTypesByVersionResponse
     */
    public function setGetDownloadTypesByVersionResult(\Brainloop\Soap\ArrayType\ArrayOfDownloadType $getDownloadTypesByVersionResult = null)
    {
        if (is_null($getDownloadTypesByVersionResult) || (is_array($getDownloadTypesByVersionResult) && empty($getDownloadTypesByVersionResult))) {
            unset($this->GetDownloadTypesByVersionResult);
        } else {
            $this->GetDownloadTypesByVersionResult = $getDownloadTypesByVersionResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetDownloadTypesByVersionResponse
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
