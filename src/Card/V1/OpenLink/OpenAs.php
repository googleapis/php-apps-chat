<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/card/v1/card.proto

namespace Google\Apps\Card\V1\OpenLink;

use UnexpectedValueException;

/**
 * When an `OnClick` action opens a link, then the client can either open it
 * as a full-size window (if that's the frame used by the client), or an
 * overlay (such as a pop-up). The implementation depends on the client
 * platform capabilities, and the value selected might be ignored if the
 * client doesn't support it. `FULL_SIZE` is supported by all clients.
 * [Google Workspace
 * Add-ons](https://developers.google.com/workspace/add-ons):
 *
 * Protobuf type <code>google.apps.card.v1.OpenLink.OpenAs</code>
 */
class OpenAs
{
    /**
     * The link opens as a full-size window (if that's the frame used by the
     * client).
     *
     * Generated from protobuf enum <code>FULL_SIZE = 0;</code>
     */
    const FULL_SIZE = 0;
    /**
     * The link opens as an overlay, such as a pop-up.
     *
     * Generated from protobuf enum <code>OVERLAY = 1;</code>
     */
    const OVERLAY = 1;

    private static $valueToName = [
        self::FULL_SIZE => 'FULL_SIZE',
        self::OVERLAY => 'OVERLAY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


