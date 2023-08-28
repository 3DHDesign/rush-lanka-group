<?php

namespace App\Filament\Resources\FloorResource\Pages;

use App\Filament\Resources\FloorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFloor extends EditRecord
{
    protected static string $resource = FloorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
