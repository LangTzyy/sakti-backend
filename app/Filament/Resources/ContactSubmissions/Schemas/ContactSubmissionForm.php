<?php

namespace App\Filament\Resources\ContactSubmissions\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ContactSubmissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama')
                    ->disabled(),

                TextInput::make('email')
                    ->disabled(),

                Textarea::make('message')
                    ->label('Pesan')
                    ->rows(5)
                    ->disabled(),

                Toggle::make('is_read')
                    ->label('Sudah Dibaca'),
            ]);
    }
}
