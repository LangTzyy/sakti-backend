<?php

namespace App\Filament\Resources\PendaftaranSubmissions;

use App\Filament\Resources\PendaftaranSubmissions\Pages\EditPendaftaranSubmission;
use App\Filament\Resources\PendaftaranSubmissions\Pages\ListPendaftaranSubmissions;
use App\Filament\Resources\PendaftaranSubmissions\Schemas\PendaftaranSubmissionForm;
use App\Filament\Resources\PendaftaranSubmissions\Tables\PendaftaranSubmissionsTable;
use App\Models\PendaftaranSubmission;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PendaftaranSubmissionResource extends Resource
{
    protected static ?string $model = PendaftaranSubmission::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Pendaftaran (Open Rec)';

    protected static ?string $recordTitleAttribute = 'nama';

    public static function form(Schema $schema): Schema
    {
        return PendaftaranSubmissionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PendaftaranSubmissionsTable::configure($table);
    }

    // Submission masuk lewat form publik, bukan diinput manual admin.
    public static function canCreate(): bool
    {
        return false;
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
            'index' => ListPendaftaranSubmissions::route('/'),
            'edit' => EditPendaftaranSubmission::route('/{record}/edit'),
        ];
    }
}
