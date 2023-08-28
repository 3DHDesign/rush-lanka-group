<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectOverviewResource\Pages;
use App\Filament\Resources\ProjectOverviewResource\RelationManagers;
use App\Models\Project;
use App\Models\ProjectOverview;
use Filament\Forms;
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
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class ProjectOverviewResource extends Resource
{
    protected static ?string $model = ProjectOverview::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Apartment Projects';
    protected static ?string $navigationLabel = 'Project Overviews';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->columns()
                    ->schema([
                        Grid::make()
                            ->columnSpan([
                                'default' => 3,
                                'md' => 3,
                                'lg' => 3,
                            ])
                            ->schema([
                                Section::make('Make a New Apartment')
                                    ->description('Make a new apartment')
                                    ->schema([
                                        Select::make('project_id')
                                            ->label('Select a Project')
                                            ->searchable()
                                            ->required()
                                            ->options(Project::pluck('name', 'id'))
                                            ->reactive(),

                                        Repeater::make('description')
                                            ->schema([
                                                TextInput::make('name')->required(),
                                                RichEditor::make('points')
                                                    ->required(),
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
                Tables\Columns\TextColumn::make('project.name')->searchable(),
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
            'index' => Pages\ListProjectOverviews::route('/'),
            'create' => Pages\CreateProjectOverview::route('/create'),
            'edit' => Pages\EditProjectOverview::route('/{record}/edit'),
        ];
    }
}
