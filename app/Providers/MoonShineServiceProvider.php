<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Pages\POS;
use App\MoonShine\Resources\CustomerResource;
use App\MoonShine\Resources\SaleResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     */
    public function boot(
        CoreContract $core,
        ConfiguratorContract $config,
    ): void {
        // $config->authEnable();

        $core->resources([])
            ->pages([
                ...$config->getPages(),
            ]);
    }
}
