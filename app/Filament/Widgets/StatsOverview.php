<?php

namespace App\Filament\Widgets;

use App\Models\Project;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;


class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 2;
    protected function getCards(): array
    {
        $completed_projects = Project::where('type', 'completed')->get()->count();
        $ongoing_projects = Project::where('type', 'ongoing')->get()->count();
        $total_projects = Project::all()->count();
        $completed_presentage = ($completed_projects / $total_projects) * 100;
        $ongoing_presentage = ($ongoing_projects / $total_projects) * 100;
        return [
            Card::make('Completed Projects', $completed_projects . ' Buildings')
                ->description(round($completed_presentage) . '% increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Card::make('Ongoing Projects', $ongoing_projects . ' Buildings')
                ->description(round($ongoing_presentage) . '% increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('warning'),
        ];
    }
}
