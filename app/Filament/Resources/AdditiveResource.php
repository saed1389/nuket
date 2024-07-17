<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdditiveResource\Pages;
use App\Filament\Resources\AdditiveResource\RelationManagers;
use App\Models\Additive;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class AdditiveResource extends Resource
{
    protected static ?string $model = Additive::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'Other Pages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Name (tr)')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug (tr)')
                    ->required()
                    ->disabled()
                    ->dehydrated()
                    ->unique(Additive::class, 'slug', ignoreRecord: true)
                    ->maxLength(255),
                Forms\Components\TextInput::make('name_en')
                    ->label('Name (en)')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug_en', Str::slug($state)) : null)
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('slug_en')
                    ->label('Slug (en)')
                    ->maxLength(255)
                    ->disabled()
                    ->dehydrated()
                    ->unique(Additive::class, 'slug_en', ignoreRecord: true)
                    ->default(null),
                Forms\Components\TextInput::make('name_fi')
                    ->label('Name (fi)')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug_fi', Str::slug($state)) : null)
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('slug_fi')
                    ->label('Slug (fi)')
                    ->maxLength(255)
                    ->disabled()
                    ->dehydrated()
                    ->unique(Additive::class, 'slug_en', ignoreRecord: true)
                    ->default(null),
                Forms\Components\MarkdownEditor::make('description')
                    ->label('Description (tr)')
                    ->fileAttachmentsDirectory('additive')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\MarkdownEditor::make('description_en')
                    ->label('Description (en)')
                    ->fileAttachmentsDirectory('additive')
                    ->columnSpanFull(),
                Forms\Components\MarkdownEditor::make('description_fi')
                    ->label('Description (fi)')
                    ->fileAttachmentsDirectory('additive')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->directory('additive')
                    ->imageEditor()
                    ->image(),
                Forms\Components\TextInput::make('support_video')
                    ->maxLength(255)
                    ->url()
                    ->default(null),
                Forms\Components\Toggle::make('status')
                    ->default(true)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')
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
            'index' => Pages\ListAdditives::route('/'),
            'create' => Pages\CreateAdditive::route('/create'),
            'edit' => Pages\EditAdditive::route('/{record}/edit'),
        ];
    }
}
