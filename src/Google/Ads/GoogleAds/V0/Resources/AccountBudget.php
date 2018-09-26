<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/account_budget.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An account-level budget.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.AccountBudget</code>
 */
class AccountBudget extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the account-level budget.
     * AccountBudget resource names have the form:
     * `customers/{customer_id}/accountBudgets/{account_budget_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the account-level budget.
     *           AccountBudget resource names have the form:
     *           `customers/{customer_id}/accountBudgets/{account_budget_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\AccountBudget::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the account-level budget.
     * AccountBudget resource names have the form:
     * `customers/{customer_id}/accountBudgets/{account_budget_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the account-level budget.
     * AccountBudget resource names have the form:
     * `customers/{customer_id}/accountBudgets/{account_budget_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

}

