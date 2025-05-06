<?php

namespace App\Filament\Employee\Resources\ApplicationResource\Pages;

use App\Filament\Employee\Resources\ApplicationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateApplication extends CreateRecord
{
    protected static string $resource = ApplicationResource::class;
}
