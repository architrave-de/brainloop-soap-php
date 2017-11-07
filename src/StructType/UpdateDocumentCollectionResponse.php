<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateDocumentCollectionResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class UpdateDocumentCollectionResponse extends AbstractStructBase
{
    /**
     * The UpdateDocumentCollectionResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\DocCollection
     */
    public $UpdateDocumentCollectionResult;
    /**
     * Constructor method for UpdateDocumentCollectionResponse
     * @uses UpdateDocumentCollectionResponse::setUpdateDocumentCollectionResult()
     * @param \Brainloop\Soap\StructType\DocCollection $updateDocumentCollectionResult
     */
    public function __construct(\Brainloop\Soap\StructType\DocCollection $updateDocumentCollectionResult = null)
    {
        $this
            ->setUpdateDocumentCollectionResult($updateDocumentCollectionResult);
    }
    /**
     * Get UpdateDocumentCollectionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\DocCollection|null
     */
    public function getUpdateDocumentCollectionResult()
    {
        return isset($this->UpdateDocumentCollectionResult) ? $this->UpdateDocumentCollectionResult : null;
    }
    /**
     * Set UpdateDocumentCollectionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\DocCollection $updateDocumentCollectionResult
     * @return \Brainloop\Soap\StructType\UpdateDocumentCollectionResponse
     */
    public function setUpdateDocumentCollectionResult(\Brainloop\Soap\StructType\DocCollection $updateDocumentCollectionResult = null)
    {
        if (is_null($updateDocumentCollectionResult) || (is_array($updateDocumentCollectionResult) && empty($updateDocumentCollectionResult))) {
            unset($this->UpdateDocumentCollectionResult);
        } else {
            $this->UpdateDocumentCollectionResult = $updateDocumentCollectionResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\UpdateDocumentCollectionResponse
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
