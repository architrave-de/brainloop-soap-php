<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateDocumentCollection StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class UpdateDocumentCollection extends AbstractStructBase
{
    /**
     * The docCollectionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $docCollectionID;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The secCategoryId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $secCategoryId;
    /**
     * The referenceDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $referenceDate;
    /**
     * The collectionFolderId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $collectionFolderId;
    /**
     * The aItemChapters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter
     */
    public $aItemChapters;
    /**
     * The coverPageFile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $coverPageFile;
    /**
     * The tableOfContentFile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $tableOfContentFile;
    /**
     * The brainmarkCoverSheet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $brainmarkCoverSheet;
    /**
     * The brainmarkPrintingOptimization
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $brainmarkPrintingOptimization;
    /**
     * Constructor method for UpdateDocumentCollection
     * @uses UpdateDocumentCollection::setDocCollectionID()
     * @uses UpdateDocumentCollection::setName()
     * @uses UpdateDocumentCollection::setDescription()
     * @uses UpdateDocumentCollection::setSecCategoryId()
     * @uses UpdateDocumentCollection::setReferenceDate()
     * @uses UpdateDocumentCollection::setCollectionFolderId()
     * @uses UpdateDocumentCollection::setAItemChapters()
     * @uses UpdateDocumentCollection::setCoverPageFile()
     * @uses UpdateDocumentCollection::setTableOfContentFile()
     * @uses UpdateDocumentCollection::setBrainmarkCoverSheet()
     * @uses UpdateDocumentCollection::setBrainmarkPrintingOptimization()
     * @param int $docCollectionID
     * @param string $name
     * @param string $description
     * @param int $secCategoryId
     * @param string $referenceDate
     * @param int $collectionFolderId
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter $aItemChapters
     * @param string $coverPageFile
     * @param string $tableOfContentFile
     * @param bool $brainmarkCoverSheet
     * @param bool $brainmarkPrintingOptimization
     */
    public function __construct($docCollectionID = null, $name = null, $description = null, $secCategoryId = null, $referenceDate = null, $collectionFolderId = null, \Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter $aItemChapters = null, $coverPageFile = null, $tableOfContentFile = null, $brainmarkCoverSheet = null, $brainmarkPrintingOptimization = null)
    {
        $this
            ->setDocCollectionID($docCollectionID)
            ->setName($name)
            ->setDescription($description)
            ->setSecCategoryId($secCategoryId)
            ->setReferenceDate($referenceDate)
            ->setCollectionFolderId($collectionFolderId)
            ->setAItemChapters($aItemChapters)
            ->setCoverPageFile($coverPageFile)
            ->setTableOfContentFile($tableOfContentFile)
            ->setBrainmarkCoverSheet($brainmarkCoverSheet)
            ->setBrainmarkPrintingOptimization($brainmarkPrintingOptimization);
    }
    /**
     * Get docCollectionID value
     * @return int|null
     */
    public function getDocCollectionID()
    {
        return $this->docCollectionID;
    }
    /**
     * Set docCollectionID value
     * @param int $docCollectionID
     * @return \Brainloop\Soap\StructType\UpdateDocumentCollection
     */
    public function setDocCollectionID($docCollectionID = null)
    {
        // validation for constraint: int
        if (!is_null($docCollectionID) && !is_numeric($docCollectionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($docCollectionID)), __LINE__);
        }
        $this->docCollectionID = $docCollectionID;
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Brainloop\Soap\StructType\UpdateDocumentCollection
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \Brainloop\Soap\StructType\UpdateDocumentCollection
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        return $this;
    }
    /**
     * Get secCategoryId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getSecCategoryId()
    {
        return isset($this->secCategoryId) ? $this->secCategoryId : null;
    }
    /**
     * Set secCategoryId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $secCategoryId
     * @return \Brainloop\Soap\StructType\UpdateDocumentCollection
     */
    public function setSecCategoryId($secCategoryId = null)
    {
        // validation for constraint: int
        if (!is_null($secCategoryId) && !is_numeric($secCategoryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($secCategoryId)), __LINE__);
        }
        if (is_null($secCategoryId) || (is_array($secCategoryId) && empty($secCategoryId))) {
            unset($this->secCategoryId);
        } else {
            $this->secCategoryId = $secCategoryId;
        }
        return $this;
    }
    /**
     * Get referenceDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReferenceDate()
    {
        return isset($this->referenceDate) ? $this->referenceDate : null;
    }
    /**
     * Set referenceDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $referenceDate
     * @return \Brainloop\Soap\StructType\UpdateDocumentCollection
     */
    public function setReferenceDate($referenceDate = null)
    {
        // validation for constraint: string
        if (!is_null($referenceDate) && !is_string($referenceDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceDate)), __LINE__);
        }
        if (is_null($referenceDate) || (is_array($referenceDate) && empty($referenceDate))) {
            unset($this->referenceDate);
        } else {
            $this->referenceDate = $referenceDate;
        }
        return $this;
    }
    /**
     * Get collectionFolderId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCollectionFolderId()
    {
        return isset($this->collectionFolderId) ? $this->collectionFolderId : null;
    }
    /**
     * Set collectionFolderId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $collectionFolderId
     * @return \Brainloop\Soap\StructType\UpdateDocumentCollection
     */
    public function setCollectionFolderId($collectionFolderId = null)
    {
        // validation for constraint: int
        if (!is_null($collectionFolderId) && !is_numeric($collectionFolderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($collectionFolderId)), __LINE__);
        }
        if (is_null($collectionFolderId) || (is_array($collectionFolderId) && empty($collectionFolderId))) {
            unset($this->collectionFolderId);
        } else {
            $this->collectionFolderId = $collectionFolderId;
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
     * @return \Brainloop\Soap\StructType\UpdateDocumentCollection
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
     * Get coverPageFile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCoverPageFile()
    {
        return isset($this->coverPageFile) ? $this->coverPageFile : null;
    }
    /**
     * Set coverPageFile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $coverPageFile
     * @return \Brainloop\Soap\StructType\UpdateDocumentCollection
     */
    public function setCoverPageFile($coverPageFile = null)
    {
        // validation for constraint: string
        if (!is_null($coverPageFile) && !is_string($coverPageFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($coverPageFile)), __LINE__);
        }
        if (is_null($coverPageFile) || (is_array($coverPageFile) && empty($coverPageFile))) {
            unset($this->coverPageFile);
        } else {
            $this->coverPageFile = $coverPageFile;
        }
        return $this;
    }
    /**
     * Get tableOfContentFile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTableOfContentFile()
    {
        return isset($this->tableOfContentFile) ? $this->tableOfContentFile : null;
    }
    /**
     * Set tableOfContentFile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tableOfContentFile
     * @return \Brainloop\Soap\StructType\UpdateDocumentCollection
     */
    public function setTableOfContentFile($tableOfContentFile = null)
    {
        // validation for constraint: string
        if (!is_null($tableOfContentFile) && !is_string($tableOfContentFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tableOfContentFile)), __LINE__);
        }
        if (is_null($tableOfContentFile) || (is_array($tableOfContentFile) && empty($tableOfContentFile))) {
            unset($this->tableOfContentFile);
        } else {
            $this->tableOfContentFile = $tableOfContentFile;
        }
        return $this;
    }
    /**
     * Get brainmarkCoverSheet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getBrainmarkCoverSheet()
    {
        return isset($this->brainmarkCoverSheet) ? $this->brainmarkCoverSheet : null;
    }
    /**
     * Set brainmarkCoverSheet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $brainmarkCoverSheet
     * @return \Brainloop\Soap\StructType\UpdateDocumentCollection
     */
    public function setBrainmarkCoverSheet($brainmarkCoverSheet = null)
    {
        // validation for constraint: boolean
        if (!is_null($brainmarkCoverSheet) && !is_bool($brainmarkCoverSheet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($brainmarkCoverSheet)), __LINE__);
        }
        if (is_null($brainmarkCoverSheet) || (is_array($brainmarkCoverSheet) && empty($brainmarkCoverSheet))) {
            unset($this->brainmarkCoverSheet);
        } else {
            $this->brainmarkCoverSheet = $brainmarkCoverSheet;
        }
        return $this;
    }
    /**
     * Get brainmarkPrintingOptimization value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getBrainmarkPrintingOptimization()
    {
        return isset($this->brainmarkPrintingOptimization) ? $this->brainmarkPrintingOptimization : null;
    }
    /**
     * Set brainmarkPrintingOptimization value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $brainmarkPrintingOptimization
     * @return \Brainloop\Soap\StructType\UpdateDocumentCollection
     */
    public function setBrainmarkPrintingOptimization($brainmarkPrintingOptimization = null)
    {
        // validation for constraint: boolean
        if (!is_null($brainmarkPrintingOptimization) && !is_bool($brainmarkPrintingOptimization)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($brainmarkPrintingOptimization)), __LINE__);
        }
        if (is_null($brainmarkPrintingOptimization) || (is_array($brainmarkPrintingOptimization) && empty($brainmarkPrintingOptimization))) {
            unset($this->brainmarkPrintingOptimization);
        } else {
            $this->brainmarkPrintingOptimization = $brainmarkPrintingOptimization;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\UpdateDocumentCollection
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
