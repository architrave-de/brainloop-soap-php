<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for DownloadType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DownloadType
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class DownloadType
{
    /**
     * Constant for value 'Original'
     * @return string 'Original'
     */
    const VALUE_ORIGINAL = 'Original';
    /**
     * Constant for value 'OriginalRMS'
     * @return string 'OriginalRMS'
     */
    const VALUE_ORIGINAL_RMS = 'OriginalRMS';
    /**
     * Constant for value 'BrainmarkImage'
     * @return string 'BrainmarkImage'
     */
    const VALUE_BRAINMARK_IMAGE = 'BrainmarkImage';
    /**
     * Constant for value 'BrainmarkPDF'
     * @return string 'BrainmarkPDF'
     */
    const VALUE_BRAINMARK_PDF = 'BrainmarkPDF';
    /**
     * Constant for value 'BrainmarkPDFRMS'
     * @return string 'BrainmarkPDFRMS'
     */
    const VALUE_BRAINMARK_PDFRMS = 'BrainmarkPDFRMS';
    /**
     * Constant for value 'Thumbnail'
     * @return string 'Thumbnail'
     */
    const VALUE_THUMBNAIL = 'Thumbnail';
    /**
     * Constant for value 'ThumbnailDefaultSize'
     * @return string 'ThumbnailDefaultSize'
     */
    const VALUE_THUMBNAIL_DEFAULT_SIZE = 'ThumbnailDefaultSize';
    /**
     * Constant for value 'CustomerFile'
     * @return string 'CustomerFile'
     */
    const VALUE_CUSTOMER_FILE = 'CustomerFile';
    /**
     * Constant for value 'OriginalZipIfMalicious'
     * @return string 'OriginalZipIfMalicious'
     */
    const VALUE_ORIGINAL_ZIP_IF_MALICIOUS = 'OriginalZipIfMalicious';
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
     * @uses self::VALUE_ORIGINAL
     * @uses self::VALUE_ORIGINAL_RMS
     * @uses self::VALUE_BRAINMARK_IMAGE
     * @uses self::VALUE_BRAINMARK_PDF
     * @uses self::VALUE_BRAINMARK_PDFRMS
     * @uses self::VALUE_THUMBNAIL
     * @uses self::VALUE_THUMBNAIL_DEFAULT_SIZE
     * @uses self::VALUE_CUSTOMER_FILE
     * @uses self::VALUE_ORIGINAL_ZIP_IF_MALICIOUS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ORIGINAL,
            self::VALUE_ORIGINAL_RMS,
            self::VALUE_BRAINMARK_IMAGE,
            self::VALUE_BRAINMARK_PDF,
            self::VALUE_BRAINMARK_PDFRMS,
            self::VALUE_THUMBNAIL,
            self::VALUE_THUMBNAIL_DEFAULT_SIZE,
            self::VALUE_CUSTOMER_FILE,
            self::VALUE_ORIGINAL_ZIP_IF_MALICIOUS,
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
