<?php

namespace App\Filament\Resources\OurStrengthResource\Pages;

use App\Filament\Resources\OurStrengthResource;
use App\Filament\Widgets\GeneralStatus;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurStrengths extends ListRecords
{
    protected static string $resource = OurStrengthResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            GeneralStatus::class,
        ];
    }
}
