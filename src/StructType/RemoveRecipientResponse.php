<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveRecipientResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class RemoveRecipientResponse extends AbstractStructBase
{
    /**
     * The RemoveRecipientResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\MailItem
     */
    public $RemoveRecipientResult;
    /**
     * Constructor method for RemoveRecipientResponse
     * @uses RemoveRecipientResponse::setRemoveRecipientResult()
     * @param \Brainloop\Soap\StructType\MailItem $removeRecipientResult
     */
    public function __construct(\Brainloop\Soap\StructType\MailItem $removeRecipientResult = null)
    {
        $this
            ->setRemoveRecipientResult($removeRecipientResult);
    }
    /**
     * Get RemoveRecipientResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\MailItem|null
     */
    public function getRemoveRecipientResult()
    {
        return isset($this->RemoveRecipientResult) ? $this->RemoveRecipientResult : null;
    }
    /**
     * Set RemoveRecipientResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\MailItem $removeRecipientResult
     * @return \Brainloop\Soap\StructType\RemoveRecipientResponse
     */
    public function setRemoveRecipientResult(\Brainloop\Soap\StructType\MailItem $removeRecipientResult = null)
    {
        if (is_null($removeRecipientResult) || (is_array($removeRecipientResult) && empty($removeRecipientResult))) {
            unset($this->RemoveRecipientResult);
        } else {
            $this->RemoveRecipientResult = $removeRecipientResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\RemoveRecipientResponse
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
