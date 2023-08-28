<?php

namespace App\Filament\Resources\ScheduleVisitResource\Pages;

use App\Filament\Resources\ScheduleVisitResource;
use App\Filament\Resources\ScheduleVisitResource\Widgets\ScheduleOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListScheduleVisits extends ListRecords
{
    protected static string $resource = ScheduleVisitResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            ScheduleOverview::class,
        ];
    }
}
