<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Category;
use App\Models\Course;
use Filament\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?string $navigationGroup = 'E-Learning';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Course Content')->schema([
                        TextInput::make('name')
                            ->label('Course Name(tr)')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, Set $set) {
                                if ($operation !== 'create') {
                                    return;
                                }
                                $set('slug', Str::slug($state));
                            })
                            ->maxLength(255),

                        TextInput::make('slug')
                            ->label('Slug (tr)')
                            ->maxLength(255)
                            ->disabled()
                            ->dehydrated()
                            ->unique(Course::class, 'slug', ignoreRecord: true)
                            ->required(),

                        TextInput::make('name_en')
                            ->label('Course Name(en)')
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, Set $set) {
                                if ($operation !== 'create') {
                                    return;
                                }
                                $set('slug_en', Str::slug($state));
                            })
                            ->maxLength(255),

                        TextInput::make('slug_en')
                            ->label('Slug (en)')
                            ->maxLength(255)
                            ->disabled()
                            ->dehydrated()
                            ->unique(Course::class, 'slug_en', ignoreRecord: true)
                            ->maxLength(255),

                        TextInput::make('name_fi')
                            ->label('Course Name(fi)')
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, Set $set) {
                                if ($operation !== 'create') {
                                    return;
                                }
                                $set('slug_fi', Str::slug($state));
                            })
                            ->maxLength(255),

                        TextInput::make('slug_fi')
                            ->label('Slug (fi)')
                            ->maxLength(255)
                            ->disabled()
                            ->dehydrated()
                            ->unique(Course::class, 'slug_fi', ignoreRecord: true)
                            ->maxLength(255),

                        MarkdownEditor::make('description')
                            ->label('Description (tr)')
                            ->columnSpanFull()
                            ->required(),

                        MarkdownEditor::make('description_en')
                            ->label('Description (en)')
                            ->columnSpanFull(),

                        MarkdownEditor::make('description_fi')
                            ->label('Description (fi)')
                            ->columnSpanFull()
                            ->columnSpanFull(),

                        TextInput::make('intro_video')
                            ->label('Intro Video Link')
                            ->url(),

                        TextInput::make('support_video')
                            ->label('Support Video Link')
                            ->url(),
                    ])->columns(2)
                ])->columnSpan(2),

                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Course Category')->schema([
                        Select::make('category_id')
                            ->label('Category')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship('category', 'name')
                    ]),

                    Forms\Components\Section::make('Instructor Name')->schema([
                        Select::make('teacher_id')
                            ->label('Instructor Name')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship('teacher', 'name')
                    ]),

                    Forms\Components\Section::make('Course Level')->schema([
                        Select::make('level_id')
                            ->label('Course Level')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship('level', 'name')
                    ]),

                    Forms\Components\Section::make('Other Information')->schema([
                        TextInput::make('max_students')
                            ->label('Max Students')
                            ->required()
                            ->minValue(1)
                            ->numeric(),

                        TextInput::make('price')
                            ->label('Price')
                            ->required()
                            ->numeric()
                            ->minValue(0)
                            ->prefix('TRY'),

                        TextInput::make('discount')
                            ->label('Discount')
                            ->numeric()
                            ->minValue(0)
                            ->prefix('TRY'),

                        Forms\Components\DatePicker::make('course_start_date')
                            ->label('Course Start Date')
                            ->native(false)
                            ->displayFormat('d/m/Y')
                            ->minDate(now()),

                        TextInput::make('course_duration')
                            ->label('Course Duration'),

                        Forms\Components\FileUpload::make('image')
                            ->directory('courses')
                            ->image()
                            ->label('Image'),
                        Forms\Components\Toggle::make('featured')
                            ->label('Featured')
                            ->default(false),

                        Forms\Components\Toggle::make('status')
                            ->label('Status')
                            ->default(true)
                    ])
                ])->columnSpan(1)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher.name')
                    ->label('Instructor')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('level.name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('max_students')
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->sortable()
                    ->money('TRY')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('featured'),
                Tables\Columns\ToggleColumn::make('status'),
                Tables\Columns\TextColumn::make('course_start_date')
                    ->sortable()
                    ->dateTime('d/m/y')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('course_duration')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('discount')
                    ->money('TRY')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->sortable()
                    ->dateTime('d/m/y')
                    ->toggleable(isToggledHiddenByDefault: true)
            ])
            ->filters([
                SelectFilter::make('category')
                    ->relationship('category', 'name'),

                SelectFilter::make('Instructor')
                    ->relationship('teacher', 'name'),

                SelectFilter::make('level')
                    ->relationship('level', 'name')
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
