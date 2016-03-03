<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2016, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */

namespace BingAds\v10\AdInsight;

/**
 * Defines the possible types of campaign budgets.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219344(v=msads.100).aspx BudgetLimitType Value Set
 * 
 * @used-by BudgetOpportunity
 */
final class BudgetLimitType
{
    /** A monthly budget that is spent until it is depleted. */
    const MonthlyBudgetSpendUntilDepleted = 'MonthlyBudgetSpendUntilDepleted';
    /** A daily budget that is spread throughout the day. */
    const DailyBudgetStandard = 'DailyBudgetStandard';
    /** A daily budget that is spent until it is depleted. */
    const DailyBudgetAccelerated = 'DailyBudgetAccelerated';
}