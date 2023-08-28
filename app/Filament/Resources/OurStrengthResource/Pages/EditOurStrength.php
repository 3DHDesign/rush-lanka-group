<?php

namespace App\Filament\Resources\OurStrengthResource\Pages;

use App\Filament\Resources\OurStrengthResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOurStrength extends EditRecord
{
    protected static string $resource = OurStrengthResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
