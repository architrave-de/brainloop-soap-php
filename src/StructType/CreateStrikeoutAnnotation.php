<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateStrikeoutAnnotation StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateStrikeoutAnnotation extends AbstractStructBase
{
    /**
     * The iReviewID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iReviewID;
    /**
     * The iPage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iPage;
    /**
     * The oColor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\AnnotationColor
     */
    public $oColor;
    /**
     * The aRects
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfAnnotationRegion
     */
    public $aRects;
    /**
     * The sText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sText;
    /**
     * Constructor method for CreateStrikeoutAnnotation
     * @uses CreateStrikeoutAnnotation::setIReviewID()
     * @uses CreateStrikeoutAnnotation::setIPage()
     * @uses CreateStrikeoutAnnotation::setOColor()
     * @uses CreateStrikeoutAnnotation::setARects()
     * @uses CreateStrikeoutAnnotation::setSText()
     * @param int $iReviewID
     * @param int $iPage
     * @param \Brainloop\Soap\StructType\AnnotationColor $oColor
     * @param \Brainloop\Soap\ArrayType\ArrayOfAnnotationRegion $aRects
     * @param string $sText
     */
    public function __construct($iReviewID = null, $iPage = null, \Brainloop\Soap\StructType\AnnotationColor $oColor = null, \Brainloop\Soap\ArrayType\ArrayOfAnnotationRegion $aRects = null, $sText = null)
    {
        $this
            ->setIReviewID($iReviewID)
            ->setIPage($iPage)
            ->setOColor($oColor)
            ->setARects($aRects)
            ->setSText($sText);
    }
    /**
     * Get iReviewID value
     * @return int|null
     */
    public function getIReviewID()
    {
        return $this->iReviewID;
    }
    /**
     * Set iReviewID value
     * @param int $iReviewID
     * @return \Brainloop\Soap\StructType\CreateStrikeoutAnnotation
     */
    public function setIReviewID($iReviewID = null)
    {
        // validation for constraint: int
        if (!is_null($iReviewID) && !is_numeric($iReviewID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iReviewID)), __LINE__);
        }
        $this->iReviewID = $iReviewID;
        return $this;
    }
    /**
     * Get iPage value
     * @return int|null
     */
    public function getIPage()
    {
        return $this->iPage;
    }
    /**
     * Set iPage value
     * @param int $iPage
     * @return \Brainloop\Soap\StructType\CreateStrikeoutAnnotation
     */
    public function setIPage($iPage = null)
    {
        // validation for constraint: int
        if (!is_null($iPage) && !is_numeric($iPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iPage)), __LINE__);
        }
        $this->iPage = $iPage;
        return $this;
    }
    /**
     * Get oColor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\AnnotationColor|null
     */
    public function getOColor()
    {
        return isset($this->oColor) ? $this->oColor : null;
    }
    /**
     * Set oColor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\AnnotationColor $oColor
     * @return \Brainloop\Soap\StructType\CreateStrikeoutAnnotation
     */
    public function setOColor(\Brainloop\Soap\StructType\AnnotationColor $oColor = null)
    {
        if (is_null($oColor) || (is_array($oColor) && empty($oColor))) {
            unset($this->oColor);
        } else {
            $this->oColor = $oColor;
        }
        return $this;
    }
    /**
     * Get aRects value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfAnnotationRegion|null
     */
    public function getARects()
    {
        return isset($this->aRects) ? $this->aRects : null;
    }
    /**
     * Set aRects value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfAnnotationRegion $aRects
     * @return \Brainloop\Soap\StructType\CreateStrikeoutAnnotation
     */
    public function setARects(\Brainloop\Soap\ArrayType\ArrayOfAnnotationRegion $aRects = null)
    {
        if (is_null($aRects) || (is_array($aRects) && empty($aRects))) {
            unset($this->aRects);
        } else {
            $this->aRects = $aRects;
        }
        return $this;
    }
    /**
     * Get sText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSText()
    {
        return isset($this->sText) ? $this->sText : null;
    }
    /**
     * Set sText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sText
     * @return \Brainloop\Soap\StructType\CreateStrikeoutAnnotation
     */
    public function setSText($sText = null)
    {
        // validation for constraint: string
        if (!is_null($sText) && !is_string($sText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sText)), __LINE__);
        }
        if (is_null($sText) || (is_array($sText) && empty($sText))) {
            unset($this->sText);
        } else {
            $this->sText = $sText;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateStrikeoutAnnotation
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
