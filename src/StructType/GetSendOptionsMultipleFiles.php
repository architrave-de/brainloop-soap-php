<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSendOptionsMultipleFiles StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetSendOptionsMultipleFiles extends AbstractStructBase
{
    /**
     * The aItemIDs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $aItemIDs;
    /**
     * Constructor method for GetSendOptionsMultipleFiles
     * @uses GetSendOptionsMultipleFiles::setAItemIDs()
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aItemIDs
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfint $aItemIDs = null)
    {
        $this
            ->setAItemIDs($aItemIDs);
    }
    /**
     * Get aItemIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfint|null
     */
    public function getAItemIDs()
    {
        return isset($this->aItemIDs) ? $this->aItemIDs : null;
    }
    /**
     * Set aItemIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aItemIDs
     * @return \Brainloop\Soap\StructType\GetSendOptionsMultipleFiles
     */
    public function setAItemIDs(\Brainloop\Soap\ArrayType\ArrayOfint $aItemIDs = null)
    {
        if (is_null($aItemIDs) || (is_array($aItemIDs) && empty($aItemIDs))) {
            unset($this->aItemIDs);
        } else {
            $this->aItemIDs = $aItemIDs;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetSendOptionsMultipleFiles
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
