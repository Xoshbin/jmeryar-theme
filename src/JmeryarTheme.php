<?php

namespace Xoshbin\JmeryarTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;

class JmeryarTheme implements Plugin
{
    public function getId(): string
    {
        return 'jmeryar-theme';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Theme::make('jmeryar-theme', __DIR__ . '/../resources/dist/jmeryar-theme.css'),
        ]);

        $panel
            ->font('DM Sans')
            ->primaryColor(Color::Amber)
            ->secondaryColor(Color::Gray)
            ->warningColor(Color::Amber)
            ->dangerColor(Color::Rose)
            ->successColor(Color::Green)
            ->grayColor(Color::Gray)
            ->theme('jmeryar-theme');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
