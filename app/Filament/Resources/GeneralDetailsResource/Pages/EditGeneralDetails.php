<?php

namespace App\Filament\Resources\GeneralDetailsResource\Pages;

use App\Filament\Resources\GeneralDetailsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGeneralDetails extends EditRecord
{
    protected static string $resource = GeneralDetailsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
