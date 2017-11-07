<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocCollection StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DocCollection
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class DocCollection extends VersionableItem
{
    /**
     * The Connections
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter
     */
    public $Connections;
    /**
     * Constructor method for DocCollection
     * @uses DocCollection::setConnections()
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter $connections
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter $connections = null)
    {
        $this
            ->setConnections($connections);
    }
    /**
     * Get Connections value
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter|null
     */
    public function getConnections()
    {
        return $this->Connections;
    }
    /**
     * Set Connections value
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter $connections
     * @return \Brainloop\Soap\StructType\DocCollection
     */
    public function setConnections(\Brainloop\Soap\ArrayType\ArrayOfItemIDAndChapter $connections = null)
    {
        $this->Connections = $connections;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\DocCollection
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
