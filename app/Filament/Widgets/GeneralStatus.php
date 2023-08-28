<?php

namespace App\Filament\Widgets;

use App\Models\OurStrength;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class GeneralStatus extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getCards(): array
    {
        $strength = OurStrength::first();
        return [
            Card::make('Apartment sold', $strength->units . ' Apartments'),
            Card::make('Completed projects', $strength->parkings . ' Projects'),
            Card::make('Units in development', $strength->apartments . ' Development'),
        ];
    }
}
