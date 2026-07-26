<?php

namespace App\Filament\Resources\OrgContacts\Pages;

use App\Filament\Resources\OrgContacts\OrgContactResource;
use Filament\Resources\Pages\EditRecord;

class EditOrgContact extends EditRecord
{
    protected static string $resource = OrgContactResource::class;

    protected function getHeaderActions(): array
    {
        // Sengaja kosong — nggak ada tombol Delete, ini singleton.
        return [];
    }
}
