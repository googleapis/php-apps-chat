<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/space_event.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An event that represents a change or activity in a Google Chat space. To
 * learn more, see [Work with events from Google
 * Chat](https://developers.google.com/workspace/chat/events-overview).
 *
 * Generated from protobuf message <code>google.chat.v1.SpaceEvent</code>
 */
class SpaceEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the space event.
     * Format: `spaces/{space}/spaceEvents/{spaceEvent}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Time when the event occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp event_time = 3;</code>
     */
    protected $event_time = null;
    /**
     * Type of space event. Each event type has a batch version, which
     * represents multiple instances of the event type that occur in a short
     * period of time. For `spaceEvents.list()` requests, omit batch event types
     * in your query filter. By default, the server returns both event type and
     * its batch version.
     * Supported event types for
     * [messages](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.messages):
     *    * New message: `google.workspace.chat.message.v1.created`
     *    * Updated message: `google.workspace.chat.message.v1.updated`
     *    * Deleted message: `google.workspace.chat.message.v1.deleted`
     *    * Multiple new messages: `google.workspace.chat.message.v1.batchCreated`
     *    * Multiple updated messages:
     *    `google.workspace.chat.message.v1.batchUpdated`
     *    * Multiple deleted messages:
     *    `google.workspace.chat.message.v1.batchDeleted`
     * Supported event types for
     * [memberships](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.members):
     *   * New membership: `google.workspace.chat.membership.v1.created`
     *   * Updated membership: `google.workspace.chat.membership.v1.updated`
     *   * Deleted membership: `google.workspace.chat.membership.v1.deleted`
     *   * Multiple new memberships:
     *   `google.workspace.chat.membership.v1.batchCreated`
     *   * Multiple updated memberships:
     *   `google.workspace.chat.membership.v1.batchUpdated`
     *   * Multiple deleted memberships:
     *   `google.workspace.chat.membership.v1.batchDeleted`
     * Supported event types for
     * [reactions](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.messages.reactions):
     *   * New reaction: `google.workspace.chat.reaction.v1.created`
     *   * Deleted reaction: `google.workspace.chat.reaction.v1.deleted`
     *   * Multiple new reactions:
     *   `google.workspace.chat.reaction.v1.batchCreated`
     *   * Multiple deleted reactions:
     *   `google.workspace.chat.reaction.v1.batchDeleted`
     * Supported event types about the
     * [space](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces):
     *   * Updated space: `google.workspace.chat.space.v1.updated`
     *   * Multiple space updates: `google.workspace.chat.space.v1.batchUpdated`
     *
     * Generated from protobuf field <code>string event_type = 6;</code>
     */
    protected $event_type = '';
    protected $payload;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name of the space event.
     *           Format: `spaces/{space}/spaceEvents/{spaceEvent}`
     *     @type \Google\Protobuf\Timestamp $event_time
     *           Time when the event occurred.
     *     @type string $event_type
     *           Type of space event. Each event type has a batch version, which
     *           represents multiple instances of the event type that occur in a short
     *           period of time. For `spaceEvents.list()` requests, omit batch event types
     *           in your query filter. By default, the server returns both event type and
     *           its batch version.
     *           Supported event types for
     *           [messages](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.messages):
     *              * New message: `google.workspace.chat.message.v1.created`
     *              * Updated message: `google.workspace.chat.message.v1.updated`
     *              * Deleted message: `google.workspace.chat.message.v1.deleted`
     *              * Multiple new messages: `google.workspace.chat.message.v1.batchCreated`
     *              * Multiple updated messages:
     *              `google.workspace.chat.message.v1.batchUpdated`
     *              * Multiple deleted messages:
     *              `google.workspace.chat.message.v1.batchDeleted`
     *           Supported event types for
     *           [memberships](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.members):
     *             * New membership: `google.workspace.chat.membership.v1.created`
     *             * Updated membership: `google.workspace.chat.membership.v1.updated`
     *             * Deleted membership: `google.workspace.chat.membership.v1.deleted`
     *             * Multiple new memberships:
     *             `google.workspace.chat.membership.v1.batchCreated`
     *             * Multiple updated memberships:
     *             `google.workspace.chat.membership.v1.batchUpdated`
     *             * Multiple deleted memberships:
     *             `google.workspace.chat.membership.v1.batchDeleted`
     *           Supported event types for
     *           [reactions](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.messages.reactions):
     *             * New reaction: `google.workspace.chat.reaction.v1.created`
     *             * Deleted reaction: `google.workspace.chat.reaction.v1.deleted`
     *             * Multiple new reactions:
     *             `google.workspace.chat.reaction.v1.batchCreated`
     *             * Multiple deleted reactions:
     *             `google.workspace.chat.reaction.v1.batchDeleted`
     *           Supported event types about the
     *           [space](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces):
     *             * Updated space: `google.workspace.chat.space.v1.updated`
     *             * Multiple space updates: `google.workspace.chat.space.v1.batchUpdated`
     *     @type \Google\Apps\Chat\V1\MessageCreatedEventData $message_created_event_data
     *           Event payload for a new message.
     *           Event type: `google.workspace.chat.message.v1.created`
     *     @type \Google\Apps\Chat\V1\MessageUpdatedEventData $message_updated_event_data
     *           Event payload for an updated message.
     *           Event type: `google.workspace.chat.message.v1.updated`
     *     @type \Google\Apps\Chat\V1\MessageDeletedEventData $message_deleted_event_data
     *           Event payload for a deleted message.
     *           Event type: `google.workspace.chat.message.v1.deleted`
     *     @type \Google\Apps\Chat\V1\MessageBatchCreatedEventData $message_batch_created_event_data
     *           Event payload for multiple new messages.
     *           Event type: `google.workspace.chat.message.v1.batchCreated`
     *     @type \Google\Apps\Chat\V1\MessageBatchUpdatedEventData $message_batch_updated_event_data
     *           Event payload for multiple updated messages.
     *           Event type: `google.workspace.chat.message.v1.batchUpdated`
     *     @type \Google\Apps\Chat\V1\MessageBatchDeletedEventData $message_batch_deleted_event_data
     *           Event payload for multiple deleted messages.
     *           Event type: `google.workspace.chat.message.v1.batchDeleted`
     *     @type \Google\Apps\Chat\V1\SpaceUpdatedEventData $space_updated_event_data
     *           Event payload for a space update.
     *           Event type: `google.workspace.chat.space.v1.updated`
     *     @type \Google\Apps\Chat\V1\SpaceBatchUpdatedEventData $space_batch_updated_event_data
     *           Event payload for multiple updates to a space.
     *           Event type: `google.workspace.chat.space.v1.batchUpdated`
     *     @type \Google\Apps\Chat\V1\MembershipCreatedEventData $membership_created_event_data
     *           Event payload for a new membership.
     *           Event type: `google.workspace.chat.membership.v1.created`
     *     @type \Google\Apps\Chat\V1\MembershipUpdatedEventData $membership_updated_event_data
     *           Event payload for an updated membership.
     *           Event type: `google.workspace.chat.membership.v1.updated`
     *     @type \Google\Apps\Chat\V1\MembershipDeletedEventData $membership_deleted_event_data
     *           Event payload for a deleted membership.
     *           Event type: `google.workspace.chat.membership.v1.deleted`
     *     @type \Google\Apps\Chat\V1\MembershipBatchCreatedEventData $membership_batch_created_event_data
     *           Event payload for multiple new memberships.
     *           Event type: `google.workspace.chat.membership.v1.batchCreated`
     *     @type \Google\Apps\Chat\V1\MembershipBatchUpdatedEventData $membership_batch_updated_event_data
     *           Event payload for multiple updated memberships.
     *           Event type: `google.workspace.chat.membership.v1.batchUpdated`
     *     @type \Google\Apps\Chat\V1\MembershipBatchDeletedEventData $membership_batch_deleted_event_data
     *           Event payload for multiple deleted memberships.
     *           Event type: `google.workspace.chat.membership.v1.batchDeleted`
     *     @type \Google\Apps\Chat\V1\ReactionCreatedEventData $reaction_created_event_data
     *           Event payload for a new reaction.
     *           Event type: `google.workspace.chat.reaction.v1.created`
     *     @type \Google\Apps\Chat\V1\ReactionDeletedEventData $reaction_deleted_event_data
     *           Event payload for a deleted reaction.
     *           Event type: `google.workspace.chat.reaction.v1.deleted`
     *     @type \Google\Apps\Chat\V1\ReactionBatchCreatedEventData $reaction_batch_created_event_data
     *           Event payload for multiple new reactions.
     *           Event type: `google.workspace.chat.reaction.v1.batchCreated`
     *     @type \Google\Apps\Chat\V1\ReactionBatchDeletedEventData $reaction_batch_deleted_event_data
     *           Event payload for multiple deleted reactions.
     *           Event type: `google.workspace.chat.reaction.v1.batchDeleted`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\SpaceEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the space event.
     * Format: `spaces/{space}/spaceEvents/{spaceEvent}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name of the space event.
     * Format: `spaces/{space}/spaceEvents/{spaceEvent}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Time when the event occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp event_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEventTime()
    {
        return $this->event_time;
    }

    public function hasEventTime()
    {
        return isset($this->event_time);
    }

    public function clearEventTime()
    {
        unset($this->event_time);
    }

    /**
     * Time when the event occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp event_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEventTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->event_time = $var;

        return $this;
    }

    /**
     * Type of space event. Each event type has a batch version, which
     * represents multiple instances of the event type that occur in a short
     * period of time. For `spaceEvents.list()` requests, omit batch event types
     * in your query filter. By default, the server returns both event type and
     * its batch version.
     * Supported event types for
     * [messages](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.messages):
     *    * New message: `google.workspace.chat.message.v1.created`
     *    * Updated message: `google.workspace.chat.message.v1.updated`
     *    * Deleted message: `google.workspace.chat.message.v1.deleted`
     *    * Multiple new messages: `google.workspace.chat.message.v1.batchCreated`
     *    * Multiple updated messages:
     *    `google.workspace.chat.message.v1.batchUpdated`
     *    * Multiple deleted messages:
     *    `google.workspace.chat.message.v1.batchDeleted`
     * Supported event types for
     * [memberships](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.members):
     *   * New membership: `google.workspace.chat.membership.v1.created`
     *   * Updated membership: `google.workspace.chat.membership.v1.updated`
     *   * Deleted membership: `google.workspace.chat.membership.v1.deleted`
     *   * Multiple new memberships:
     *   `google.workspace.chat.membership.v1.batchCreated`
     *   * Multiple updated memberships:
     *   `google.workspace.chat.membership.v1.batchUpdated`
     *   * Multiple deleted memberships:
     *   `google.workspace.chat.membership.v1.batchDeleted`
     * Supported event types for
     * [reactions](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.messages.reactions):
     *   * New reaction: `google.workspace.chat.reaction.v1.created`
     *   * Deleted reaction: `google.workspace.chat.reaction.v1.deleted`
     *   * Multiple new reactions:
     *   `google.workspace.chat.reaction.v1.batchCreated`
     *   * Multiple deleted reactions:
     *   `google.workspace.chat.reaction.v1.batchDeleted`
     * Supported event types about the
     * [space](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces):
     *   * Updated space: `google.workspace.chat.space.v1.updated`
     *   * Multiple space updates: `google.workspace.chat.space.v1.batchUpdated`
     *
     * Generated from protobuf field <code>string event_type = 6;</code>
     * @return string
     */
    public function getEventType()
    {
        return $this->event_type;
    }

    /**
     * Type of space event. Each event type has a batch version, which
     * represents multiple instances of the event type that occur in a short
     * period of time. For `spaceEvents.list()` requests, omit batch event types
     * in your query filter. By default, the server returns both event type and
     * its batch version.
     * Supported event types for
     * [messages](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.messages):
     *    * New message: `google.workspace.chat.message.v1.created`
     *    * Updated message: `google.workspace.chat.message.v1.updated`
     *    * Deleted message: `google.workspace.chat.message.v1.deleted`
     *    * Multiple new messages: `google.workspace.chat.message.v1.batchCreated`
     *    * Multiple updated messages:
     *    `google.workspace.chat.message.v1.batchUpdated`
     *    * Multiple deleted messages:
     *    `google.workspace.chat.message.v1.batchDeleted`
     * Supported event types for
     * [memberships](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.members):
     *   * New membership: `google.workspace.chat.membership.v1.created`
     *   * Updated membership: `google.workspace.chat.membership.v1.updated`
     *   * Deleted membership: `google.workspace.chat.membership.v1.deleted`
     *   * Multiple new memberships:
     *   `google.workspace.chat.membership.v1.batchCreated`
     *   * Multiple updated memberships:
     *   `google.workspace.chat.membership.v1.batchUpdated`
     *   * Multiple deleted memberships:
     *   `google.workspace.chat.membership.v1.batchDeleted`
     * Supported event types for
     * [reactions](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.messages.reactions):
     *   * New reaction: `google.workspace.chat.reaction.v1.created`
     *   * Deleted reaction: `google.workspace.chat.reaction.v1.deleted`
     *   * Multiple new reactions:
     *   `google.workspace.chat.reaction.v1.batchCreated`
     *   * Multiple deleted reactions:
     *   `google.workspace.chat.reaction.v1.batchDeleted`
     * Supported event types about the
     * [space](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces):
     *   * Updated space: `google.workspace.chat.space.v1.updated`
     *   * Multiple space updates: `google.workspace.chat.space.v1.batchUpdated`
     *
     * Generated from protobuf field <code>string event_type = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEventType($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_type = $var;

        return $this;
    }

    /**
     * Event payload for a new message.
     * Event type: `google.workspace.chat.message.v1.created`
     *
     * Generated from protobuf field <code>.google.chat.v1.MessageCreatedEventData message_created_event_data = 12;</code>
     * @return \Google\Apps\Chat\V1\MessageCreatedEventData|null
     */
    public function getMessageCreatedEventData()
    {
        return $this->readOneof(12);
    }

    public function hasMessageCreatedEventData()
    {
        return $this->hasOneof(12);
    }

    /**
     * Event payload for a new message.
     * Event type: `google.workspace.chat.message.v1.created`
     *
     * Generated from protobuf field <code>.google.chat.v1.MessageCreatedEventData message_created_event_data = 12;</code>
     * @param \Google\Apps\Chat\V1\MessageCreatedEventData $var
     * @return $this
     */
    public function setMessageCreatedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\MessageCreatedEventData::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Event payload for an updated message.
     * Event type: `google.workspace.chat.message.v1.updated`
     *
     * Generated from protobuf field <code>.google.chat.v1.MessageUpdatedEventData message_updated_event_data = 13;</code>
     * @return \Google\Apps\Chat\V1\MessageUpdatedEventData|null
     */
    public function getMessageUpdatedEventData()
    {
        return $this->readOneof(13);
    }

    public function hasMessageUpdatedEventData()
    {
        return $this->hasOneof(13);
    }

    /**
     * Event payload for an updated message.
     * Event type: `google.workspace.chat.message.v1.updated`
     *
     * Generated from protobuf field <code>.google.chat.v1.MessageUpdatedEventData message_updated_event_data = 13;</code>
     * @param \Google\Apps\Chat\V1\MessageUpdatedEventData $var
     * @return $this
     */
    public function setMessageUpdatedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\MessageUpdatedEventData::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Event payload for a deleted message.
     * Event type: `google.workspace.chat.message.v1.deleted`
     *
     * Generated from protobuf field <code>.google.chat.v1.MessageDeletedEventData message_deleted_event_data = 14;</code>
     * @return \Google\Apps\Chat\V1\MessageDeletedEventData|null
     */
    public function getMessageDeletedEventData()
    {
        return $this->readOneof(14);
    }

    public function hasMessageDeletedEventData()
    {
        return $this->hasOneof(14);
    }

    /**
     * Event payload for a deleted message.
     * Event type: `google.workspace.chat.message.v1.deleted`
     *
     * Generated from protobuf field <code>.google.chat.v1.MessageDeletedEventData message_deleted_event_data = 14;</code>
     * @param \Google\Apps\Chat\V1\MessageDeletedEventData $var
     * @return $this
     */
    public function setMessageDeletedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\MessageDeletedEventData::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Event payload for multiple new messages.
     * Event type: `google.workspace.chat.message.v1.batchCreated`
     *
     * Generated from protobuf field <code>.google.chat.v1.MessageBatchCreatedEventData message_batch_created_event_data = 26;</code>
     * @return \Google\Apps\Chat\V1\MessageBatchCreatedEventData|null
     */
    public function getMessageBatchCreatedEventData()
    {
        return $this->readOneof(26);
    }

    public function hasMessageBatchCreatedEventData()
    {
        return $this->hasOneof(26);
    }

    /**
     * Event payload for multiple new messages.
     * Event type: `google.workspace.chat.message.v1.batchCreated`
     *
     * Generated from protobuf field <code>.google.chat.v1.MessageBatchCreatedEventData message_batch_created_event_data = 26;</code>
     * @param \Google\Apps\Chat\V1\MessageBatchCreatedEventData $var
     * @return $this
     */
    public function setMessageBatchCreatedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\MessageBatchCreatedEventData::class);
        $this->writeOneof(26, $var);

        return $this;
    }

    /**
     * Event payload for multiple updated messages.
     * Event type: `google.workspace.chat.message.v1.batchUpdated`
     *
     * Generated from protobuf field <code>.google.chat.v1.MessageBatchUpdatedEventData message_batch_updated_event_data = 27;</code>
     * @return \Google\Apps\Chat\V1\MessageBatchUpdatedEventData|null
     */
    public function getMessageBatchUpdatedEventData()
    {
        return $this->readOneof(27);
    }

    public function hasMessageBatchUpdatedEventData()
    {
        return $this->hasOneof(27);
    }

    /**
     * Event payload for multiple updated messages.
     * Event type: `google.workspace.chat.message.v1.batchUpdated`
     *
     * Generated from protobuf field <code>.google.chat.v1.MessageBatchUpdatedEventData message_batch_updated_event_data = 27;</code>
     * @param \Google\Apps\Chat\V1\MessageBatchUpdatedEventData $var
     * @return $this
     */
    public function setMessageBatchUpdatedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\MessageBatchUpdatedEventData::class);
        $this->writeOneof(27, $var);

        return $this;
    }

    /**
     * Event payload for multiple deleted messages.
     * Event type: `google.workspace.chat.message.v1.batchDeleted`
     *
     * Generated from protobuf field <code>.google.chat.v1.MessageBatchDeletedEventData message_batch_deleted_event_data = 28;</code>
     * @return \Google\Apps\Chat\V1\MessageBatchDeletedEventData|null
     */
    public function getMessageBatchDeletedEventData()
    {
        return $this->readOneof(28);
    }

    public function hasMessageBatchDeletedEventData()
    {
        return $this->hasOneof(28);
    }

    /**
     * Event payload for multiple deleted messages.
     * Event type: `google.workspace.chat.message.v1.batchDeleted`
     *
     * Generated from protobuf field <code>.google.chat.v1.MessageBatchDeletedEventData message_batch_deleted_event_data = 28;</code>
     * @param \Google\Apps\Chat\V1\MessageBatchDeletedEventData $var
     * @return $this
     */
    public function setMessageBatchDeletedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\MessageBatchDeletedEventData::class);
        $this->writeOneof(28, $var);

        return $this;
    }

    /**
     * Event payload for a space update.
     * Event type: `google.workspace.chat.space.v1.updated`
     *
     * Generated from protobuf field <code>.google.chat.v1.SpaceUpdatedEventData space_updated_event_data = 15;</code>
     * @return \Google\Apps\Chat\V1\SpaceUpdatedEventData|null
     */
    public function getSpaceUpdatedEventData()
    {
        return $this->readOneof(15);
    }

    public function hasSpaceUpdatedEventData()
    {
        return $this->hasOneof(15);
    }

    /**
     * Event payload for a space update.
     * Event type: `google.workspace.chat.space.v1.updated`
     *
     * Generated from protobuf field <code>.google.chat.v1.SpaceUpdatedEventData space_updated_event_data = 15;</code>
     * @param \Google\Apps\Chat\V1\SpaceUpdatedEventData $var
     * @return $this
     */
    public function setSpaceUpdatedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\SpaceUpdatedEventData::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Event payload for multiple updates to a space.
     * Event type: `google.workspace.chat.space.v1.batchUpdated`
     *
     * Generated from protobuf field <code>.google.chat.v1.SpaceBatchUpdatedEventData space_batch_updated_event_data = 29;</code>
     * @return \Google\Apps\Chat\V1\SpaceBatchUpdatedEventData|null
     */
    public function getSpaceBatchUpdatedEventData()
    {
        return $this->readOneof(29);
    }

    public function hasSpaceBatchUpdatedEventData()
    {
        return $this->hasOneof(29);
    }

    /**
     * Event payload for multiple updates to a space.
     * Event type: `google.workspace.chat.space.v1.batchUpdated`
     *
     * Generated from protobuf field <code>.google.chat.v1.SpaceBatchUpdatedEventData space_batch_updated_event_data = 29;</code>
     * @param \Google\Apps\Chat\V1\SpaceBatchUpdatedEventData $var
     * @return $this
     */
    public function setSpaceBatchUpdatedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\SpaceBatchUpdatedEventData::class);
        $this->writeOneof(29, $var);

        return $this;
    }

    /**
     * Event payload for a new membership.
     * Event type: `google.workspace.chat.membership.v1.created`
     *
     * Generated from protobuf field <code>.google.chat.v1.MembershipCreatedEventData membership_created_event_data = 17;</code>
     * @return \Google\Apps\Chat\V1\MembershipCreatedEventData|null
     */
    public function getMembershipCreatedEventData()
    {
        return $this->readOneof(17);
    }

    public function hasMembershipCreatedEventData()
    {
        return $this->hasOneof(17);
    }

    /**
     * Event payload for a new membership.
     * Event type: `google.workspace.chat.membership.v1.created`
     *
     * Generated from protobuf field <code>.google.chat.v1.MembershipCreatedEventData membership_created_event_data = 17;</code>
     * @param \Google\Apps\Chat\V1\MembershipCreatedEventData $var
     * @return $this
     */
    public function setMembershipCreatedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\MembershipCreatedEventData::class);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * Event payload for an updated membership.
     * Event type: `google.workspace.chat.membership.v1.updated`
     *
     * Generated from protobuf field <code>.google.chat.v1.MembershipUpdatedEventData membership_updated_event_data = 18;</code>
     * @return \Google\Apps\Chat\V1\MembershipUpdatedEventData|null
     */
    public function getMembershipUpdatedEventData()
    {
        return $this->readOneof(18);
    }

    public function hasMembershipUpdatedEventData()
    {
        return $this->hasOneof(18);
    }

    /**
     * Event payload for an updated membership.
     * Event type: `google.workspace.chat.membership.v1.updated`
     *
     * Generated from protobuf field <code>.google.chat.v1.MembershipUpdatedEventData membership_updated_event_data = 18;</code>
     * @param \Google\Apps\Chat\V1\MembershipUpdatedEventData $var
     * @return $this
     */
    public function setMembershipUpdatedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\MembershipUpdatedEventData::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Event payload for a deleted membership.
     * Event type: `google.workspace.chat.membership.v1.deleted`
     *
     * Generated from protobuf field <code>.google.chat.v1.MembershipDeletedEventData membership_deleted_event_data = 219;</code>
     * @return \Google\Apps\Chat\V1\MembershipDeletedEventData|null
     */
    public function getMembershipDeletedEventData()
    {
        return $this->readOneof(219);
    }

    public function hasMembershipDeletedEventData()
    {
        return $this->hasOneof(219);
    }

    /**
     * Event payload for a deleted membership.
     * Event type: `google.workspace.chat.membership.v1.deleted`
     *
     * Generated from protobuf field <code>.google.chat.v1.MembershipDeletedEventData membership_deleted_event_data = 219;</code>
     * @param \Google\Apps\Chat\V1\MembershipDeletedEventData $var
     * @return $this
     */
    public function setMembershipDeletedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\MembershipDeletedEventData::class);
        $this->writeOneof(219, $var);

        return $this;
    }

    /**
     * Event payload for multiple new memberships.
     * Event type: `google.workspace.chat.membership.v1.batchCreated`
     *
     * Generated from protobuf field <code>.google.chat.v1.MembershipBatchCreatedEventData membership_batch_created_event_data = 31;</code>
     * @return \Google\Apps\Chat\V1\MembershipBatchCreatedEventData|null
     */
    public function getMembershipBatchCreatedEventData()
    {
        return $this->readOneof(31);
    }

    public function hasMembershipBatchCreatedEventData()
    {
        return $this->hasOneof(31);
    }

    /**
     * Event payload for multiple new memberships.
     * Event type: `google.workspace.chat.membership.v1.batchCreated`
     *
     * Generated from protobuf field <code>.google.chat.v1.MembershipBatchCreatedEventData membership_batch_created_event_data = 31;</code>
     * @param \Google\Apps\Chat\V1\MembershipBatchCreatedEventData $var
     * @return $this
     */
    public function setMembershipBatchCreatedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\MembershipBatchCreatedEventData::class);
        $this->writeOneof(31, $var);

        return $this;
    }

    /**
     * Event payload for multiple updated memberships.
     * Event type: `google.workspace.chat.membership.v1.batchUpdated`
     *
     * Generated from protobuf field <code>.google.chat.v1.MembershipBatchUpdatedEventData membership_batch_updated_event_data = 32;</code>
     * @return \Google\Apps\Chat\V1\MembershipBatchUpdatedEventData|null
     */
    public function getMembershipBatchUpdatedEventData()
    {
        return $this->readOneof(32);
    }

    public function hasMembershipBatchUpdatedEventData()
    {
        return $this->hasOneof(32);
    }

    /**
     * Event payload for multiple updated memberships.
     * Event type: `google.workspace.chat.membership.v1.batchUpdated`
     *
     * Generated from protobuf field <code>.google.chat.v1.MembershipBatchUpdatedEventData membership_batch_updated_event_data = 32;</code>
     * @param \Google\Apps\Chat\V1\MembershipBatchUpdatedEventData $var
     * @return $this
     */
    public function setMembershipBatchUpdatedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\MembershipBatchUpdatedEventData::class);
        $this->writeOneof(32, $var);

        return $this;
    }

    /**
     * Event payload for multiple deleted memberships.
     * Event type: `google.workspace.chat.membership.v1.batchDeleted`
     *
     * Generated from protobuf field <code>.google.chat.v1.MembershipBatchDeletedEventData membership_batch_deleted_event_data = 33;</code>
     * @return \Google\Apps\Chat\V1\MembershipBatchDeletedEventData|null
     */
    public function getMembershipBatchDeletedEventData()
    {
        return $this->readOneof(33);
    }

    public function hasMembershipBatchDeletedEventData()
    {
        return $this->hasOneof(33);
    }

    /**
     * Event payload for multiple deleted memberships.
     * Event type: `google.workspace.chat.membership.v1.batchDeleted`
     *
     * Generated from protobuf field <code>.google.chat.v1.MembershipBatchDeletedEventData membership_batch_deleted_event_data = 33;</code>
     * @param \Google\Apps\Chat\V1\MembershipBatchDeletedEventData $var
     * @return $this
     */
    public function setMembershipBatchDeletedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\MembershipBatchDeletedEventData::class);
        $this->writeOneof(33, $var);

        return $this;
    }

    /**
     * Event payload for a new reaction.
     * Event type: `google.workspace.chat.reaction.v1.created`
     *
     * Generated from protobuf field <code>.google.chat.v1.ReactionCreatedEventData reaction_created_event_data = 21;</code>
     * @return \Google\Apps\Chat\V1\ReactionCreatedEventData|null
     */
    public function getReactionCreatedEventData()
    {
        return $this->readOneof(21);
    }

    public function hasReactionCreatedEventData()
    {
        return $this->hasOneof(21);
    }

    /**
     * Event payload for a new reaction.
     * Event type: `google.workspace.chat.reaction.v1.created`
     *
     * Generated from protobuf field <code>.google.chat.v1.ReactionCreatedEventData reaction_created_event_data = 21;</code>
     * @param \Google\Apps\Chat\V1\ReactionCreatedEventData $var
     * @return $this
     */
    public function setReactionCreatedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\ReactionCreatedEventData::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * Event payload for a deleted reaction.
     * Event type: `google.workspace.chat.reaction.v1.deleted`
     *
     * Generated from protobuf field <code>.google.chat.v1.ReactionDeletedEventData reaction_deleted_event_data = 22;</code>
     * @return \Google\Apps\Chat\V1\ReactionDeletedEventData|null
     */
    public function getReactionDeletedEventData()
    {
        return $this->readOneof(22);
    }

    public function hasReactionDeletedEventData()
    {
        return $this->hasOneof(22);
    }

    /**
     * Event payload for a deleted reaction.
     * Event type: `google.workspace.chat.reaction.v1.deleted`
     *
     * Generated from protobuf field <code>.google.chat.v1.ReactionDeletedEventData reaction_deleted_event_data = 22;</code>
     * @param \Google\Apps\Chat\V1\ReactionDeletedEventData $var
     * @return $this
     */
    public function setReactionDeletedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\ReactionDeletedEventData::class);
        $this->writeOneof(22, $var);

        return $this;
    }

    /**
     * Event payload for multiple new reactions.
     * Event type: `google.workspace.chat.reaction.v1.batchCreated`
     *
     * Generated from protobuf field <code>.google.chat.v1.ReactionBatchCreatedEventData reaction_batch_created_event_data = 34;</code>
     * @return \Google\Apps\Chat\V1\ReactionBatchCreatedEventData|null
     */
    public function getReactionBatchCreatedEventData()
    {
        return $this->readOneof(34);
    }

    public function hasReactionBatchCreatedEventData()
    {
        return $this->hasOneof(34);
    }

    /**
     * Event payload for multiple new reactions.
     * Event type: `google.workspace.chat.reaction.v1.batchCreated`
     *
     * Generated from protobuf field <code>.google.chat.v1.ReactionBatchCreatedEventData reaction_batch_created_event_data = 34;</code>
     * @param \Google\Apps\Chat\V1\ReactionBatchCreatedEventData $var
     * @return $this
     */
    public function setReactionBatchCreatedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\ReactionBatchCreatedEventData::class);
        $this->writeOneof(34, $var);

        return $this;
    }

    /**
     * Event payload for multiple deleted reactions.
     * Event type: `google.workspace.chat.reaction.v1.batchDeleted`
     *
     * Generated from protobuf field <code>.google.chat.v1.ReactionBatchDeletedEventData reaction_batch_deleted_event_data = 35;</code>
     * @return \Google\Apps\Chat\V1\ReactionBatchDeletedEventData|null
     */
    public function getReactionBatchDeletedEventData()
    {
        return $this->readOneof(35);
    }

    public function hasReactionBatchDeletedEventData()
    {
        return $this->hasOneof(35);
    }

    /**
     * Event payload for multiple deleted reactions.
     * Event type: `google.workspace.chat.reaction.v1.batchDeleted`
     *
     * Generated from protobuf field <code>.google.chat.v1.ReactionBatchDeletedEventData reaction_batch_deleted_event_data = 35;</code>
     * @param \Google\Apps\Chat\V1\ReactionBatchDeletedEventData $var
     * @return $this
     */
    public function setReactionBatchDeletedEventData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\ReactionBatchDeletedEventData::class);
        $this->writeOneof(35, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->whichOneof("payload");
    }

}
