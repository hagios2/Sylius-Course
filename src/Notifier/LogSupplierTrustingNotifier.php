<?php

namespace App\Notifier;

use App\Entity\SupplierInterface;
use Psr\Log\LoggerInterface;

class LogSupplierTrustingNotifier implements SupplierTrustingNotifierInterface
{

    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function notify(SupplierInterface $supplier): void
    {
        $this->logger->info("Supplier has just been trusted");
    }

}
