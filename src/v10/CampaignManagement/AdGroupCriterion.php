<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2016, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */

namespace BingAds\v10\CampaignManagement;

/**
 * Defines the base class of an ad group criterion.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj738614(v=msads.100).aspx AdGroupCriterion Data Object
 * 
 * @uses Criterion
 * @uses AdGroupCriterionStatus
 * @used-by AdGroupCriterionAction
 * @used-by AddAdGroupCriterionsRequest
 * @used-by GetAdGroupCriterionsByIdsResponse
 * @used-by UpdateAdGroupCriterionsRequest
 */
class AdGroupCriterion
{
    /**
     * The identifier of the ad group to apply the criterion to.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * The criterion to apply to the ad group.
     *
     * @var Criterion
     */
    public $Criterion;
    /**
     * The system-generated identifier that identifies this ad group criterion.
     *
     * @var int
     */
    public $Id;
    /**
     * A status value that determines whether to apply the criterion to the ad group.
     *
     * @var AdGroupCriterionStatus
     */
    public $Status;
    /**
     * The type of ad group criterion.
     *
     * @var string
     */
    public $Type;
}