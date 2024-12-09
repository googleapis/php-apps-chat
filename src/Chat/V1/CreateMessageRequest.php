<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/message.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Creates a message.
 *
 * Generated from protobuf message <code>google.chat.v1.CreateMessageRequest</code>
 */
class CreateMessageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the space in which to create a message.
     * Format: `spaces/{space}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Message body.
     *
     * Generated from protobuf field <code>.google.chat.v1.Message message = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $message = null;
    /**
     * Optional. Deprecated: Use
     * [thread.thread_key][google.chat.v1.Thread.thread_key] instead. ID for the
     * thread. Supports up to 4000 characters. To start or add to a thread, create
     * a message and specify a `threadKey` or the
     * [thread.name][google.chat.v1.Thread.name]. For example usage, see [Start or
     * reply to a message
     * thread](https://developers.google.com/workspace/chat/create-messages#create-message-thread).
     *
     * Generated from protobuf field <code>string thread_key = 6 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @deprecated
     */
    protected $thread_key = '';
    /**
     * Optional. A unique request ID for this message. Specifying an existing
     * request ID returns the message created with that ID instead of creating a
     * new message.
     *
     * Generated from protobuf field <code>string request_id = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';
    /**
     * Optional. Specifies whether a message starts a thread or replies to one.
     * Only supported in named spaces.
     * When [responding to user
     * interactions](https://developers.google.com/workspace/chat/receive-respond-interactions),
     * this field is ignored. For interactions within a thread, the reply is
     * created in the same thread. Otherwise, the reply is created as a new
     * thread.
     *
     * Generated from protobuf field <code>.google.chat.v1.CreateMessageRequest.MessageReplyOption message_reply_option = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $message_reply_option = 0;
    /**
     * Optional. A custom ID for a message. Lets Chat apps get, update, or delete
     * a message without needing to store the system-assigned ID in the message's
     * resource name (represented in the message `name` field).
     * The value for this field must meet the following requirements:
     * * Begins with `client-`. For example, `client-custom-name` is a valid
     *   custom ID, but `custom-name` is not.
     * * Contains up to 63 characters and only lowercase letters, numbers, and
     *   hyphens.
     * * Is unique within a space. A Chat app can't use the same custom ID for
     * different messages.
     * For details, see [Name a
     * message](https://developers.google.com/workspace/chat/create-messages#name_a_created_message).
     *
     * Generated from protobuf field <code>string message_id = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $message_id = '';

    /**
     * @param string                       $parent    Required. The resource name of the space in which to create a message.
     *
     *                                                Format: `spaces/{space}`
     *                                                Please see {@see ChatServiceClient::spaceName()} for help formatting this field.
     * @param \Google\Apps\Chat\V1\Message $message   Required. Message body.
     * @param string                       $messageId Optional. A custom ID for a message. Lets Chat apps get, update, or delete
     *                                                a message without needing to store the system-assigned ID in the message's
     *                                                resource name (represented in the message `name` field).
     *
     *                                                The value for this field must meet the following requirements:
     *
     *                                                * Begins with `client-`. For example, `client-custom-name` is a valid
     *                                                custom ID, but `custom-name` is not.
     *                                                * Contains up to 63 characters and only lowercase letters, numbers, and
     *                                                hyphens.
     *                                                * Is unique within a space. A Chat app can't use the same custom ID for
     *                                                different messages.
     *
     *                                                For details, see [Name a
     *                                                message](https://developers.google.com/workspace/chat/create-messages#name_a_created_message).
     *
     * @return \Google\Apps\Chat\V1\CreateMessageRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Apps\Chat\V1\Message $message, string $messageId): self
    {
        return (new self())
            ->setParent($parent)
            ->setMessage($message)
            ->setMessageId($messageId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the space in which to create a message.
     *           Format: `spaces/{space}`
     *     @type \Google\Apps\Chat\V1\Message $message
     *           Required. Message body.
     *     @type string $thread_key
     *           Optional. Deprecated: Use
     *           [thread.thread_key][google.chat.v1.Thread.thread_key] instead. ID for the
     *           thread. Supports up to 4000 characters. To start or add to a thread, create
     *           a message and specify a `threadKey` or the
     *           [thread.name][google.chat.v1.Thread.name]. For example usage, see [Start or
     *           reply to a message
     *           thread](https://developers.google.com/workspace/chat/create-messages#create-message-thread).
     *     @type string $request_id
     *           Optional. A unique request ID for this message. Specifying an existing
     *           request ID returns the message created with that ID instead of creating a
     *           new message.
     *     @type int $message_reply_option
     *           Optional. Specifies whether a message starts a thread or replies to one.
     *           Only supported in named spaces.
     *           When [responding to user
     *           interactions](https://developers.google.com/workspace/chat/receive-respond-interactions),
     *           this field is ignored. For interactions within a thread, the reply is
     *           created in the same thread. Otherwise, the reply is created as a new
     *           thread.
     *     @type string $message_id
     *           Optional. A custom ID for a message. Lets Chat apps get, update, or delete
     *           a message without needing to store the system-assigned ID in the message's
     *           resource name (represented in the message `name` field).
     *           The value for this field must meet the following requirements:
     *           * Begins with `client-`. For example, `client-custom-name` is a valid
     *             custom ID, but `custom-name` is not.
     *           * Contains up to 63 characters and only lowercase letters, numbers, and
     *             hyphens.
     *           * Is unique within a space. A Chat app can't use the same custom ID for
     *           different messages.
     *           For details, see [Name a
     *           message](https://developers.google.com/workspace/chat/create-messages#name_a_created_message).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the space in which to create a message.
     * Format: `spaces/{space}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the space in which to create a message.
     * Format: `spaces/{space}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Message body.
     *
     * Generated from protobuf field <code>.google.chat.v1.Message message = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Apps\Chat\V1\Message|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    public function hasMessage()
    {
        return isset($this->message);
    }

    public function clearMessage()
    {
        unset($this->message);
    }

    /**
     * Required. Message body.
     *
     * Generated from protobuf field <code>.google.chat.v1.Message message = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Apps\Chat\V1\Message $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\Message::class);
        $this->message = $var;

        return $this;
    }

    /**
     * Optional. Deprecated: Use
     * [thread.thread_key][google.chat.v1.Thread.thread_key] instead. ID for the
     * thread. Supports up to 4000 characters. To start or add to a thread, create
     * a message and specify a `threadKey` or the
     * [thread.name][google.chat.v1.Thread.name]. For example usage, see [Start or
     * reply to a message
     * thread](https://developers.google.com/workspace/chat/create-messages#create-message-thread).
     *
     * Generated from protobuf field <code>string thread_key = 6 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     * @deprecated
     */
    public function getThreadKey()
    {
        @trigger_error('thread_key is deprecated.', E_USER_DEPRECATED);
        return $this->thread_key;
    }

    /**
     * Optional. Deprecated: Use
     * [thread.thread_key][google.chat.v1.Thread.thread_key] instead. ID for the
     * thread. Supports up to 4000 characters. To start or add to a thread, create
     * a message and specify a `threadKey` or the
     * [thread.name][google.chat.v1.Thread.name]. For example usage, see [Start or
     * reply to a message
     * thread](https://developers.google.com/workspace/chat/create-messages#create-message-thread).
     *
     * Generated from protobuf field <code>string thread_key = 6 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setThreadKey($var)
    {
        @trigger_error('thread_key is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->thread_key = $var;

        return $this;
    }

    /**
     * Optional. A unique request ID for this message. Specifying an existing
     * request ID returns the message created with that ID instead of creating a
     * new message.
     *
     * Generated from protobuf field <code>string request_id = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A unique request ID for this message. Specifying an existing
     * request ID returns the message created with that ID instead of creating a
     * new message.
     *
     * Generated from protobuf field <code>string request_id = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. Specifies whether a message starts a thread or replies to one.
     * Only supported in named spaces.
     * When [responding to user
     * interactions](https://developers.google.com/workspace/chat/receive-respond-interactions),
     * this field is ignored. For interactions within a thread, the reply is
     * created in the same thread. Otherwise, the reply is created as a new
     * thread.
     *
     * Generated from protobuf field <code>.google.chat.v1.CreateMessageRequest.MessageReplyOption message_reply_option = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMessageReplyOption()
    {
        return $this->message_reply_option;
    }

    /**
     * Optional. Specifies whether a message starts a thread or replies to one.
     * Only supported in named spaces.
     * When [responding to user
     * interactions](https://developers.google.com/workspace/chat/receive-respond-interactions),
     * this field is ignored. For interactions within a thread, the reply is
     * created in the same thread. Otherwise, the reply is created as a new
     * thread.
     *
     * Generated from protobuf field <code>.google.chat.v1.CreateMessageRequest.MessageReplyOption message_reply_option = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMessageReplyOption($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Chat\V1\CreateMessageRequest\MessageReplyOption::class);
        $this->message_reply_option = $var;

        return $this;
    }

    /**
     * Optional. A custom ID for a message. Lets Chat apps get, update, or delete
     * a message without needing to store the system-assigned ID in the message's
     * resource name (represented in the message `name` field).
     * The value for this field must meet the following requirements:
     * * Begins with `client-`. For example, `client-custom-name` is a valid
     *   custom ID, but `custom-name` is not.
     * * Contains up to 63 characters and only lowercase letters, numbers, and
     *   hyphens.
     * * Is unique within a space. A Chat app can't use the same custom ID for
     * different messages.
     * For details, see [Name a
     * message](https://developers.google.com/workspace/chat/create-messages#name_a_created_message).
     *
     * Generated from protobuf field <code>string message_id = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * Optional. A custom ID for a message. Lets Chat apps get, update, or delete
     * a message without needing to store the system-assigned ID in the message's
     * resource name (represented in the message `name` field).
     * The value for this field must meet the following requirements:
     * * Begins with `client-`. For example, `client-custom-name` is a valid
     *   custom ID, but `custom-name` is not.
     * * Contains up to 63 characters and only lowercase letters, numbers, and
     *   hyphens.
     * * Is unique within a space. A Chat app can't use the same custom ID for
     * different messages.
     * For details, see [Name a
     * message](https://developers.google.com/workspace/chat/create-messages#name_a_created_message).
     *
     * Generated from protobuf field <code>string message_id = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMessageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_id = $var;

        return $this;
    }

}

