<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\RiwayatMedisResource\Pages;
use App\Filament\Admin\Resources\RiwayatMedisResource\RelationManagers;
use App\Models\RiwayatMedis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RiwayatMedisResource extends Resource
{
    protected static ?string $model = RiwayatMedis::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kunjungan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('dokter_id')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('diagnosa')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('resep')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('saran')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kunjungan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dokter_id')
                    ->numeric()
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
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListRiwayatMedis::route('/'),
            'create' => Pages\CreateRiwayatMedis::route('/create'),
            'edit' => Pages\EditRiwayatMedis::route('/{record}/edit'),
        ];
    }
}
