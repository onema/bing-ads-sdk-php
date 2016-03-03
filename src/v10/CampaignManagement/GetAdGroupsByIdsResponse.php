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
 * Gets the specified ad groups that exist within a specified campaign.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277529(v=msads.100).aspx GetAdGroupsByIds Response Object
 * 
 * @uses AdGroup
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::GetAdGroupsByIds
 */
final class GetAdGroupsByIdsResponse
{
    public $AdGroups;
    public $PartialErrors;
}