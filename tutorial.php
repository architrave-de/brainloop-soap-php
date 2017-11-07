<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://my.brainloop.net/BrainloopWebService/v3/services.svc?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://my.brainloop.net/BrainloopWebService/v3/services.svc?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Brainloop\Soap\ClassMap::get(),
);
/**
 * Samples for Start ServiceType
 */
$start = new \Brainloop\Soap\ServiceType\Start($options);
/**
 * Sample call for StartSession operation/method
 */
if ($start->StartSession(new \Brainloop\Soap\StructType\StartSession()) !== false) {
    print_r($start->getResult());
} else {
    print_r($start->getLastError());
}
/**
 * Sample call for StartUserNameSession operation/method
 */
if ($start->StartUserNameSession(new \Brainloop\Soap\StructType\StartUserNameSession()) !== false) {
    print_r($start->getResult());
} else {
    print_r($start->getLastError());
}
/**
 * Sample call for StartTokenSession operation/method
 */
if ($start->StartTokenSession(new \Brainloop\Soap\StructType\StartTokenSession()) !== false) {
    print_r($start->getResult());
} else {
    print_r($start->getLastError());
}
/**
 * Sample call for StartUrlTokenSession operation/method
 */
if ($start->StartUrlTokenSession(new \Brainloop\Soap\StructType\StartUrlTokenSession()) !== false) {
    print_r($start->getResult());
} else {
    print_r($start->getLastError());
}
/**
 * Sample call for StartLoginTokenSession operation/method
 */
if ($start->StartLoginTokenSession(new \Brainloop\Soap\StructType\StartLoginTokenSession()) !== false) {
    print_r($start->getResult());
} else {
    print_r($start->getLastError());
}
/**
 * Samples for Forgot ServiceType
 */
$forgot = new \Brainloop\Soap\ServiceType\Forgot($options);
/**
 * Sample call for ForgotPassword operation/method
 */
if ($forgot->ForgotPassword(new \Brainloop\Soap\StructType\ForgotPassword()) !== false) {
    print_r($forgot->getResult());
} else {
    print_r($forgot->getLastError());
}
/**
 * Samples for End ServiceType
 */
$end = new \Brainloop\Soap\ServiceType\End($options);
/**
 * Sample call for EndSession operation/method
 */
if ($end->EndSession(new \Brainloop\Soap\StructType\EndSession()) !== false) {
    print_r($end->getResult());
} else {
    print_r($end->getLastError());
}
/**
 * Samples for QRR ServiceType
 */
$qRR = new \Brainloop\Soap\ServiceType\QRR($options);
/**
 * Sample call for QRRequest operation/method
 */
if ($qRR->QRRequest(new \Brainloop\Soap\StructType\QRRequest()) !== false) {
    print_r($qRR->getResult());
} else {
    print_r($qRR->getLastError());
}
/**
 * Samples for QRH ServiceType
 */
$qRH = new \Brainloop\Soap\ServiceType\QRH($options);
/**
 * Sample call for QRHasClientChallenged operation/method
 */
if ($qRH->QRHasClientChallenged(new \Brainloop\Soap\StructType\QRHasClientChallenged()) !== false) {
    print_r($qRH->getResult());
} else {
    print_r($qRH->getLastError());
}
/**
 * Samples for SMSR ServiceType
 */
$sMSR = new \Brainloop\Soap\ServiceType\SMSR($options);
/**
 * Sample call for SMSRequest operation/method
 */
if ($sMSR->SMSRequest(new \Brainloop\Soap\StructType\SMSRequest()) !== false) {
    print_r($sMSR->getResult());
} else {
    print_r($sMSR->getLastError());
}
/**
 * Samples for SMSV ServiceType
 */
$sMSV = new \Brainloop\Soap\ServiceType\SMSV($options);
/**
 * Sample call for SMSValidate operation/method
 */
if ($sMSV->SMSValidate(new \Brainloop\Soap\StructType\SMSValidate()) !== false) {
    print_r($sMSV->getResult());
} else {
    print_r($sMSV->getLastError());
}
/**
 * Samples for TOTPV ServiceType
 */
$tOTPV = new \Brainloop\Soap\ServiceType\TOTPV($options);
/**
 * Sample call for TOTPValidate operation/method
 */
if ($tOTPV->TOTPValidate(new \Brainloop\Soap\StructType\TOTPValidate()) !== false) {
    print_r($tOTPV->getResult());
} else {
    print_r($tOTPV->getLastError());
}
/**
 * Samples for Validate ServiceType
 */
$validate = new \Brainloop\Soap\ServiceType\Validate($options);
/**
 * Sample call for ValidateToken operation/method
 */
if ($validate->ValidateToken(new \Brainloop\Soap\StructType\ValidateToken()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Samples for Identify ServiceType
 */
$identify = new \Brainloop\Soap\ServiceType\Identify($options);
/**
 * Sample call for Identify operation/method
 */
if ($identify->Identify(new \Brainloop\Soap\StructType\Identify()) !== false) {
    print_r($identify->getResult());
} else {
    print_r($identify->getLastError());
}
/**
 * Samples for Authenticate ServiceType
 */
$authenticate = new \Brainloop\Soap\ServiceType\Authenticate($options);
/**
 * Sample call for Authenticate operation/method
 */
if ($authenticate->Authenticate(new \Brainloop\Soap\StructType\Authenticate()) !== false) {
    print_r($authenticate->getResult());
} else {
    print_r($authenticate->getLastError());
}
/**
 * Samples for Request ServiceType
 */
$request = new \Brainloop\Soap\ServiceType\Request($options);
/**
 * Sample call for RequestToken operation/method
 */
if ($request->RequestToken(new \Brainloop\Soap\StructType\RequestToken()) !== false) {
    print_r($request->getResult());
} else {
    print_r($request->getLastError());
}
/**
 * Sample call for RequestLoginToken operation/method
 */
if ($request->RequestLoginToken(new \Brainloop\Soap\StructType\RequestLoginToken()) !== false) {
    print_r($request->getResult());
} else {
    print_r($request->getLastError());
}
/**
 * Sample call for RequestIdentityPIN operation/method
 */
if ($request->RequestIdentityPIN(new \Brainloop\Soap\StructType\RequestIdentityPIN()) !== false) {
    print_r($request->getResult());
} else {
    print_r($request->getLastError());
}
/**
 * Sample call for RequestMobileChange operation/method
 */
if ($request->RequestMobileChange(new \Brainloop\Soap\StructType\RequestMobileChange()) !== false) {
    print_r($request->getResult());
} else {
    print_r($request->getLastError());
}
/**
 * Samples for Download ServiceType
 */
$download = new \Brainloop\Soap\ServiceType\Download($options);
/**
 * Sample call for DownloadItem operation/method
 */
if ($download->DownloadItem(new \Brainloop\Soap\StructType\DownloadItemRequest()) !== false) {
    print_r($download->getResult());
} else {
    print_r($download->getLastError());
}
/**
 * Sample call for DownloadCustomerFile operation/method
 */
if ($download->DownloadCustomerFile(new \Brainloop\Soap\StructType\DownloadCustomerFileRequest()) !== false) {
    print_r($download->getResult());
} else {
    print_r($download->getLastError());
}
/**
 * Sample call for DownloadDataroomLogo operation/method
 */
if ($download->DownloadDataroomLogo(new \Brainloop\Soap\StructType\DownloadDataroomLogoRequest()) !== false) {
    print_r($download->getResult());
} else {
    print_r($download->getLastError());
}
/**
 * Sample call for DownloadDataroomLoginImage operation/method
 */
if ($download->DownloadDataroomLoginImage(new \Brainloop\Soap\StructType\DownloadDataroomLoginImageRequest()) !== false) {
    print_r($download->getResult());
} else {
    print_r($download->getLastError());
}
/**
 * Samples for Upload ServiceType
 */
$upload = new \Brainloop\Soap\ServiceType\Upload($options);
$upload->setSoapHeaderItemParameters($ItemParameters);
/**
 * Sample call for UploadItem operation/method
 */
if ($upload->UploadItem(new \Brainloop\Soap\StructType\UploadItemRequest()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Brainloop\Soap\ServiceType\Get($options);
/**
 * Sample call for GetUploadStatus operation/method
 */
if ($get->GetUploadStatus(new \Brainloop\Soap\StructType\GetUploadStatus()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDownloadTypes operation/method
 */
if ($get->GetDownloadTypes(new \Brainloop\Soap\StructType\GetDownloadTypes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDownloadTypesWithRMS operation/method
 */
if ($get->GetDownloadTypesWithRMS(new \Brainloop\Soap\StructType\GetDownloadTypesWithRMS()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDownloadTypesByVersion operation/method
 */
if ($get->GetDownloadTypesByVersion(new \Brainloop\Soap\StructType\GetDownloadTypesByVersion()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMultipleDownloadTypesByVersion operation/method
 */
if ($get->GetMultipleDownloadTypesByVersion(new \Brainloop\Soap\StructType\GetMultipleDownloadTypesByVersionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDownloadTypesByVersionWithRMS operation/method
 */
if ($get->GetDownloadTypesByVersionWithRMS(new \Brainloop\Soap\StructType\GetDownloadTypesByVersionWithRMS()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSystemAnnouncements operation/method
 */
if ($get->GetSystemAnnouncements(new \Brainloop\Soap\StructType\GetSystemAnnouncements()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetItem operation/method
 */
if ($get->GetItem(new \Brainloop\Soap\StructType\GetItem()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDatarooms operation/method
 */
if ($get->GetDatarooms(new \Brainloop\Soap\StructType\GetDatarooms()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDataroomsByDRC operation/method
 */
if ($get->GetDataroomsByDRC(new \Brainloop\Soap\StructType\GetDataroomsByDRC()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTree operation/method
 */
if ($get->GetTree(new \Brainloop\Soap\StructType\GetTree()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTreeWithParameters operation/method
 */
if ($get->GetTreeWithParameters(new \Brainloop\Soap\StructType\GetTreeWithParameters()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSubtree operation/method
 */
if ($get->GetSubtree(new \Brainloop\Soap\StructType\GetSubtree()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetURLForSentItem operation/method
 */
if ($get->GetURLForSentItem(new \Brainloop\Soap\StructType\GetURLForSentItem()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMultipleBrainmarkStyles operation/method
 */
if ($get->GetMultipleBrainmarkStyles(new \Brainloop\Soap\StructType\GetMultipleBrainmarkStyles()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetItems operation/method
 */
if ($get->GetItems(new \Brainloop\Soap\StructType\GetItems()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetItemByName operation/method
 */
if ($get->GetItemByName(new \Brainloop\Soap\StructType\GetItemByName()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRootItems operation/method
 */
if ($get->GetRootItems(new \Brainloop\Soap\StructType\GetRootItems()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDataroomByName operation/method
 */
if ($get->GetDataroomByName(new \Brainloop\Soap\StructType\GetDataroomByName()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDataroom operation/method
 */
if ($get->GetDataroom(new \Brainloop\Soap\StructType\GetDataroom()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetItemsByID operation/method
 */
if ($get->GetItemsByID(new \Brainloop\Soap\StructType\GetItemsByID()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetItemByPath operation/method
 */
if ($get->GetItemByPath(new \Brainloop\Soap\StructType\GetItemByPath()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetItemByRelativePath operation/method
 */
if ($get->GetItemByRelativePath(new \Brainloop\Soap\StructType\GetItemByRelativePath()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetWatchlistItems operation/method
 */
if ($get->GetWatchlistItems(new \Brainloop\Soap\StructType\GetWatchlistItems()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDeletedItems operation/method
 */
if ($get->GetDeletedItems(new \Brainloop\Soap\StructType\GetDeletedItems()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPublishRules operation/method
 */
if ($get->GetPublishRules(new \Brainloop\Soap\StructType\GetPublishRules()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSecurityCategories operation/method
 */
if ($get->GetSecurityCategories(new \Brainloop\Soap\StructType\GetSecurityCategories()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUsers operation/method
 */
if ($get->GetUsers(new \Brainloop\Soap\StructType\GetUsers()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUser operation/method
 */
if ($get->GetUser(new \Brainloop\Soap\StructType\GetUser()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserByEmail operation/method
 */
if ($get->GetUserByEmail(new \Brainloop\Soap\StructType\GetUserByEmail()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetItemVersions operation/method
 */
if ($get->GetItemVersions(new \Brainloop\Soap\StructType\GetItemVersions()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPermissionsForUser operation/method
 */
if ($get->GetPermissionsForUser(new \Brainloop\Soap\StructType\GetPermissionsForUser()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSendOptionsMultipleFiles operation/method
 */
if ($get->GetSendOptionsMultipleFiles(new \Brainloop\Soap\StructType\GetSendOptionsMultipleFiles()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSendOptions operation/method
 */
if ($get->GetSendOptions(new \Brainloop\Soap\StructType\GetSendOptions()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDataroomProperties operation/method
 */
if ($get->GetDataroomProperties(new \Brainloop\Soap\StructType\GetDataroomProperties()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetItemProperties operation/method
 */
if ($get->GetItemProperties(new \Brainloop\Soap\StructType\GetItemProperties()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTermsAndConditions operation/method
 */
if ($get->GetTermsAndConditions(new \Brainloop\Soap\StructType\GetTermsAndConditions()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSendRecipients operation/method
 */
if ($get->GetSendRecipients(new \Brainloop\Soap\StructType\GetSendRecipients()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAttributes operation/method
 */
if ($get->GetAttributes(new \Brainloop\Soap\StructType\GetAttributes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetModifiedTree operation/method
 */
if ($get->GetModifiedTree(new \Brainloop\Soap\StructType\GetModifiedTree()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetModifiedSubTree operation/method
 */
if ($get->GetModifiedSubTree(new \Brainloop\Soap\StructType\GetModifiedSubTree()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetModifiedTreeWithTrashcan operation/method
 */
if ($get->GetModifiedTreeWithTrashcan(new \Brainloop\Soap\StructType\GetModifiedTreeWithTrashcan()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAncestors operation/method
 */
if ($get->GetAncestors(new \Brainloop\Soap\StructType\GetAncestors()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNotificationEnabledItemIds operation/method
 */
if ($get->GetNotificationEnabledItemIds(new \Brainloop\Soap\StructType\GetNotificationEnabledItemIds()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetWebDAVUrl operation/method
 */
if ($get->GetWebDAVUrl(new \Brainloop\Soap\StructType\GetWebDAVUrl()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetReplies operation/method
 */
if ($get->GetReplies(new \Brainloop\Soap\StructType\GetReplies()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNextStageGroups operation/method
 */
if ($get->GetNextStageGroups(new \Brainloop\Soap\StructType\GetNextStageGroups()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetStageGroups operation/method
 */
if ($get->GetStageGroups(new \Brainloop\Soap\StructType\GetStageGroups()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetEventTypeTemplates operation/method
 */
if ($get->GetEventTypeTemplates(new \Brainloop\Soap\StructType\GetEventTypeTemplates()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetEventTypeAttachmentTemplates operation/method
 */
if ($get->GetEventTypeAttachmentTemplates(new \Brainloop\Soap\StructType\GetEventTypeAttachmentTemplates()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCalendarItems operation/method
 */
if ($get->GetCalendarItems(new \Brainloop\Soap\StructType\GetCalendarItems()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCollaborators operation/method
 */
if ($get->GetCollaborators(new \Brainloop\Soap\StructType\GetCollaborators()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAttachments operation/method
 */
if ($get->GetAttachments(new \Brainloop\Soap\StructType\GetAttachments()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetReview operation/method
 */
if ($get->GetReview(new \Brainloop\Soap\StructType\GetReview()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetReviews operation/method
 */
if ($get->GetReviews(new \Brainloop\Soap\StructType\GetReviews()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetReviewsByUserParticipation operation/method
 */
if ($get->GetReviewsByUserParticipation(new \Brainloop\Soap\StructType\GetReviewsByUserParticipation()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAnnotation operation/method
 */
if ($get->GetAnnotation(new \Brainloop\Soap\StructType\GetAnnotation()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAnnotations operation/method
 */
if ($get->GetAnnotations(new \Brainloop\Soap\StructType\GetAnnotations()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMailItemsFromTokens operation/method
 */
if ($get->GetMailItemsFromTokens(new \Brainloop\Soap\StructType\GetMailItemsFromTokens()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetReports operation/method
 */
if ($get->GetReports(new \Brainloop\Soap\StructType\GetReports()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetReportsByDataroom operation/method
 */
if ($get->GetReportsByDataroom(new \Brainloop\Soap\StructType\GetReportsByDataroom()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetReportsByDRC operation/method
 */
if ($get->GetReportsByDRC(new \Brainloop\Soap\StructType\GetReportsByDRC()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetReport operation/method
 */
if ($get->GetReport(new \Brainloop\Soap\StructType\GetReport()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetReportByDRC operation/method
 */
if ($get->GetReportByDRC(new \Brainloop\Soap\StructType\GetReportByDRC()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetReportByDataroom operation/method
 */
if ($get->GetReportByDataroom(new \Brainloop\Soap\StructType\GetReportByDataroom()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCustomerFilenames operation/method
 */
if ($get->GetCustomerFilenames(new \Brainloop\Soap\StructType\GetCustomerFilenames()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSecurityGroups operation/method
 */
if ($get->GetSecurityGroups(new \Brainloop\Soap\StructType\GetSecurityGroups()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSecurityGroup operation/method
 */
if ($get->GetSecurityGroup(new \Brainloop\Soap\StructType\GetSecurityGroup()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRequiredPasswordStrength operation/method
 */
if ($get->GetRequiredPasswordStrength(new \Brainloop\Soap\StructType\GetRequiredPasswordStrength()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMinPasswordLength operation/method
 */
if ($get->GetMinPasswordLength(new \Brainloop\Soap\StructType\GetMinPasswordLength()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDRCs operation/method
 */
if ($get->GetDRCs(new \Brainloop\Soap\StructType\GetDRCs()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDRPermissionsForUser operation/method
 */
if ($get->GetDRPermissionsForUser(new \Brainloop\Soap\StructType\GetDRPermissionsForUser()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDRCsByPermissions operation/method
 */
if ($get->GetDRCsByPermissions(new \Brainloop\Soap\StructType\GetDRCsByPermissions()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserProperties operation/method
 */
if ($get->GetUserProperties(new \Brainloop\Soap\StructType\GetUserProperties()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProfile operation/method
 */
if ($get->GetProfile(new \Brainloop\Soap\StructType\GetProfile()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPasswordExpirationDate operation/method
 */
if ($get->GetPasswordExpirationDate(new \Brainloop\Soap\StructType\GetPasswordExpirationDate()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDrcUsers operation/method
 */
if ($get->GetDrcUsers(new \Brainloop\Soap\StructType\GetDrcUsers()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAvailableTemplates operation/method
 */
if ($get->GetAvailableTemplates(new \Brainloop\Soap\StructType\GetAvailableTemplates()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDrcSecurityGroups operation/method
 */
if ($get->GetDrcSecurityGroups(new \Brainloop\Soap\StructType\GetDrcSecurityGroups()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDrcUser operation/method
 */
if ($get->GetDrcUser(new \Brainloop\Soap\StructType\GetDrcUser()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAvailableDRCProperties operation/method
 */
if ($get->GetAvailableDRCProperties(new \Brainloop\Soap\StructType\GetAvailableDRCProperties()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDRC operation/method
 */
if ($get->GetDRC(new \Brainloop\Soap\StructType\GetDRC()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOngoingAudits operation/method
 */
if ($get->GetOngoingAudits(new \Brainloop\Soap\StructType\GetOngoingAudits()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAuditComments operation/method
 */
if ($get->GetAuditComments(new \Brainloop\Soap\StructType\GetAuditComments()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCompletedAudits operation/method
 */
if ($get->GetCompletedAudits(new \Brainloop\Soap\StructType\GetCompletedAudits()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Convert ServiceType
 */
$convert = new \Brainloop\Soap\ServiceType\Convert($options);
/**
 * Sample call for Convert operation/method
 */
if ($convert->Convert(new \Brainloop\Soap\StructType\Convert()) !== false) {
    print_r($convert->getResult());
} else {
    print_r($convert->getLastError());
}
/**
 * Samples for Ping ServiceType
 */
$ping = new \Brainloop\Soap\ServiceType\Ping($options);
/**
 * Sample call for Ping operation/method
 */
if ($ping->Ping(new \Brainloop\Soap\StructType\Ping()) !== false) {
    print_r($ping->getResult());
} else {
    print_r($ping->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \Brainloop\Soap\ServiceType\Send($options);
/**
 * Sample call for SendItems operation/method
 */
if ($send->SendItems(new \Brainloop\Soap\StructType\SendItems()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for SendItem operation/method
 */
if ($send->SendItem(new \Brainloop\Soap\StructType\SendItem()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for SendMessage operation/method
 */
if ($send->SendMessage(new \Brainloop\Soap\StructType\SendMessage()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Brainloop\Soap\ServiceType\Delete($options);
/**
 * Sample call for DeleteItem operation/method
 */
if ($delete->DeleteItem(new \Brainloop\Soap\StructType\DeleteItem()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteAnnotation operation/method
 */
if ($delete->DeleteAnnotation(new \Brainloop\Soap\StructType\DeleteAnnotation()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteSecurityGroup operation/method
 */
if ($delete->DeleteSecurityGroup(new \Brainloop\Soap\StructType\DeleteSecurityGroup()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteDataroom operation/method
 */
if ($delete->DeleteDataroom(new \Brainloop\Soap\StructType\DeleteDataroom()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteUserFromDRC operation/method
 */
if ($delete->DeleteUserFromDRC(new \Brainloop\Soap\StructType\DeleteUserFromDRC()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteDrcDataroom operation/method
 */
if ($delete->DeleteDrcDataroom(new \Brainloop\Soap\StructType\DeleteDrcDataroom()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Destroy ServiceType
 */
$destroy = new \Brainloop\Soap\ServiceType\Destroy($options);
/**
 * Sample call for DestroyItem operation/method
 */
if ($destroy->DestroyItem(new \Brainloop\Soap\StructType\DestroyItem()) !== false) {
    print_r($destroy->getResult());
} else {
    print_r($destroy->getLastError());
}
/**
 * Samples for Restore ServiceType
 */
$restore = new \Brainloop\Soap\ServiceType\Restore($options);
/**
 * Sample call for RestoreDeletedItem operation/method
 */
if ($restore->RestoreDeletedItem(new \Brainloop\Soap\StructType\RestoreDeletedItem()) !== false) {
    print_r($restore->getResult());
} else {
    print_r($restore->getLastError());
}
/**
 * Samples for Move ServiceType
 */
$move = new \Brainloop\Soap\ServiceType\Move($options);
/**
 * Sample call for MoveItem operation/method
 */
if ($move->MoveItem(new \Brainloop\Soap\StructType\MoveItem()) !== false) {
    print_r($move->getResult());
} else {
    print_r($move->getLastError());
}
/**
 * Samples for Publish ServiceType
 */
$publish = new \Brainloop\Soap\ServiceType\Publish($options);
/**
 * Sample call for PublishDocument operation/method
 */
if ($publish->PublishDocument(new \Brainloop\Soap\StructType\PublishDocument()) !== false) {
    print_r($publish->getResult());
} else {
    print_r($publish->getLastError());
}
/**
 * Samples for Copy ServiceType
 */
$copy = new \Brainloop\Soap\ServiceType\Copy($options);
/**
 * Sample call for CopyItem operation/method
 */
if ($copy->CopyItem(new \Brainloop\Soap\StructType\CopyItem()) !== false) {
    print_r($copy->getResult());
} else {
    print_r($copy->getLastError());
}
/**
 * Samples for Rename ServiceType
 */
$rename = new \Brainloop\Soap\ServiceType\Rename($options);
/**
 * Sample call for RenameItem operation/method
 */
if ($rename->RenameItem(new \Brainloop\Soap\StructType\RenameItem()) !== false) {
    print_r($rename->getResult());
} else {
    print_r($rename->getLastError());
}
/**
 * Samples for Add ServiceType
 */
$add = new \Brainloop\Soap\ServiceType\Add($options);
/**
 * Sample call for AddToWatchlist operation/method
 */
if ($add->AddToWatchlist(new \Brainloop\Soap\StructType\AddToWatchlist()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddCollaborators operation/method
 */
if ($add->AddCollaborators(new \Brainloop\Soap\StructType\AddCollaborators()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddUsersToSecurityGroup operation/method
 */
if ($add->AddUsersToSecurityGroup(new \Brainloop\Soap\StructType\AddUsersToSecurityGroup()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddDRCGroupsToSecurityGroup operation/method
 */
if ($add->AddDRCGroupsToSecurityGroup(new \Brainloop\Soap\StructType\AddDRCGroupsToSecurityGroup()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddUsersToDrcSecurityGroup operation/method
 */
if ($add->AddUsersToDrcSecurityGroup(new \Brainloop\Soap\StructType\AddUsersToDrcSecurityGroup()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Samples for Remove ServiceType
 */
$remove = new \Brainloop\Soap\ServiceType\Remove($options);
/**
 * Sample call for RemoveFormWatchlist operation/method
 */
if ($remove->RemoveFormWatchlist(new \Brainloop\Soap\StructType\RemoveFormWatchlist()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveCollaborator operation/method
 */
if ($remove->RemoveCollaborator(new \Brainloop\Soap\StructType\RemoveCollaborator()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveRecipient operation/method
 */
if ($remove->RemoveRecipient(new \Brainloop\Soap\StructType\RemoveRecipient()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveUsersFromSecurityGroup operation/method
 */
if ($remove->RemoveUsersFromSecurityGroup(new \Brainloop\Soap\StructType\RemoveUsersFromSecurityGroup()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveDRCGroupsFromSecurityGroup operation/method
 */
if ($remove->RemoveDRCGroupsFromSecurityGroup(new \Brainloop\Soap\StructType\RemoveDRCGroupsFromSecurityGroup()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveUserFromDataroom operation/method
 */
if ($remove->RemoveUserFromDataroom(new \Brainloop\Soap\StructType\RemoveUserFromDataroom()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveUserFromDataroomAsDRCAdmin operation/method
 */
if ($remove->RemoveUserFromDataroomAsDRCAdmin(new \Brainloop\Soap\StructType\RemoveUserFromDataroomAsDRCAdmin()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveUserFromDRC operation/method
 */
if ($remove->RemoveUserFromDRC(new \Brainloop\Soap\StructType\RemoveUserFromDRC()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveUsersFromDrcSecurityGroup operation/method
 */
if ($remove->RemoveUsersFromDrcSecurityGroup(new \Brainloop\Soap\StructType\RemoveUsersFromDrcSecurityGroup()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \Brainloop\Soap\ServiceType\Set($options);
/**
 * Sample call for SetOwner operation/method
 */
if ($set->SetOwner(new \Brainloop\Soap\StructType\SetOwner()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetSecurityCategory operation/method
 */
if ($set->SetSecurityCategory(new \Brainloop\Soap\StructType\SetSecurityCategory()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetPermissionsForUser operation/method
 */
if ($set->SetPermissionsForUser(new \Brainloop\Soap\StructType\SetPermissionsForUser()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetPermissionsForGroup operation/method
 */
if ($set->SetPermissionsForGroup(new \Brainloop\Soap\StructType\SetPermissionsForGroup()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetItemProperties operation/method
 */
if ($set->SetItemProperties(new \Brainloop\Soap\StructType\SetItemProperties()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetDRAttribute operation/method
 */
if ($set->SetDRAttribute(new \Brainloop\Soap\StructType\SetDRAttribute()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetContributorStatus operation/method
 */
if ($set->SetContributorStatus(new \Brainloop\Soap\StructType\SetContributorStatus()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetVoterStatus operation/method
 */
if ($set->SetVoterStatus(new \Brainloop\Soap\StructType\SetVoterStatus()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetParticipantStatus operation/method
 */
if ($set->SetParticipantStatus(new \Brainloop\Soap\StructType\SetParticipantStatus()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetItemNotification operation/method
 */
if ($set->SetItemNotification(new \Brainloop\Soap\StructType\SetItemNotification()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetDataroomStatus operation/method
 */
if ($set->SetDataroomStatus(new \Brainloop\Soap\StructType\SetDataroomStatus()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetDataroomProperties operation/method
 */
if ($set->SetDataroomProperties(new \Brainloop\Soap\StructType\SetDataroomProperties()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetDRPermissionsForSecurityGroup operation/method
 */
if ($set->SetDRPermissionsForSecurityGroup(new \Brainloop\Soap\StructType\SetDRPermissionsForSecurityGroup()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetDRCPermissionsForSecurityGroup operation/method
 */
if ($set->SetDRCPermissionsForSecurityGroup(new \Brainloop\Soap\StructType\SetDRCPermissionsForSecurityGroup()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetTimeBasedAccess operation/method
 */
if ($set->SetTimeBasedAccess(new \Brainloop\Soap\StructType\SetTimeBasedAccess()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetUserProperties operation/method
 */
if ($set->SetUserProperties(new \Brainloop\Soap\StructType\SetUserProperties()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetDRCProperties operation/method
 */
if ($set->SetDRCProperties(new \Brainloop\Soap\StructType\SetDRCProperties()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \Brainloop\Soap\ServiceType\Create($options);
$create->setSoapHeaderCreateParameters($CreateParameters);
/**
 * Sample call for CreateNewItemVersion operation/method
 */
if ($create->CreateNewItemVersion(new \Brainloop\Soap\StructType\CreateNewItemVersion()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateFolder operation/method
 */
if ($create->CreateFolder(new \Brainloop\Soap\StructType\CreateFolder()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateDocumentCollection operation/method
 */
if ($create->CreateDocumentCollection(new \Brainloop\Soap\StructType\CreateDocumentCollection()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateLinkToItem operation/method
 */
if ($create->CreateLinkToItem(new \Brainloop\Soap\StructType\CreateLinkToItem()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateLinkToExternalURL operation/method
 */
if ($create->CreateLinkToExternalURL(new \Brainloop\Soap\StructType\CreateLinkToExternalURL()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateTask operation/method
 */
if ($create->CreateTask(new \Brainloop\Soap\StructType\CreateTask()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateVote operation/method
 */
if ($create->CreateVote(new \Brainloop\Soap\StructType\CreateVote()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateVoteWithVotingOption operation/method
 */
if ($create->CreateVoteWithVotingOption(new \Brainloop\Soap\StructType\CreateVoteWithVotingOption()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateMilestone operation/method
 */
if ($create->CreateMilestone(new \Brainloop\Soap\StructType\CreateMilestone()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateQuestion operation/method
 */
if ($create->CreateQuestion(new \Brainloop\Soap\StructType\CreateQuestion()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateAnswer operation/method
 */
if ($create->CreateAnswer(new \Brainloop\Soap\StructType\CreateAnswer()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateCalendarEvent operation/method
 */
if ($create->CreateCalendarEvent(new \Brainloop\Soap\StructType\CreateCalendarEvent()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateMailItem operation/method
 */
if ($create->CreateMailItem(new \Brainloop\Soap\StructType\CreateMailItemRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateReview operation/method
 */
if ($create->CreateReview(new \Brainloop\Soap\StructType\CreateReview()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateTextAnnotation operation/method
 */
if ($create->CreateTextAnnotation(new \Brainloop\Soap\StructType\CreateTextAnnotation()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateFreeTextAnnotation operation/method
 */
if ($create->CreateFreeTextAnnotation(new \Brainloop\Soap\StructType\CreateFreeTextAnnotation()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateHighlightAnnotation operation/method
 */
if ($create->CreateHighlightAnnotation(new \Brainloop\Soap\StructType\CreateHighlightAnnotation()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateStrikeoutAnnotation operation/method
 */
if ($create->CreateStrikeoutAnnotation(new \Brainloop\Soap\StructType\CreateStrikeoutAnnotation()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateUnderlineAnnotation operation/method
 */
if ($create->CreateUnderlineAnnotation(new \Brainloop\Soap\StructType\CreateUnderlineAnnotation()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateInkAnnotation operation/method
 */
if ($create->CreateInkAnnotation(new \Brainloop\Soap\StructType\CreateInkAnnotation()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateAnnotations operation/method
 */
if ($create->CreateAnnotations(new \Brainloop\Soap\StructType\CreateAnnotations()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateAnnotation operation/method
 */
if ($create->CreateAnnotation(new \Brainloop\Soap\StructType\CreateAnnotation()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateSecurityGroup operation/method
 */
if ($create->CreateSecurityGroup(new \Brainloop\Soap\StructType\CreateSecurityGroup()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateDataroom operation/method
 */
if ($create->CreateDataroom(new \Brainloop\Soap\StructType\CreateDataroom()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateDataroomWithParameters operation/method
 */
if ($create->CreateDataroomWithParameters(new \Brainloop\Soap\StructType\CreateDataroomWithParameters()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateDataroomWithOwner operation/method
 */
if ($create->CreateDataroomWithOwner(new \Brainloop\Soap\StructType\CreateDataroomWithOwner()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateTemplate operation/method
 */
if ($create->CreateTemplate(new \Brainloop\Soap\StructType\CreateTemplate()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateDrcSecurityGroup operation/method
 */
if ($create->CreateDrcSecurityGroup(new \Brainloop\Soap\StructType\CreateDrcSecurityGroup()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Freeze ServiceType
 */
$freeze = new \Brainloop\Soap\ServiceType\Freeze($options);
/**
 * Sample call for FreezeItem operation/method
 */
if ($freeze->FreezeItem(new \Brainloop\Soap\StructType\FreezeItem()) !== false) {
    print_r($freeze->getResult());
} else {
    print_r($freeze->getLastError());
}
/**
 * Samples for Check ServiceType
 */
$check = new \Brainloop\Soap\ServiceType\Check($options);
/**
 * Sample call for CheckFileNameExists operation/method
 */
if ($check->CheckFileNameExists(new \Brainloop\Soap\StructType\CheckFileNameExists()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for CheckOutDocument operation/method
 */
if ($check->CheckOutDocument(new \Brainloop\Soap\StructType\CheckOutDocument()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for CheckInDocument operation/method
 */
if ($check->CheckInDocument(new \Brainloop\Soap\StructType\CheckInDocument()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Samples for Cancel ServiceType
 */
$cancel = new \Brainloop\Soap\ServiceType\Cancel($options);
/**
 * Sample call for CancelDocumentCheckOut operation/method
 */
if ($cancel->CancelDocumentCheckOut(new \Brainloop\Soap\StructType\CancelDocumentCheckOut()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \Brainloop\Soap\ServiceType\Update($options);
/**
 * Sample call for UpdateDocumentCollection operation/method
 */
if ($update->UpdateDocumentCollection(new \Brainloop\Soap\StructType\UpdateDocumentCollection()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateAnnotation operation/method
 */
if ($update->UpdateAnnotation(new \Brainloop\Soap\StructType\UpdateAnnotation()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Has ServiceType
 */
$has = new \Brainloop\Soap\ServiceType\Has($options);
/**
 * Sample call for HasPermissionsForUser operation/method
 */
if ($has->HasPermissionsForUser(new \Brainloop\Soap\StructType\HasPermissionsForUser()) !== false) {
    print_r($has->getResult());
} else {
    print_r($has->getLastError());
}
/**
 * Sample call for HasPermissionsForGroup operation/method
 */
if ($has->HasPermissionsForGroup(new \Brainloop\Soap\StructType\HasPermissionsForGroup()) !== false) {
    print_r($has->getResult());
} else {
    print_r($has->getLastError());
}
/**
 * Sample call for HasDRPermissionsForUser operation/method
 */
if ($has->HasDRPermissionsForUser(new \Brainloop\Soap\StructType\HasDRPermissionsForUser()) !== false) {
    print_r($has->getResult());
} else {
    print_r($has->getLastError());
}
/**
 * Samples for Can ServiceType
 */
$can = new \Brainloop\Soap\ServiceType\Can($options);
/**
 * Sample call for CanSendItem operation/method
 */
if ($can->CanSendItem(new \Brainloop\Soap\StructType\CanSendItem()) !== false) {
    print_r($can->getResult());
} else {
    print_r($can->getLastError());
}
/**
 * Samples for Accept ServiceType
 */
$accept = new \Brainloop\Soap\ServiceType\Accept($options);
/**
 * Sample call for AcceptTermsAndConditions operation/method
 */
if ($accept->AcceptTermsAndConditions(new \Brainloop\Soap\StructType\AcceptTermsAndConditions()) !== false) {
    print_r($accept->getResult());
} else {
    print_r($accept->getLastError());
}
/**
 * Samples for Unset ServiceType
 */
$unset = new \Brainloop\Soap\ServiceType\_Unset($options);
/**
 * Sample call for UnsetDRAttribute operation/method
 */
if ($unset->UnsetDRAttribute(new \Brainloop\Soap\StructType\UnsetDRAttribute()) !== false) {
    print_r($unset->getResult());
} else {
    print_r($unset->getLastError());
}
/**
 * Samples for Sync ServiceType
 */
$sync = new \Brainloop\Soap\ServiceType\Sync($options);
/**
 * Sample call for Sync operation/method
 */
if ($sync->Sync(new \Brainloop\Soap\StructType\Sync()) !== false) {
    print_r($sync->getResult());
} else {
    print_r($sync->getLastError());
}
/**
 * Samples for Release ServiceType
 */
$release = new \Brainloop\Soap\ServiceType\Release($options);
/**
 * Sample call for ReleaseQuestion operation/method
 */
if ($release->ReleaseQuestion(new \Brainloop\Soap\StructType\ReleaseQuestion()) !== false) {
    print_r($release->getResult());
} else {
    print_r($release->getLastError());
}
/**
 * Samples for Forward ServiceType
 */
$forward = new \Brainloop\Soap\ServiceType\Forward($options);
/**
 * Sample call for ForwardQuestion operation/method
 */
if ($forward->ForwardQuestion(new \Brainloop\Soap\StructType\ForwardQuestion()) !== false) {
    print_r($forward->getResult());
} else {
    print_r($forward->getLastError());
}
/**
 * Samples for Reverse ServiceType
 */
$reverse = new \Brainloop\Soap\ServiceType\Reverse($options);
/**
 * Sample call for ReverseQuestion operation/method
 */
if ($reverse->ReverseQuestion(new \Brainloop\Soap\StructType\ReverseQuestion()) !== false) {
    print_r($reverse->getResult());
} else {
    print_r($reverse->getLastError());
}
/**
 * Samples for Reassign ServiceType
 */
$reassign = new \Brainloop\Soap\ServiceType\Reassign($options);
/**
 * Sample call for ReassignQuestion operation/method
 */
if ($reassign->ReassignQuestion(new \Brainloop\Soap\StructType\ReassignQuestion()) !== false) {
    print_r($reassign->getResult());
} else {
    print_r($reassign->getLastError());
}
/**
 * Samples for Share ServiceType
 */
$share = new \Brainloop\Soap\ServiceType\Share($options);
/**
 * Sample call for ShareReview operation/method
 */
if ($share->ShareReview(new \Brainloop\Soap\StructType\ShareReview()) !== false) {
    print_r($share->getResult());
} else {
    print_r($share->getLastError());
}
/**
 * Samples for Execute ServiceType
 */
$execute = new \Brainloop\Soap\ServiceType\Execute($options);
/**
 * Sample call for ExecuteReport operation/method
 */
if ($execute->ExecuteReport(new \Brainloop\Soap\StructType\ExecuteReport()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for ExecuteAdHocSearch operation/method
 */
if ($execute->ExecuteAdHocSearch(new \Brainloop\Soap\StructType\ExecuteAdHocSearch()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Sample call for ExecuteSavedSearch operation/method
 */
if ($execute->ExecuteSavedSearch(new \Brainloop\Soap\StructType\ExecuteSavedSearch()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Samples for Invite ServiceType
 */
$invite = new \Brainloop\Soap\ServiceType\Invite($options);
/**
 * Sample call for InviteUsersWithEmail operation/method
 */
if ($invite->InviteUsersWithEmail(new \Brainloop\Soap\StructType\InviteUsersWithEmail()) !== false) {
    print_r($invite->getResult());
} else {
    print_r($invite->getLastError());
}
/**
 * Sample call for InviteUsers operation/method
 */
if ($invite->InviteUsers(new \Brainloop\Soap\StructType\InviteUsers()) !== false) {
    print_r($invite->getResult());
} else {
    print_r($invite->getLastError());
}
/**
 * Sample call for InviteUsersWithEmailToDrc operation/method
 */
if ($invite->InviteUsersWithEmailToDrc(new \Brainloop\Soap\StructType\InviteUsersWithEmailToDrc()) !== false) {
    print_r($invite->getResult());
} else {
    print_r($invite->getLastError());
}
/**
 * Samples for Change ServiceType
 */
$change = new \Brainloop\Soap\ServiceType\Change($options);
/**
 * Sample call for ChangePassword operation/method
 */
if ($change->ChangePassword(new \Brainloop\Soap\StructType\ChangePassword()) !== false) {
    print_r($change->getResult());
} else {
    print_r($change->getLastError());
}
/**
 * Sample call for ChangeUserStatusInDRC operation/method
 */
if ($change->ChangeUserStatusInDRC(new \Brainloop\Soap\StructType\ChangeUserStatusInDRC()) !== false) {
    print_r($change->getResult());
} else {
    print_r($change->getLastError());
}
/**
 * Samples for Audit ServiceType
 */
$audit = new \Brainloop\Soap\ServiceType\Audit($options);
/**
 * Sample call for AuditCompleted operation/method
 */
if ($audit->AuditCompleted(new \Brainloop\Soap\StructType\AuditCompleted()) !== false) {
    print_r($audit->getResult());
} else {
    print_r($audit->getLastError());
}
/**
 * Sample call for AuditAddComment operation/method
 */
if ($audit->AuditAddComment(new \Brainloop\Soap\StructType\AuditAddComment()) !== false) {
    print_r($audit->getResult());
} else {
    print_r($audit->getLastError());
}
/**
 * Samples for Register ServiceType
 */
$register = new \Brainloop\Soap\ServiceType\Register($options);
/**
 * Sample call for RegisterUser operation/method
 */
if ($register->RegisterUser(new \Brainloop\Soap\StructType\RegisterUser()) !== false) {
    print_r($register->getResult());
} else {
    print_r($register->getLastError());
}
/**
 * Samples for Confirm ServiceType
 */
$confirm = new \Brainloop\Soap\ServiceType\Confirm($options);
/**
 * Sample call for ConfirmMobileChange operation/method
 */
if ($confirm->ConfirmMobileChange(new \Brainloop\Soap\StructType\ConfirmMobileChange()) !== false) {
    print_r($confirm->getResult());
} else {
    print_r($confirm->getLastError());
}
/**
 * Sample call for ConfirmMobileDeletion operation/method
 */
if ($confirm->ConfirmMobileDeletion(new \Brainloop\Soap\StructType\ConfirmMobileDeletion()) !== false) {
    print_r($confirm->getResult());
} else {
    print_r($confirm->getLastError());
}
/**
 * Samples for Open ServiceType
 */
$open = new \Brainloop\Soap\ServiceType\Open($options);
/**
 * Sample call for OpenDrcDataroom operation/method
 */
if ($open->OpenDrcDataroom(new \Brainloop\Soap\StructType\OpenDrcDataroom()) !== false) {
    print_r($open->getResult());
} else {
    print_r($open->getLastError());
}
/**
 * Samples for Close ServiceType
 */
$close = new \Brainloop\Soap\ServiceType\Close($options);
/**
 * Sample call for CloseDrcDataroom operation/method
 */
if ($close->CloseDrcDataroom(new \Brainloop\Soap\StructType\CloseDrcDataroom()) !== false) {
    print_r($close->getResult());
} else {
    print_r($close->getLastError());
}
/**
 * Samples for Revoke ServiceType
 */
$revoke = new \Brainloop\Soap\ServiceType\Revoke($options);
/**
 * Sample call for RevokeAllTokensForUserInDrc operation/method
 */
if ($revoke->RevokeAllTokensForUserInDrc(new \Brainloop\Soap\StructType\RevokeAllTokensForUserInDrc()) !== false) {
    print_r($revoke->getResult());
} else {
    print_r($revoke->getLastError());
}
