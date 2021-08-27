<?php

namespace App\Checker;

use Sylius\Component\Core\Model\CustomerInterface;

class TrustedCustomerChecker implements TrustedCustomerCheckerInterface
{
    public function check(CustomerInterface $customer): bool
    {
        $group = $customer->getGroup();

        if($customer->getGroup() === null)
        {
            return false;
        }

        if($group->getCode() !== 'TRUSTED')
        {
            return false;
        }

        return true;
    }
}
