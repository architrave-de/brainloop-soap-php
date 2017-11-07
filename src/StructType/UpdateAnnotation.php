<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateAnnotation StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class UpdateAnnotation extends AbstractStructBase
{
    /**
     * The iAnnotationID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iAnnotationID;
    /**
     * The oFields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\AnnotationFields
     */
    public $oFields;
    /**
     * Constructor method for UpdateAnnotation
     * @uses UpdateAnnotation::setIAnnotationID()
     * @uses UpdateAnnotation::setOFields()
     * @param int $iAnnotationID
     * @param \Brainloop\Soap\StructType\AnnotationFields $oFields
     */
    public function __construct($iAnnotationID = null, \Brainloop\Soap\StructType\AnnotationFields $oFields = null)
    {
        $this
            ->setIAnnotationID($iAnnotationID)
            ->setOFields($oFields);
    }
    /**
     * Get iAnnotationID value
     * @return int|null
     */
    public function getIAnnotationID()
    {
        return $this->iAnnotationID;
    }
    /**
     * Set iAnnotationID value
     * @param int $iAnnotationID
     * @return \Brainloop\Soap\StructType\UpdateAnnotation
     */
    public function setIAnnotationID($iAnnotationID = null)
    {
        // validation for constraint: int
        if (!is_null($iAnnotationID) && !is_numeric($iAnnotationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iAnnotationID)), __LINE__);
        }
        $this->iAnnotationID = $iAnnotationID;
        return $this;
    }
    /**
     * Get oFields value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\AnnotationFields|null
     */
    public function getOFields()
    {
        return isset($this->oFields) ? $this->oFields : null;
    }
    /**
     * Set oFields value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\AnnotationFields $oFields
     * @return \Brainloop\Soap\StructType\UpdateAnnotation
     */
    public function setOFields(\Brainloop\Soap\StructType\AnnotationFields $oFields = null)
    {
        if (is_null($oFields) || (is_array($oFields) && empty($oFields))) {
            unset($this->oFields);
        } else {
            $this->oFields = $oFields;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\UpdateAnnotation
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
