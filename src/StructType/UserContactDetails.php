<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserContactDetails StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UserContactDetails
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class UserContactDetails extends AbstractStructBase
{
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $City;
    /**
     * The Company
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Company;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Country;
    /**
     * The Department
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Department;
    /**
     * The JobTitle
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $JobTitle;
    /**
     * The PostCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $PostCode;
    /**
     * The State
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $State;
    /**
     * The Street
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Street;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Title;
    /**
     * Constructor method for UserContactDetails
     * @uses UserContactDetails::setCity()
     * @uses UserContactDetails::setCompany()
     * @uses UserContactDetails::setCountry()
     * @uses UserContactDetails::setDepartment()
     * @uses UserContactDetails::setJobTitle()
     * @uses UserContactDetails::setPostCode()
     * @uses UserContactDetails::setState()
     * @uses UserContactDetails::setStreet()
     * @uses UserContactDetails::setTitle()
     * @param string $city
     * @param string $company
     * @param string $country
     * @param string $department
     * @param string $jobTitle
     * @param string $postCode
     * @param string $state
     * @param string $street
     * @param string $title
     */
    public function __construct($city = null, $company = null, $country = null, $department = null, $jobTitle = null, $postCode = null, $state = null, $street = null, $title = null)
    {
        $this
            ->setCity($city)
            ->setCompany($company)
            ->setCountry($country)
            ->setDepartment($department)
            ->setJobTitle($jobTitle)
            ->setPostCode($postCode)
            ->setState($state)
            ->setStreet($street)
            ->setTitle($title);
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \Brainloop\Soap\StructType\UserContactDetails
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Get Company value
     * @return string|null
     */
    public function getCompany()
    {
        return $this->Company;
    }
    /**
     * Set Company value
     * @param string $company
     * @return \Brainloop\Soap\StructType\UserContactDetails
     */
    public function setCompany($company = null)
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company)), __LINE__);
        }
        $this->Company = $company;
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \Brainloop\Soap\StructType\UserContactDetails
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get Department value
     * @return string|null
     */
    public function getDepartment()
    {
        return $this->Department;
    }
    /**
     * Set Department value
     * @param string $department
     * @return \Brainloop\Soap\StructType\UserContactDetails
     */
    public function setDepartment($department = null)
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($department)), __LINE__);
        }
        $this->Department = $department;
        return $this;
    }
    /**
     * Get JobTitle value
     * @return string|null
     */
    public function getJobTitle()
    {
        return $this->JobTitle;
    }
    /**
     * Set JobTitle value
     * @param string $jobTitle
     * @return \Brainloop\Soap\StructType\UserContactDetails
     */
    public function setJobTitle($jobTitle = null)
    {
        // validation for constraint: string
        if (!is_null($jobTitle) && !is_string($jobTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($jobTitle)), __LINE__);
        }
        $this->JobTitle = $jobTitle;
        return $this;
    }
    /**
     * Get PostCode value
     * @return string|null
     */
    public function getPostCode()
    {
        return $this->PostCode;
    }
    /**
     * Set PostCode value
     * @param string $postCode
     * @return \Brainloop\Soap\StructType\UserContactDetails
     */
    public function setPostCode($postCode = null)
    {
        // validation for constraint: string
        if (!is_null($postCode) && !is_string($postCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postCode)), __LINE__);
        }
        $this->PostCode = $postCode;
        return $this;
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState()
    {
        return $this->State;
    }
    /**
     * Set State value
     * @param string $state
     * @return \Brainloop\Soap\StructType\UserContactDetails
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        $this->State = $state;
        return $this;
    }
    /**
     * Get Street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->Street;
    }
    /**
     * Set Street value
     * @param string $street
     * @return \Brainloop\Soap\StructType\UserContactDetails
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street)), __LINE__);
        }
        $this->Street = $street;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \Brainloop\Soap\StructType\UserContactDetails
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\UserContactDetails
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
