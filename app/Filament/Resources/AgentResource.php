<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AgentResource\Pages;
use App\Filament\Resources\AgentResource\RelationManagers;
use App\Models\Agent;
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
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Support\Str;
use Filament\Tables\Filters\Filter;

class AgentResource extends Resource
{
    protected static ?string $model = Agent::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Contacts';
    protected static ?string $navigationLabel = 'Agents';
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
                                Section::make('Make a New Agent')
                                    ->description('Make a new agent')
                                    ->schema([
                                        TextInput::make('name')
                                            ->rules(['max:255', 'string'])
                                            ->required()
                                            ->placeholder('Full name'),

                                        TextInput::make('designation')
                                            ->rules(['string'])
                                            ->placeholder('Designation'),

                                        TextInput::make('email')
                                            ->rules(['email'])
                                            ->placeholder('Email'),

                                        TextInput::make('whatsapp')
                                            ->rules(['string'])
                                            ->placeholder('Whatsapp Number: 7XXXXXXXX'),
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
                                    ->description('Add agent advance details')
                                    ->schema([
                                        FileUpload::make('image'),
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
                Split::make([
                    ImageColumn::make('image')->circular(),
                    TextColumn::make('name')->sortable()->searchable(),
                    Stack::make([
                        TextColumn::make('email'),
                        TextColumn::make('whatsapp'),
                    ])->visibleFrom('md'),
                    ToggleColumn::make('status'),
                ])

            ])
            ->filters([
                Filter::make('status')->toggle()
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
            'index' => Pages\ListAgents::route('/'),
            'create' => Pages\CreateAgent::route('/create'),
            'edit' => Pages\EditAgent::route('/{record}/edit'),
        ];
    }
}
