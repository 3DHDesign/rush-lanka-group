<?php

namespace App\Filament\Resources\ResidenciesResource\Pages;

use App\Filament\Resources\ResidenciesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResidencies extends EditRecord
{
    protected static string $resource = ResidenciesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
