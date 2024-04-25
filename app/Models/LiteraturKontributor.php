<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiteraturKontributor extends Model
{
    use HasFactory;
    public $table = 'literatur_kontributor';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
