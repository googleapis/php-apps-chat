<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/space.proto

namespace GPBMetadata\Google\Chat\V1;

class Space
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Chat\V1\HistoryState::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
google/chat/v1/space.protogoogle.chat.v1google/api/resource.proto"google/chat/v1/history_state.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
Space
name (	/
type (2.google.chat.v1.Space.TypeB�A3

space_type
 (2.google.chat.v1.Space.SpaceType
single_user_bot_dm (B�A
threaded (B�A
display_name (	"
external_user_allowed (B�AM
space_threading_state	 (2).google.chat.v1.Space.SpaceThreadingStateB�A9
space_details (2".google.chat.v1.Space.SpaceDetails9
space_history_state (2.google.chat.v1.HistoryState
import_mode (B�A7
create_time (2.google.protobuf.TimestampB�A�A9
last_active_time (2.google.protobuf.TimestampB�A
admin_installed (B�AD
membership_count (2%.google.chat.v1.Space.MembershipCountB�AB
access_settings (2$.google.chat.v1.Space.AccessSettingsB�A
	space_uri (	B�Ad
predefined_permission_settings (22.google.chat.v1.Space.PredefinedPermissionSettingsB�A�AH L
permission_settings (2(.google.chat.v1.Space.PermissionSettingsB�AH @
import_mode_expire_time (2.google.protobuf.TimestampB�A7
SpaceDetails
description (	

guidelines (	U
MembershipCount&
joined_direct_human_user_count (
joined_group_count (�
AccessSettingsK
access_state (20.google.chat.v1.Space.AccessSettings.AccessStateB�A
audience (	B�A"J
AccessState
ACCESS_STATE_UNSPECIFIED 
PRIVATE
DISCOVERABLE�
PermissionSettingsO
manage_members_and_groups (2\'.google.chat.v1.Space.PermissionSettingH �J
modify_space_details (2\'.google.chat.v1.Space.PermissionSettingH�D
toggle_history (2\'.google.chat.v1.Space.PermissionSettingH�H
use_at_mention_all (2\'.google.chat.v1.Space.PermissionSettingH�A
manage_apps (2\'.google.chat.v1.Space.PermissionSettingH�E
manage_webhooks (2\'.google.chat.v1.Space.PermissionSettingH�H
post_messages (2\'.google.chat.v1.Space.PermissionSettingB�AH�D
reply_messages (2\'.google.chat.v1.Space.PermissionSettingH�B
_manage_members_and_groupsB
_modify_space_detailsB
_toggle_historyB
_use_at_mention_allB
_manage_appsB
_manage_webhooksB
_post_messagesB
_reply_messagesF
PermissionSetting
managers_allowed (
members_allowed (".
Type
TYPE_UNSPECIFIED 
ROOM
DM"V
	SpaceType
SPACE_TYPE_UNSPECIFIED 	
SPACE

GROUP_CHAT
DIRECT_MESSAGE"�
SpaceThreadingState%
!SPACE_THREADING_STATE_UNSPECIFIED 
THREADED_MESSAGES
GROUPED_MESSAGES
UNTHREADED_MESSAGES"
PredefinedPermissionSettings.
*PREDEFINED_PERMISSION_SETTINGS_UNSPECIFIED 
COLLABORATION_SPACE
ANNOUNCEMENT_SPACE:.�A+
chat.googleapis.com/Spacespaces/{space}B
space_permission_settings"X
CreateSpaceRequest)
space (2.google.chat.v1.SpaceB�A

request_id (	B�A"Y
ListSpacesRequest
	page_size (B�A

page_token (	B�A
filter (	B�A"T
ListSpacesResponse%
spaces (2.google.chat.v1.Space
next_page_token (	"\\
GetSpaceRequest/
name (	B!�A�A
chat.googleapis.com/Space
use_admin_access ("-
FindDirectMessageRequest
name (	B�A"�
UpdateSpaceRequest)
space (2.google.chat.v1.SpaceB�A/
update_mask (2.google.protobuf.FieldMask
use_admin_access ("�
SearchSpacesRequest
use_admin_access (
	page_size (

page_token (	
query (	B�A
order_by (	B�A"j
SearchSpacesResponse%
spaces (2.google.chat.v1.Space
next_page_token (	

total_size ("_
DeleteSpaceRequest/
name (	B!�A�A
chat.googleapis.com/Space
use_admin_access ("M
CompleteImportSpaceRequest/
name (	B!�A�A
chat.googleapis.com/Space"C
CompleteImportSpaceResponse$
space (2.google.chat.v1.SpaceB�
com.google.chat.v1B
SpaceProtoPZ,cloud.google.com/go/chat/apiv1/chatpb;chatpb�DYNAPIProto�Google.Apps.Chat.V1�Google\\Apps\\Chat\\V1�Google::Apps::Chat::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

