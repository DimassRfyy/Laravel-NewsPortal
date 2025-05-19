<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HashTagResource\Pages;
use App\Filament\Resources\HashTagResource\RelationManagers;
use App\Models\HashTag;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class HashTagResource extends Resource
{
    protected static ?string $model = HashTag::class;

    protected static ?string $navigationIcon = 'heroicon-o-hashtag';
    protected static ?string $navigationGroup = 'News Management';
    public static function canCreate(): bool
    {
        return Auth::user()->role === 'admin';
    }
    public static function canEdit(Model $record): bool
    {
        return Auth::user()->role === 'admin';
    }

    public static function canDelete(Model $record): bool
    {
        return Auth::user()->role === 'admin';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->prefix('#')
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required(),
                Forms\Components\Toggle::make('is_trending')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->prefix('#')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_trending')
                    ->boolean(),
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
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageHashTags::route('/'),
        ];
    }
}
