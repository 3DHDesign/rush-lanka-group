<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResidenciesResource\Pages;
use App\Filament\Resources\ResidenciesResource\RelationManagers;
use App\Models\Project;
use App\Models\Residencies;
use App\Models\Residency;
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
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Str;

class ResidenciesResource extends Resource
{
    protected static ?string $model = Residency::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationGroup = 'Apartment Projects';
    protected static ?string $navigationLabel = 'Residencies';
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
                                Section::make('Make a block')
                                    ->description('Make a new block')
                                    ->schema([
                                        Select::make('project_id')
                                            ->label('Select a project')
                                            ->searchable()
                                            ->required()
                                            ->options(Project::pluck('heading', 'id'))
                                            ->reactive(),

                                        Repeater::make('block')
                                            ->schema([
                                                TextInput::make('block_name')->required()
                                                    ->placeholder('Block name'),

                                                TextInput::make('rooms')
                                                    ->placeholder('No of Rooms'),

                                                TextInput::make('sqft')
                                                    ->rules(['integer'])
                                                    ->placeholder('No of sqft'),

                                                TextInput::make('bathrooms')
                                                    ->placeholder('No of Bathrooms'),

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
            'index' => Pages\ListResidencies::route('/'),
            'create' => Pages\CreateResidencies::route('/create'),
            'edit' => Pages\EditResidencies::route('/{record}/edit'),
        ];
    }
}
