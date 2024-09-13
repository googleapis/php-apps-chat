<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/space.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response with a list of spaces corresponding to the search spaces request.
 *
 * Generated from protobuf message <code>google.chat.v1.SearchSpacesResponse</code>
 */
class SearchSpacesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A page of the requested spaces.
     *
     * Generated from protobuf field <code>repeated .google.chat.v1.Space spaces = 1;</code>
     */
    private $spaces;
    /**
     * A token that can be used to retrieve the next page. If this field is empty,
     * there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * The total number of spaces that match the query, across all pages. If the
     * result is over 10,000 spaces, this value is an estimate.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     */
    protected $total_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Apps\Chat\V1\Space>|\Google\Protobuf\Internal\RepeatedField $spaces
     *           A page of the requested spaces.
     *     @type string $next_page_token
     *           A token that can be used to retrieve the next page. If this field is empty,
     *           there are no subsequent pages.
     *     @type int $total_size
     *           The total number of spaces that match the query, across all pages. If the
     *           result is over 10,000 spaces, this value is an estimate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Space::initOnce();
        parent::__construct($data);
    }

    /**
     * A page of the requested spaces.
     *
     * Generated from protobuf field <code>repeated .google.chat.v1.Space spaces = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpaces()
    {
        return $this->spaces;
    }

    /**
     * A page of the requested spaces.
     *
     * Generated from protobuf field <code>repeated .google.chat.v1.Space spaces = 1;</code>
     * @param array<\Google\Apps\Chat\V1\Space>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Apps\Chat\V1\Space::class);
        $this->spaces = $arr;

        return $this;
    }

    /**
     * A token that can be used to retrieve the next page. If this field is empty,
     * there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token that can be used to retrieve the next page. If this field is empty,
     * there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * The total number of spaces that match the query, across all pages. If the
     * result is over 10,000 spaces, this value is an estimate.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     * @return int
     */
    public function getTotalSize()
    {
        return $this->total_size;
    }

    /**
     * The total number of spaces that match the query, across all pages. If the
     * result is over 10,000 spaces, this value is an estimate.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_size = $var;

        return $this;
    }

}
