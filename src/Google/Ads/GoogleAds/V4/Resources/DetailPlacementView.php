<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/detail_placement_view.proto

namespace Google\Ads\GoogleAds\V4\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A view with metrics aggregated by ad group and URL or YouTube video.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.DetailPlacementView</code>
 */
class DetailPlacementView extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the detail placement view.
     * Detail placement view resource names have the form:
     * `customers/{customer_id}/detailPlacementViews/{ad_group_id}~{base64_placement}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The automatic placement string at detail level, e. g. website URL, mobile
     * application ID, or a YouTube video ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $placement = null;
    /**
     * Output only. The display name is URL name for websites, YouTube video name for YouTube
     * videos, and translated mobile app name for mobile apps.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $display_name = null;
    /**
     * Output only. URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue group_placement_target_url = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $group_placement_target_url = null;
    /**
     * Output only. URL of the placement, e.g. website, link to the mobile application in app
     * store, or a YouTube video URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $target_url = null;
    /**
     * Output only. Type of the placement, e.g. Website, YouTube Video, and Mobile Application.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PlacementTypeEnum.PlacementType placement_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $placement_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the detail placement view.
     *           Detail placement view resource names have the form:
     *           `customers/{customer_id}/detailPlacementViews/{ad_group_id}~{base64_placement}`
     *     @type \Google\Protobuf\StringValue $placement
     *           Output only. The automatic placement string at detail level, e. g. website URL, mobile
     *           application ID, or a YouTube video ID.
     *     @type \Google\Protobuf\StringValue $display_name
     *           Output only. The display name is URL name for websites, YouTube video name for YouTube
     *           videos, and translated mobile app name for mobile apps.
     *     @type \Google\Protobuf\StringValue $group_placement_target_url
     *           Output only. URL of the group placement, e.g. domain, link to the mobile application in
     *           app store, or a YouTube channel URL.
     *     @type \Google\Protobuf\StringValue $target_url
     *           Output only. URL of the placement, e.g. website, link to the mobile application in app
     *           store, or a YouTube video URL.
     *     @type int $placement_type
     *           Output only. Type of the placement, e.g. Website, YouTube Video, and Mobile Application.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Resources\DetailPlacementView::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the detail placement view.
     * Detail placement view resource names have the form:
     * `customers/{customer_id}/detailPlacementViews/{ad_group_id}~{base64_placement}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the detail placement view.
     * Detail placement view resource names have the form:
     * `customers/{customer_id}/detailPlacementViews/{ad_group_id}~{base64_placement}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The automatic placement string at detail level, e. g. website URL, mobile
     * application ID, or a YouTube video ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPlacement()
    {
        return $this->placement;
    }

    /**
     * Returns the unboxed value from <code>getPlacement()</code>

     * Output only. The automatic placement string at detail level, e. g. website URL, mobile
     * application ID, or a YouTube video ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getPlacementUnwrapped()
    {
        return $this->readWrapperValue("placement");
    }

    /**
     * Output only. The automatic placement string at detail level, e. g. website URL, mobile
     * application ID, or a YouTube video ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPlacement($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->placement = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The automatic placement string at detail level, e. g. website URL, mobile
     * application ID, or a YouTube video ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setPlacementUnwrapped($var)
    {
        $this->writeWrapperValue("placement", $var);
        return $this;}

    /**
     * Output only. The display name is URL name for websites, YouTube video name for YouTube
     * videos, and translated mobile app name for mobile apps.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Returns the unboxed value from <code>getDisplayName()</code>

     * Output only. The display name is URL name for websites, YouTube video name for YouTube
     * videos, and translated mobile app name for mobile apps.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getDisplayNameUnwrapped()
    {
        return $this->readWrapperValue("display_name");
    }

    /**
     * Output only. The display name is URL name for websites, YouTube video name for YouTube
     * videos, and translated mobile app name for mobile apps.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The display name is URL name for websites, YouTube video name for YouTube
     * videos, and translated mobile app name for mobile apps.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setDisplayNameUnwrapped($var)
    {
        $this->writeWrapperValue("display_name", $var);
        return $this;}

    /**
     * Output only. URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue group_placement_target_url = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getGroupPlacementTargetUrl()
    {
        return $this->group_placement_target_url;
    }

    /**
     * Returns the unboxed value from <code>getGroupPlacementTargetUrl()</code>

     * Output only. URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue group_placement_target_url = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getGroupPlacementTargetUrlUnwrapped()
    {
        return $this->readWrapperValue("group_placement_target_url");
    }

    /**
     * Output only. URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue group_placement_target_url = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setGroupPlacementTargetUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->group_placement_target_url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue group_placement_target_url = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setGroupPlacementTargetUrlUnwrapped($var)
    {
        $this->writeWrapperValue("group_placement_target_url", $var);
        return $this;}

    /**
     * Output only. URL of the placement, e.g. website, link to the mobile application in app
     * store, or a YouTube video URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTargetUrl()
    {
        return $this->target_url;
    }

    /**
     * Returns the unboxed value from <code>getTargetUrl()</code>

     * Output only. URL of the placement, e.g. website, link to the mobile application in app
     * store, or a YouTube video URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getTargetUrlUnwrapped()
    {
        return $this->readWrapperValue("target_url");
    }

    /**
     * Output only. URL of the placement, e.g. website, link to the mobile application in app
     * store, or a YouTube video URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTargetUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->target_url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. URL of the placement, e.g. website, link to the mobile application in app
     * store, or a YouTube video URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setTargetUrlUnwrapped($var)
    {
        $this->writeWrapperValue("target_url", $var);
        return $this;}

    /**
     * Output only. Type of the placement, e.g. Website, YouTube Video, and Mobile Application.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PlacementTypeEnum.PlacementType placement_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPlacementType()
    {
        return $this->placement_type;
    }

    /**
     * Output only. Type of the placement, e.g. Website, YouTube Video, and Mobile Application.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PlacementTypeEnum.PlacementType placement_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPlacementType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\PlacementTypeEnum_PlacementType::class);
        $this->placement_type = $var;

        return $this;
    }

}

