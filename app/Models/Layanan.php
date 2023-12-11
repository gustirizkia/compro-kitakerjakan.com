<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    public function detail()
    {
        return $this->hasMany(LayananDetail::class, "layanan_id", "id");
    }
}
