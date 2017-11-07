<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QRHasClientChallengedResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class QRHasClientChallengedResponse extends AbstractStructBase
{
    /**
     * The QRHasClientChallengedResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $QRHasClientChallengedResult;
    /**
     * Constructor method for QRHasClientChallengedResponse
     * @uses QRHasClientChallengedResponse::setQRHasClientChallengedResult()
     * @param string $qRHasClientChallengedResult
     */
    public function __construct($qRHasClientChallengedResult = null)
    {
        $this
            ->setQRHasClientChallengedResult($qRHasClientChallengedResult);
    }
    /**
     * Get QRHasClientChallengedResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getQRHasClientChallengedResult()
    {
        return isset($this->QRHasClientChallengedResult) ? $this->QRHasClientChallengedResult : null;
    }
    /**
     * Set QRHasClientChallengedResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $qRHasClientChallengedResult
     * @return \Brainloop\Soap\StructType\QRHasClientChallengedResponse
     */
    public function setQRHasClientChallengedResult($qRHasClientChallengedResult = null)
    {
        // validation for constraint: string
        if (!is_null($qRHasClientChallengedResult) && !is_string($qRHasClientChallengedResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qRHasClientChallengedResult)), __LINE__);
        }
        if (is_null($qRHasClientChallengedResult) || (is_array($qRHasClientChallengedResult) && empty($qRHasClientChallengedResult))) {
            unset($this->QRHasClientChallengedResult);
        } else {
            $this->QRHasClientChallengedResult = $qRHasClientChallengedResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\QRHasClientChallengedResponse
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
