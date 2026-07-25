<?php

namespace App\Filament\Resources\OrgStats\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OrgStatForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('label')
                    ->label('Label (contoh: Alumni Tersebar)')
                    ->required(),

                TextInput::make('number')
                    ->label('Angka')
                    ->required()
                    ->numeric()
                    ->minValue(0),

                TextInput::make('suffix')
                    ->label('Suffix (contoh: "+", kosongkan kalau tidak perlu)')
                    ->nullable(),

                TextInput::make('order')
                    ->label('Urutan Tampil (angka lebih kecil tampil duluan)')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
