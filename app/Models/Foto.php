<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Foto extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'deskripsi', 'image_path', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
