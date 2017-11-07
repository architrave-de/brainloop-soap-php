<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelDocumentCheckOutResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CancelDocumentCheckOutResponse extends AbstractStructBase
{
    /**
     * The CancelDocumentCheckOutResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Document
     */
    public $CancelDocumentCheckOutResult;
    /**
     * Constructor method for CancelDocumentCheckOutResponse
     * @uses CancelDocumentCheckOutResponse::setCancelDocumentCheckOutResult()
     * @param \Brainloop\Soap\StructType\Document $cancelDocumentCheckOutResult
     */
    public function __construct(\Brainloop\Soap\StructType\Document $cancelDocumentCheckOutResult = null)
    {
        $this
            ->setCancelDocumentCheckOutResult($cancelDocumentCheckOutResult);
    }
    /**
     * Get CancelDocumentCheckOutResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Document|null
     */
    public function getCancelDocumentCheckOutResult()
    {
        return isset($this->CancelDocumentCheckOutResult) ? $this->CancelDocumentCheckOutResult : null;
    }
    /**
     * Set CancelDocumentCheckOutResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Document $cancelDocumentCheckOutResult
     * @return \Brainloop\Soap\StructType\CancelDocumentCheckOutResponse
     */
    public function setCancelDocumentCheckOutResult(\Brainloop\Soap\StructType\Document $cancelDocumentCheckOutResult = null)
    {
        if (is_null($cancelDocumentCheckOutResult) || (is_array($cancelDocumentCheckOutResult) && empty($cancelDocumentCheckOutResult))) {
            unset($this->CancelDocumentCheckOutResult);
        } else {
            $this->CancelDocumentCheckOutResult = $cancelDocumentCheckOutResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CancelDocumentCheckOutResponse
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
