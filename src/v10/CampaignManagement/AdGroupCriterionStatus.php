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
 * Defines the possible status values that determine whether to apply the criterion to the ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj689542(v=msads.100).aspx AdGroupCriterionStatus Value Set
 * 
 * @used-by AdGroupCriterion
 */
final class AdGroupCriterionStatus
{
    /** Apply the criterion to the ad group. */
    const Active = 'Active';
    /** Do not apply the criterion to the ad group. */
    const Paused = 'Paused';
    /** The criterion was deleted. */
    const Deleted = 'Deleted';
}