<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetDRCPropertiesResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetDRCPropertiesResponse extends AbstractStructBase
{
    /**
     * The SetDRCPropertiesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\DRC
     */
    public $SetDRCPropertiesResult;
    /**
     * Constructor method for SetDRCPropertiesResponse
     * @uses SetDRCPropertiesResponse::setSetDRCPropertiesResult()
     * @param \Brainloop\Soap\StructType\DRC $setDRCPropertiesResult
     */
    public function __construct(\Brainloop\Soap\StructType\DRC $setDRCPropertiesResult = null)
    {
        $this
            ->setSetDRCPropertiesResult($setDRCPropertiesResult);
    }
    /**
     * Get SetDRCPropertiesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\DRC|null
     */
    public function getSetDRCPropertiesResult()
    {
        return isset($this->SetDRCPropertiesResult) ? $this->SetDRCPropertiesResult : null;
    }
    /**
     * Set SetDRCPropertiesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\DRC $setDRCPropertiesResult
     * @return \Brainloop\Soap\StructType\SetDRCPropertiesResponse
     */
    public function setSetDRCPropertiesResult(\Brainloop\Soap\StructType\DRC $setDRCPropertiesResult = null)
    {
        if (is_null($setDRCPropertiesResult) || (is_array($setDRCPropertiesResult) && empty($setDRCPropertiesResult))) {
            unset($this->SetDRCPropertiesResult);
        } else {
            $this->SetDRCPropertiesResult = $setDRCPropertiesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SetDRCPropertiesResponse
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
