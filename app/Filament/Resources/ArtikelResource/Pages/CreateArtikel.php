<?php

namespace App\Filament\Resources\ArtikelResource\Pages;

use Filament\Actions;
use Illuminate\Support\Str;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ArtikelResource;

class CreateArtikel extends CreateRecord
{
    protected static string $resource = ArtikelResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data["slug"] = Str::slug($data["judul"]) . "-" . Str::random(5);

        return $data;
    }
}
