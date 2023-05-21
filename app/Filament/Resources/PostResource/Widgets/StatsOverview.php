<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All posts', Post::all()->count())->description('32k increase')
            ->descriptionIcon('heroicon-s-trending-up')->color('success'),
            Card::make('Published', '21%'),
            Card::make('Average time on page', '3:12'),
        ];
    }
}
