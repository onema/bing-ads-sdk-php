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
 * Retrieves the specified ads from the specified ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236296(v=msads.100).aspx GetAdsByIds Request Object
 * 
 * @used-by BingAdsCampaignManagementService::GetAdsByIds
 */
final class GetAdsByIdsRequest
{
    public $AdGroupId;
    public $AdIds;
}