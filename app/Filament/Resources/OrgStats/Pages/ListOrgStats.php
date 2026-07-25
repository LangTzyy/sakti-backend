<?php

namespace App\Filament\Resources\OrgStats\Pages;

use App\Filament\Resources\OrgStats\OrgStatResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOrgStats extends ListRecords
{
    protected static string $resource = OrgStatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
