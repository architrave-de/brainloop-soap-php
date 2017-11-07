<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateVoteResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateVoteResponse extends AbstractStructBase
{
    /**
     * The CreateVoteResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Vote
     */
    public $CreateVoteResult;
    /**
     * Constructor method for CreateVoteResponse
     * @uses CreateVoteResponse::setCreateVoteResult()
     * @param \Brainloop\Soap\StructType\Vote $createVoteResult
     */
    public function __construct(\Brainloop\Soap\StructType\Vote $createVoteResult = null)
    {
        $this
            ->setCreateVoteResult($createVoteResult);
    }
    /**
     * Get CreateVoteResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Vote|null
     */
    public function getCreateVoteResult()
    {
        return isset($this->CreateVoteResult) ? $this->CreateVoteResult : null;
    }
    /**
     * Set CreateVoteResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Vote $createVoteResult
     * @return \Brainloop\Soap\StructType\CreateVoteResponse
     */
    public function setCreateVoteResult(\Brainloop\Soap\StructType\Vote $createVoteResult = null)
    {
        if (is_null($createVoteResult) || (is_array($createVoteResult) && empty($createVoteResult))) {
            unset($this->CreateVoteResult);
        } else {
            $this->CreateVoteResult = $createVoteResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateVoteResponse
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
