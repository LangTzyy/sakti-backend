<?php

namespace App\Filament\Resources\PendaftaranSubmissions\Schemas;

use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\HtmlString;

class PendaftaranSubmissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->disabled(),

                TextInput::make('ttl')
                    ->label('Tempat, Tanggal Lahir')
                    ->disabled(),

                TextInput::make('email')
                    ->disabled(),

                TextInput::make('nim')
                    ->disabled(),

                TextInput::make('whatsapp')
                    ->disabled(),

                Textarea::make('motivasi')
                    ->rows(4)
                    ->disabled()
                    ->columnSpanFull(),

                Placeholder::make('foto_ktm_url')
                    ->label('Foto KTM')
                    ->content(fn ($record) => $record
                        ? new HtmlString('<a href="' . e($record->foto_ktm_url) . '" target="_blank" class="underline text-primary-600">Lihat File</a>')
                        : '-'),

                Placeholder::make('cv_url')
                    ->label('CV')
                    ->content(fn ($record) => $record
                        ? new HtmlString('<a href="' . e($record->cv_url) . '" target="_blank" class="underline text-primary-600">Lihat File</a>')
                        : '-'),

                Placeholder::make('sertifikat_url')
                    ->label('Sertifikat OSPRO')
                    ->content(fn ($record) => $record
                        ? new HtmlString('<a href="' . e($record->sertifikat_url) . '" target="_blank" class="underline text-primary-600">Lihat File</a>')
                        : '-'),

                Select::make('status')
                    ->label('Status Pendaftaran')
                    ->options([
                        'pending' => 'Pending',
                        'diterima' => 'Diterima',
                        'ditolak' => 'Ditolak',
                    ])
                    ->required(),
            ]);
    }
}
