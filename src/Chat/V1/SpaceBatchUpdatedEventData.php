<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/event_payload.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Event payload for multiple updates to a space.
 * Event type: `google.workspace.chat.space.v1.batchUpdated`
 *
 * Generated from protobuf message <code>google.chat.v1.SpaceBatchUpdatedEventData</code>
 */
class SpaceBatchUpdatedEventData extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of updated spaces.
     *
     * Generated from protobuf field <code>repeated .google.chat.v1.SpaceUpdatedEventData spaces = 1;</code>
     */
    private $spaces;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Apps\Chat\V1\SpaceUpdatedEventData>|\Google\Protobuf\Internal\RepeatedField $spaces
     *           A list of updated spaces.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\EventPayload::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of updated spaces.
     *
     * Generated from protobuf field <code>repeated .google.chat.v1.SpaceUpdatedEventData spaces = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpaces()
    {
        return $this->spaces;
    }

    /**
     * A list of updated spaces.
     *
     * Generated from protobuf field <code>repeated .google.chat.v1.SpaceUpdatedEventData spaces = 1;</code>
     * @param array<\Google\Apps\Chat\V1\SpaceUpdatedEventData>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Apps\Chat\V1\SpaceUpdatedEventData::class);
        $this->spaces = $arr;

        return $this;
    }

}

