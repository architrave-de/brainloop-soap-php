<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetItemNotificationResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetItemNotificationResponse extends AbstractStructBase
{
    /**
     * The SetItemNotificationResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfNotificationGroup
     */
    public $SetItemNotificationResult;
    /**
     * Constructor method for SetItemNotificationResponse
     * @uses SetItemNotificationResponse::setSetItemNotificationResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfNotificationGroup $setItemNotificationResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfNotificationGroup $setItemNotificationResult = null)
    {
        $this
            ->setSetItemNotificationResult($setItemNotificationResult);
    }
    /**
     * Get SetItemNotificationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfNotificationGroup|null
     */
    public function getSetItemNotificationResult()
    {
        return isset($this->SetItemNotificationResult) ? $this->SetItemNotificationResult : null;
    }
    /**
     * Set SetItemNotificationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfNotificationGroup $setItemNotificationResult
     * @return \Brainloop\Soap\StructType\SetItemNotificationResponse
     */
    public function setSetItemNotificationResult(\Brainloop\Soap\ArrayType\ArrayOfNotificationGroup $setItemNotificationResult = null)
    {
        if (is_null($setItemNotificationResult) || (is_array($setItemNotificationResult) && empty($setItemNotificationResult))) {
            unset($this->SetItemNotificationResult);
        } else {
            $this->SetItemNotificationResult = $setItemNotificationResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SetItemNotificationResponse
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
