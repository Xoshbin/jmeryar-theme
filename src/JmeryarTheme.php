<?php

namespace Xoshbin\JmeryarTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Colors\Color;

class JmeryarTheme implements Plugin
{
    public function getId(): string
    {
        return 'jmeryar-theme';
    }

    public static function make(): static
    {
        return new static;
    }

    public function register(Panel $panel): void
    {
        $panel
            ->font('DM Sans')
            ->colors([
                'danger' => Color::Rose,
                'gray' => Color::Gray,
                'info' => Color::Blue,
                'primary' => Color::Indigo,
                'success' => Color::Emerald,
                'warning' => Color::Orange,
            ])
            ->viteTheme('vendor/xoshbin/jmeryar-theme/resources/css/theme.css');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
