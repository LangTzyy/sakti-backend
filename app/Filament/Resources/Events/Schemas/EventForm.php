<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Acara')
                    ->required(),

                TextInput::make('category')
                    ->label('Kategori')
                    ->helperText('Bebas isi apa aja, misal: Workshop, Rapat Kerja, Studi Banding, dll.')
                    ->required(),

                DatePicker::make('start_date')
                    ->label('Tanggal Mulai')
                    ->required(),

                DatePicker::make('end_date')
                    ->label('Tanggal Selesai (kosongkan kalau acara 1 hari)')
                    ->nullable()
                    ->afterOrEqual('start_date'),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(3)
                    ->nullable(),
            ]);
    }
}
