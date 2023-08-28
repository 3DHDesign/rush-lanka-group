<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FloorResource\Pages;
use App\Filament\Resources\FloorResource\RelationManagers;
use App\Models\Floor;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class FloorResource extends Resource
{
    protected static ?string $model = Floor::class;

    protected static ?string $navigationIcon = 'heroicon-o-menu';

    protected static ?string $navigationGroup = 'Apartment Projects';
    protected static ?string $navigationLabel = 'Floors';
    protected static ?int $navigationSort = 4;

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
                                Section::make('Make a new floor')
                                    ->description('Make a new floor')
                                    ->schema([

                                        Select::make('project_id')
                                            ->label('Select a project')
                                            ->searchable()
                                            ->required()
                                            ->options(Project::pluck('name', 'id'))
                                            ->reactive(),

                                        TextInput::make('name')
                                            ->rules(['string'])
                                            ->required()
                                            ->placeholder('Floor name'),

                                        Repeater::make('blocks')
                                            ->schema([
                                                TextInput::make('block_name')->required()
                                                    ->placeholder('Block name'),
                                                TextInput::make('bedroom_bathroom')
                                                    ->placeholder('Bedrooms & Bathrooms'),
                                                TextInput::make('sqft')
                                                    ->rules(['integer'])
                                                    ->placeholder('No of sqft'),

                                                TextInput::make('additional')
                                                    ->placeholder('Ground floor details'),

                                                Select::make('status')
                                                    ->options([
                                                        'sold' => 'Sold',
                                                        'available' => 'Available',
                                                        'sold' => 'Sold',
                                                    ]),
                                                FileUpload::make('image'),
                                            ])
                                            ->columns(2)
                                    ]),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('project.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
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
            'index' => Pages\ListFloors::route('/'),
            'create' => Pages\CreateFloor::route('/create'),
            'edit' => Pages\EditFloor::route('/{record}/edit'),
        ];
    }
}
