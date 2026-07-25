<?php

namespace App\Filament\Resources\OrgStats;

use App\Filament\Resources\OrgStats\Pages\CreateOrgStat;
use App\Filament\Resources\OrgStats\Pages\EditOrgStat;
use App\Filament\Resources\OrgStats\Pages\ListOrgStats;
use App\Filament\Resources\OrgStats\Schemas\OrgStatForm;
use App\Filament\Resources\OrgStats\Tables\OrgStatsTable;
use App\Models\OrgStat;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OrgStatResource extends Resource
{
    protected static ?string $model = OrgStat::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Statistik Organisasi';

    protected static ?string $recordTitleAttribute = 'label';

    public static function form(Schema $schema): Schema
    {
        return OrgStatForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OrgStatsTable::configure($table);
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
            'index' => ListOrgStats::route('/'),
            'create' => CreateOrgStat::route('/create'),
            'edit' => EditOrgStat::route('/{record}/edit'),
        ];
    }
}
