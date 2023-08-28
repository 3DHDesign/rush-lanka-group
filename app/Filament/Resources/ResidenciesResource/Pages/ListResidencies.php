<?php

namespace App\Filament\Resources\ResidenciesResource\Pages;

use App\Filament\Resources\ResidenciesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResidencies extends ListRecords
{
    protected static string $resource = ResidenciesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
