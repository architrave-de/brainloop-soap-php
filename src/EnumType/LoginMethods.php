<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for LoginMethods EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LoginMethods
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class LoginMethods
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'SmsEverySessionLogin'
     * @return string 'SmsEverySessionLogin'
     */
    const VALUE_SMS_EVERY_SESSION_LOGIN = 'SmsEverySessionLogin';
    /**
     * Constant for value 'SmsEveryDayLogin'
     * @return string 'SmsEveryDayLogin'
     */
    const VALUE_SMS_EVERY_DAY_LOGIN = 'SmsEveryDayLogin';
    /**
     * Constant for value 'SmsEveryWeekLogin'
     * @return string 'SmsEveryWeekLogin'
     */
    const VALUE_SMS_EVERY_WEEK_LOGIN = 'SmsEveryWeekLogin';
    /**
     * Constant for value 'CertificateLogin'
     * @return string 'CertificateLogin'
     */
    const VALUE_CERTIFICATE_LOGIN = 'CertificateLogin';
    /**
     * Constant for value 'SmsNonMobileLogin'
     * @return string 'SmsNonMobileLogin'
     */
    const VALUE_SMS_NON_MOBILE_LOGIN = 'SmsNonMobileLogin';
    /**
     * Constant for value 'UsernamePasswordLogin'
     * @return string 'UsernamePasswordLogin'
     */
    const VALUE_USERNAME_PASSWORD_LOGIN = 'UsernamePasswordLogin';
    /**
     * Constant for value 'TotpEverySessionLogin'
     * @return string 'TotpEverySessionLogin'
     */
    const VALUE_TOTP_EVERY_SESSION_LOGIN = 'TotpEverySessionLogin';
    /**
     * Constant for value 'TotpEveryDayLogin'
     * @return string 'TotpEveryDayLogin'
     */
    const VALUE_TOTP_EVERY_DAY_LOGIN = 'TotpEveryDayLogin';
    /**
     * Constant for value 'TotpEveryWeekLogin'
     * @return string 'TotpEveryWeekLogin'
     */
    const VALUE_TOTP_EVERY_WEEK_LOGIN = 'TotpEveryWeekLogin';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_SMS_EVERY_SESSION_LOGIN
     * @uses self::VALUE_SMS_EVERY_DAY_LOGIN
     * @uses self::VALUE_SMS_EVERY_WEEK_LOGIN
     * @uses self::VALUE_CERTIFICATE_LOGIN
     * @uses self::VALUE_SMS_NON_MOBILE_LOGIN
     * @uses self::VALUE_USERNAME_PASSWORD_LOGIN
     * @uses self::VALUE_TOTP_EVERY_SESSION_LOGIN
     * @uses self::VALUE_TOTP_EVERY_DAY_LOGIN
     * @uses self::VALUE_TOTP_EVERY_WEEK_LOGIN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SMS_EVERY_SESSION_LOGIN,
            self::VALUE_SMS_EVERY_DAY_LOGIN,
            self::VALUE_SMS_EVERY_WEEK_LOGIN,
            self::VALUE_CERTIFICATE_LOGIN,
            self::VALUE_SMS_NON_MOBILE_LOGIN,
            self::VALUE_USERNAME_PASSWORD_LOGIN,
            self::VALUE_TOTP_EVERY_SESSION_LOGIN,
            self::VALUE_TOTP_EVERY_DAY_LOGIN,
            self::VALUE_TOTP_EVERY_WEEK_LOGIN,
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
