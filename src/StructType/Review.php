<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Review StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Review
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class Review extends AbstractStructBase
{
    /**
     * The AnnotationIDs
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $AnnotationIDs;
    /**
     * The CreatorUserID
     * @var int
     */
    public $CreatorUserID;
    /**
     * The DataroomID
     * @var int
     */
    public $DataroomID;
    /**
     * The Deadline
     * @var string
     */
    public $Deadline;
    /**
     * The DocumentID
     * @var int
     */
    public $DocumentID;
    /**
     * The DocumentVersion
     * @var int
     */
    public $DocumentVersion;
    /**
     * The ID
     * @var int
     */
    public $ID;
    /**
     * The Modified
     * @var string
     */
    public $Modified;
    /**
     * The ModifierUserID
     * @var int
     */
    public $ModifierUserID;
    /**
     * The PermissionUsers
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $PermissionUsers;
    /**
     * The ReviewStatus
     * @var string
     */
    public $ReviewStatus;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Title;
    /**
     * Constructor method for Review
     * @uses Review::setAnnotationIDs()
     * @uses Review::setCreatorUserID()
     * @uses Review::setDataroomID()
     * @uses Review::setDeadline()
     * @uses Review::setDocumentID()
     * @uses Review::setDocumentVersion()
     * @uses Review::setID()
     * @uses Review::setModified()
     * @uses Review::setModifierUserID()
     * @uses Review::setPermissionUsers()
     * @uses Review::setReviewStatus()
     * @uses Review::setTitle()
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $annotationIDs
     * @param int $creatorUserID
     * @param int $dataroomID
     * @param string $deadline
     * @param int $documentID
     * @param int $documentVersion
     * @param int $iD
     * @param string $modified
     * @param int $modifierUserID
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $permissionUsers
     * @param string $reviewStatus
     * @param string $title
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfint $annotationIDs = null, $creatorUserID = null, $dataroomID = null, $deadline = null, $documentID = null, $documentVersion = null, $iD = null, $modified = null, $modifierUserID = null, \Brainloop\Soap\ArrayType\ArrayOfint $permissionUsers = null, $reviewStatus = null, $title = null)
    {
        $this
            ->setAnnotationIDs($annotationIDs)
            ->setCreatorUserID($creatorUserID)
            ->setDataroomID($dataroomID)
            ->setDeadline($deadline)
            ->setDocumentID($documentID)
            ->setDocumentVersion($documentVersion)
            ->setID($iD)
            ->setModified($modified)
            ->setModifierUserID($modifierUserID)
            ->setPermissionUsers($permissionUsers)
            ->setReviewStatus($reviewStatus)
            ->setTitle($title);
    }
    /**
     * Get AnnotationIDs value
     * @return \Brainloop\Soap\ArrayType\ArrayOfint|null
     */
    public function getAnnotationIDs()
    {
        return $this->AnnotationIDs;
    }
    /**
     * Set AnnotationIDs value
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $annotationIDs
     * @return \Brainloop\Soap\StructType\Review
     */
    public function setAnnotationIDs(\Brainloop\Soap\ArrayType\ArrayOfint $annotationIDs = null)
    {
        $this->AnnotationIDs = $annotationIDs;
        return $this;
    }
    /**
     * Get CreatorUserID value
     * @return int|null
     */
    public function getCreatorUserID()
    {
        return $this->CreatorUserID;
    }
    /**
     * Set CreatorUserID value
     * @param int $creatorUserID
     * @return \Brainloop\Soap\StructType\Review
     */
    public function setCreatorUserID($creatorUserID = null)
    {
        // validation for constraint: int
        if (!is_null($creatorUserID) && !is_numeric($creatorUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($creatorUserID)), __LINE__);
        }
        $this->CreatorUserID = $creatorUserID;
        return $this;
    }
    /**
     * Get DataroomID value
     * @return int|null
     */
    public function getDataroomID()
    {
        return $this->DataroomID;
    }
    /**
     * Set DataroomID value
     * @param int $dataroomID
     * @return \Brainloop\Soap\StructType\Review
     */
    public function setDataroomID($dataroomID = null)
    {
        // validation for constraint: int
        if (!is_null($dataroomID) && !is_numeric($dataroomID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dataroomID)), __LINE__);
        }
        $this->DataroomID = $dataroomID;
        return $this;
    }
    /**
     * Get Deadline value
     * @return string|null
     */
    public function getDeadline()
    {
        return $this->Deadline;
    }
    /**
     * Set Deadline value
     * @param string $deadline
     * @return \Brainloop\Soap\StructType\Review
     */
    public function setDeadline($deadline = null)
    {
        // validation for constraint: string
        if (!is_null($deadline) && !is_string($deadline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deadline)), __LINE__);
        }
        $this->Deadline = $deadline;
        return $this;
    }
    /**
     * Get DocumentID value
     * @return int|null
     */
    public function getDocumentID()
    {
        return $this->DocumentID;
    }
    /**
     * Set DocumentID value
     * @param int $documentID
     * @return \Brainloop\Soap\StructType\Review
     */
    public function setDocumentID($documentID = null)
    {
        // validation for constraint: int
        if (!is_null($documentID) && !is_numeric($documentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($documentID)), __LINE__);
        }
        $this->DocumentID = $documentID;
        return $this;
    }
    /**
     * Get DocumentVersion value
     * @return int|null
     */
    public function getDocumentVersion()
    {
        return $this->DocumentVersion;
    }
    /**
     * Set DocumentVersion value
     * @param int $documentVersion
     * @return \Brainloop\Soap\StructType\Review
     */
    public function setDocumentVersion($documentVersion = null)
    {
        // validation for constraint: int
        if (!is_null($documentVersion) && !is_numeric($documentVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($documentVersion)), __LINE__);
        }
        $this->DocumentVersion = $documentVersion;
        return $this;
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \Brainloop\Soap\StructType\Review
     */
    public function setID($iD = null)
    {
        // validation for constraint: int
        if (!is_null($iD) && !is_numeric($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Modified value
     * @return string|null
     */
    public function getModified()
    {
        return $this->Modified;
    }
    /**
     * Set Modified value
     * @param string $modified
     * @return \Brainloop\Soap\StructType\Review
     */
    public function setModified($modified = null)
    {
        // validation for constraint: string
        if (!is_null($modified) && !is_string($modified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modified)), __LINE__);
        }
        $this->Modified = $modified;
        return $this;
    }
    /**
     * Get ModifierUserID value
     * @return int|null
     */
    public function getModifierUserID()
    {
        return $this->ModifierUserID;
    }
    /**
     * Set ModifierUserID value
     * @param int $modifierUserID
     * @return \Brainloop\Soap\StructType\Review
     */
    public function setModifierUserID($modifierUserID = null)
    {
        // validation for constraint: int
        if (!is_null($modifierUserID) && !is_numeric($modifierUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($modifierUserID)), __LINE__);
        }
        $this->ModifierUserID = $modifierUserID;
        return $this;
    }
    /**
     * Get PermissionUsers value
     * @return \Brainloop\Soap\ArrayType\ArrayOfint|null
     */
    public function getPermissionUsers()
    {
        return $this->PermissionUsers;
    }
    /**
     * Set PermissionUsers value
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $permissionUsers
     * @return \Brainloop\Soap\StructType\Review
     */
    public function setPermissionUsers(\Brainloop\Soap\ArrayType\ArrayOfint $permissionUsers = null)
    {
        $this->PermissionUsers = $permissionUsers;
        return $this;
    }
    /**
     * Get ReviewStatus value
     * @return string|null
     */
    public function getReviewStatus()
    {
        return $this->ReviewStatus;
    }
    /**
     * Set ReviewStatus value
     * @uses \Brainloop\Soap\EnumType\ReviewStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ReviewStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $reviewStatus
     * @return \Brainloop\Soap\StructType\Review
     */
    public function setReviewStatus($reviewStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ReviewStatus::valueIsValid($reviewStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $reviewStatus, implode(', ', \Brainloop\Soap\EnumType\ReviewStatus::getValidValues())), __LINE__);
        }
        $this->ReviewStatus = $reviewStatus;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \Brainloop\Soap\StructType\Review
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\Review
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
