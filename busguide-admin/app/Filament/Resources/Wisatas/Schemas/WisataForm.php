<?php

namespace App\Filament\Resources\Wisatas\Schemas;

use App\Models\Halte;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class WisataForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_wisata')
                    ->label('Nama Wisata')
                    ->required(),
                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->columnSpanFull(),
                TextInput::make('lokasi')
                    ->label('Lokasi'),
                FileUpload::make('gambar')
                    ->label('Gambar')
                    ->image()
                    ->directory('wisata')
                    ->columnSpanFull(),
                Select::make('id_halte')
                    ->label('Halte Terdekat')
                    ->options(Halte::all()->pluck('nama_halte', 'id_halte'))
                    ->searchable()
                    ->required(),
            ]);
    }
}