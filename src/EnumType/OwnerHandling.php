<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for OwnerHandling EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:OwnerHandling
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class OwnerHandling
{
    /**
     * Constant for value 'UseDestinationFolderOwner'
     * @return string 'UseDestinationFolderOwner'
     */
    const VALUE_USE_DESTINATION_FOLDER_OWNER = 'UseDestinationFolderOwner';
    /**
     * Constant for value 'UsePublishExecuter'
     * @return string 'UsePublishExecuter'
     */
    const VALUE_USE_PUBLISH_EXECUTER = 'UsePublishExecuter';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_USE_DESTINATION_FOLDER_OWNER
     * @uses self::VALUE_USE_PUBLISH_EXECUTER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_USE_DESTINATION_FOLDER_OWNER,
            self::VALUE_USE_PUBLISH_EXECUTER,
        );
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
