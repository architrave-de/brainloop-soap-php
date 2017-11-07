<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDataroomsByDRCResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDataroomsByDRCResponse extends AbstractStructBase
{
    /**
     * The GetDataroomsByDRCResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\DataroomCollection
     */
    public $GetDataroomsByDRCResult;
    /**
     * Constructor method for GetDataroomsByDRCResponse
     * @uses GetDataroomsByDRCResponse::setGetDataroomsByDRCResult()
     * @param \Brainloop\Soap\StructType\DataroomCollection $getDataroomsByDRCResult
     */
    public function __construct(\Brainloop\Soap\StructType\DataroomCollection $getDataroomsByDRCResult = null)
    {
        $this
            ->setGetDataroomsByDRCResult($getDataroomsByDRCResult);
    }
    /**
     * Get GetDataroomsByDRCResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\DataroomCollection|null
     */
    public function getGetDataroomsByDRCResult()
    {
        return isset($this->GetDataroomsByDRCResult) ? $this->GetDataroomsByDRCResult : null;
    }
    /**
     * Set GetDataroomsByDRCResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\DataroomCollection $getDataroomsByDRCResult
     * @return \Brainloop\Soap\StructType\GetDataroomsByDRCResponse
     */
    public function setGetDataroomsByDRCResult(\Brainloop\Soap\StructType\DataroomCollection $getDataroomsByDRCResult = null)
    {
        if (is_null($getDataroomsByDRCResult) || (is_array($getDataroomsByDRCResult) && empty($getDataroomsByDRCResult))) {
            unset($this->GetDataroomsByDRCResult);
        } else {
            $this->GetDataroomsByDRCResult = $getDataroomsByDRCResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetDataroomsByDRCResponse
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
