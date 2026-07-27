<?php

namespace App\Filament\Resources\PendaftaranSubmissions\Pages;

use App\Filament\Resources\PendaftaranSubmissions\PendaftaranSubmissionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPendaftaranSubmission extends EditRecord
{
    protected static string $resource = PendaftaranSubmissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
