<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDocumentCollectionResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateDocumentCollectionResponse extends AbstractStructBase
{
    /**
     * The CreateDocumentCollectionResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\DocCollection
     */
    public $CreateDocumentCollectionResult;
    /**
     * Constructor method for CreateDocumentCollectionResponse
     * @uses CreateDocumentCollectionResponse::setCreateDocumentCollectionResult()
     * @param \Brainloop\Soap\StructType\DocCollection $createDocumentCollectionResult
     */
    public function __construct(\Brainloop\Soap\StructType\DocCollection $createDocumentCollectionResult = null)
    {
        $this
            ->setCreateDocumentCollectionResult($createDocumentCollectionResult);
    }
    /**
     * Get CreateDocumentCollectionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\DocCollection|null
     */
    public function getCreateDocumentCollectionResult()
    {
        return isset($this->CreateDocumentCollectionResult) ? $this->CreateDocumentCollectionResult : null;
    }
    /**
     * Set CreateDocumentCollectionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\DocCollection $createDocumentCollectionResult
     * @return \Brainloop\Soap\StructType\CreateDocumentCollectionResponse
     */
    public function setCreateDocumentCollectionResult(\Brainloop\Soap\StructType\DocCollection $createDocumentCollectionResult = null)
    {
        if (is_null($createDocumentCollectionResult) || (is_array($createDocumentCollectionResult) && empty($createDocumentCollectionResult))) {
            unset($this->CreateDocumentCollectionResult);
        } else {
            $this->CreateDocumentCollectionResult = $createDocumentCollectionResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateDocumentCollectionResponse
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
