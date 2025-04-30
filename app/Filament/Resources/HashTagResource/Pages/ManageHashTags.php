<?php

namespace App\Filament\Resources\HashTagResource\Pages;

use App\Filament\Resources\HashTagResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageHashTags extends ManageRecords
{
    protected static string $resource = HashTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
