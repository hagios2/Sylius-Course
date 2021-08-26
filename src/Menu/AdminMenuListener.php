<?php

namespace App\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

class AdminMenuListener
{
    public function addSupplierMenu(MenuBuilderEvent $event): void
    {
        $configuration_menu = $event->getMenu()->getChild('configuration');

        $configuration_menu
            ->addChild('suppliers', ['route' => 'app_admin_supplier_index'])
            ->setLabel('app.ui.suppliers')
            ->setLabelAttribute('icon', 'address card outline')
        ;

    }

}
