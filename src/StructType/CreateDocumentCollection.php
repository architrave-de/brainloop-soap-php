<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDocumentCollection StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateDocumentCollection extends AbstractStructBase
{
    /**
     * The iParentFolderID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iParentFolderID;
    /**
     * The sName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sName;
    /**
     * The aItemChapters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter
     */
    public $aItemChapters;
    /**
     * Constructor method for CreateDocumentCollection
     * @uses CreateDocumentCollection::setIParentFolderID()
     * @uses CreateDocumentCollection::setSName()
     * @uses CreateDocumentCollection::setAItemChapters()
     * @param int $iParentFolderID
     * @param string $sName
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter $aItemChapters
     */
    public function __construct($iParentFolderID = null, $sName = null, \Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter $aItemChapters = null)
    {
        $this
            ->setIParentFolderID($iParentFolderID)
            ->setSName($sName)
            ->setAItemChapters($aItemChapters);
    }
    /**
     * Get iParentFolderID value
     * @return int|null
     */
    public function getIParentFolderID()
    {
        return $this->iParentFolderID;
    }
    /**
     * Set iParentFolderID value
     * @param int $iParentFolderID
     * @return \Brainloop\Soap\StructType\CreateDocumentCollection
     */
    public function setIParentFolderID($iParentFolderID = null)
    {
        // validation for constraint: int
        if (!is_null($iParentFolderID) && !is_numeric($iParentFolderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iParentFolderID)), __LINE__);
        }
        $this->iParentFolderID = $iParentFolderID;
        return $this;
    }
    /**
     * Get sName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSName()
    {
        return isset($this->sName) ? $this->sName : null;
    }
    /**
     * Set sName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sName
     * @return \Brainloop\Soap\StructType\CreateDocumentCollection
     */
    public function setSName($sName = null)
    {
        // validation for constraint: string
        if (!is_null($sName) && !is_string($sName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sName)), __LINE__);
        }
        if (is_null($sName) || (is_array($sName) && empty($sName))) {
            unset($this->sName);
        } else {
            $this->sName = $sName;
        }
        return $this;
    }
    /**
     * Get aItemChapters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter|null
     */
    public function getAItemChapters()
    {
        return isset($this->aItemChapters) ? $this->aItemChapters : null;
    }
    /**
     * Set aItemChapters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter $aItemChapters
     * @return \Brainloop\Soap\StructType\CreateDocumentCollection
     */
    public function setAItemChapters(\Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter $aItemChapters = null)
    {
        if (is_null($aItemChapters) || (is_array($aItemChapters) && empty($aItemChapters))) {
            unset($this->aItemChapters);
        } else {
            $this->aItemChapters = $aItemChapters;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateDocumentCollection
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
