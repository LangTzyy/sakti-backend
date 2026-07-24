<?php

namespace App\Filament\Resources\Demissioners\Pages;

use App\Filament\Resources\Demissioners\DemissionerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDemissioners extends ListRecords
{
    protected static string $resource = DemissionerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
