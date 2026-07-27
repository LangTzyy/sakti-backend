<?php

namespace App\Filament\Resources\OrgContacts\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OrgContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('address')
                    ->label('Alamat Sekretariat')
                    ->rows(4)
                    ->required(),

                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),

                TextInput::make('office_hours')
                    ->label('Jam Operasional')
                    ->helperText('Contoh: Senin - Jumat, 09.00 - 16.00 WIB')
                    ->required(),

                TextInput::make('maps_query')
                    ->label('Koordinat Google Maps (format: latitude,longitude)')
                    ->helperText('Klik kanan lokasi di Google Maps, klik koordinat yang muncul buat copy. Contoh: -7.937973,112.6266227')
                    ->nullable(),

                TextInput::make('instagram_url')
                    ->label('Link Instagram')
                    ->url()
                    ->nullable(),

                TextInput::make('youtube_url')
                    ->label('Link YouTube')
                    ->url()
                    ->nullable(),

                TextInput::make('github_url')
                    ->label('Link GitHub')
                    ->url()
                    ->nullable(),
            ]);
    }
}
