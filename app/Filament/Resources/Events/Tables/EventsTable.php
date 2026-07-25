<?php

namespace App\Filament\Resources\Events\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('start_date', 'asc')
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('category')
                    ->badge(),
                TextColumn::make('start_date')
                    ->date('d M Y')
                    ->sortable(),
                TextColumn::make('end_date')
                    ->date('d M Y')
                    ->sortable()
                    ->placeholder('-'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
