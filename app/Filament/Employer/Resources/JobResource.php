<?php

namespace App\Filament\Employer\Resources;

use App\Filament\Employer\Resources\JobResource\Pages;
use App\Filament\Employer\Resources\JobResource\RelationManagers;
use App\Models\Job;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Auth;


class JobResource extends Resource
{
    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('title')
                ->label('Title')
                ->placeholder('CEO')
                ->required()
                ->maxLength(255),
            Textarea::make('description')
                ->required()
                ->rows(5),
            TextInput::make('location')
                ->label('Location')
                ->placeholder('Winter Park, Florida')
                ->required()
                ->maxLength(255),
            TextInput::make('salary')    
            ->placeholder('$90,000 USD')
            ->maxLength(255),
            Select::make('type')
                ->options([
                    'full-time' => 'Full Time',
                    'part-time' => 'Part Time',
                    'remote' => 'Remote',
                    'internship' => 'Internship',
                ])
                ->required(),

            Select::make('category_id')
                ->label('Category')
                ->relationship('category', 'name')
                ->searchable()
                ->required(),

            Select::make('company_id')
                ->label('Company')
                ->relationship('company', 'name')
                ->searchable()
                ->required(),

            DatePicker::make('deadline')->label('Application Deadline'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            TextColumn::make('title')->searchable()->sortable(),
            TextColumn::make('type')->sortable(),
            TextColumn::make('category.name')->label('Category')->sortable(),
            TextColumn::make('company.name')->label('Company')->sortable(),
            TextColumn::make('location')->sortable(),
            TextColumn::make('salary'),
            TextColumn::make('created_at')->dateTime()->sortable(),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        $query = parent::getEloquentQuery();
        
        $user = Auth::user();
    
        if ($user && $user->role !== 'admin') {
            $query->where('created_by_email', $user->email);
        }
    
        return $query;
    }
    
}
