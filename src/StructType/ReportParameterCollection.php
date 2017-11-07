<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportParameterCollection StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ReportParameterCollection
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ReportParameterCollection extends AbstractStructBase
{
    /**
     * The ReportParameter
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ReportParameter[]
     */
    public $ReportParameter;
    /**
     * Constructor method for ReportParameterCollection
     * @uses ReportParameterCollection::setReportParameter()
     * @param \Brainloop\Soap\StructType\ReportParameter[] $reportParameter
     */
    public function __construct(array $reportParameter = array())
    {
        $this
            ->setReportParameter($reportParameter);
    }
    /**
     * Get ReportParameter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ReportParameter[]|null
     */
    public function getReportParameter()
    {
        return isset($this->ReportParameter) ? $this->ReportParameter : null;
    }
    /**
     * Set ReportParameter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\ReportParameter[] $reportParameter
     * @return \Brainloop\Soap\StructType\ReportParameterCollection
     */
    public function setReportParameter(array $reportParameter = array())
    {
        foreach ($reportParameter as $reportParameterCollectionReportParameterItem) {
            // validation for constraint: itemType
            if (!$reportParameterCollectionReportParameterItem instanceof \Brainloop\Soap\StructType\ReportParameter) {
                throw new \InvalidArgumentException(sprintf('The ReportParameter property can only contain items of \Brainloop\Soap\StructType\ReportParameter, "%s" given', is_object($reportParameterCollectionReportParameterItem) ? get_class($reportParameterCollectionReportParameterItem) : gettype($reportParameterCollectionReportParameterItem)), __LINE__);
            }
        }
        if (is_null($reportParameter) || (is_array($reportParameter) && empty($reportParameter))) {
            unset($this->ReportParameter);
        } else {
            $this->ReportParameter = $reportParameter;
        }
        return $this;
    }
    /**
     * Add item to ReportParameter value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\ReportParameter $item
     * @return \Brainloop\Soap\StructType\ReportParameterCollection
     */
    public function addToReportParameter(\Brainloop\Soap\StructType\ReportParameter $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\ReportParameter) {
            throw new \InvalidArgumentException(sprintf('The ReportParameter property can only contain items of \Brainloop\Soap\StructType\ReportParameter, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ReportParameter[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ReportParameterCollection
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
