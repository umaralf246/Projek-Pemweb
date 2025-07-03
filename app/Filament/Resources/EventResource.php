<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan('full'),
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535)
                    ->columnSpan('full'),
                Forms\Components\DateTimePicker::make('event_time')
                    ->required()
                    ->label('Waktu Event'),
                Forms\Components\TextInput::make('location')
                    ->maxLength(255),
                // Menggunakan FileUpload untuk mengunggah gambar
                // Pastikan untuk menjalankan `php artisan storage:link`
                Forms\Components\FileUpload::make('image_url')
                    ->label('Gambar Event')
                    ->image()
                    ->disk('public') // Menggunakan disk 'public'
                    ->directory('event-images') // Simpan di folder storage/app/public/event-images
                    ->columnSpan('full'),
            ]);
    }

        public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\ImageColumn::make('image_url')
                ->label('Gambar')
                ->disk('public'),
            Tables\Columns\TextColumn::make('title')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('event_time')
                ->dateTime('d M Y, H:i')
                ->sortable()
                ->label('Waktu Event'),
            Tables\Columns\TextColumn::make('location')
                ->searchable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(),
        ])
        ->filters([
            // Filter bisa ditambahkan di sini jika perlu
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
        ])
        ->defaultSort('created_at', 'desc'); 
        
}

    
    public static function getRelations(): array
    {
        return [
            // Relasi bisa ditambahkan di sini
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}