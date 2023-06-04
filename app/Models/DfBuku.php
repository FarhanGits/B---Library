<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DfBuku extends Model
{
    use HasFactory;

    protected $guarded = []; // -> Semua file bisa masuk database dibanding fillable

    // public function peminjaman(): BelongsTo {
    //     return $this->belongsTo(User::class);
    // }
}
