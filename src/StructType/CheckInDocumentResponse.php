<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckInDocumentResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CheckInDocumentResponse extends AbstractStructBase
{
    /**
     * The CheckInDocumentResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Document
     */
    public $CheckInDocumentResult;
    /**
     * Constructor method for CheckInDocumentResponse
     * @uses CheckInDocumentResponse::setCheckInDocumentResult()
     * @param \Brainloop\Soap\StructType\Document $checkInDocumentResult
     */
    public function __construct(\Brainloop\Soap\StructType\Document $checkInDocumentResult = null)
    {
        $this
            ->setCheckInDocumentResult($checkInDocumentResult);
    }
    /**
     * Get CheckInDocumentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Document|null
     */
    public function getCheckInDocumentResult()
    {
        return isset($this->CheckInDocumentResult) ? $this->CheckInDocumentResult : null;
    }
    /**
     * Set CheckInDocumentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Document $checkInDocumentResult
     * @return \Brainloop\Soap\StructType\CheckInDocumentResponse
     */
    public function setCheckInDocumentResult(\Brainloop\Soap\StructType\Document $checkInDocumentResult = null)
    {
        if (is_null($checkInDocumentResult) || (is_array($checkInDocumentResult) && empty($checkInDocumentResult))) {
            unset($this->CheckInDocumentResult);
        } else {
            $this->CheckInDocumentResult = $checkInDocumentResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CheckInDocumentResponse
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
