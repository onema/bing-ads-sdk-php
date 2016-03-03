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
 * Defines a list of devices to target with bid adjustments.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh527704(v=msads.100).aspx DeviceOSTarget Data Object
 * 
 * @uses DeviceOSTargetBid
 * @used-by Target
 */
final class DeviceOSTarget
{
    /**
     * An array of devices to target with bid adjustments.
     *
     * @var DeviceOSTargetBid[]
     */
    public $Bids;
}