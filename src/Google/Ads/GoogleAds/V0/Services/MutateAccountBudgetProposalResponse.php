<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/services/account_budget_proposal_service.proto

namespace Google\Ads\GoogleAds\V0\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for account-level budget mutate operations.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.services.MutateAccountBudgetProposalResponse</code>
 */
class MutateAccountBudgetProposalResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The result of the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.services.MutateAccountBudgetProposalResult result = 2;</code>
     */
    private $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V0\Services\MutateAccountBudgetProposalResult $result
     *           The result of the mutate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Services\AccountBudgetProposalService::initOnce();
        parent::__construct($data);
    }

    /**
     * The result of the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.services.MutateAccountBudgetProposalResult result = 2;</code>
     * @return \Google\Ads\GoogleAds\V0\Services\MutateAccountBudgetProposalResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * The result of the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.services.MutateAccountBudgetProposalResult result = 2;</code>
     * @param \Google\Ads\GoogleAds\V0\Services\MutateAccountBudgetProposalResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Services\MutateAccountBudgetProposalResult::class);
        $this->result = $var;

        return $this;
    }

}

