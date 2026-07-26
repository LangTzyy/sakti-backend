<?php

namespace App\Filament\Resources\OrgContacts\Pages;

use App\Filament\Resources\OrgContacts\OrgContactResource;
use Filament\Resources\Pages\ListRecords;

class ListOrgContacts extends ListRecords
{
    protected static string $resource = OrgContactResource::class;

    protected function getHeaderActions(): array
    {
        // Sengaja kosong — singleton, admin cuma boleh edit baris dari seeder.
        return [];
    }
}
