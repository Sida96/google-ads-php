<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/extensions.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a hotel callout extension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.HotelCalloutFeedItem</code>
 */
class HotelCalloutFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The callout text.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     */
    protected $text = null;
    /**
     * The language of the hotel callout text.
     * IETF BCP 47 compliant language code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 2;</code>
     */
    protected $language_code = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $text
     *           The callout text.
     *           The length of this string should be between 1 and 25, inclusive.
     *     @type \Google\Protobuf\StringValue $language_code
     *           The language of the hotel callout text.
     *           IETF BCP 47 compliant language code.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * The callout text.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Returns the unboxed value from <code>getText()</code>

     * The callout text.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @return string|null
     */
    public function getTextUnwrapped()
    {
        return $this->readWrapperValue("text");
    }

    /**
     * The callout text.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->text = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The callout text.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTextUnwrapped($var)
    {
        $this->writeWrapperValue("text", $var);
        return $this;}

    /**
     * The language of the hotel callout text.
     * IETF BCP 47 compliant language code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Returns the unboxed value from <code>getLanguageCode()</code>

     * The language of the hotel callout text.
     * IETF BCP 47 compliant language code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 2;</code>
     * @return string|null
     */
    public function getLanguageCodeUnwrapped()
    {
        return $this->readWrapperValue("language_code");
    }

    /**
     * The language of the hotel callout text.
     * IETF BCP 47 compliant language code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The language of the hotel callout text.
     * IETF BCP 47 compliant language code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLanguageCodeUnwrapped($var)
    {
        $this->writeWrapperValue("language_code", $var);
        return $this;}

}

