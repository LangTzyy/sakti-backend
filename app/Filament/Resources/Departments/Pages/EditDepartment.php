<?php

namespace App\Filament\Resources\Departments\Pages;

use App\Filament\Resources\Departments\DepartmentResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDepartment extends EditRecord
{
    protected static string $resource = DepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    // Data lama (sebelum field ini jadi Repeater) ada yang kesimpen sebagai
    // 1 string dipisah koma, bukan array. Ini bikin form-nya tahan banting:
    // kalau ketemu string, otomatis dipecah jadi array dulu sebelum diisi ke Repeater.
    protected function mutateFormDataBeforeFill(array $data): array
    {
        foreach (['programs', 'skills', 'projects'] as $field) {
            if (isset($data[$field]) && is_string($data[$field])) {
                $data[$field] = array_map('trim', explode(',', $data[$field]));
            }
        }

        return $data;
    }
}
