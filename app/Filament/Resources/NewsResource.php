<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
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
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Str;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-rss';

    protected static ?string $navigationGroup = 'General';
    protected static ?string $navigationLabel = 'News';
    protected static ?int $navigationSort = 3;

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
                                Section::make('Make a News')
                                    ->description('Make a new news')
                                    ->schema([
                                        TextInput::make('heading')
                                            ->rules(['max:255', 'string'])
                                            ->required()
                                            ->placeholder('Heading')
                                            ->afterStateUpdated(function (Closure $get, Closure $set, ?string $state) {
                                                if (!$get('is_slug_changed_manually') && filled($state)) {
                                                    $slug = Str::slug($state);
                                                    $existingSlugs = News::where('slug', 'LIKE', $slug . '%')->pluck('slug')->toArray();

                                                    $suffix = 1;
                                                    while (in_array($slug, $existingSlugs)) {
                                                        $slug = Str::slug($state) . '-' . $suffix;
                                                        $suffix++;
                                                    }

                                                    $set('slug', $slug);
                                                }
                                            })
                                            ->reactive(),

                                        Textarea::make('small_description')
                                            ->rules(['string'])
                                            ->placeholder('Small description'),

                                        RichEditor::make('long_description')
                                            ->rules(['string'])
                                            ->placeholder('Long description'),
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
                                    ->description('News advaced details')
                                    ->schema([
                                        TextInput::make('slug')
                                            ->afterStateUpdated(function (Closure $set) {
                                                $set('is_slug_changed_manually', true);
                                            })
                                            ->required()
                                            ->placeholder('Auto generated slug'),
                                        FileUpload::make('breadcrum_image'),
                                        Toggle::make('status'),
                                        TextInput::make('order_by'),
                                    ]),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('heading')->searchable(),
                Tables\Columns\TextColumn::make('slug'),
                ImageColumn::make('breadcrum_image')->circular(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
