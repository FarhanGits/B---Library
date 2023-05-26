<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DfBuku extends Model
{
    use HasFactory;

    protected $guarded = []; // -> Semua file bisa masuk database dibanding fillable
}
