<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-square-2-stack';

    protected static ?string $navigationGroup = 'Blog';

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
                    ->unique(Blog::class, 'slug', ignoreRecord: true)
                    ->maxLength(255),
                Forms\Components\TextInput::make('title_en')
                    ->label('Title (en)')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(string $operation, $state, Set $set ) => $operation === 'create' ? $set('slug_en', Str::slug($state)) : null)
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('slug_en')
                    ->label('Slug (en)')
                    ->maxLength(255)
                    ->disabled()
                    ->dehydrated()
                    ->unique(Blog::class, 'slug_en', ignoreRecord: true)
                    ->default(null),
                Forms\Components\TextInput::make('title_fi')
                    ->label('Title (fi)')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(string $operation, $state, Set $set ) => $operation === 'create' ? $set('slug_fi', Str::slug($state)) : null)
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('slug_fi')
                    ->label('Slug (fi)')
                    ->disabled()
                    ->dehydrated()
                    ->unique(Blog::class, 'slug_fi', ignoreRecord: true)
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\MarkdownEditor::make('description')
                    ->label('Description (tr)')
                    ->fileAttachmentsDirectory('blog')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\MarkdownEditor::make('description_en')
                    ->label('Description (en)')
                    ->fileAttachmentsDirectory('blog')
                    ->columnSpanFull(),
                Forms\Components\MarkdownEditor::make('description_fi')
                    ->label('Description (fi)')
                    ->fileAttachmentsDirectory('blog')
                    ->columnSpanFull(),
                Forms\Components\Select::make('blog_category_id')
                    ->relationship('blogCategory', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->directory('blog')
                    ->required()
                    ->hint('* Image size should be 870*940 px')
                    ->hintColor('danger')
                    ->imageEditor()
                    ->imageEditorViewportWidth('870')
                    ->imageEditorViewportHeight('940')
                    ->image(),
                Forms\Components\TextInput::make('support_video')
                    ->maxLength(255)
                    ->url(),
                Forms\Components\Toggle::make('status')
                    ->required()
                    ->default(1),
            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title')
                    ->limit(100)
                    ->searchable(),
                Tables\Columns\TextColumn::make('blogCategory.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('status')
                    ->sortable(),
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
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
