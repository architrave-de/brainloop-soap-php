<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartUserNameSessionResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class StartUserNameSessionResponse extends AbstractStructBase
{
    /**
     * The StartUserNameSessionResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\SessionInfo
     */
    public $StartUserNameSessionResult;
    /**
     * Constructor method for StartUserNameSessionResponse
     * @uses StartUserNameSessionResponse::setStartUserNameSessionResult()
     * @param \Brainloop\Soap\StructType\SessionInfo $startUserNameSessionResult
     */
    public function __construct(\Brainloop\Soap\StructType\SessionInfo $startUserNameSessionResult = null)
    {
        $this
            ->setStartUserNameSessionResult($startUserNameSessionResult);
    }
    /**
     * Get StartUserNameSessionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\SessionInfo|null
     */
    public function getStartUserNameSessionResult()
    {
        return isset($this->StartUserNameSessionResult) ? $this->StartUserNameSessionResult : null;
    }
    /**
     * Set StartUserNameSessionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\SessionInfo $startUserNameSessionResult
     * @return \Brainloop\Soap\StructType\StartUserNameSessionResponse
     */
    public function setStartUserNameSessionResult(\Brainloop\Soap\StructType\SessionInfo $startUserNameSessionResult = null)
    {
        if (is_null($startUserNameSessionResult) || (is_array($startUserNameSessionResult) && empty($startUserNameSessionResult))) {
            unset($this->StartUserNameSessionResult);
        } else {
            $this->StartUserNameSessionResult = $startUserNameSessionResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\StartUserNameSessionResponse
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
