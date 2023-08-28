<?php

namespace App\Filament\Resources\ScheduleVisitResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\ScheduleVisit;

class ScheduleOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '10s';
    protected function getCards(): array
    {
        $allVisits = ScheduleVisit::all()->count();
        $done = ScheduleVisit::where('status', 'done')->count();
        $pending = ScheduleVisit::where('status', 'pending')->orwhere('status', 'approved')->count();
        $nextVisit = ScheduleVisit::where('status', 'pending')->orWhere('status', 'approved')
            ->where('date', '>', now())
            ->orderBy('date', 'asc')
            ->first();

        return [
            Card::make('Total visits', $allVisits)
                ->description('All of visits')
                ->descriptionIcon('heroicon-s-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),

            Card::make('Completed visits', $done)
                ->description('Total completed visits')
                ->descriptionIcon('heroicon-s-check-circle')
                ->color('success'),
            Card::make('Pending visits', $pending)
                ->description('Total pending requests')
                ->descriptionIcon('heroicon-s-clock')
                ->color('warning'),
            Card::make('Upcomming visit', $nextVisit ? $nextVisit->date->since() : '-')
                ->description('Next upcoming visit')
                ->descriptionIcon('heroicon-s-bookmark')
                ->color('danger'),
        ];
    }
}
