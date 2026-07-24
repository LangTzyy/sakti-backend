<?php

namespace App\Filament\Resources\Demissioners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DemissionerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('role')
                    ->required(),
                TextInput::make('period')
                    ->default(null),
                FileUpload::make('image')
                    ->image(),
            ]);
    }
}
