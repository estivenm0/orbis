<?php

namespace Estivenm0\Inventories\Services;

use Estivenm0\Inventories\MoonShine\Resources\CategoryResource;
use Estivenm0\Inventories\MoonShine\Resources\ImageResource;
use Estivenm0\Inventories\MoonShine\Resources\ProductResource;
use Estivenm0\Inventories\MoonShine\Resources\SupplierResource;
use MoonShine\MenuManager\MenuGroup;
use MoonShine\MenuManager\MenuItem;
use Sweet1s\MoonshineRBAC\Components\MenuRBAC;

class InventoryModule
{
    public function getResources(): array
    {
        return [
            CategoryResource::class,
            ProductResource::class,
            SupplierResource::class,
            ImageResource::class,
        ];
    }

    public function getMenu(): array
    {
        return MenuRBAC::menu(
            MenuGroup::make('Inventario', [
                MenuItem::make('categories', CategoryResource::class)
                    ->translatable('inventories::ui.resource'),

                MenuItem::make('suppliers', SupplierResource::class)
                    ->translatable('inventories::ui.resource'),

                MenuItem::make('products', ProductResource::class)
                    ->translatable('inventories::ui.resource'),
            ], 's.archive-box'),

        );
    }
}
