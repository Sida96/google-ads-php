<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/enums/feed_origin.proto

namespace Google\Ads\GoogleAds\V4\Enums\FeedOriginEnum;

use UnexpectedValueException;

/**
 * Possible values for a feed origin.
 *
 * Protobuf type <code>google.ads.googleads.v4.enums.FeedOriginEnum.FeedOrigin</code>
 */
class FeedOrigin
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The FeedAttributes for this Feed are managed by the
     * user. Users can add FeedAttributes to this Feed.
     *
     * Generated from protobuf enum <code>USER = 2;</code>
     */
    const USER = 2;
    /**
     * The FeedAttributes for an GOOGLE Feed are created by Google. A feed of
     * this type is maintained by Google and will have the correct attributes
     * for the placeholder type of the feed.
     *
     * Generated from protobuf enum <code>GOOGLE = 3;</code>
     */
    const GOOGLE = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::USER => 'USER',
        self::GOOGLE => 'GOOGLE',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FeedOrigin::class, \Google\Ads\GoogleAds\V4\Enums\FeedOriginEnum_FeedOrigin::class);

