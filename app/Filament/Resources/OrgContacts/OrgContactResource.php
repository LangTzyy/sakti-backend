<?php

namespace App\Filament\Resources\OrgContacts;

use App\Filament\Resources\OrgContacts\Pages\EditOrgContact;
use App\Filament\Resources\OrgContacts\Pages\ListOrgContacts;
use App\Filament\Resources\OrgContacts\Schemas\OrgContactForm;
use App\Filament\Resources\OrgContacts\Tables\OrgContactsTable;
use App\Models\OrgContact;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OrgContactResource extends Resource
{
    protected static ?string $model = OrgContact::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Info Sekretariat (Contact)';

    public static function form(Schema $schema): Schema
    {
        return OrgContactForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OrgContactsTable::configure($table);
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
            'index' => ListOrgContacts::route('/'),
            'edit' => EditOrgContact::route('/{record}/edit'),
        ];
    }

    // Cegah bikin record baru — ini singleton, cuma boleh ada 1 baris data.
    public static function canCreate(): bool
    {
        return false;
    }
}
