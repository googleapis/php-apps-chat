<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/reaction.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for deleting a custom emoji.
 *
 * Generated from protobuf message <code>google.chat.v1.DeleteCustomEmojiRequest</code>
 */
class DeleteCustomEmojiRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the custom emoji to delete.
     * Format: `customEmojis/{customEmoji}`
     * You can use the emoji name as an alias for `{customEmoji}`. For example,
     * `customEmojis/:example-emoji:` where `:example-emoji:` is the emoji name
     * for a custom emoji.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Resource name of the custom emoji to delete.
     *
     *                     Format: `customEmojis/{customEmoji}`
     *
     *                     You can use the emoji name as an alias for `{customEmoji}`. For example,
     *                     `customEmojis/:example-emoji:` where `:example-emoji:` is the emoji name
     *                     for a custom emoji. Please see
     *                     {@see ChatServiceClient::customEmojiName()} for help formatting this field.
     *
     * @return \Google\Apps\Chat\V1\DeleteCustomEmojiRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name of the custom emoji to delete.
     *           Format: `customEmojis/{customEmoji}`
     *           You can use the emoji name as an alias for `{customEmoji}`. For example,
     *           `customEmojis/:example-emoji:` where `:example-emoji:` is the emoji name
     *           for a custom emoji.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Reaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the custom emoji to delete.
     * Format: `customEmojis/{customEmoji}`
     * You can use the emoji name as an alias for `{customEmoji}`. For example,
     * `customEmojis/:example-emoji:` where `:example-emoji:` is the emoji name
     * for a custom emoji.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the custom emoji to delete.
     * Format: `customEmojis/{customEmoji}`
     * You can use the emoji name as an alias for `{customEmoji}`. For example,
     * `customEmojis/:example-emoji:` where `:example-emoji:` is the emoji name
     * for a custom emoji.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

