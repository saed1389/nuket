<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogCategoryResource\Pages;
use App\Filament\Resources\BlogCategoryResource\RelationManagers;
use App\Models\BlogCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class BlogCategoryResource extends Resource
{
    protected static ?string $model = BlogCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Blog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make([
                    Forms\Components\Grid::make()
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->label('Category name (tr)')
                                ->required()
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                                ->maxLength(255),
                            Forms\Components\TextInput::make('slug')
                                ->required()
                                ->label('Category slug (tr)')
                                ->disabled()
                                ->dehydrated()
                                ->unique(BlogCategory::class, 'slug', ignoreRecord: true)
                                ->maxLength(255),
                            Forms\Components\TextInput::make('name_en')
                                ->label('Category name (en)')
                                ->maxLength(255)
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn(string $operation, $state, Set $set ) => $operation === 'create' ? $set('slug_en', Str::slug($state)) : null)
                                ->default(null),
                            Forms\Components\TextInput::make('slug_en')
                                ->label('Category slug (en)')
                                ->disabled()
                                ->dehydrated()
                                ->unique(BlogCategory::class, 'slug_en', ignoreRecord: true)
                                ->maxLength(255),
                            Forms\Components\TextInput::make('name_fi')
                                ->label('Category name (fi)')
                                ->maxLength(255)
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn(string $operation, $state, Set $set ) => $operation === 'create' ? $set('slug_fi', Str::slug($state)) : null)
                                ->default(null),
                            Forms\Components\TextInput::make('slug_fi')
                                ->label('Category slug (fi)')
                                ->disabled()
                                ->dehydrated()
                                ->unique(BlogCategory::class, 'slug_fi', ignoreRecord: true)
                                ->maxLength(255),
                            Forms\Components\TextInput::make('support_video')
                                ->label('Category support video')
                                ->url()
                                ->maxLength(255)
                                ->default(null),
                            Forms\Components\Toggle::make('status')
                                ->label('Category status')
                                ->default(true)
                                ->required(),
                        ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
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
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListBlogCategories::route('/'),
            'create' => Pages\CreateBlogCategory::route('/create'),
            'edit' => Pages\EditBlogCategory::route('/{record}/edit'),
        ];
    }
}
