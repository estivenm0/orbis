<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use App\MoonShine\Pages\POS;
use App\MoonShine\Resources\CustomerResource;
use App\MoonShine\Resources\SaleResource;
use Estivenm0\Inventories\Services\InventoryModule;
use Estivenm0\Moonlaunch\Services\Launch;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\MenuManager\MenuGroup;
use MoonShine\MenuManager\MenuItem;
use MoonShine\UI\Components\Layout\Favicon;
use MoonShine\UI\Components\Layout\Footer;
use MoonShine\UI\Components\Layout\Layout;
use Sweet1s\MoonshineRBAC\Components\MenuRBAC;

final class MoonShineLayout extends AppLayout
{
    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function getFaviconComponent(): Favicon
    {
        return parent::getFaviconComponent()->customAssets([
            'apple-touch' => '/icon.svg',
            '32' => '/icon.svg',
            '16' => '/icon.svg',
            'safari-pinned-tab' => '/icon.svg',
            'web-manifest' => '/icon.svg',
        ]);
    }

    protected function getFooterComponent(): Footer
    {
        return Footer::make()
            ->copyright(
                fn(): string => 'ORBIS'
            )->menu($this->getFooterMenu());
    }

    protected function menu(): array
    {
        return [
            ...app(Launch::class)->getMenu(),
            ...app(InventoryModule::class)->getMenu(),
        ];
        // MenuRBAC::menu(
        //     MenuGroup::make('Caja', [
        //         MenuItem::make('POS', POS::class),
        //         MenuItem::make('Ventas', SaleResource::class),
        //     ], 's.computer-desktop'),

        //     MenuGroup::make('CRM', [
        //         MenuItem::make('Clientes', CustomerResource::class),
        //     ], 's.briefcase'),

        // );
    }

    /**
     * @param  ColorManager  $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        // parent::colors($colorManager);
    }

    public function build(): Layout
    {
        return parent::build();
    }
}
