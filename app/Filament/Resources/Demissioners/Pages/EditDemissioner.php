<?php

namespace App\Filament\Resources\Demissioners\Pages;

use App\Filament\Resources\Demissioners\DemissionerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDemissioner extends EditRecord
{
    protected static string $resource = DemissionerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
