<?php

namespace App\Filament\Resources\ScheduleVisitResource\Pages;

use App\Filament\Resources\ScheduleVisitResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditScheduleVisit extends EditRecord
{
    protected static string $resource = ScheduleVisitResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
