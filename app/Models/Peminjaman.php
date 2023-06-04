<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $fillable = ['user_id', 'book_id', 'tanggalPinjam', 'tanggalKembali'];
    // protected $guarded = [];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function book(): BelongsTo {
        return $this->belongsTo(DfBuku::class, 'book_id', 'id');
    }
}
