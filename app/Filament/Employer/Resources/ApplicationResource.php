<?php

namespace App\Filament\Employer\Resources;

use App\Filament\Employer\Resources\ApplicationResource\Pages;
use App\Filament\Employer\Resources\ApplicationResource\RelationManagers;
use App\Models\Application;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;


class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
   Hidden::make('user_id')->default(fn() => auth()->user()->id),
                Select::make('job_id')
                    ->label('Job')
                    ->relationship('job', 'title')
                    ->required(),
                TextInput::make('user.name')->label('Applicant Name'),
                TextInput::make('user.email')->label('Applicant Email'),
                Select::make('status')
                ->label('Status')
                ->options([
                    'pending' => 'Pending',
                    'accepted' => 'Accepted',
                    'rejected' => 'Rejected',
                ])
                ->required(),
                Textarea::make('cover_letter')->label('Cover Letter'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('job.title')->label('Job Title'),
            Tables\Columns\TextColumn::make('user.name')->label('Applicant'),
            Tables\Columns\TextColumn::make('user.email')->label('Email'),
            Tables\Columns\TextColumn::make('status')->label('Status'),
            Tables\Columns\TextColumn::make('created_at')->date()->label('Applied At'),
        ])
        ->actions([
            Tables\Actions\ViewAction::make(),
            Action::make('Change Status')
                ->form([
                    Select::make('status')
                        ->options([
                            'pending' => 'Pending',
                            'accepted' => 'Accepted',
                            'rejected' => 'Rejected',
                        ])
                        ->required(),
                ])
                ->action(function ($record, $data) {
                    $record->status = $data['status'];
                    $record->save();
                })
                ->color('primary'),
        ])
    
    
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListApplications::route('/'),
            'create' => Pages\CreateApplication::route('/create'),
            'edit' => Pages\EditApplication::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
{
    return parent::getEloquentQuery()
        ->whereHas('job', function ($query) {
            $query->where('company_id', Auth::user()->company_id);
        });
}

}
