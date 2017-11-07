<?php

namespace Brainloop\Soap\EnumType;

/**
 * This class stands for PermissionBits EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PermissionBits
 * @subpackage Enumerations
 * @generated on Tue, 07 Nov 17 12 44
 */
class PermissionBits
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CreateSubObject'
     * @return string 'CreateSubObject'
     */
    const VALUE_CREATE_SUB_OBJECT = 'CreateSubObject';
    /**
     * Constant for value 'SystemMKOps'
     * @return string 'SystemMKOps'
     */
    const VALUE_SYSTEM_MKOPS = 'SystemMKOps';
    /**
     * Constant for value 'SystemManageDRCTemplates'
     * @return string 'SystemManageDRCTemplates'
     */
    const VALUE_SYSTEM_MANAGE_DRCTEMPLATES = 'SystemManageDRCTemplates';
    /**
     * Constant for value 'Modify'
     * @return string 'Modify'
     */
    const VALUE_MODIFY = 'Modify';
    /**
     * Constant for value 'View'
     * @return string 'View'
     */
    const VALUE_VIEW = 'View';
    /**
     * Constant for value 'ChangePermissions'
     * @return string 'ChangePermissions'
     */
    const VALUE_CHANGE_PERMISSIONS = 'ChangePermissions';
    /**
     * Constant for value 'Delete'
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Constant for value 'SystemViewDatarooms'
     * @return string 'SystemViewDatarooms'
     */
    const VALUE_SYSTEM_VIEW_DATAROOMS = 'SystemViewDatarooms';
    /**
     * Constant for value 'SystemViewUsers'
     * @return string 'SystemViewUsers'
     */
    const VALUE_SYSTEM_VIEW_USERS = 'SystemViewUsers';
    /**
     * Constant for value 'SystemViewConfig'
     * @return string 'SystemViewConfig'
     */
    const VALUE_SYSTEM_VIEW_CONFIG = 'SystemViewConfig';
    /**
     * Constant for value 'DataroomAdministration'
     * @return string 'DataroomAdministration'
     */
    const VALUE_DATAROOM_ADMINISTRATION = 'DataroomAdministration';
    /**
     * Constant for value 'CreateDataroom'
     * @return string 'CreateDataroom'
     */
    const VALUE_CREATE_DATAROOM = 'CreateDataroom';
    /**
     * Constant for value 'CreateTemplate'
     * @return string 'CreateTemplate'
     */
    const VALUE_CREATE_TEMPLATE = 'CreateTemplate';
    /**
     * Constant for value 'DataroomInviteUsersInOwnGroup'
     * @return string 'DataroomInviteUsersInOwnGroup'
     */
    const VALUE_DATAROOM_INVITE_USERS_IN_OWN_GROUP = 'DataroomInviteUsersInOwnGroup';
    /**
     * Constant for value 'DataroomInviteUsersInAnyGroup'
     * @return string 'DataroomInviteUsersInAnyGroup'
     */
    const VALUE_DATAROOM_INVITE_USERS_IN_ANY_GROUP = 'DataroomInviteUsersInAnyGroup';
    /**
     * Constant for value 'DataroomViewDestroyedObjects'
     * @return string 'DataroomViewDestroyedObjects'
     */
    const VALUE_DATAROOM_VIEW_DESTROYED_OBJECTS = 'DataroomViewDestroyedObjects';
    /**
     * Constant for value 'DocumentDownloadOriginal'
     * @return string 'DocumentDownloadOriginal'
     */
    const VALUE_DOCUMENT_DOWNLOAD_ORIGINAL = 'DocumentDownloadOriginal';
    /**
     * Constant for value 'DocumentDownloadBrainmarked'
     * @return string 'DocumentDownloadBrainmarked'
     */
    const VALUE_DOCUMENT_DOWNLOAD_BRAINMARKED = 'DocumentDownloadBrainmarked';
    /**
     * Constant for value 'DataroomSubmitQuestion'
     * @return string 'DataroomSubmitQuestion'
     */
    const VALUE_DATAROOM_SUBMIT_QUESTION = 'DataroomSubmitQuestion';
    /**
     * Constant for value 'Versioning'
     * @return string 'Versioning'
     */
    const VALUE_VERSIONING = 'Versioning';
    /**
     * Constant for value 'ModifyOrder'
     * @return string 'ModifyOrder'
     */
    const VALUE_MODIFY_ORDER = 'ModifyOrder';
    /**
     * Constant for value 'DataroomViewPermissions'
     * @return string 'DataroomViewPermissions'
     */
    const VALUE_DATAROOM_VIEW_PERMISSIONS = 'DataroomViewPermissions';
    /**
     * Constant for value 'DataroomViewHistory'
     * @return string 'DataroomViewHistory'
     */
    const VALUE_DATAROOM_VIEW_HISTORY = 'DataroomViewHistory';
    /**
     * Constant for value 'DataroomViewUsersInAnyGroup'
     * @return string 'DataroomViewUsersInAnyGroup'
     */
    const VALUE_DATAROOM_VIEW_USERS_IN_ANY_GROUP = 'DataroomViewUsersInAnyGroup';
    /**
     * Constant for value 'DataroomViewUsersInOwnGroup'
     * @return string 'DataroomViewUsersInOwnGroup'
     */
    const VALUE_DATAROOM_VIEW_USERS_IN_OWN_GROUP = 'DataroomViewUsersInOwnGroup';
    /**
     * Constant for value 'SystemViewDRC'
     * @return string 'SystemViewDRC'
     */
    const VALUE_SYSTEM_VIEW_DRC = 'SystemViewDRC';
    /**
     * Constant for value 'DRCAdministration'
     * @return string 'DRCAdministration'
     */
    const VALUE_DRCADMINISTRATION = 'DRCAdministration';
    /**
     * Constant for value 'SystemManageGroups'
     * @return string 'SystemManageGroups'
     */
    const VALUE_SYSTEM_MANAGE_GROUPS = 'SystemManageGroups';
    /**
     * Constant for value 'SystemCreateUsers'
     * @return string 'SystemCreateUsers'
     */
    const VALUE_SYSTEM_CREATE_USERS = 'SystemCreateUsers';
    /**
     * Constant for value 'SystemModifyUsers'
     * @return string 'SystemModifyUsers'
     */
    const VALUE_SYSTEM_MODIFY_USERS = 'SystemModifyUsers';
    /**
     * Constant for value 'SystemDeleteUsers'
     * @return string 'SystemDeleteUsers'
     */
    const VALUE_SYSTEM_DELETE_USERS = 'SystemDeleteUsers';
    /**
     * Constant for value 'SystemModifyDataroom'
     * @return string 'SystemModifyDataroom'
     */
    const VALUE_SYSTEM_MODIFY_DATAROOM = 'SystemModifyDataroom';
    /**
     * Constant for value 'SystemDeleteDataroom'
     * @return string 'SystemDeleteDataroom'
     */
    const VALUE_SYSTEM_DELETE_DATAROOM = 'SystemDeleteDataroom';
    /**
     * Constant for value 'SystemCreateDRC'
     * @return string 'SystemCreateDRC'
     */
    const VALUE_SYSTEM_CREATE_DRC = 'SystemCreateDRC';
    /**
     * Constant for value 'SystemModifyDRC'
     * @return string 'SystemModifyDRC'
     */
    const VALUE_SYSTEM_MODIFY_DRC = 'SystemModifyDRC';
    /**
     * Constant for value 'SystemDeleteDRC'
     * @return string 'SystemDeleteDRC'
     */
    const VALUE_SYSTEM_DELETE_DRC = 'SystemDeleteDRC';
    /**
     * Constant for value 'SystemDebug'
     * @return string 'SystemDebug'
     */
    const VALUE_SYSTEM_DEBUG = 'SystemDebug';
    /**
     * Constant for value 'SystemCustomization'
     * @return string 'SystemCustomization'
     */
    const VALUE_SYSTEM_CUSTOMIZATION = 'SystemCustomization';
    /**
     * Constant for value 'SystemStatistics'
     * @return string 'SystemStatistics'
     */
    const VALUE_SYSTEM_STATISTICS = 'SystemStatistics';
    /**
     * Constant for value 'SystemOperations'
     * @return string 'SystemOperations'
     */
    const VALUE_SYSTEM_OPERATIONS = 'SystemOperations';
    /**
     * Constant for value 'SystemModifyConfig'
     * @return string 'SystemModifyConfig'
     */
    const VALUE_SYSTEM_MODIFY_CONFIG = 'SystemModifyConfig';
    /**
     * Constant for value 'DataroomQandAGatekeeper'
     * @return string 'DataroomQandAGatekeeper'
     */
    const VALUE_DATAROOM_QAND_AGATEKEEPER = 'DataroomQandAGatekeeper';
    /**
     * Constant for value 'DataroomQandAModify'
     * @return string 'DataroomQandAModify'
     */
    const VALUE_DATAROOM_QAND_AMODIFY = 'DataroomQandAModify';
    /**
     * Constant for value 'DataroomDeleteItemsPermanently'
     * @return string 'DataroomDeleteItemsPermanently'
     */
    const VALUE_DATAROOM_DELETE_ITEMS_PERMANENTLY = 'DataroomDeleteItemsPermanently';
    /**
     * Constant for value 'Reporting'
     * @return string 'Reporting'
     */
    const VALUE_REPORTING = 'Reporting';
    /**
     * Constant for value 'DataroomAllowServerSideAnnotations'
     * @return string 'DataroomAllowServerSideAnnotations'
     */
    const VALUE_DATAROOM_ALLOW_SERVER_SIDE_ANNOTATIONS = 'DataroomAllowServerSideAnnotations';
    /**
     * Constant for value 'SystemOperationsViewOnly'
     * @return string 'SystemOperationsViewOnly'
     */
    const VALUE_SYSTEM_OPERATIONS_VIEW_ONLY = 'SystemOperationsViewOnly';
    /**
     * Constant for value 'SystemAppearanceViewOnly'
     * @return string 'SystemAppearanceViewOnly'
     */
    const VALUE_SYSTEM_APPEARANCE_VIEW_ONLY = 'SystemAppearanceViewOnly';
    /**
     * Constant for value 'SystemManageBackups'
     * @return string 'SystemManageBackups'
     */
    const VALUE_SYSTEM_MANAGE_BACKUPS = 'SystemManageBackups';
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
     * @uses self::VALUE_CREATE_SUB_OBJECT
     * @uses self::VALUE_SYSTEM_MKOPS
     * @uses self::VALUE_SYSTEM_MANAGE_DRCTEMPLATES
     * @uses self::VALUE_MODIFY
     * @uses self::VALUE_VIEW
     * @uses self::VALUE_CHANGE_PERMISSIONS
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_SYSTEM_VIEW_DATAROOMS
     * @uses self::VALUE_SYSTEM_VIEW_USERS
     * @uses self::VALUE_SYSTEM_VIEW_CONFIG
     * @uses self::VALUE_DATAROOM_ADMINISTRATION
     * @uses self::VALUE_CREATE_DATAROOM
     * @uses self::VALUE_CREATE_TEMPLATE
     * @uses self::VALUE_DATAROOM_INVITE_USERS_IN_OWN_GROUP
     * @uses self::VALUE_DATAROOM_INVITE_USERS_IN_ANY_GROUP
     * @uses self::VALUE_DATAROOM_VIEW_DESTROYED_OBJECTS
     * @uses self::VALUE_DOCUMENT_DOWNLOAD_ORIGINAL
     * @uses self::VALUE_DOCUMENT_DOWNLOAD_BRAINMARKED
     * @uses self::VALUE_DATAROOM_SUBMIT_QUESTION
     * @uses self::VALUE_VERSIONING
     * @uses self::VALUE_MODIFY_ORDER
     * @uses self::VALUE_DATAROOM_VIEW_PERMISSIONS
     * @uses self::VALUE_DATAROOM_VIEW_HISTORY
     * @uses self::VALUE_DATAROOM_VIEW_USERS_IN_ANY_GROUP
     * @uses self::VALUE_DATAROOM_VIEW_USERS_IN_OWN_GROUP
     * @uses self::VALUE_SYSTEM_VIEW_DRC
     * @uses self::VALUE_DRCADMINISTRATION
     * @uses self::VALUE_SYSTEM_MANAGE_GROUPS
     * @uses self::VALUE_SYSTEM_CREATE_USERS
     * @uses self::VALUE_SYSTEM_MODIFY_USERS
     * @uses self::VALUE_SYSTEM_DELETE_USERS
     * @uses self::VALUE_SYSTEM_MODIFY_DATAROOM
     * @uses self::VALUE_SYSTEM_DELETE_DATAROOM
     * @uses self::VALUE_SYSTEM_CREATE_DRC
     * @uses self::VALUE_SYSTEM_MODIFY_DRC
     * @uses self::VALUE_SYSTEM_DELETE_DRC
     * @uses self::VALUE_SYSTEM_DEBUG
     * @uses self::VALUE_SYSTEM_CUSTOMIZATION
     * @uses self::VALUE_SYSTEM_STATISTICS
     * @uses self::VALUE_SYSTEM_OPERATIONS
     * @uses self::VALUE_SYSTEM_MODIFY_CONFIG
     * @uses self::VALUE_DATAROOM_QAND_AGATEKEEPER
     * @uses self::VALUE_DATAROOM_QAND_AMODIFY
     * @uses self::VALUE_DATAROOM_DELETE_ITEMS_PERMANENTLY
     * @uses self::VALUE_REPORTING
     * @uses self::VALUE_DATAROOM_ALLOW_SERVER_SIDE_ANNOTATIONS
     * @uses self::VALUE_SYSTEM_OPERATIONS_VIEW_ONLY
     * @uses self::VALUE_SYSTEM_APPEARANCE_VIEW_ONLY
     * @uses self::VALUE_SYSTEM_MANAGE_BACKUPS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_CREATE_SUB_OBJECT,
            self::VALUE_SYSTEM_MKOPS,
            self::VALUE_SYSTEM_MANAGE_DRCTEMPLATES,
            self::VALUE_MODIFY,
            self::VALUE_VIEW,
            self::VALUE_CHANGE_PERMISSIONS,
            self::VALUE_DELETE,
            self::VALUE_SYSTEM_VIEW_DATAROOMS,
            self::VALUE_SYSTEM_VIEW_USERS,
            self::VALUE_SYSTEM_VIEW_CONFIG,
            self::VALUE_DATAROOM_ADMINISTRATION,
            self::VALUE_CREATE_DATAROOM,
            self::VALUE_CREATE_TEMPLATE,
            self::VALUE_DATAROOM_INVITE_USERS_IN_OWN_GROUP,
            self::VALUE_DATAROOM_INVITE_USERS_IN_ANY_GROUP,
            self::VALUE_DATAROOM_VIEW_DESTROYED_OBJECTS,
            self::VALUE_DOCUMENT_DOWNLOAD_ORIGINAL,
            self::VALUE_DOCUMENT_DOWNLOAD_BRAINMARKED,
            self::VALUE_DATAROOM_SUBMIT_QUESTION,
            self::VALUE_VERSIONING,
            self::VALUE_MODIFY_ORDER,
            self::VALUE_DATAROOM_VIEW_PERMISSIONS,
            self::VALUE_DATAROOM_VIEW_HISTORY,
            self::VALUE_DATAROOM_VIEW_USERS_IN_ANY_GROUP,
            self::VALUE_DATAROOM_VIEW_USERS_IN_OWN_GROUP,
            self::VALUE_SYSTEM_VIEW_DRC,
            self::VALUE_DRCADMINISTRATION,
            self::VALUE_SYSTEM_MANAGE_GROUPS,
            self::VALUE_SYSTEM_CREATE_USERS,
            self::VALUE_SYSTEM_MODIFY_USERS,
            self::VALUE_SYSTEM_DELETE_USERS,
            self::VALUE_SYSTEM_MODIFY_DATAROOM,
            self::VALUE_SYSTEM_DELETE_DATAROOM,
            self::VALUE_SYSTEM_CREATE_DRC,
            self::VALUE_SYSTEM_MODIFY_DRC,
            self::VALUE_SYSTEM_DELETE_DRC,
            self::VALUE_SYSTEM_DEBUG,
            self::VALUE_SYSTEM_CUSTOMIZATION,
            self::VALUE_SYSTEM_STATISTICS,
            self::VALUE_SYSTEM_OPERATIONS,
            self::VALUE_SYSTEM_MODIFY_CONFIG,
            self::VALUE_DATAROOM_QAND_AGATEKEEPER,
            self::VALUE_DATAROOM_QAND_AMODIFY,
            self::VALUE_DATAROOM_DELETE_ITEMS_PERMANENTLY,
            self::VALUE_REPORTING,
            self::VALUE_DATAROOM_ALLOW_SERVER_SIDE_ANNOTATIONS,
            self::VALUE_SYSTEM_OPERATIONS_VIEW_ONLY,
            self::VALUE_SYSTEM_APPEARANCE_VIEW_ONLY,
            self::VALUE_SYSTEM_MANAGE_BACKUPS,
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
