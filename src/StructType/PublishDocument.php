<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PublishDocument StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class PublishDocument extends AbstractStructBase
{
    /**
     * The iDocumentID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDocumentID;
    /**
     * The iTargetFolderID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iTargetFolderID;
    /**
     * The iPublishRuleID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iPublishRuleID;
    /**
     * The sFreezeDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sFreezeDescription;
    /**
     * Constructor method for PublishDocument
     * @uses PublishDocument::setIDocumentID()
     * @uses PublishDocument::setITargetFolderID()
     * @uses PublishDocument::setIPublishRuleID()
     * @uses PublishDocument::setSFreezeDescription()
     * @param int $iDocumentID
     * @param int $iTargetFolderID
     * @param int $iPublishRuleID
     * @param string $sFreezeDescription
     */
    public function __construct($iDocumentID = null, $iTargetFolderID = null, $iPublishRuleID = null, $sFreezeDescription = null)
    {
        $this
            ->setIDocumentID($iDocumentID)
            ->setITargetFolderID($iTargetFolderID)
            ->setIPublishRuleID($iPublishRuleID)
            ->setSFreezeDescription($sFreezeDescription);
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
     * @return \Brainloop\Soap\StructType\PublishDocument
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
     * Get iTargetFolderID value
     * @return int|null
     */
    public function getITargetFolderID()
    {
        return $this->iTargetFolderID;
    }
    /**
     * Set iTargetFolderID value
     * @param int $iTargetFolderID
     * @return \Brainloop\Soap\StructType\PublishDocument
     */
    public function setITargetFolderID($iTargetFolderID = null)
    {
        // validation for constraint: int
        if (!is_null($iTargetFolderID) && !is_numeric($iTargetFolderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iTargetFolderID)), __LINE__);
        }
        $this->iTargetFolderID = $iTargetFolderID;
        return $this;
    }
    /**
     * Get iPublishRuleID value
     * @return int|null
     */
    public function getIPublishRuleID()
    {
        return $this->iPublishRuleID;
    }
    /**
     * Set iPublishRuleID value
     * @param int $iPublishRuleID
     * @return \Brainloop\Soap\StructType\PublishDocument
     */
    public function setIPublishRuleID($iPublishRuleID = null)
    {
        // validation for constraint: int
        if (!is_null($iPublishRuleID) && !is_numeric($iPublishRuleID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iPublishRuleID)), __LINE__);
        }
        $this->iPublishRuleID = $iPublishRuleID;
        return $this;
    }
    /**
     * Get sFreezeDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSFreezeDescription()
    {
        return isset($this->sFreezeDescription) ? $this->sFreezeDescription : null;
    }
    /**
     * Set sFreezeDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sFreezeDescription
     * @return \Brainloop\Soap\StructType\PublishDocument
     */
    public function setSFreezeDescription($sFreezeDescription = null)
    {
        // validation for constraint: string
        if (!is_null($sFreezeDescription) && !is_string($sFreezeDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sFreezeDescription)), __LINE__);
        }
        if (is_null($sFreezeDescription) || (is_array($sFreezeDescription) && empty($sFreezeDescription))) {
            unset($this->sFreezeDescription);
        } else {
            $this->sFreezeDescription = $sFreezeDescription;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\PublishDocument
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
