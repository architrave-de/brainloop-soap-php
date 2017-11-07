<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPublishRules StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetPublishRules extends AbstractStructBase
{
    /**
     * The iDocumentID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDocumentID;
    /**
     * Constructor method for GetPublishRules
     * @uses GetPublishRules::setIDocumentID()
     * @param int $iDocumentID
     */
    public function __construct($iDocumentID = null)
    {
        $this
            ->setIDocumentID($iDocumentID);
    }
    /**
     * Get iDocumentID value
     * @return int|null
     */
    public function getIDocumentID()
    {
        return $this->iDocumentID;
    }
    /**
     * Set iDocumentID value
     * @param int $iDocumentID
     * @return \Brainloop\Soap\StructType\GetPublishRules
     */
    public function setIDocumentID($iDocumentID = null)
    {
        // validation for constraint: int
        if (!is_null($iDocumentID) && !is_numeric($iDocumentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDocumentID)), __LINE__);
        }
        $this->iDocumentID = $iDocumentID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetPublishRules
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
