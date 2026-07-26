<?php

namespace App\Filament\Resources\Achievements\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AchievementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Mahasiswa')
                    ->required(),

                TextInput::make('achievement')
                    ->label('Prestasi (contoh: Juara 1 Gemastik UX Design)')
                    ->required(),

                TextInput::make('badge')
                    ->label('Label Badge (contoh: Winner, Juara 1, Top 50)')
                    ->required()
                    ->default('Winner'),

                FileUpload::make('image')
                    ->label('Foto')
                    ->image()
                    ->disk('public')
                    ->directory('achievements')
                    ->nullable(),

                TextInput::make('order')
                    ->label('Urutan Tampil')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
