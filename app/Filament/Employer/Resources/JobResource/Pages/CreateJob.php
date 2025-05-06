<?php

namespace App\Filament\Employer\Resources\JobResource\Pages;

use App\Filament\Employer\Resources\JobResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;


class CreateJob extends CreateRecord
{
    protected static string $resource = JobResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['created_by_email'] = auth::user()->email;
        return $data;
    }
}



