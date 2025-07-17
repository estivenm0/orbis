<?php

namespace Estivenm0\Inventories\Providers;

use Estivenm0\Inventories\Services\InventoryModule;
use Estivenm0\Moonlaunch\Services\ThemeApplier;
use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;

class InventoriesServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(InventoryModule::class);
    }

    public function boot(
        CoreContract $core,
        ColorManagerContract $colorManager,
        InventoryModule $inventories): void
    {
        (new ThemeApplier($colorManager))->theme1();

        $core->resources($inventories->getResources());
    }
}
