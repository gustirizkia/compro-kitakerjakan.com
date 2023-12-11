<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LayananResource\Pages;
use App\Filament\Resources\LayananResource\RelationManagers;
use App\Models\Layanan;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LayananResource extends Resource
{
    protected static ?string $model = Layanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema(
                    [
                        FileUpload::make("image")->label("Image")
                            ->required()->image(),
                        TextInput::make("nama")->label("Nama Kategori Layanan")
                            ->required()->string(),
                        Textarea::make("deskripsi_singkat")->label("Deskripsi Singkat")
                            ->required(),
                        RichEditor::make("body")->label("Body")->required()
                    ]
                ),

                Repeater::make("detail")
                    ->relationship()
                    ->schema([
                        FileUpload::make("image")->label("Image")
                            ->required()->image(),
                        TextInput::make("nama")->label("Nama Layanan")
                            ->required()->string(),
                        TextInput::make("harga")->label("Harga Mulai Dari")->required()->numeric(),
                        RichEditor::make("deskripsi_singkat")->label("Deskripsi Singkat")
                            ->required(),
                    ])
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("nama")->label("Nama Layanan"),
                ImageColumn::make("image")->label("Image")
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListLayanans::route('/'),
            'create' => Pages\CreateLayanan::route('/create'),
            'edit' => Pages\EditLayanan::route('/{record}/edit'),
        ];
    }
}
