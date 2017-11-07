<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartTokenSessionResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class StartTokenSessionResponse extends AbstractStructBase
{
    /**
     * The StartTokenSessionResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\SessionInfo
     */
    public $StartTokenSessionResult;
    /**
     * Constructor method for StartTokenSessionResponse
     * @uses StartTokenSessionResponse::setStartTokenSessionResult()
     * @param \Brainloop\Soap\StructType\SessionInfo $startTokenSessionResult
     */
    public function __construct(\Brainloop\Soap\StructType\SessionInfo $startTokenSessionResult = null)
    {
        $this
            ->setStartTokenSessionResult($startTokenSessionResult);
    }
    /**
     * Get StartTokenSessionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\SessionInfo|null
     */
    public function getStartTokenSessionResult()
    {
        return isset($this->StartTokenSessionResult) ? $this->StartTokenSessionResult : null;
    }
    /**
     * Set StartTokenSessionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\SessionInfo $startTokenSessionResult
     * @return \Brainloop\Soap\StructType\StartTokenSessionResponse
     */
    public function setStartTokenSessionResult(\Brainloop\Soap\StructType\SessionInfo $startTokenSessionResult = null)
    {
        if (is_null($startTokenSessionResult) || (is_array($startTokenSessionResult) && empty($startTokenSessionResult))) {
            unset($this->StartTokenSessionResult);
        } else {
            $this->StartTokenSessionResult = $startTokenSessionResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\StartTokenSessionResponse
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
