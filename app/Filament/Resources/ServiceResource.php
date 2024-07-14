<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static ?string $navigationGroup = 'Other Pages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Title (tr)')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug (tr)')
                    ->required()
                    ->disabled()
                    ->dehydrated()
                    ->unique(Service::class, 'slug', ignoreRecord: true)
                    ->maxLength(255),
                Forms\Components\TextInput::make('title_en')
                    ->label('Title (en)')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug_en', Str::slug($state)) : null)
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('slug_en')
                    ->label('Slug (en)')
                    ->disabled()
                    ->dehydrated()
                    ->unique(Service::class, 'slug_en', ignoreRecord: true)
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('title_fi')
                    ->label('Title (fi)')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug_fi', Str::slug($state)) : null)
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('slug_fi')
                    ->label('Slug (fi)')
                    ->disabled()
                    ->dehydrated()
                    ->unique(Service::class, 'slug_fi', ignoreRecord: true)
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\MarkdownEditor::make('description')
                    ->label('Description (tr)')
                    ->fileAttachmentsDirectory('services')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\MarkdownEditor::make('description_en')
                    ->label('Description (en)')
                    ->fileAttachmentsDirectory('services')
                    ->columnSpanFull(),
                Forms\Components\MarkdownEditor::make('description_fi')
                    ->label('Description (fi)')
                    ->fileAttachmentsDirectory('services')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->directory('services')
                    ->required()
                    ->image(),
                Forms\Components\TextInput::make('link')
                    ->maxLength(255)
                    ->url()
                    ->default(null),
                Forms\Components\TextInput::make('support_video')
                    ->maxLength(255)
                    ->url()
                    ->default(null),
                Forms\Components\Toggle::make('status')
                    ->default(1)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
