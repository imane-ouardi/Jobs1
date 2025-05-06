<?php

namespace App\Filament\Employee\Resources\JobResource\Pages;

use App\Filament\Employee\Resources\JobResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateJob extends CreateRecord
{
    protected static string $resource = JobResource::class;
}
