<?php

namespace App\Filament\Resources\LayananResource\Pages;

use Filament\Actions;
use Illuminate\Support\Str;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\LayananResource;

class CreateLayanan extends CreateRecord
{
    protected static string $resource = LayananResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data["slug"] = Str::slug($data["nama"]) . "-" . Str::random(5);

        return $data;
    }
}
