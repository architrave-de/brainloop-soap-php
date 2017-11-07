<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateLinkToItemResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateLinkToItemResponse extends AbstractStructBase
{
    /**
     * The CreateLinkToItemResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Link
     */
    public $CreateLinkToItemResult;
    /**
     * Constructor method for CreateLinkToItemResponse
     * @uses CreateLinkToItemResponse::setCreateLinkToItemResult()
     * @param \Brainloop\Soap\StructType\Link $createLinkToItemResult
     */
    public function __construct(\Brainloop\Soap\StructType\Link $createLinkToItemResult = null)
    {
        $this
            ->setCreateLinkToItemResult($createLinkToItemResult);
    }
    /**
     * Get CreateLinkToItemResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Link|null
     */
    public function getCreateLinkToItemResult()
    {
        return isset($this->CreateLinkToItemResult) ? $this->CreateLinkToItemResult : null;
    }
    /**
     * Set CreateLinkToItemResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Link $createLinkToItemResult
     * @return \Brainloop\Soap\StructType\CreateLinkToItemResponse
     */
    public function setCreateLinkToItemResult(\Brainloop\Soap\StructType\Link $createLinkToItemResult = null)
    {
        if (is_null($createLinkToItemResult) || (is_array($createLinkToItemResult) && empty($createLinkToItemResult))) {
            unset($this->CreateLinkToItemResult);
        } else {
            $this->CreateLinkToItemResult = $createLinkToItemResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateLinkToItemResponse
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
