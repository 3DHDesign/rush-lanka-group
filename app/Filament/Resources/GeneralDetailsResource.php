<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeneralDetailsResource\Pages;
use App\Filament\Resources\GeneralDetailsResource\RelationManagers;
use App\Models\GeneralDetails;
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

class GeneralDetailsResource extends Resource
{
    protected static ?string $model = GeneralDetails::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static ?string $navigationGroup = 'General';
    protected static ?string $navigationLabel = 'General Details';
    protected static ?int $navigationSort = 6;

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
                                Section::make('General Settings')
                                    ->description('Make general settings')
                                    ->schema([
                                        TextInput::make('cooperate_video')
                                            ->rules(['string'])
                                            ->required()
                                            ->placeholder('Cooperate video link'),

                                        Textarea::make('address')
                                            ->placeholder('Address'),

                                        TextInput::make('telephone')
                                            ->rules(['max:255', 'string'])
                                            ->placeholder('Main contact number'),

                                        TextInput::make('email')
                                            ->rules(['email'])
                                            ->placeholder('Main email'),

                                    ]),
                            ]),
                        Grid::make()
                            ->columnSpan([
                                'default' => 1,
                                'md' => 1,
                                'lg' => 1,
                            ])
                            ->schema([
                                Section::make('Social Media Details')
                                    ->description('Social media settings')
                                    ->schema([
                                        TextInput::make('fb_link')
                                            ->placeholder('Facebook link'),
                                        TextInput::make('ig_link')
                                            ->placeholder('Instagram link'),
                                        TextInput::make('linkedin_link')
                                            ->placeholder('LinkedIn link'),
                                    ]),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('telephone'),
                Tables\Columns\TextColumn::make('address'),
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
            'index' => Pages\ListGeneralDetails::route('/'),
            'create' => Pages\CreateGeneralDetails::route('/create'),
            'edit' => Pages\EditGeneralDetails::route('/{record}/edit'),
        ];
    }
}
