<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Filament\Resources\ProjectResource\Widgets\ProjectOverview;
use App\Models\Project;
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
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Support\Str;


class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-office-building';

    protected static ?string $navigationGroup = 'Apartment Projects';
    protected static ?string $navigationLabel = 'Projects';
    protected static ?int $navigationSort = 1;

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
                                Section::make('Make a new apartment project')
                                    ->description('Make a new apartment project')
                                    ->schema([
                                        TextInput::make('name')
                                            ->rules(['max:255', 'string'])
                                            ->required()
                                            ->placeholder('Heading')
                                            ->afterStateUpdated(function (Closure $get, Closure $set, ?string $state) {
                                                if (!$get('is_slug_changed_manually') && filled($state)) {
                                                    $slug = Str::slug($state);
                                                    $existingSlugs = Project::where('slug', 'LIKE', $slug . '%')->pluck('slug')->toArray();

                                                    $suffix = 1;
                                                    while (in_array($slug, $existingSlugs)) {
                                                        $slug = Str::slug($state) . '-' . $suffix;
                                                        $suffix++;
                                                    }

                                                    $set('slug', $slug);
                                                }
                                            })
                                            ->reactive(),


                                        Select::make('type')
                                            ->required()
                                            ->options([
                                                'ongoing' => 'Ongoing',
                                                'completed' => 'Completed',
                                                'upcomming' => 'Upcomming',
                                            ]),

                                        TextInput::make('heading')
                                            ->rules(['string'])
                                            ->placeholder('Heading'),

                                        Textarea::make('description')
                                            ->required()
                                            ->rules(['string'])
                                            ->placeholder('Description'),

                                        Textarea::make('about_description')
                                            ->rules(['string'])
                                            ->placeholder('Second description'),
                                    ]),
                                Section::make('Apartment Images')
                                    ->description('Apartment main images')
                                    ->schema([
                                        FileUpload::make('breadcrumb_image')
                                            ->required(),
                                        FileUpload::make('about_image')
                                            ->required(),
                                    ])
                            ]),
                        Grid::make()
                            ->columnSpan([
                                'default' => 1,
                                'md' => 1,
                                'lg' => 1,
                            ])
                            ->schema([
                                Section::make('Advanced details')
                                    ->description('Apartment advaced details')
                                    ->schema([
                                        TextInput::make('slug')
                                            ->afterStateUpdated(function (Closure $set) {
                                                $set('is_slug_changed_manually', true);
                                            })
                                            ->required()
                                            ->placeholder('Auto generated slug'),

                                        FileUpload::make('gallery')
                                            ->enableReordering()
                                            ->multiple(),

                                        Toggle::make('status'),

                                        TextInput::make('v_tour')
                                            ->label('Virtual Tour')
                                            ->placeholder('Virtual tour'),

                                        TextInput::make('order_by')
                                            ->default(0),
                                    ]),

                                Section::make('Apartment details')
                                    ->description('Main details of apartment')
                                    ->schema([
                                        TextInput::make('bedrooms')
                                            ->placeholder('No of bedrooms'),

                                        TextInput::make('sqft')
                                            ->placeholder('No of sqft'),

                                        TextInput::make('bathrooms')
                                            ->placeholder('No of bathrooms'),

                                        TextInput::make('parkings')
                                            ->placeholder('No of parkings'),

                                        TextInput::make('garages')
                                            ->placeholder('No of garages'),
                                    ]),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                BadgeColumn::make('type')
                    ->enum([
                        'ongoing' => 'Ongoing',
                        'completed' => 'Completed',
                        'upcomming' => 'Upcomming',
                    ])
                    ->colors([
                        'primary',
                        'warning' => 'ongoing',
                        'success' => 'completed',
                        'warning' => 'Upcomming',
                    ]),
                ImageColumn::make('breadcrumb_image')->circular(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->options([
                        'ongoing' => 'Ongoing',
                        'upcomming' => 'Upcomming',
                        'completed' => 'Completed',
                    ])
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            ProjectOverview::class,
        ];
    }
}
