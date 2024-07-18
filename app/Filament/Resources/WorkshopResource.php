<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkshopResource\Pages;
use App\Filament\Resources\WorkshopResource\RelationManagers;
use App\Models\Workshop;
use Filament\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class WorkshopResource extends Resource
{
    protected static ?string $model = Workshop::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                    ->unique(Workshop::class, 'slug', ignoreRecord: true)
                    ->maxLength(255),
                Forms\Components\TextInput::make('title_en')
                    ->label('Title (en)')
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug_en', Str::slug($state)) : null)
                    ->default(null),
                Forms\Components\TextInput::make('slug_en')
                    ->label('Slug (en)')
                    ->maxLength(255)
                    ->disabled()
                    ->dehydrated()
                    ->unique(Workshop::class, 'slug_en', ignoreRecord: true)
                    ->default(null),
                Forms\Components\TextInput::make('title_fi')
                    ->label('Title (fi)')
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug_fi', Str::slug($state)) : null)
                    ->default(null),
                Forms\Components\TextInput::make('slug_fi')
                    ->label('Slug (fi)')
                    ->maxLength(255)
                    ->disabled()
                    ->dehydrated()
                    ->unique(Workshop::class, 'slug_fi', ignoreRecord: true)
                    ->default(null),
                Forms\Components\MarkdownEditor::make('description')
                    ->label('Description (tr)')
                    ->fileAttachmentsDirectory('workshop')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\MarkdownEditor::make('description_en')
                    ->label('Description (en)')
                    ->fileAttachmentsDirectory('workshop')
                    ->columnSpanFull(),
                Forms\Components\MarkdownEditor::make('description_fi')
                    ->label('Description (fi)')
                    ->fileAttachmentsDirectory('workshop')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->hint('* Image size should be 870*580 px')
                    ->hintColor('danger')
                    ->imageEditorViewportWidth('870')
                    ->imageEditorViewportHeight('580')
                    ->required()
                    ->imageEditor()
                    ->directory('workshop')
                    ->image(),
                Forms\Components\TextInput::make('support_video')
                    ->label('Support Video')
                    ->url()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('status')
                    ->label('Status')
                    ->default(true)
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
            'index' => Pages\ListWorkshops::route('/'),
            'create' => Pages\CreateWorkshop::route('/create'),
            'edit' => Pages\EditWorkshop::route('/{record}/edit'),
        ];
    }
}
