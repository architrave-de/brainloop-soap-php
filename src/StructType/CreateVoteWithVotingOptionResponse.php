<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateVoteWithVotingOptionResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateVoteWithVotingOptionResponse extends AbstractStructBase
{
    /**
     * The CreateVoteWithVotingOptionResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Vote
     */
    public $CreateVoteWithVotingOptionResult;
    /**
     * Constructor method for CreateVoteWithVotingOptionResponse
     * @uses CreateVoteWithVotingOptionResponse::setCreateVoteWithVotingOptionResult()
     * @param \Brainloop\Soap\StructType\Vote $createVoteWithVotingOptionResult
     */
    public function __construct(\Brainloop\Soap\StructType\Vote $createVoteWithVotingOptionResult = null)
    {
        $this
            ->setCreateVoteWithVotingOptionResult($createVoteWithVotingOptionResult);
    }
    /**
     * Get CreateVoteWithVotingOptionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Vote|null
     */
    public function getCreateVoteWithVotingOptionResult()
    {
        return isset($this->CreateVoteWithVotingOptionResult) ? $this->CreateVoteWithVotingOptionResult : null;
    }
    /**
     * Set CreateVoteWithVotingOptionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Vote $createVoteWithVotingOptionResult
     * @return \Brainloop\Soap\StructType\CreateVoteWithVotingOptionResponse
     */
    public function setCreateVoteWithVotingOptionResult(\Brainloop\Soap\StructType\Vote $createVoteWithVotingOptionResult = null)
    {
        if (is_null($createVoteWithVotingOptionResult) || (is_array($createVoteWithVotingOptionResult) && empty($createVoteWithVotingOptionResult))) {
            unset($this->CreateVoteWithVotingOptionResult);
        } else {
            $this->CreateVoteWithVotingOptionResult = $createVoteWithVotingOptionResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateVoteWithVotingOptionResponse
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
