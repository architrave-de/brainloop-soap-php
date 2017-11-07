<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SyncResponse extends AbstractStructBase
{
    /**
     * The SyncResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\IsUpdatedOrNewAndItemCollection
     */
    public $SyncResult;
    /**
     * Constructor method for SyncResponse
     * @uses SyncResponse::setSyncResult()
     * @param \Brainloop\Soap\StructType\IsUpdatedOrNewAndItemCollection $syncResult
     */
    public function __construct(\Brainloop\Soap\StructType\IsUpdatedOrNewAndItemCollection $syncResult = null)
    {
        $this
            ->setSyncResult($syncResult);
    }
    /**
     * Get SyncResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\IsUpdatedOrNewAndItemCollection|null
     */
    public function getSyncResult()
    {
        return isset($this->SyncResult) ? $this->SyncResult : null;
    }
    /**
     * Set SyncResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\IsUpdatedOrNewAndItemCollection $syncResult
     * @return \Brainloop\Soap\StructType\SyncResponse
     */
    public function setSyncResult(\Brainloop\Soap\StructType\IsUpdatedOrNewAndItemCollection $syncResult = null)
    {
        if (is_null($syncResult) || (is_array($syncResult) && empty($syncResult))) {
            unset($this->SyncResult);
        } else {
            $this->SyncResult = $syncResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SyncResponse
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
