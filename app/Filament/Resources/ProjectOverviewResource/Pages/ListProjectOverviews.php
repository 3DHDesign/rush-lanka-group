<?php

namespace App\Filament\Resources\ProjectOverviewResource\Pages;

use App\Filament\Resources\ProjectOverviewResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjectOverviews extends ListRecords
{
    protected static string $resource = ProjectOverviewResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
