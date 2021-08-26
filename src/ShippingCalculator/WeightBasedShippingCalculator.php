<?php

namespace App\ShippingCalculator;

use Sylius\Component\Core\Model\OrderItem;
use Sylius\Component\Shipping\Calculator\CalculatorInterface;
use Sylius\Component\Shipping\Model\ShipmentInterface;

class WeightBasedShippingCalculator implements CalculatorInterface
{
    public function calculate(ShipmentInterface $subject, array $configuration): int
    {
        $total_weight =  0.0;

        /** @var OrderItem $item */
        foreach ($subject->getOrder()->getItems() as $item)
        {
            $total_weight += $item->getVariant()->getWeight() * $item->getQuantity();
        }

        if($total_weight >= $configuration['weight'])
        {
             return $configuration['above_or_equal'];
        }

        return $configuration['below'];
    }

    public function getType(): string
    {
        return 'weight_based';
    }

}
