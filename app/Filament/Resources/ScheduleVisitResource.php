<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScheduleVisitResource\Pages;
use App\Filament\Resources\ScheduleVisitResource\RelationManagers;
use App\Filament\Resources\ScheduleVisitResource\Widgets\ScheduleOverview;
use App\Models\Agent;
use App\Models\Apartment;
use App\Models\ScheduleVisit;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Closure;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Support\Str;

class ScheduleVisitResource extends Resource
{
    protected static ?string $model = ScheduleVisit::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    protected static ?string $navigationGroup = 'Contacts';
    protected static ?string $navigationLabel = 'Schedul a Visit';
    protected static ?int $navigationSort = 3;

    protected static function getNavigationBadge(): ?string
    {
        $pending_visits = ScheduleVisit::where('status', 'pending')->count();
        return  $pending_visits > 0 ? $pending_visits . ' ' . ' Requests' : '';
    }

    protected static function getNavigationBadgeColor(): ?string
    {
        return ScheduleVisit::where('status', 'pending')->count() > 9 ? 'danger' : 'success';
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->columns(2)
                    ->schema([
                        Grid::make()
                            ->columnSpan([
                                'default' => 1,
                                'md' => 1,
                                'lg' => 1,
                            ])
                            ->schema([
                                Section::make('Make a Schedule a vist')
                                    ->description('Make a schedule for a client')
                                    ->schema([
                                        Select::make('apartment_id')
                                            ->label('Select an apartment')
                                            ->searchable()
                                            ->required()
                                            ->disabled()
                                            ->options(Apartment::pluck('name', 'id'))
                                            ->reactive(),

                                        Select::make('agent_id')
                                            ->label('Select an agent')
                                            ->searchable()
                                            ->required()
                                            ->disabled()
                                            ->options(Agent::where('status', 1)->pluck('name', 'id'))
                                            ->reactive(),

                                        TextInput::make('name')
                                            ->disabled()
                                            ->placeholder('Customer name'),

                                        TextInput::make('email')
                                            ->disabled()
                                            ->placeholder('Customer email'),
                                    ]),
                            ]),
                        Grid::make()
                            ->columnSpan([
                                'default' => 1,
                                'md' => 1,
                                'lg' => 1,
                            ])
                            ->schema([
                                Section::make('Advanced details')
                                    ->description('Schedule advaced details')
                                    ->schema([
                                        DatePicker::make('date')
                                            ->disabled(),


                                        TextInput::make('number')
                                            ->disabled()
                                            ->placeholder('Customer number'),

                                        Select::make('status')
                                            ->options([
                                                'pending' => 'Pending',
                                                'approved' => 'Approved',
                                                'done' => 'Done'
                                            ]),
                                    ]),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
                        'danger' => 'pending',
                        'warning' => 'approved',
                    ]),
                Tables\Columns\TextColumn::make('date')->since(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->multiple()
                    ->options([
                        'success' => 'Done',
                        'danger' => 'Pending',
                        'warning' => 'Approved',
                    ])
                    ->attribute('status')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListScheduleVisits::route('/'),
            'create' => Pages\CreateScheduleVisit::route('/create'),
            'edit' => Pages\EditScheduleVisit::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            ScheduleOverview::class,
        ];
    }
}
