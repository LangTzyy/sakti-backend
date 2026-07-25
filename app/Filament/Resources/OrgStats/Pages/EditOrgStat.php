<?php

namespace App\Filament\Resources\OrgStats\Pages;

use App\Filament\Resources\OrgStats\OrgStatResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOrgStat extends EditRecord
{
    protected static string $resource = OrgStatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
