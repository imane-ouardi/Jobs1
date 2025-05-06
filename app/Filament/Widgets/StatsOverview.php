<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Actions\Action;
use App\Models\User;
use App\Models\Job;
use App\Models\Company;
use App\Models\Application;

class StatsOverview extends BaseWidget
{
    protected  ?string $heading = 'Dashboard';

    protected function getCards(): array
    {
        return [
            Card::make('Total Users', User::count())
                ->description('All registered users')
                ->descriptionIcon('heroicon-m-users')
                ->color('success'),

            Card::make('Total Jobs', Job::count())
                ->description('Jobs available')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('primary'),

            Card::make('Total Companies', Company::count())
                ->description('Registered companies')
                ->descriptionIcon('heroicon-m-building-office')
                ->color('info'),

            Card::make('Total Applications', Application::count())
                ->description('Job applications submitted')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('warning'),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Add Job')
                ->label('Add New Job')
                ->url(route('filament.admin.resources.jobs.create'))
                ->color('primary')
                ->icon('heroicon-m-plus'),
        ];
    }
}
