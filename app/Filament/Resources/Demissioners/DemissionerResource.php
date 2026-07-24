<?php

namespace App\Filament\Resources\Demissioners;

use App\Filament\Resources\Demissioners\Pages\CreateDemissioner;
use App\Filament\Resources\Demissioners\Pages\EditDemissioner;
use App\Filament\Resources\Demissioners\Pages\ListDemissioners;
use App\Filament\Resources\Demissioners\Schemas\DemissionerForm;
use App\Filament\Resources\Demissioners\Tables\DemissionersTable;
use App\Models\Demissioner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DemissionerResource extends Resource
{
    protected static ?string $model = Demissioner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return DemissionerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DemissionersTable::configure($table);
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
            'index' => ListDemissioners::route('/'),
            'create' => CreateDemissioner::route('/create'),
            'edit' => EditDemissioner::route('/{record}/edit'),
        ];
    }
}
