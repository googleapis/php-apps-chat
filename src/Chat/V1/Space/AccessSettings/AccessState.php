<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/space.proto

namespace Google\Apps\Chat\V1\Space\AccessSettings;

use UnexpectedValueException;

/**
 * Represents the access state of the space.
 *
 * Protobuf type <code>google.chat.v1.Space.AccessSettings.AccessState</code>
 */
class AccessState
{
    /**
     * Access state is unknown or not supported in this API.
     *
     * Generated from protobuf enum <code>ACCESS_STATE_UNSPECIFIED = 0;</code>
     */
    const ACCESS_STATE_UNSPECIFIED = 0;
    /**
     * Space is discoverable by added or invited members or groups.
     *
     * Generated from protobuf enum <code>PRIVATE = 1;</code>
     */
    const PBPRIVATE = 1;
    /**
     * Space is discoverable by the selected [target
     * audience](https://support.google.com/a/answer/9934697), as well as
     * added or invited members or groups.
     *
     * Generated from protobuf enum <code>DISCOVERABLE = 2;</code>
     */
    const DISCOVERABLE = 2;

    private static $valueToName = [
        self::ACCESS_STATE_UNSPECIFIED => 'ACCESS_STATE_UNSPECIFIED',
        self::PBPRIVATE => 'PRIVATE',
        self::DISCOVERABLE => 'DISCOVERABLE',
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
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}


