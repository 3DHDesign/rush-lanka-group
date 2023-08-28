<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OurStrengthResource\Pages;
use App\Filament\Resources\OurStrengthResource\RelationManagers;
use App\Filament\Widgets\GeneralStatus;
use App\Models\OurStrength;
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

class OurStrengthResource extends Resource
{
    protected static ?string $model = OurStrength::class;

    protected static ?string $navigationIcon = 'heroicon-o-lightning-bolt';
    protected static ?string $navigationGroup = 'General';
    protected static ?string $navigationLabel = 'Our Strength';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->columns(2)
                    ->schema([
                        Grid::make()
                            ->columnSpan([
                                'default' => 3,
                                'md' => 3,
                                'lg' => 3,
                            ])
                            ->schema([
                                Section::make('Make a New Agent')
                                    ->description('Make a new agent')
                                    ->schema([
                                        TextInput::make('units')
                                            ->rules(['integer'])
                                            ->label('Apartment sold')
                                            ->required()

                                            ->placeholder('No of units'),

                                        TextInput::make('parkings')
                                            ->rules(['integer'])
                                            ->label('Completed projects')
                                            ->required()

                                            ->placeholder('No of parkings'),

                                        TextInput::make('apartments')
                                            ->rules(['integer'])
                                            ->label('Units in development')
                                            ->required()

                                            ->placeholder('No of apartments'),

                                        TextInput::make('bedrooms')
                                            ->rules(['integer'])
                                            ->required()
                                            ->label('Years of experience')
                                            ->placeholder('No of bedrooms'),
                                    ]),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('units')
                    ->label('Apartment sold')
                    ->icon('heroicon-s-information-circle'),
                Tables\Columns\TextColumn::make('parkings')
                    ->label('Completed projects')
                    ->icon('heroicon-s-ticket'),
                Tables\Columns\TextColumn::make('apartments')
                    ->label('Units in development')
                    ->icon('heroicon-s-office-building'),
                Tables\Columns\TextColumn::make('bedrooms')
                    ->label('Years of experience')
                    ->icon('heroicon-s-calendar'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListOurStrengths::route('/'),
            'create' => Pages\CreateOurStrength::route('/create'),
            'edit' => Pages\EditOurStrength::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            GeneralStatus::class,
        ];
    }
}
