<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/slash_command.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata about a [slash
 * command](https://developers.google.com/workspace/chat/commands) in
 * Google Chat.
 *
 * Generated from protobuf message <code>google.chat.v1.SlashCommand</code>
 */
class SlashCommand extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the slash command.
     *
     * Generated from protobuf field <code>int64 command_id = 1;</code>
     */
    protected $command_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $command_id
     *           The ID of the slash command.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\SlashCommand::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the slash command.
     *
     * Generated from protobuf field <code>int64 command_id = 1;</code>
     * @return int|string
     */
    public function getCommandId()
    {
        return $this->command_id;
    }

    /**
     * The ID of the slash command.
     *
     * Generated from protobuf field <code>int64 command_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCommandId($var)
    {
        GPBUtil::checkInt64($var);
        $this->command_id = $var;

        return $this;
    }

}

