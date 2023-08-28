<?php

namespace App\Filament\Resources\ProjectOverviewResource\Pages;

use App\Filament\Resources\ProjectOverviewResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjectOverview extends EditRecord
{
    protected static string $resource = ProjectOverviewResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
