<?php

namespace App\Filament\Widgets;

use App\Models\ScheduleVisit;
use Closure;
use Filament\Forms\Components\Actions\Modal\Actions\Action;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class ScheduleVistis extends BaseWidget
{
    protected static ?int $sort = 3;
    protected function getTableQuery(): Builder
    {
        return ScheduleVisit::latest()->take(4);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\ImageColumn::make('apartment.image')->circular(),
            Tables\Columns\TextColumn::make('apartment.name')->searchable(),
            Tables\Columns\ImageColumn::make('agent.image')->circular(),
            Tables\Columns\TextColumn::make('name')->searchable(),
            Tables\Columns\TextColumn::make('email'),
            BadgeColumn::make('status')
                ->enum([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'done' => 'Done'
                ])
                ->colors([
                    'primary' => 'Done',
                    'warning' => 'pending',
                    'success' => 'approved',
                ]),
            Tables\Columns\TextColumn::make('date')->since(),
        ];
    }
}
