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
 * Defines the minimum and maximum impressions per day for a website.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd796854(v=msads.100).aspx ImpressionsPerDayRange Data Object
 * 
 * @used-by PlacementDetail
 */
final class ImpressionsPerDayRange
{
    /**
     * The maximum number of impressions per day for the website.
     *
     * @var int
     */
    public $Maximum;
    /**
     * The minimum number of impressions per day for the website.
     *
     * @var int
     */
    public $Minimum;
}