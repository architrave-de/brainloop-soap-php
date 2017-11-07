<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnotationBase StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AnnotationBase
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class AnnotationBase extends AbstractStructBase
{
    /**
     * The AnnotationType
     * @var string
     */
    public $AnnotationType;
    /**
     * The BoundingBox
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\StructType\AnnotationRegion
     */
    public $BoundingBox;
    /**
     * The DataroomID
     * @var int
     */
    public $DataroomID;
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
     * The OwnerID
     * @var int
     */
    public $OwnerID;
    /**
     * The PopupRectangle
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\StructType\AnnotationRegion
     */
    public $PopupRectangle;
    /**
     * The ReviewID
     * @var int
     */
    public $ReviewID;
    /**
     * Constructor method for AnnotationBase
     * @uses AnnotationBase::setAnnotationType()
     * @uses AnnotationBase::setBoundingBox()
     * @uses AnnotationBase::setDataroomID()
     * @uses AnnotationBase::setID()
     * @uses AnnotationBase::setModified()
     * @uses AnnotationBase::setOwnerID()
     * @uses AnnotationBase::setPopupRectangle()
     * @uses AnnotationBase::setReviewID()
     * @param string $annotationType
     * @param \Brainloop\Soap\StructType\AnnotationRegion $boundingBox
     * @param int $dataroomID
     * @param int $iD
     * @param string $modified
     * @param int $ownerID
     * @param \Brainloop\Soap\StructType\AnnotationRegion $popupRectangle
     * @param int $reviewID
     */
    public function __construct($annotationType = null, \Brainloop\Soap\StructType\AnnotationRegion $boundingBox = null, $dataroomID = null, $iD = null, $modified = null, $ownerID = null, \Brainloop\Soap\StructType\AnnotationRegion $popupRectangle = null, $reviewID = null)
    {
        $this
            ->setAnnotationType($annotationType)
            ->setBoundingBox($boundingBox)
            ->setDataroomID($dataroomID)
            ->setID($iD)
            ->setModified($modified)
            ->setOwnerID($ownerID)
            ->setPopupRectangle($popupRectangle)
            ->setReviewID($reviewID);
    }
    /**
     * Get AnnotationType value
     * @return string|null
     */
    public function getAnnotationType()
    {
        return $this->AnnotationType;
    }
    /**
     * Set AnnotationType value
     * @uses \Brainloop\Soap\EnumType\AnnotationType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\AnnotationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $annotationType
     * @return \Brainloop\Soap\StructType\AnnotationBase
     */
    public function setAnnotationType($annotationType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\AnnotationType::valueIsValid($annotationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $annotationType, implode(', ', \Brainloop\Soap\EnumType\AnnotationType::getValidValues())), __LINE__);
        }
        $this->AnnotationType = $annotationType;
        return $this;
    }
    /**
     * Get BoundingBox value
     * @return \Brainloop\Soap\StructType\AnnotationRegion|null
     */
    public function getBoundingBox()
    {
        return $this->BoundingBox;
    }
    /**
     * Set BoundingBox value
     * @param \Brainloop\Soap\StructType\AnnotationRegion $boundingBox
     * @return \Brainloop\Soap\StructType\AnnotationBase
     */
    public function setBoundingBox(\Brainloop\Soap\StructType\AnnotationRegion $boundingBox = null)
    {
        $this->BoundingBox = $boundingBox;
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
     * @return \Brainloop\Soap\StructType\AnnotationBase
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
     * @return \Brainloop\Soap\StructType\AnnotationBase
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
     * @return \Brainloop\Soap\StructType\AnnotationBase
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
     * Get OwnerID value
     * @return int|null
     */
    public function getOwnerID()
    {
        return $this->OwnerID;
    }
    /**
     * Set OwnerID value
     * @param int $ownerID
     * @return \Brainloop\Soap\StructType\AnnotationBase
     */
    public function setOwnerID($ownerID = null)
    {
        // validation for constraint: int
        if (!is_null($ownerID) && !is_numeric($ownerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ownerID)), __LINE__);
        }
        $this->OwnerID = $ownerID;
        return $this;
    }
    /**
     * Get PopupRectangle value
     * @return \Brainloop\Soap\StructType\AnnotationRegion|null
     */
    public function getPopupRectangle()
    {
        return $this->PopupRectangle;
    }
    /**
     * Set PopupRectangle value
     * @param \Brainloop\Soap\StructType\AnnotationRegion $popupRectangle
     * @return \Brainloop\Soap\StructType\AnnotationBase
     */
    public function setPopupRectangle(\Brainloop\Soap\StructType\AnnotationRegion $popupRectangle = null)
    {
        $this->PopupRectangle = $popupRectangle;
        return $this;
    }
    /**
     * Get ReviewID value
     * @return int|null
     */
    public function getReviewID()
    {
        return $this->ReviewID;
    }
    /**
     * Set ReviewID value
     * @param int $reviewID
     * @return \Brainloop\Soap\StructType\AnnotationBase
     */
    public function setReviewID($reviewID = null)
    {
        // validation for constraint: int
        if (!is_null($reviewID) && !is_numeric($reviewID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($reviewID)), __LINE__);
        }
        $this->ReviewID = $reviewID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\AnnotationBase
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
