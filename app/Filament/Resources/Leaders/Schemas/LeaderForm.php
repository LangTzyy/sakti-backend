<?php

namespace App\Filament\Resources\Leaders\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class LeaderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\Select::make('position_key')
                    ->label('Posisi (kunci sistem — jangan diubah sembarangan)')
                    ->options([
                        'pembina' => 'Pembina',
                        'ketua_umum' => 'Ketua Umum',
                        'wakil_ketua' => 'Wakil Ketua',
                    ])
                    ->required()
                    ->helperText('Ini dipakai sistem untuk menentukan siapa yang tampil di Home. Kolom "Role" di bawah bebas diubah teksnya kapan saja.'),

                Forms\Components\TextInput::make('role')
                    ->label('Role (teks yang ditampilkan di web)')
                    ->required(),

                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->required(),

                Forms\Components\FileUpload::make('image')
                    ->label('Foto')
                    ->image()
                    ->directory('leaders')
                    ->nullable(),

                Forms\Components\Textarea::make('visi')
                    ->label('Visi')
                    ->rows(3)
                    ->nullable(),

                Forms\Components\Repeater::make('misi')
                    ->label('Misi')
                    ->simple(
                        Forms\Components\TextInput::make('item')
                            ->label('Poin misi')
                            ->required()
                    )
                    ->addActionLabel('Tambah poin misi')
                    ->nullable(),
            ]);
    }
}