<?php

namespace BingAds\CustomerManagement;

/**
 * Gets a list of objects that contains account identification information, for example the name and identifier of the account, for the specified customer.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451289(v=msads.90).aspx GetAccountsInfo Request Object
 *
 * @used-by BingAdsCustomerManagementService::GetAccountsInfo
 */
final class GetAccountsInfoRequest
{
    /**
     * The identifier of the customer who owns the accounts to get.
     *
     * @var int
     */
    public $CustomerId;
    /**
     * Determines whether to return only the accounts that belong to the customer or to also return the accounts that the customer manages for other customers.
     *
     * @var bool
     */
    public $OnlyParentAccounts;
}
