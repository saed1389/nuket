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
                    ->label('Name')
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
                Forms\Components\MarkdownEditor::make('description')
                    ->label('Description (tr)')
                    ->fileAttachmentsDirectory('additive')
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
