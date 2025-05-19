<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleNewsResource\Pages;
use App\Filament\Resources\ArticleNewsResource\RelationManagers;
use App\Filament\Resources\ArticleNewsResource\RelationManagers\NewsCommentsRelationManager;
use App\Models\ArticleNews;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ArticleNewsResource extends Resource
{
    protected static ?string $model = ArticleNews::class;
    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        if (Auth::user()->role === 'admin') {
            return parent::getEloquentQuery();
        }
        return parent::getEloquentQuery()->where('user_id', auth()->id());
    }

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    
    protected static ?string $navigationGroup = 'News Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('thumbnail')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->directory('article-news'),
                Forms\Components\RichEditor::make('content')
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                Forms\Components\Select::make('user_id')
                    ->disabled()
                    ->relationship('user', 'name')
                    ->label('Writer')
                    ->default(Auth::user()->id)
                    ->required(),
                Forms\Components\Select::make('hashTags')
                    ->relationship('hashTags', 'name')
                    ->multiple(),
                Forms\Components\Toggle::make('is_published')
                    ->required(),
                Forms\Components\Toggle::make('is_popular')
                    ->default(false)
                    ->label('Popular'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->modifyQueryUsing(fn ($query) => $query->withCount('newsComments'))
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Writer')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean()
                    ->label('Published'),
                Tables\Columns\IconColumn::make('is_popular')
                    ->boolean()
                    ->label('Popular'),
                Tables\Columns\TextColumn::make('news_comments_count')
                    ->label('Comments')
                    ->counts('newsComments')
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
                Tables\Filters\SelectFilter::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->placeholder('Semua Kategori'),
            
                Tables\Filters\TernaryFilter::make('is_publish')
                    ->label('Status Publikasi')
                    ->placeholder('Semua')
                    ->trueLabel('Dipublikasikan')
                    ->falseLabel('Tidak Dipublikasikan'),
            ])
            ->actions([
                ActionGroup::make([
                    ActionGroup::make([
                        Tables\Actions\ViewAction::make(),
                        Tables\Actions\EditAction::make(),
                    ])
                        ->dropdown(false),
                    Tables\Actions\DeleteAction::make(),
                ])
                ->icon('heroicon-m-bars-3')
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
            NewsCommentsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticleNews::route('/'),
            'create' => Pages\CreateArticleNews::route('/create'),
            'edit' => Pages\EditArticleNews::route('/{record}/edit'),
        ];
    }
}
