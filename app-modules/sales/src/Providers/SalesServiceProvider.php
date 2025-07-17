<?php

namespace Estivenm0\Sales\Providers;

use Estivenm0\Sales\Services\SaleModule;
use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;

class SalesServiceProvider extends ServiceProvider
{
	public function register(): void
	{
		$this->app->singleton(SaleModule::class);
	}
	
	public function boot(CoreContract $core, SaleModule $sale): void
	{
		$core->resources($sale->getResources())
			->pages($sale->getPages());
	}
}
